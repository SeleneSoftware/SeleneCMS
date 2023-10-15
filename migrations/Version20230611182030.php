<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230611182030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD image_file_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6496DB2EB0 FOREIGN KEY (image_file_id) REFERENCES image_file (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6496DB2EB0 ON user (image_file_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6496DB2EB0');
        $this->addSql('DROP INDEX IDX_8D93D6496DB2EB0 ON user');
        $this->addSql('ALTER TABLE user DROP image_file_id');
    }
}
