<?php
/**
 * Created by PhpStorm.
 * User: Офис
 * Date: 05.05.2016
 * Time: 9:52
 */

namespace frontend\models\user;


use dektrium\user\models\Token;
use Yii;

class RecoveryForm extends \dektrium\user\models\RecoveryForm
{

    /**
     * Resets user's password.
     *
     * @param Token $token
     *
     * @return bool
     */
    public function resetPassword(Token $token)
    {
        if (!$this->validate() || $token->user === null) {
            return false;
        }

        if ($token->user->resetPassword($this->password)) {

            $token->delete();
        } else {

        }

        return true;
    }
}