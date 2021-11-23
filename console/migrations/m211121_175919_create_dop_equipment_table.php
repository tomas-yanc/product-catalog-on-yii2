<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dop_equipment}}`.
 */
class m211121_175919_create_dop_equipment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dop_equipment}}', [
            'id' => $this->primaryKey(),
            'item' => $this->text(),
            'created_at' => $this->timestamp(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%dop_equipment}}');
    }
}
