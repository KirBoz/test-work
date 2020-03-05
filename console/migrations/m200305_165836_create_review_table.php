<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%review}}`.
 */
class m200305_165836_create_review_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('review', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(11)->notNull(),
            'book_id' => $this->integer(11)->notNull(),
            'text' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%review}}');
    }
}
