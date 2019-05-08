<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 19.04.2019
 * Time: 16:28
 */

namespace app\models;

use Yii;


use yii\db\ActiveRecord;

class Good extends ActiveRecord
{
    public static function tableName()
    {
        return 'good';
    }

    public function getAllGoods()
    {
        $goods = Yii::$app->cache->get('goods');
        if (!$goods) {
            $goods = Good::find()->asArray()->all();
            Yii::$app->cache->set('goods', $goods, 30);
        }

        return $goods;
    }

    public function getGoodsCategories($id)
    {
        $catGoods = Yii::$app->cache->get('catGoods'.$id);
        if (!$catGoods) {
            $catGoods = Good::find()->where(['category' => $id])->asArray()->all();
            Yii::$app->cache->set('catGoods'.$id, $catGoods, 90);
        }

        return $catGoods;
    }

    public function getOneGood($name)
    {
        return Good::find()->where(['link_name'=>$name])->one();
    }

    public function getSearchResults($search)
    {
        $searchResults = Good::find()->where(['like', 'name', $search])->asArray()->all();
        return $searchResults;
    }

}