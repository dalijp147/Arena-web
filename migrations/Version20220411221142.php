<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220411221142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD imgpost VARCHAR(255) NOT NULL, ADD datepost VARCHAR(255) NOT NULL, DROP img_post, DROP date_post');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD img_post VARCHAR(255) NOT NULL, ADD date_post VARCHAR(255) NOT NULL, DROP imgpost, DROP datepost');
    }
}
