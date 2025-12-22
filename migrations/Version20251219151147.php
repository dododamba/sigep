<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251219151147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project ADD institution_id INT DEFAULT NULL, ADD partner_principal_id INT DEFAULT NULL, ADD slug VARCHAR(255) NOT NULL, ADD sector VARCHAR(50) NOT NULL, ADD status VARCHAR(20) NOT NULL, ADD budget_total NUMERIC(15, 2) DEFAULT NULL, ADD montant_decaisse NUMERIC(15, 2) DEFAULT NULL, ADD progress INT DEFAULT NULL, ADD maitre_ouvrage VARCHAR(255) DEFAULT NULL, ADD chef_projet VARCHAR(255) DEFAULT NULL, ADD beneficiaires VARCHAR(255) DEFAULT NULL, ADD financement_national NUMERIC(15, 2) DEFAULT NULL, ADD financement_partenaires NUMERIC(15, 2) DEFAULT NULL, ADD financement_autre NUMERIC(15, 2) DEFAULT NULL, ADD notes LONGTEXT DEFAULT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME DEFAULT NULL, DROP buget_total, DROP montant_encaise, CHANGE name name VARCHAR(255) NOT NULL, CHANGE code code VARCHAR(50) NOT NULL, CHANGE priorite priorite VARCHAR(20) NOT NULL, CHANGE nom source_financement VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE10405986 FOREIGN KEY (institution_id) REFERENCES institution (id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EED6656FCF FOREIGN KEY (partner_principal_id) REFERENCES partner (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EE77153098 ON project (code)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EE989D9B62 ON project (slug)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EE10405986 ON project (institution_id)');
        $this->addSql('CREATE INDEX IDX_2FB3D0EED6656FCF ON project (partner_principal_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EE10405986');
        $this->addSql('ALTER TABLE project DROP FOREIGN KEY FK_2FB3D0EED6656FCF');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EE77153098 ON project');
        $this->addSql('DROP INDEX UNIQ_2FB3D0EE989D9B62 ON project');
        $this->addSql('DROP INDEX IDX_2FB3D0EE10405986 ON project');
        $this->addSql('DROP INDEX IDX_2FB3D0EED6656FCF ON project');
        $this->addSql('ALTER TABLE project ADD nom VARCHAR(255) DEFAULT NULL, ADD buget_total DOUBLE PRECISION DEFAULT NULL, ADD montant_encaise DOUBLE PRECISION DEFAULT NULL, DROP institution_id, DROP partner_principal_id, DROP slug, DROP sector, DROP status, DROP budget_total, DROP montant_decaisse, DROP progress, DROP source_financement, DROP maitre_ouvrage, DROP chef_projet, DROP beneficiaires, DROP financement_national, DROP financement_partenaires, DROP financement_autre, DROP notes, DROP created_at, DROP updated_at, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE code code VARCHAR(255) DEFAULT NULL, CHANGE priorite priorite VARCHAR(255) DEFAULT NULL');
    }
}
