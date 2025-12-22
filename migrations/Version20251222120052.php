<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251222120052 extends AbstractMigration
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
        $this->addSql('CREATE TABLE financements (id INT AUTO_INCREMENT NOT NULL, bailleur_id INT NOT NULL, type VARCHAR(100) NOT NULL, numero_convention VARCHAR(255) NOT NULL, slug VARCHAR(255) DEFAULT NULL, date_signature DATE NOT NULL, date_entree_vigueur DATE DEFAULT NULL, date_echeance DATE NOT NULL, montant_engage NUMERIC(15, 2) NOT NULL, montant_decaisse NUMERIC(15, 2) DEFAULT NULL, contrepartie_nationale NUMERIC(15, 2) DEFAULT NULL, taux_interet VARCHAR(50) DEFAULT NULL, duree_financement VARCHAR(100) DEFAULT NULL, differe_remboursement VARCHAR(100) DEFAULT NULL, conditions LONGTEXT DEFAULT NULL, statut VARCHAR(50) NOT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_995FB295E5ABF8DD (numero_convention), UNIQUE INDEX UNIQ_995FB295989D9B62 (slug), INDEX IDX_995FB29557B5D0A2 (bailleur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE financement_projet (financement_id INT NOT NULL, project_id INT NOT NULL, INDEX IDX_1E088F4EA737ED74 (financement_id), INDEX IDX_1E088F4E166D1F9C (project_id), PRIMARY KEY(financement_id, project_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE institution (id INT AUTO_INCREMENT NOT NULL, type_institution_id INT NOT NULL, sector_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, acronym VARCHAR(50) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, creation_date DATE DEFAULT NULL, head_name VARCHAR(255) DEFAULT NULL, head_title VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(50) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_3A9F98E5989D9B62 (slug), INDEX IDX_3A9F98E546837012 (type_institution_id), INDEX IDX_3A9F98E5DE95C867 (sector_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, type_partner_id INT NOT NULL, name VARCHAR(255) NOT NULL, acronym VARCHAR(50) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, site_web VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, slug VARCHAR(255) NOT NULL, contact_name VARCHAR(255) DEFAULT NULL, contact_role VARCHAR(255) DEFAULT NULL, contact_email VARCHAR(255) DEFAULT NULL, contact_phone VARCHAR(50) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_312B3E16989D9B62 (slug), INDEX IDX_312B3E168E902EDB (type_partner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, institution_id INT DEFAULT NULL, partner_principal_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, code VARCHAR(50) NOT NULL, slug VARCHAR(255) NOT NULL, sector VARCHAR(50) NOT NULL, description LONGTEXT DEFAULT NULL, localisation VARCHAR(255) DEFAULT NULL, priorite VARCHAR(20) NOT NULL, status VARCHAR(20) NOT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, budget_total NUMERIC(15, 2) DEFAULT NULL, montant_decaisse NUMERIC(15, 2) DEFAULT NULL, progress INT DEFAULT NULL, source_financement VARCHAR(255) DEFAULT NULL, maitre_ouvrage VARCHAR(255) DEFAULT NULL, chef_projet VARCHAR(255) DEFAULT NULL, beneficiaires VARCHAR(255) DEFAULT NULL, financement_national NUMERIC(15, 2) DEFAULT NULL, financement_partenaires NUMERIC(15, 2) DEFAULT NULL, financement_autre NUMERIC(15, 2) DEFAULT NULL, notes LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_2FB3D0EE77153098 (code), UNIQUE INDEX UNIQ_2FB3D0EE989D9B62 (slug), INDEX IDX_2FB3D0EE10405986 (institution_id), INDEX IDX_2FB3D0EED6656FCF (partner_principal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_partner (project_id INT NOT NULL, partner_id INT NOT NULL, INDEX IDX_A7353273166D1F9C (project_id), INDEX IDX_A73532739393F8FE (partner_id), PRIMARY KEY(project_id, partner_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sector_institution (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, icon VARCHAR(50) DEFAULT NULL, color VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_institution (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, icon VARCHAR(50) DEFAULT NULL, color VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_partner (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, firstname VARCHAR(255) DEFAULT NULL, lastname VARCHAR(255) DEFAULT NULL, is_verified TINYINT(1) NOT NULL, slug VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE decaissement ADD CONSTRAINT FK_E5CCA29BA737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76A737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A7699E4C234 FOREIGN KEY (decaissement_id) REFERENCES decaissement (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE financements ADD CONSTRAINT FK_995FB29557B5D0A2 FOREIGN KEY (bailleur_id) REFERENCES partner (id)');
        $this->addSql('ALTER TABLE financement_projet ADD CONSTRAINT FK_1E088F4EA737ED74 FOREIGN KEY (financement_id) REFERENCES financements (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE financement_projet ADD CONSTRAINT FK_1E088F4E166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE institution ADD CONSTRAINT FK_3A9F98E546837012 FOREIGN KEY (type_institution_id) REFERENCES type_institution (id)');
        $this->addSql('ALTER TABLE institution ADD CONSTRAINT FK_3A9F98E5DE95C867 FOREIGN KEY (sector_id) REFERENCES sector_institution (id)');
        $this->addSql('ALTER TABLE partner ADD CONSTRAINT FK_312B3E168E902EDB FOREIGN KEY (type_partner_id) REFERENCES type_partner (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE10405986 FOREIGN KEY (institution_id) REFERENCES institution (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EED6656FCF FOREIGN KEY (partner_principal_id) REFERENCES partner (id)');
        $this->addSql('ALTER TABLE project_partner ADD CONSTRAINT FK_A7353273166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_partner ADD CONSTRAINT FK_A73532739393F8FE FOREIGN KEY (partner_id) REFERENCES partner (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE decaissement DROP FOREIGN KEY FK_E5CCA29BA737ED74');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76A737ED74');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A7699E4C234');
        $this->addSql('ALTER TABLE financements DROP FOREIGN KEY FK_995FB29557B5D0A2');
        $this->addSql('ALTER TABLE financement_projet DROP FOREIGN KEY FK_1E088F4EA737ED74');
        $this->addSql('ALTER TABLE financement_projet DROP FOREIGN KEY FK_1E088F4E166D1F9C');
        $this->addSql('ALTER TABLE institution DROP FOREIGN KEY FK_3A9F98E546837012');
        $this->addSql('ALTER TABLE institution DROP FOREIGN KEY FK_3A9F98E5DE95C867');
        $this->addSql('ALTER TABLE partner DROP FOREIGN KEY FK_312B3E168E902EDB');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE10405986');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EED6656FCF');
        $this->addSql('ALTER TABLE project_partner DROP FOREIGN KEY FK_A7353273166D1F9C');
        $this->addSql('ALTER TABLE project_partner DROP FOREIGN KEY FK_A73532739393F8FE');
        $this->addSql('DROP TABLE decaissement');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE financements');
        $this->addSql('DROP TABLE financement_projet');
        $this->addSql('DROP TABLE institution');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_partner');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE sector_institution');
        $this->addSql('DROP TABLE type_institution');
        $this->addSql('DROP TABLE type_partner');
        $this->addSql('DROP TABLE `user`');
    }
}
