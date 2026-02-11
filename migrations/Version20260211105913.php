<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260211105913 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE presentation_entreprise (id INT AUTO_INCREMENT NOT NULL, logo VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, service_proposee VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, adresse_postal VARCHAR(255) NOT NULL, code_postal INT NOT NULL, commune VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }
    

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE IF EXISTS presentation_entreprise');
    }
    
}
