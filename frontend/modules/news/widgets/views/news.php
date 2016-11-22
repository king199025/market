<?php
?>

<?php if(!empty($news)): ?>
    <div class="b-news">
        <div class="b-news__title">Это будет интересно</div>
        <?php foreach ($news as $item):?>
            <div class="b-newsItem">
                <div class="b-newsItem__img">
                    <img src="<?= $item->img?>" alt="">
                </div>
                <div class="b-newsItem__right">
                    <a href="<?= \yii\helpers\Url::to(['/news/default/view', 'slug' => $item->slug])?>" class="b-newsItem__title"><?= $item->title;?></a>
                    <div class="b-newsItem__text">
                        <p><?= $item->short_description; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif;?>
