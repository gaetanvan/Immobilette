<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230116230752 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE property ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE property ADD CONSTRAINT FK_8BF21CDE3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8BF21CDE3DA5256D ON property (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE property DROP FOREIGN KEY FK_8BF21CDE3DA5256D');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP INDEX UNIQ_8BF21CDE3DA5256D ON property');
        $this->addSql('ALTER TABLE property DROP image_id');
    }
}
