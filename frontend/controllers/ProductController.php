<?php

namespace frontend\controllers;

use app\models\Product;
use app\models\StandardEquipment;
use app\models\DopEquipment;

class ProductController extends \yii\web\Controller
{
    public function actionIndex($category_id)
    {
        $product = Product::findAll(['category_id' => $category_id]);
        
        return $this->render('index', [
            'product' => $product,
        ]);
    }

    public function actionView($id)
    {
        $standardEquipment = StandardEquipment::find()->all();
        $dopEquipment = DopEquipment::find()->all();
        
        return $this->render('view', [
            'model' => $this->findModel($id),
            'standardEquipment' => $standardEquipment,
            'dopEquipment' => $dopEquipment,
        ]);
    }
    
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
