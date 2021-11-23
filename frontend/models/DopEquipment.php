<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dop_equipment".
 *
 * @property int $id
 * @property string|null $item
 * @property string $created_at
 */
class DopEquipment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dop_equipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item'], 'string'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item' => 'Item',
            'created_at' => 'Created At',
        ];
    }
}
