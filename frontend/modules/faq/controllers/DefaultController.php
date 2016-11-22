<?php

namespace frontend\modules\faq\controllers;

use backend\modules\faq\models\Faq;
use yii\web\Controller;

/**
 * Default controller for the `faq` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $faq = Faq::find()->orderBy('dt_add DESC')->all();

        return $this->render('index',['faq' => $faq]);
    }
}
