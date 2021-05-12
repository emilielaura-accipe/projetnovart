<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210512094144 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jeux ADD id_nom_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jeux ADD CONSTRAINT FK_3755B50DEE25A904 FOREIGN KEY (id_nom_id) REFERENCES mallette (id)');
        $this->addSql('CREATE INDEX IDX_3755B50DEE25A904 ON jeux (id_nom_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE jeux DROP FOREIGN KEY FK_3755B50DEE25A904');
        $this->addSql('DROP INDEX IDX_3755B50DEE25A904 ON jeux');
        $this->addSql('ALTER TABLE jeux DROP id_nom_id');
    }
}
