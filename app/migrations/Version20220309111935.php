<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220309111935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP file');
        $this->addSql('ALTER TABLE trip ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trip ADD CONSTRAINT FK_7656F53B3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7656F53B3DA5256D ON trip (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image ADD file LONGBLOB NOT NULL');
        $this->addSql('ALTER TABLE trip DROP FOREIGN KEY FK_7656F53B3DA5256D');
        $this->addSql('DROP INDEX UNIQ_7656F53B3DA5256D ON trip');
        $this->addSql('ALTER TABLE trip DROP image_id');
    }
}
