<?php
use yii\widgets\Breadcrumbs;

$this->title = $news->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="l">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => [
            'class' => 'b-breadcrumbs',
        ]

    ]) ?>
    <!--<ul class="b-breadcrumbs">
        <li><a href="#777">Главная</a></li>
        <li><a href="#777">Новости</a></li>
        <li>Фальсификат и некачественное молоко в Свердловской области</li>
    </ul>-->
    <div class="b-sNews">
        <div class="b-sNews__title"><?= $this->title;?></div>
        <div class="b-social"><script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
            <script src="//yastatic.net/share2/share.js"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,gplus,twitter,lj,surfingbird" data-size="s"></div></div>
        <div class="b-sNews__text">
            <?= $news->description; ?>
        </div>
    </div>
    <?= \frontend\modules\news\widgets\News::widget(['id' => $news->id]); ?>
</div>