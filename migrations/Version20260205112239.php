<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260205112239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la table commentaire';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE commentaire (
            id INT AUTO_INCREMENT NOT NULL,
            libelle VARCHAR(255) NOT NULL,
            actualite_id INT DEFAULT NULL,
            INDEX IDX_67F068BCA2843073 (actualite_id),
            PRIMARY KEY (id)
        ) DEFAULT CHARACTER SET utf8mb4');

        $this->addSql('ALTER TABLE commentaire 
            ADD CONSTRAINT FK_67F068BCA2843073 
            FOREIGN KEY (actualite_id) REFERENCES actualite (id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE commentaire');
    }
}
