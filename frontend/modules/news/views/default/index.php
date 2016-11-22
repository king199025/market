<?php
use yii\widgets\Breadcrumbs;
$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="l">
    <!--<ul class="b-breadcrumbs">
        <li><a href="#777">Главная</a></li>
        <li>Новости</li>
    </ul>-->

    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        'options' => [
            'class' => 'b-breadcrumbs',
        ]

    ]) ?>
    <div class="b-pageTitle">Новости</div>
    <div class="b-news">

        <?php foreach ($news as $item): ?>
            <!-- newsItem -->
            <div class="b-newsItem">
                <div class="b-newsItem__img">
                    <img src="<?= $item->img; ?>" alt="">
                </div>
                <div class="b-newsItem__right">
                    <a href="<?= \yii\helpers\Url::to(['/news/default/view', 'slug' => $item->slug])?>" class="b-newsItem__title"><?= $item->title;?></a>
                    <div class="b-newsItem__text">
                        <p><?= $item->short_description; ?></p>
                    </div>
                </div>
            </div>
            <!-- /newsItem -->
        <?php endforeach; ?>

    </div>
</div>
