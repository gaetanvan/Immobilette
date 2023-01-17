<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230116112102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE files DROP FOREIGN KEY files_ibfk_1');
        $this->addSql('DROP INDEX property_id ON files');
        $this->addSql('ALTER TABLE files DROP property_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE files ADD property_id INT NOT NULL');
        $this->addSql('ALTER TABLE files ADD CONSTRAINT files_ibfk_1 FOREIGN KEY (property_id) REFERENCES property (id)');
        $this->addSql('CREATE INDEX property_id ON files (property_id)');
    }
}
