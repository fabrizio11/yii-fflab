<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $category_id
 * @property string $name
 * @property string $description
 *
 * @property Item[] $items
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['category_id' => 'category_id']);
    }

    public static function getCategoryList() {
        return \yii\helpers\ArrayHelper::map(Category::find()->all(), 'category_id', 'name');
    }
}
