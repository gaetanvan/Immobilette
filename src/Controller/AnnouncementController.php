<?php

namespace App\Controller;

use App\Form\AnnouncementType;
use App\Entity\Announcement;
use App\Entity\Picture;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnouncementController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/announcement", name="app_announcement")
     */
    public function index(Request $request): Response
    {
        $announcement = new Announcement();
        $form = $this->createForm(AnnouncementType::class, $announcement);

        $form->handleRequest($request);
        
         
        if ($form->isSubmitted() && $form->isValid()) {


            $announcement =$form->getData();

            $images = $form->get('picture')->getData();

            foreach( $images as $image ) {
                // genere un nouveau nom
                $file = md5(uniqid()) . '.' . $image->guessExtension();

                // copie le fichier dans upload
                $image->move(
                    $this->getParameter('images_directory'),
                    $file

                );

                //stocke image dans BDD (name)
                $img = new Picture();
                $img->setName($file);
                $announcement->addPicture($img);
            }
            
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

