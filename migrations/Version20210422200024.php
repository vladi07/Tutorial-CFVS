<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422200024 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usuarios_roles (usuarios_id INT NOT NULL, roles_id INT NOT NULL, PRIMARY KEY(usuarios_id, roles_id))');
        $this->addSql('CREATE INDEX IDX_CE0972BAF01D3B25 ON usuarios_roles (usuarios_id)');
        $this->addSql('CREATE INDEX IDX_CE0972BA38C751C4 ON usuarios_roles (roles_id)');
        $this->addSql('ALTER TABLE usuarios_roles ADD CONSTRAINT FK_CE0972BAF01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE usuarios_roles ADD CONSTRAINT FK_CE0972BA38C751C4 FOREIGN KEY (roles_id) REFERENCES roles (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE roles ALTER activo DROP DEFAULT');
        $this->addSql('ALTER TABLE roles ALTER activo DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE usuarios_roles');
        $this->addSql('ALTER TABLE roles ALTER activo SET DEFAULT \'true\'');
        $this->addSql('ALTER TABLE roles ALTER activo SET NOT NULL');
    }
}
