<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327224249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image_file (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, image_file VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE blog ADD image_file_id INT DEFAULT NULL, DROP image_file');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C01551436DB2EB0 FOREIGN KEY (image_file_id) REFERENCES image_file (id)');
        $this->addSql('CREATE INDEX IDX_C01551436DB2EB0 ON blog (image_file_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C01551436DB2EB0');
        $this->addSql('DROP TABLE image_file');
        $this->addSql('DROP INDEX IDX_C01551436DB2EB0 ON blog');
        $this->addSql('ALTER TABLE blog ADD image_file VARCHAR(255) DEFAULT NULL, DROP image_file_id');
    }
}
