<?php

namespace App\Controller;

use App\Entity\Property;
use App\Entity\Image;
use App\Form\PropertyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/property', name: 'app_property')]
    public function index(Request $request): Response
    {
        
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);

        $form->handleRequest($request);
        
         
        if ($form->isSubmitted() && $form->isValid()) {
 
            
        $property =$form->getData();
        
    // On récupère les images transmises
        $images = $form->get('image')->getData();

    // On boucle sur les images
        foreach($images as $image){
    // On génère un nouveau nom de fichier
        $fichier = md5(uniqid()).'.'.$image->guessExtension();

    // On copie le fichier dans le dossier uploads

    $path = $this->getParameter('kernel.project_dir') .'/public/uploads';
            $image->move(
            $this->getParameter('images_directory'),
            $fichier
        );

    // On crée l'image dans la base de données
        $img = new Image();
        $img->setName($fichier);
        $property->addImage($img);
            // dd($images);
            
        
        }
            $this->entityManager->persist($property);
            $this->entityManager->flush();


            return $this->redirectToRoute('app_home');
       
        
 
      
        }
       
           return $this->render('property/index.html.twig',[
            
            'form' => $form->createView(),
           ]);
    
        
    }
    

}