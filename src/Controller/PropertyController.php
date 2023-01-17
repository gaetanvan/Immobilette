<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Property;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/property', name: 'app_property')]
    public function index(): Response
    {
        $properties = $this->entityManager->getRepository(Property::class)->findAll();


        return $this->render('home/card.html.twig',[
            'properties' => $properties
        ]);
    }
    #[Route('/property/{slug}', name: 'app_property')]
    public function show($slug): Response
    {
        $property = $this->entityManager->getRepository(Property::class)->findOneBySlug($slug);

        if (!$property){
            return $this->redirectToRoute('app_home');
        }
        return $this->render('property/property.html.twig',[
            'property' => $property
        ]);
    }
}
