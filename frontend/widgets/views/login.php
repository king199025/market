<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var yii\web\View                   $this
 * @var yii\widgets\ActiveForm         $form
 * @var dektrium\user\models\LoginForm $model
 * @var string                         $action
 */

?>

<?php if (Yii::$app->user->isGuest): ?>
    <?php $form = ActiveForm::begin([
        'id'                     => 'login-widget-form',
        'action'                 => Url::to(['/user/security/login']),
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
    ]) ?>

    <div class="b-input">
        <?= $form->field($model, 'login')->textInput(['placeholder' => 'E-mail'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль'])->label(false); ?>
    </div>
    <?/*= $form->field($model, 'rememberMe')->checkbox() */?>

    <?= Html::submitButton('Войти', ['class' => 'btn btn--rounded']) ?>

    <?php ActiveForm::end(); ?>
    <div class="popup-login__links">
        <a href="#777">Регистрация</a>
        <a href="#777">Забыли пароль?</a>
    </div>
<?php else: ?>
    <?= Html::a(Yii::t('user', 'Logout'), ['/user/security/logout'], [
        'class'       => 'btn btn-danger btn-block',
        'data-method' => 'post'
    ]) ?>
<?php endif ?>
