<?php

namespace App\Controller\Admin;

use App\Entity\Actualite;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;


class ActualiteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Actualite::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Titre')->setColumns(12),
            TextEditorField::new('Contenu')->setColumns(12),
            ImageField::new('Image')->setColumns(12)->setBasePath('/actualites')->setUploadDir('/public/actualites'),
            DateField::new('Date')->setFormat('dd/MM/yyyy'),
            AssociationField::new('categories', 'Catégories')->setFormTypeOptions([
                'by_reference' => false,
                'multiple' => true,])->autocomplete()->setColumns(12)
        ];
    }
    
}
