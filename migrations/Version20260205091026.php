<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260205091026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Création de la table categorie';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE categorie (
            id INT AUTO_INCREMENT NOT NULL,
            libelle VARCHAR(255) NOT NULL,
            PRIMARY KEY (id)
        ) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE categorie');
    }
}
