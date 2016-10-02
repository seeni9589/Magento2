<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Smart\Feedback\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        /**
         * Create table 'feedback'
         */
        $table = $installer->getConnection()
            ->newTable($installer->getTable('feedback'))
            ->addColumn(
                'fid',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                null,
                ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                'feedback id'
            )
            ->addColumn(
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                32,
                ['nullable' => false],
                'User name'
            )
            ->addColumn(
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                55,
                ['nullable' => false],
                'User email'
            )
            ->addColumn(
                'phone',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                10,
                ['nullable' => true],
                'User phone'
            )
            ->addColumn(
                'message',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                ['nullable' => FALSE],
                'User message'
            )
            ->addColumn(
                'crated_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                90,
                ['nullable' => FALSE],
                'created time'
            )
            ->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
                3,
                ['unsigned' => true, 'nullable' => false, 'default' => '0'],
                'feedback status'
            )
            ->addColumn(
                'approved_on',
                \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                90,
                ['nullable' => FALSE],
                'approved time'
            )
            ->setComment('customer feedback details');
        $installer->getConnection()->createTable($table);

        $setup->endSetup();

    }
}
