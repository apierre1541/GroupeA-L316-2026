<?php
// src/Controller/Admin/SignalerCommentaireCrudController.php

namespace App\Controller\Admin;

use App\Entity\SignalerCommentaire;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class SignalerCommentaireCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SignalerCommentaire::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'ID Signalement')
                ->hideOnForm(),
            
            AssociationField::new('commentaire', 'Commentaire signalé')
                ->formatValue(function ($value, $entity) {
                    $commentaire = $entity->getCommentaire();
                    
                    if (!$commentaire) {
                        return '<span style="color: red;">Commentaire supprimé</span>';
                    }
                    
                    return sprintf(
                        '#%d - %s',
                        $commentaire->getId(),
                        htmlspecialchars($commentaire->getLibelle())
                    );
                })
                ->setHelp('ID et contenu du commentaire signalé'),
            
            TextareaField::new('libelle', 'Raison du signalement')
                ->setHelp('Motif donné par l\'utilisateur'),
        ];
    }
}
