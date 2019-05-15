<?php
namespace Ibnab\Bundle\ExtensionFieldBundle\Migrations\Schema\v1_0;
use Doctrine\DBAL\Schema\Schema;
use Oro\Bundle\EntityExtendBundle\EntityConfig\ExtendScope;
use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
/**
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassLength)
 */
class IbnabExtensionFieldBundle implements Migration
{
    /**
     * {@inheritdoc}
     */
    public function up(Schema $schema, QueryBag $queries)
    {
        $table = $schema->getTable('oro_customer_user');
        $table->addColumn('type', 'string', [
            'oro_options' => [
                'extend' => ['owner' => ExtendScope::OWNER_CUSTOM],
            ],
        ]);
    }
}

