<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251230123041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_activities (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, activity_type VARCHAR(50) NOT NULL, entity_type VARCHAR(50) DEFAULT NULL, entity_id INT DEFAULT NULL, entity_name VARCHAR(255) DEFAULT NULL, description LONGTEXT NOT NULL, level VARCHAR(20) NOT NULL, ip_address VARCHAR(45) NOT NULL, user_agent VARCHAR(255) DEFAULT NULL, metadata JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', changes JSON DEFAULT NULL COMMENT \'(DC2Type:json)\', route VARCHAR(255) DEFAULT NULL, method VARCHAR(10) NOT NULL, duration INT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX idx_user_id (user_id), INDEX idx_created_at (created_at), INDEX idx_activity_type (activity_type), INDEX idx_entity_type (entity_type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_activities ADD CONSTRAINT FK_12966909A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_activities DROP FOREIGN KEY FK_12966909A76ED395');
        $this->addSql('DROP TABLE user_activities');
    }
}
