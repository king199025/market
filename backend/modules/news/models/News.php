<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 21.11.2016
 * Time: 15:50
 */

namespace backend\modules\news\models;


use yii\db\ActiveRecord;

class News extends \common\models\db\News
{
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['dt_add', 'dt_update'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['dt_update'],
                ],
            ],
            'slug' => [
                'class' => 'common\behaviors\Slug',
                'in_attribute' => 'title',
                'out_attribute' => 'slug',
                'translit' => true
            ],
        ];
    }
}