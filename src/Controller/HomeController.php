<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/activites', name: 'activites')]
    public function activites(): Response
    {
        return $this->render('home/activites.html.twig');
    }

    #[Route('/evenements', name: 'evenements')]
    public function evenements(): Response
    {
        return $this->render('home/evenements.html.twig');
    }

    #[Route('/galerie', name: 'galerie')]
    public function galerie(): Response
    {
        return $this->render('home/galerie.html.twig');
    }


    // #[Route('/contact', name: 'contact')]
    // public function contact(): Response
    // {
    //     return $this->render('home/contact.html.twig');
    // }

    #[Route('/contact', name: 'contact')]
    public function addContact(Request $request, EntityManagerInterface $entityManager): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success', 'Votre message a bien été envoyé. Merci !');
            return $this->redirectToRoute('contact');
        }
        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Une erreur est survenue. Merci de réessayer.');
        }
        return $this->render('home/contact.html.twig', [
            'form' => $form->createView(),

        ]);
    }
}
