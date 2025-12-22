<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251219134015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE institution (id INT AUTO_INCREMENT NOT NULL, type_institution_id INT NOT NULL, sector_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, acronym VARCHAR(50) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, slug VARCHAR(255) NOT NULL, creation_date DATE DEFAULT NULL, head_name VARCHAR(255) DEFAULT NULL, head_title VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(50) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, website VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, status VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_3A9F98E5989D9B62 (slug), INDEX IDX_3A9F98E546837012 (type_institution_id), INDEX IDX_3A9F98E5DE95C867 (sector_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sector_institution (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, icon VARCHAR(50) DEFAULT NULL, color VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_institution (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) DEFAULT NULL, code VARCHAR(50) DEFAULT NULL, icon VARCHAR(50) DEFAULT NULL, color VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE institution ADD CONSTRAINT FK_3A9F98E546837012 FOREIGN KEY (type_institution_id) REFERENCES type_institution (id)');
        $this->addSql('ALTER TABLE institution ADD CONSTRAINT FK_3A9F98E5DE95C867 FOREIGN KEY (sector_id) REFERENCES sector_institution (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE institution DROP FOREIGN KEY FK_3A9F98E546837012');
        $this->addSql('ALTER TABLE institution DROP FOREIGN KEY FK_3A9F98E5DE95C867');
        $this->addSql('DROP TABLE institution');
        $this->addSql('DROP TABLE sector_institution');
        $this->addSql('DROP TABLE type_institution');
    }
}
