<?php

namespace App\Controller\Admin;

use App\Entity\PresentationEntreprise;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class PresentationEntrepriseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PresentationEntreprise::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('logo')->setColumns(12)->setBasePath('/presentation_entreprise')->setUploadDir('/public/presentation_entreprise'),
            ImageField::new('image')->setColumns(12)->setBasePath('/presentation_entreprise')->setUploadDir('/public/presentation_entreprise'),
            TextEditorField::new('service_proposee')->setColumns(12),
            EmailField::new('email')->setColumns(12)->setHelp('Format : nom@domaine.fr'),
            TelephoneField::new('telephone')->setColumns(12)->setHelp('Format: +33 X XX XX XX XX'),
            TextField::new('adresse_postal')->setColumns(12),
            IntegerField::new('code_postal')->setColumns(12)->setHelp('Format: XXXXX'),
            TextField::new('commune')->setColumns(12),
        ];
    }
    
}
