<?php
/**
 * Created by PhpStorm.
 * User: 7
 * Date: 22.11.2016
 * Time: 10:18
 */

namespace backend\modules\faq\models;


use yii\db\ActiveRecord;

class Faq extends \common\models\db\Faq
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
        ];
    }
}