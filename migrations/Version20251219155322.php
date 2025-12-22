<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251219155322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE decaissement (id INT AUTO_INCREMENT NOT NULL, financement_id INT NOT NULL, montant NUMERIC(15, 2) NOT NULL, date_decaissement DATE NOT NULL, mode_paiement VARCHAR(50) NOT NULL, statut VARCHAR(50) NOT NULL, reference VARCHAR(255) DEFAULT NULL, justification LONGTEXT DEFAULT NULL, INDEX IDX_E5CCA29BA737ED74 (financement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, financement_id INT DEFAULT NULL, decaissement_id INT DEFAULT NULL, nom_original VARCHAR(255) NOT NULL, nom_fichier VARCHAR(255) NOT NULL, type_mime VARCHAR(150) NOT NULL, taille INT NOT NULL, extension VARCHAR(50) NOT NULL, chemin VARCHAR(255) NOT NULL, categorie VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, cree_par VARCHAR(150) NOT NULL, cree_le DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', mis_ajour_le DATETIME DEFAULT NULL, INDEX IDX_D8698A76A737ED74 (financement_id), INDEX IDX_D8698A7699E4C234 (decaissement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financements (id INT AUTO_INCREMENT NOT NULL, bailleur VARCHAR(255) NOT NULL, type VARCHAR(100) NOT NULL, numero_convention VARCHAR(255) NOT NULL, date_signature DATE NOT NULL, date_entree_vigueur DATE DEFAULT NULL, date_echeance DATE NOT NULL, montant_engage NUMERIC(15, 2) NOT NULL, montant_decaisse NUMERIC(15, 2) DEFAULT NULL, contrepartie_nationale NUMERIC(15, 2) DEFAULT NULL, taux_interet VARCHAR(50) DEFAULT NULL, duree_financement VARCHAR(100) DEFAULT NULL, differe_remboursement VARCHAR(100) DEFAULT NULL, conditions LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_995FB295E5ABF8DD (numero_convention), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financement_projet (financement_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_1E088F4EA737ED74 (financement_id), INDEX IDX_1E088F4E166D1F9C (project_id), PRIMARY KEY(financement_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE decaissement ADD CONSTRAINT FK_E5CCA29BA737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76A737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7699E4C234 FOREIGN KEY (decaissement_id) REFERENCES decaissement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE financement_projet ADD CONSTRAINT FK_1E088F4EA737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE financement_projet ADD CONSTRAINT FK_1E088F4E166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE decaissement DROP FOREIGN KEY FK_E5CCA29BA737ED74');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76A737ED74');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('ALTER TABLE financement_projet DROP FOREIGN KEY FK_1E088F4EA737ED74');
        $this->addSql('ALTER TABLE financement_projet DROP FOREIGN KEY FK_1E088F4E166D1F9C');
        $this->addSql('DROP TABLE decaissement');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE financements');
        $this->addSql('DROP TABLE financement_projet');
    }
}
