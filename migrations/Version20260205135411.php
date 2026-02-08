<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260205135411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la table signaler_commentaire';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE signaler_commentaire (
            id INT AUTO_INCREMENT NOT NULL,
            libelle VARCHAR(255) NOT NULL,
            commentaire_id INT DEFAULT NULL,
            INDEX IDX_EEF92385BA9CD190 (commentaire_id),
            PRIMARY KEY (id)
        ) DEFAULT CHARACTER SET utf8mb4');

        $this->addSql('ALTER TABLE signaler_commentaire 
            ADD CONSTRAINT FK_EEF92385BA9CD190 
            FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE signaler_commentaire');
    }
}
