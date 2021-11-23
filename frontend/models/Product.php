<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $model
 * @property float|null $capacity
 * @property string|null $fuel
 * @property string|null $kpp
 * @property int|null $cost
 * @property string|null $color
 * @property string|null $salon
 * @property string|null $city
 * @property string|null $street
 * @property int|null $hause
 * @property int|null $year
 * @property int $category_id
 * @property string $created_at
 * @property string|null $image
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['capacity'], 'number'],
            [['cost', 'hause', 'year', 'category_id'], 'integer'],
            [['category_id'], 'required'],
            [['created_at'], 'safe'],
            [['model', 'fuel', 'kpp', 'color', 'salon', 'city', 'street', 'image'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'model' => 'Model',
            'capacity' => 'Capacity',
            'fuel' => 'Fuel',
            'kpp' => 'Kpp',
            'cost' => 'Cost',
            'color' => 'Color',
            'salon' => 'Salon',
            'city' => 'City',
            'street' => 'Street',
            'hause' => 'Hause',
            'year' => 'Year',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'image' => 'Image',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
