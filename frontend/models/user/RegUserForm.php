<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 04.05.2016
 * Time: 13:12
 */

namespace frontend\models\user;



use dektrium\user\models\RegistrationForm;
use dektrium\user\models\User;
use Yii;

class RegUserForm extends RegistrationForm
{
    /**
     * @var string
     */
    public $name;
    public $last_name;
    public $phone;
    public $country;
    public $city;
    public $district;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();

        $rules['nameLength']   = ['name', 'string', 'max' => 100];
        $rules['last_nameLength']   = ['last_name', 'string', 'max' => 100];
        $rules['phoneLength']   = ['phone', 'string', 'max' => 100];
        $rules['countryLength']   = ['country', 'string', 'max' => 100];
        $rules['cityLength']   = ['city', 'string', 'max' => 100];
        $rules['districtLength']   = ['district', 'string', 'max' => 100];
        return $rules;
    }

    public function beforeValidate() {
        $this->username = $this->email;
        return parent::beforeValidate();
    }

    public function register()
    {
        if (!$this->validate()) {
            return false;
        }

        /** @var User $user */
        $user = Yii::createObject(User::className());
        $user->setScenario('register');
        $this->loadAttributes($user);

        if (!$user->register()) {
            return false;
        }



        return true;
    }

}