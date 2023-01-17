<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113093706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE region');
        $this->addSql('ALTER TABLE announcement ADD room_number INT NOT NULL');
        $this->addSql('ALTER TABLE city DROP region_id');
        $this->addSql('ALTER TABLE picture RENAME INDEX idx_8c9f3610913aea17 TO IDX_16DB4F89913AEA17');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE announcement DROP room_number');
        $this->addSql('ALTER TABLE city ADD region_id INT NOT NULL');
        $this->addSql('ALTER TABLE picture RENAME INDEX idx_16db4f89913aea17 TO IDX_8C9F3610913AEA17');
    }
}
