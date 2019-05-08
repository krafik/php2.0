<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 19.04.2019
 * Time: 16:24
 */

namespace app\controllers;

use app\models\Category;
use app\models\Good;

use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{
    public function actionIndex()
    {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id)
    {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        $category = new Category();
        $category = $category->getCurrentCategory($id);
        return $this->render('view', compact('goods', 'category'));
    }

    public function actionSearch()
    {

        $search = Yii::$app->request->get('search');
        $search = htmlspecialchars(strip_tags($search),ENT_QUOTES);
        $goods = new Good();
        $goods = $goods->getSearchResults($search);
        return $this->render('search', compact('goods', 'search'));
    }
}