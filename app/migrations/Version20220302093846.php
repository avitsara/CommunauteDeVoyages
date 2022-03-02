<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220302093846 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trip ADD user_trip_owner_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trip ADD CONSTRAINT FK_7656F53B38E3FFB9 FOREIGN KEY (user_trip_owner_id) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_7656F53B38E3FFB9 ON trip (user_trip_owner_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trip DROP FOREIGN KEY FK_7656F53B38E3FFB9');
        $this->addSql('DROP INDEX IDX_7656F53B38E3FFB9 ON trip');
        $this->addSql('ALTER TABLE trip DROP user_trip_owner_id');
    }
}
