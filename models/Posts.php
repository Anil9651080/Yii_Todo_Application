<?php

namespace app\models;

use yii\db\ActiveRecord;

class Posts extends ActiveRecord
{
    private $name;
    private $category;
    private $timestamp;

    public function rules()
    {
        return [
            [['name', 'category', 'timestamp'], 'required']
        ];
    }
}


?>