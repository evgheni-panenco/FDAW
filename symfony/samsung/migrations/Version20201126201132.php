<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201126201132 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE smartphone_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE smartphone (id INT NOT NULL, type_id INT NOT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_26B07E2EC54C8C93 ON smartphone (type_id)');
        $this->addSql('CREATE TABLE type (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE smartphone ADD CONSTRAINT FK_26B07E2EC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('DROP TABLE product');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE smartphone DROP CONSTRAINT FK_26B07E2EC54C8C93');
        $this->addSql('DROP SEQUENCE smartphone_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE type_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, name VARCHAR(255) NOT NULL, price INT NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE smartphone');
        $this->addSql('DROP TABLE type');
    }
}
