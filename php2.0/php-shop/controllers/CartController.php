<?php
/**
 * Created by PhpStorm.
 * User: alexe
 * Date: 22.04.2019
 * Time: 2:25
 */

namespace app\controllers;


use app\models\Good;
use app\models\Cart;
use app\models\Order;
use app\models\OrderGood;
use yii\web\Controller;
use Yii;

class CartController extends Controller
{
    public function actionOrder()
    {
        $session = Yii::$app->session;
        $session->open();
        $order = new Order();
        if ($order->load(Yii::$app->request->post())) {
            $order->date = date('Y-m-d H:i:s');
            $order->sum = $session['cart.totalSum'];
            if($order->save()){
                Yii::$app->mailer->compose()
                    ->setFrom(['aaa@aaa.ru'=>'test test'])
                    ->setTo('aaaa@aaaa.ru')
                    ->setSubject('Ваш заказ принят')
                    ->send();
                $session->remove('cart');
                $session->remove('cart.totalQuantity');
                $session->remove('cart.totalSum');
                return $this->render('success', compact('session'));
            }
        }
        $this->layout = 'empty-layout';
        return $this->render('order', compact('session', 'order'));
    }

    public function actionDelete($id)
    {
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->recalcCart($id);
        return $this->renderPartial('cart', compact('session'));
    }

    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.totalQuantity');
        $session->remove('cart.totalSum');
        return $this->renderPartial('cart', compact('session'));
    }

    public function actionOpen()
    {
        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
//        $session->remove('cart.totalQuantity');
//        $session->remove('cart.totalSum');
        return $this->renderPartial('cart', compact('session'));

    }

    public function actionAdd($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);

        $session = Yii::$app->session;
        $session->open();
//        $session->remove('cart');
        $cart = new Cart();
        $cart->addToCart($good);

        return $this->renderPartial('cart', compact('good', 'session'));
    }
}