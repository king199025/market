<?php

namespace frontend\modules\news\controllers;

use backend\modules\news\models\News;
use yii\web\Controller;

/**
 * Default controller for the `news` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $news = News::find()->orderBy('dt_add DESC')->all();
        return $this->render('index', ['news' => $news]);
    }

    public function actionView(){
        $news = News::find()->where(['slug' => \Yii::$app->request->get('slug')])->one();
        return $this->render('view', ['news' => $news]);
    }
}
