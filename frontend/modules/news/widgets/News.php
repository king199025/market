<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 22.11.2016
 * Time: 15:16
 */

namespace frontend\modules\news\widgets;


use common\classes\Debug;
use yii\base\Widget;

class News extends Widget
{
    public $id;

    public function run(){
        $news = \backend\modules\news\models\News::find()->where(['!=', 'id', $this->id])->orderBy('dt_add DESC')->limit(2)->all();

        return $this->render('news', ['news' => $news]);
    }
}