<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251222220230 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conventions (id INT AUTO_INCREMENT NOT NULL, financement_id INT NOT NULL, code VARCHAR(100) NOT NULL, intitule VARCHAR(255) NOT NULL, type VARCHAR(50) NOT NULL, partenaire VARCHAR(255) NOT NULL, agence_execution VARCHAR(255) DEFAULT NULL, montant_global NUMERIC(15, 2) NOT NULL, devise VARCHAR(3) NOT NULL, contrepartie_etat NUMERIC(15, 2) DEFAULT NULL, date_signature DATE NOT NULL, date_mise_en_vigueur DATE DEFAULT NULL, date_limite_decaissement DATE DEFAULT NULL, description LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, document_convention VARCHAR(255) DEFAULT NULL, observations LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by VARCHAR(100) DEFAULT NULL, updated_by VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_AC36C55577153098 (code), INDEX IDX_AC36C555A737ED74 (financement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conventions ADD CONSTRAINT FK_AC36C555A737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conventions DROP FOREIGN KEY FK_AC36C555A737ED74');
        $this->addSql('DROP TABLE conventions');
    }
}
