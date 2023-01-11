<?php

namespace App\Controller;

use App\Form\AnnouncementType;
use App\Entity\Announcement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{
    /**
     * @Route("/announcement", name="app_announcement")
     */
    public function index(Request $request): Response
    {
        $announcement = new Announcement();
        $form = $this->createForm(AnnouncementType::class, $announcement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Save to the database
            // ...
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($announcement);
            $entityManager->flush();
    
            return $this->redirectToRoute('app_announcement');
        }

        return $this->render('announcement/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

