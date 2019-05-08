<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 21.04.2019
 * Time: 21:13
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories(){
        return Category::find()->asArray()->all();
    }

    public function getCurrentCategory($id) {
    $category = Category::find()->where(['cat_name' => $id])->one();
    return $category;
}
}