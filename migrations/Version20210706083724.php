<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210706083724 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE carte_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE page_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE plateau_de_joueur_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ressource_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE "user_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE carte (id INT NOT NULL, name VARCHAR(45) NOT NULL, image VARCHAR(255) NOT NULL, gold INT NOT NULL, bonus INT NOT NULL, style VARCHAR(45) NOT NULL, cost VARCHAR(45) NOT NULL, cost2 VARCHAR(45) DEFAULT NULL, cost3 VARCHAR(45) DEFAULT NULL, ressource VARCHAR(45) NOT NULL, ressource2 VARCHAR(45) DEFAULT NULL, ressource3 VARCHAR(45) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE page (id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE plateau_de_joueur (id INT NOT NULL, race VARCHAR(45) NOT NULL, for_base INT DEFAULT NULL, def_base INT DEFAULT NULL, gold_base INT DEFAULT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ressource (id INT NOT NULL, name VARCHAR(45) NOT NULL, cost VARCHAR(45) NOT NULL, ressource VARCHAR(45) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE carte_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE page_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE plateau_de_joueur_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE ressource_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE "user_id_seq" CASCADE');
        $this->addSql('DROP TABLE carte');
        $this->addSql('DROP TABLE page');
        $this->addSql('DROP TABLE plateau_de_joueur');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE "user"');
    }
}
