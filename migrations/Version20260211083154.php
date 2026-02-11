<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260211083154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE IF NOT EXISTS user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, telephone VARCHAR(20) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    
        $sm = $this->connection->createSchemaManager();
    
        // actualite_categorie FK
        if ($sm->tablesExist(['actualite_categorie'])) {
            $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('actualite_categorie'));
    
            if (!in_array('FK_EC878E9DA2843073', $fkNames, true)) {
                $this->addSql('ALTER TABLE actualite_categorie ADD CONSTRAINT FK_EC878E9DA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
            }
            if (!in_array('FK_EC878E9DBCF5E72D', $fkNames, true)) {
                $this->addSql('ALTER TABLE actualite_categorie ADD CONSTRAINT FK_EC878E9DBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
            }
        }
    
        // commentaire FK
        if ($sm->tablesExist(['commentaire'])) {
            $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('commentaire'));
            if (!in_array('FK_67F068BCA2843073', $fkNames, true)) {
                $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id)');
            }
        }
    
        // signaler_commentaire FK
        if ($sm->tablesExist(['signaler_commentaire'])) {
            $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('signaler_commentaire'));
            if (!in_array('FK_EEF92385BA9CD190', $fkNames, true)) {
                $this->addSql('ALTER TABLE signaler_commentaire ADD CONSTRAINT FK_EEF92385BA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
            }
        }
    }
    

    public function down(Schema $schema): void
{
    $sm = $this->connection->createSchemaManager();

    if ($sm->tablesExist(['actualite_categorie'])) {
        $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('actualite_categorie'));
        if (in_array('FK_EC878E9DA2843073', $fkNames, true)) {
            $this->addSql('ALTER TABLE actualite_categorie DROP FOREIGN KEY FK_EC878E9DA2843073');
        }
        if (in_array('FK_EC878E9DBCF5E72D', $fkNames, true)) {
            $this->addSql('ALTER TABLE actualite_categorie DROP FOREIGN KEY FK_EC878E9DBCF5E72D');
        }
    }

    if ($sm->tablesExist(['commentaire'])) {
        $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('commentaire'));
        if (in_array('FK_67F068BCA2843073', $fkNames, true)) {
            $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA2843073');
        }
    }

    if ($sm->tablesExist(['signaler_commentaire'])) {
        $fkNames = array_map(fn($fk) => $fk->getName(), $sm->listTableForeignKeys('signaler_commentaire'));
        if (in_array('FK_EEF92385BA9CD190', $fkNames, true)) {
            $this->addSql('ALTER TABLE signaler_commentaire DROP FOREIGN KEY FK_EEF92385BA9CD190');
        }
    }

    $this->addSql('DROP TABLE IF EXISTS user');
}

}
