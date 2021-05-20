<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210519193909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE actualites (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, contenu LONGTEXT NOT NULL, date DATE NOT NULL, legende VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE glossaire (id INT AUTO_INCREMENT NOT NULL, mot VARCHAR(255) NOT NULL, definition LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jeux (id INT AUTO_INCREMENT NOT NULL, id_nom_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_3755B50DEE25A904 (id_nom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mallette (id INT AUTO_INCREMENT NOT NULL, theme VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image_coloriages VARCHAR(255) NOT NULL, image_artistes VARCHAR(255) NOT NULL, description_artistes LONGTEXT NOT NULL, image_oeuvres VARCHAR(255) NOT NULL, legende_oeuvres VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, mallette_id INT DEFAULT NULL, INDEX IDX_24CC0DF2A76ED395 (user_id), INDEX IDX_24CC0DF22366B350 (mallette_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, voie VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50DEE25A904 FOREIGN KEY (id_nom_id) REFERENCES mallette (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF22366B350 FOREIGN KEY (mallette_id) REFERENCES mallette (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DEE25A904');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF22366B350');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2A76ED395');
        $this->addSql('DROP TABLE actualites');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE glossaire');
        $this->addSql('DROP TABLE jeux');
        $this->addSql('DROP TABLE mallette');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE users');
    }
}
