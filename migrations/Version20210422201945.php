<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422201945 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuarios ADD persona_id INT NULL');
        $this->addSql('ALTER TABLE usuarios ADD CONSTRAINT FK_EF687F2F5F88DB9 FOREIGN KEY (persona_id) REFERENCES persona (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_EF687F2F5F88DB9 ON usuarios (persona_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE usuarios DROP CONSTRAINT FK_EF687F2F5F88DB9');
        $this->addSql('DROP INDEX IDX_EF687F2F5F88DB9');
        $this->addSql('ALTER TABLE usuarios DROP persona_id');
    }
}
