<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200917_094954_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->notNull(),
            'short_description' => $this->string(250)->notNull(),
            'description' => $this->text(),
            'is_active' => $this->boolean()->defaultValue(0),
            'create_at' => $this->integer(),
            'create_by' => $this->integer(),
            'update_at' => $this->integer(),
            'update_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%post}}');
    }
}
