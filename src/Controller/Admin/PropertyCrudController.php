<?php

namespace App\Controller\Admin;

use App\Entity\Property;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PropertyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Property::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
          TextField::new('name'),
            SlugField::new('slug')->setTargetFieldName('name'),
            ChoiceField::new('Sells')->setChoices([
                'Louer' => 'Location',
                'Vendre' => 'Sell'
            ]),
            TextField::new('city'),
            AssociationField::new('category'),
            NumberField::new('area'),
            NumberField::new('room_number'),
            ImageField::new('file')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]'),
            TextareaField::new('details'),
            MoneyField::new('price')->setCurrency('EUR'),
        ];
    }
}
