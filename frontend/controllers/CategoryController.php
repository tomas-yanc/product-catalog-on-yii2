<?php

namespace frontend\controllers;

use app\models\Category;
use app\models\Product;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $category = Category::find()->all();
        $product = Product::find()->all();
        
        return $this->render('index', [
            'category' => $category,
            'product' => $product,
        ]);
    }

}
