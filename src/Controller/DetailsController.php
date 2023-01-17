<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Property;
use App\Form\SearchType;
use App\Form\PropertyType;
use App\Entity\Image;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailsController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/property/{slug}', name: 'app_details')]
    public function show($slug): Response
    {
        $property = $this->entityManager->getRepository(Property::class)->findOneBySlug($slug);

        if (!$property) {
            return $this->redirectToRoute('app_home');
        }
        return $this->render('property/property.html.twig', [
            'property' => $property
        ]);
    }
}