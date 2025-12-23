<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251222225122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE audits (id INT AUTO_INCREMENT NOT NULL, projet_id INT NOT NULL, reference VARCHAR(50) NOT NULL, type VARCHAR(100) NOT NULL, titre VARCHAR(255) NOT NULL, date_audit DATE NOT NULL, auditeur VARCHAR(255) NOT NULL, organisme VARCHAR(255) DEFAULT NULL, statut VARCHAR(50) NOT NULL, objectifs LONGTEXT DEFAULT NULL, resultat LONGTEXT DEFAULT NULL, recommandations LONGTEXT DEFAULT NULL, niveau VARCHAR(50) DEFAULT NULL, score INT DEFAULT NULL, documents JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', photos JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', observations LONGTEXT DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by VARCHAR(100) DEFAULT NULL, updated_by VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_32451E6CAEA34913 (reference), INDEX IDX_32451E6CC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audits ADD CONSTRAINT FK_32451E6CC18272 FOREIGN KEY (projet_id) REFERENCES project (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE audits DROP FOREIGN KEY FK_32451E6CC18272');
        $this->addSql('DROP TABLE audits');
    }
}
