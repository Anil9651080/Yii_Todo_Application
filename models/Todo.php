<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $timestamp
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category_id'], 'required'],
            [['category_id'], 'integer'],
            
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category',
            'timestamp' => 'Timestamp',
        ];
    }
    public function getCategory(){
        return $this->hasOne(category::className(),['id'=>'category_id']);
    }
}
