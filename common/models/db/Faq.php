<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "faq".
 *
 * @property integer $id
 * @property string $problem
 * @property string $reply
 * @property integer $dt_add
 * @property integer $dt_update
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faq';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['problem', 'reply'], 'required'],
            [['dt_add', 'dt_update'], 'integer'],
            [['problem'], 'string', 'max' => 255],
            [['reply'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'problem' => 'Problem',
            'reply' => 'Reply',
            'dt_add' => 'Dt Add',
            'dt_update' => 'Dt Update',
        ];
    }
}
