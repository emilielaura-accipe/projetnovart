<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210515180922 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD mallette_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF22366B350 FOREIGN KEY (mallette_id) REFERENCES mallette (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF22366B350 ON panier (mallette_id)');
        $this->addSql('ALTER TABLE users CHANGE password password VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF22366B350');
        $this->addSql('DROP INDEX IDX_24CC0DF22366B350 ON panier');
        $this->addSql('ALTER TABLE panier DROP mallette_id');
        $this->addSql('ALTER TABLE users CHANGE password password VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
