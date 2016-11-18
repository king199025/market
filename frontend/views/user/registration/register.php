<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var dektrium\user\models\User $user
 * @var dektrium\user\Module $module
 */

$this->title = Yii::t('user', 'Sign up');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'id' => 'registration-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => false,
]); ?>
<div class="popup-register__left">
    <div class="b-input">
        <?= $form->field($model, 'name')->textInput(['placeholder' => 'Имя:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'last_name')->textInput(['placeholder' => 'Фамилия:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Номер телефона:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'email')->textInput(['placeholder' => 'E-mail:'])->label(false) ?>
    </div>
</div>

<div class="popup-register__right">
    <div class="b-input">
        <?= $form->field($model, 'country')->textInput(['placeholder' => 'Страна:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'city')->textInput(['placeholder' => 'Город:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'district')->textInput(['placeholder' => 'Район:'])->label(false) ?>
    </div>
    <div class="b-input">
        <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Пароль:'])->label(false) ?>
    </div>
</div>

    <?/*= $form->field($model, 'name') */?><!--
    <?/*= $form->field($model, 'last_name') */?>
    <?/*= $form->field($model, 'phone') */?>
    <?/*= $form->field($model, 'country') */?>
    <?/*= $form->field($model, 'city') */?>
    <?/*= $form->field($model, 'district') */?>

    <?/*= $form->field($model, 'email') */?>

    <? /*= $form->field($model, 'username') */ ?>

    <?php /*if ($module->enableGeneratingPassword == false): */?>
        <?/*= $form->field($model, 'password')->passwordInput() */?>
    --><?php /*endif */?>

    <?= Html::submitButton(Yii::t('user', 'Sign up'), ['class' => 'btn btn--rounded']) ?>

    <?php ActiveForm::end(); ?>

