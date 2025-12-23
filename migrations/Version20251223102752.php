<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251223102752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('CREATE TABLE audits (id INT AUTO_INCREMENT NOT NULL, projet_id INT NOT NULL, reference VARCHAR(50) NOT NULL, type VARCHAR(100) NOT NULL, titre VARCHAR(255) NOT NULL, date_audit DATE NOT NULL, auditeur VARCHAR(255) NOT NULL, organisme VARCHAR(255) DEFAULT NULL, statut VARCHAR(50) NOT NULL, objectifs LONGTEXT DEFAULT NULL, resultat LONGTEXT DEFAULT NULL, recommandations LONGTEXT DEFAULT NULL, niveau VARCHAR(50) DEFAULT NULL, score INT DEFAULT NULL, documents JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', photos JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', observations LONGTEXT DEFAULT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by VARCHAR(100) DEFAULT NULL, updated_by VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_32451E6CAEA34913 (reference), INDEX IDX_32451E6CC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conventions (id INT AUTO_INCREMENT NOT NULL, financement_id INT NOT NULL, code VARCHAR(100) NOT NULL, intitule VARCHAR(255) NOT NULL, type VARCHAR(50) NOT NULL, partenaire VARCHAR(255) NOT NULL, agence_execution VARCHAR(255) DEFAULT NULL, montant_global NUMERIC(15, 2) NOT NULL, devise VARCHAR(3) NOT NULL, contrepartie_etat NUMERIC(15, 2) DEFAULT NULL, date_signature DATE NOT NULL, date_mise_en_vigueur DATE DEFAULT NULL, date_limite_decaissement DATE DEFAULT NULL, description LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, document_convention VARCHAR(255) DEFAULT NULL, observations LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by VARCHAR(100) DEFAULT NULL, updated_by VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_AC36C55577153098 (code), INDEX IDX_AC36C555A737ED74 (financement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE decaissements (id INT AUTO_INCREMENT NOT NULL, financement_id INT NOT NULL, projet_id INT NOT NULL, reference VARCHAR(50) NOT NULL, beneficiaire VARCHAR(255) NOT NULL, montant NUMERIC(15, 2) NOT NULL, devise VARCHAR(3) NOT NULL, date_demande DATE NOT NULL, date_validation DATE DEFAULT NULL, date_execution DATE DEFAULT NULL, mode_paiement VARCHAR(50) NOT NULL, ligne_budgetaire VARCHAR(100) DEFAULT NULL, description LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, commentaire LONGTEXT DEFAULT NULL, piece_justificative VARCHAR(255) DEFAULT NULL, valide_par VARCHAR(100) DEFAULT NULL, execute_par VARCHAR(100) DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, created_by VARCHAR(100) DEFAULT NULL, updated_by VARCHAR(100) DEFAULT NULL, UNIQUE INDEX UNIQ_7C364965AEA34913 (reference), INDEX IDX_7C364965A737ED74 (financement_id), INDEX IDX_7C364965C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE audits ADD CONSTRAINT FK_32451E6CC18272 FOREIGN KEY (projet_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE conventions ADD CONSTRAINT FK_AC36C555A737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
        $this->addSql('ALTER TABLE decaissements ADD CONSTRAINT FK_7C364965A737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
        $this->addSql('ALTER TABLE decaissements ADD CONSTRAINT FK_7C364965C18272 FOREIGN KEY (projet_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE decaissement DROP FOREIGN KEY FK_E5CCA29BA737ED74');
        $this->addSql('DROP TABLE decaissement');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7699E4C234 FOREIGN KEY (decaissement_id) REFERENCES decaissements (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('CREATE TABLE decaissement (id INT AUTO_INCREMENT NOT NULL, financement_id INT NOT NULL, montant NUMERIC(15, 2) NOT NULL, date_decaissement DATE NOT NULL, mode_paiement VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, statut VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, reference VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, justification LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_E5CCA29BA737ED74 (financement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE decaissement ADD CONSTRAINT FK_E5CCA29BA737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
        $this->addSql('ALTER TABLE audits DROP FOREIGN KEY FK_32451E6CC18272');
        $this->addSql('ALTER TABLE conventions DROP FOREIGN KEY FK_AC36C555A737ED74');
        $this->addSql('ALTER TABLE decaissements DROP FOREIGN KEY FK_7C364965A737ED74');
        $this->addSql('ALTER TABLE decaissements DROP FOREIGN KEY FK_7C364965C18272');
        $this->addSql('DROP TABLE audits');
        $this->addSql('DROP TABLE conventions');
        $this->addSql('DROP TABLE decaissements');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7699E4C234 FOREIGN KEY (decaissement_id) REFERENCES decaissement (id) ON DELETE CASCADE');
    }
}
