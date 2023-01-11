<?php

namespace App\Controller;

use App\Entity\Property;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $properties = $this->entityManager->getRepository(Property::class)->findAll();

        return $this->render('home/index.html.twig', [
            'properties' => $properties
        ]);
    }
    #[Route("/phpinfo", name :"phpinfo")]
    public function phpinfoAction()
    {
        return new Response('<html><body>'.phpinfo().'</body></html>');
    }
}
