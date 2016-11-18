<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 17.11.2016
 * Time: 13:03
 */

namespace frontend\widgets;


use yii\base\Widget;

class ShowHeader extends Widget
{
    public function run(){
        return $this->render('header');
    }
}