<?php

namespace App\Controller;

use App\Entity\Owner;
use App\Form\OwnerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OwnerController extends AbstractController
{

    private $entityManager;

     
    #[Route('/formulaire', name: 'app_formulaire')]
    public function index(Request $request, ManagerRegistry $doctrine):response
    {
    

    $entityManager = $doctrine->getManager();
        
        $owner = new Owner();
        
        $form = $this->createForm(OwnerType::class, $owner);

        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $user = $form->getData();

            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->render('owner/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
    }

