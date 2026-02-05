<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260205135411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE signaler_commentaire (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, commentaire_id INT DEFAULT NULL, INDEX IDX_EEF92385BA9CD190 (commentaire_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE signaler_commentaire ADD CONSTRAINT FK_EEF92385BA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
        $this->addSql('ALTER TABLE actualite_categorie ADD CONSTRAINT FK_EC878E9DA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE actualite_categorie ADD CONSTRAINT FK_EC878E9DBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA2843073 FOREIGN KEY (actualite_id) REFERENCES actualite (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE signaler_commentaire DROP FOREIGN KEY FK_EEF92385BA9CD190');
        $this->addSql('DROP TABLE signaler_commentaire');
        $this->addSql('ALTER TABLE actualite_categorie DROP FOREIGN KEY FK_EC878E9DA2843073');
        $this->addSql('ALTER TABLE actualite_categorie DROP FOREIGN KEY FK_EC878E9DBCF5E72D');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA2843073');
    }
}
