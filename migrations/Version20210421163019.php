<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210421163019 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE usuarios_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE usuarios (id INT NOT NULL, usuario VARCHAR(100) NOT NULL, contraseña VARCHAR(100) NOT NULL, tipo VARCHAR(120) DEFAULT NULL, id_persona INT DEFAULT NULL, id_roles VARCHAR(120) DEFAULT NULL, id_centro VARCHAR(150) DEFAULT NULL, estado BOOLEAN DEFAULT NULL, creado_por VARCHAR(120) DEFAULT NULL, fecha_creacion TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE persona ALTER nombres TYPE VARCHAR(200)');
        $this->addSql('ALTER TABLE persona ALTER expedido DROP NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE usuarios_id_seq CASCADE');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('ALTER TABLE persona ALTER nombres TYPE VARCHAR(150)');
        $this->addSql('ALTER TABLE persona ALTER expedido SET NOT NULL');
    }
}
