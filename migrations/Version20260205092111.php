<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260205092111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Table de jointure actualite_categorie';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE actualite_categorie (
            actualite_id INT NOT NULL,
            categorie_id INT NOT NULL,
            INDEX IDX_EC878E9DA2843073 (actualite_id),
            INDEX IDX_EC878E9DBCF5E72D (categorie_id),
            PRIMARY KEY (actualite_id, categorie_id)
        ) DEFAULT CHARACTER SET utf8mb4');

        $this->addSql('ALTER TABLE actualite_categorie 
            ADD CONSTRAINT FK_EC878E9DA2843073 
            FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');

        $this->addSql('ALTER TABLE actualite_categorie 
            ADD CONSTRAINT FK_EC878E9DBCF5E72D 
            FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE actualite_categorie');
    }
}
