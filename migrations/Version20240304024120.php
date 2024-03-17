<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240304024120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE footer_section (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE footer ADD footer_section_id INT DEFAULT NULL, DROP section');
        $this->addSql('ALTER TABLE footer ADD CONSTRAINT FK_E231055344A295EE FOREIGN KEY (footer_section_id) REFERENCES footer_section (id)');
        $this->addSql('CREATE INDEX IDX_E231055344A295EE ON footer (footer_section_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE footer DROP FOREIGN KEY FK_E231055344A295EE');
        $this->addSql('DROP TABLE footer_section');
        $this->addSql('DROP INDEX IDX_E231055344A295EE ON footer');
        $this->addSql('ALTER TABLE footer ADD section VARCHAR(255) NOT NULL, DROP footer_section_id');
    }
}
