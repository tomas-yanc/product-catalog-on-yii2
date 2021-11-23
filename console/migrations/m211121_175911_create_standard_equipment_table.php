<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%standard_equipment}}`.
 */
class m211121_175911_create_standard_equipment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%standard_equipment}}', [
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
        $this->dropTable('{{%standard_equipment}}');
    }
}
