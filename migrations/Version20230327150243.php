<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230327150243 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog ADD image_file_id INT DEFAULT NULL, DROP image_file');
        $this->addSql('ALTER TABLE blog ADD CONSTRAINT FK_C01551436DB2EB0 FOREIGN KEY (image_file_id) REFERENCES image_file (id)');
        $this->addSql('CREATE INDEX IDX_C01551436DB2EB0 ON blog (image_file_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE blog DROP FOREIGN KEY FK_C01551436DB2EB0');
        $this->addSql('DROP INDEX IDX_C01551436DB2EB0 ON blog');
        $this->addSql('ALTER TABLE blog ADD image_file VARCHAR(255) DEFAULT NULL, DROP image_file_id');
    }
}
