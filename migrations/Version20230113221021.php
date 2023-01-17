<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230113221021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE announcement DROP city, DROP picture');
        $this->addSql('ALTER TABLE picture DROP FOREIGN KEY FK_8C9F3610913AEA17');
        $this->addSql('DROP INDEX IDX_16DB4F89913AEA17 ON picture');
        $this->addSql('ALTER TABLE picture DROP announcement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category');
        $this->addSql('ALTER TABLE announcement ADD city VARCHAR(255) NOT NULL, ADD picture VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE picture ADD announcement_id INT NOT NULL');
        $this->addSql('ALTER TABLE picture ADD CONSTRAINT FK_8C9F3610913AEA17 FOREIGN KEY (announcement_id) REFERENCES announcement (id)');
        $this->addSql('CREATE INDEX IDX_16DB4F89913AEA17 ON picture (announcement_id)');
    }
}
