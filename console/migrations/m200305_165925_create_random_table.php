<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%random}}`.
 */
class m200305_165925_create_random_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('random', [
            'id' => $this->primaryKey(),
            'number' => $this->integer(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%random}}');
    }
}
