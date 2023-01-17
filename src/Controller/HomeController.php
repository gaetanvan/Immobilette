<?php

namespace App\Controller;

use App\Classe\Search;
use App\Entity\Property;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(Request $request): Response
    {
        $properties = $this->entityManager->getRepository(Property::class)->findAll();

        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $properties = $this->entityManager->getRepository(Property::class)->findWithSearch($search);
            $search = $form->getData();
        }

        return $this->render('home/index.html.twig', [
            'properties' => $properties,
            'form' => $form->createView()
        ]);
    }
    #[Route("/phpinfo", name :"phpinfo")]
    public function phpinfoAction()
    {
        return new Response('<html><body>'.phpinfo().'</body></html>');
    }
}
