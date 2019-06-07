<?php
$this->beginPage();
?>
<html>

<head>
    <title>video1 school</title>
    <?php $this->head(); ?>

</head>

<body>

<?php
$this->beginBody();
?>

<?php
\yii\bootstrap\NavBar::begin([

        'brandLabel'=>'MyBrand',
        'brandUrl'=>Yii::$app->homeUrl,
            'options'=>[
                    'class'=>'navbar-default navbar-fixed-top'
            ]
]);

$items=[
        ['label'=>'Join', 'url'=>['/site/join']],
        ['label'=>'Login', 'url'=>['/site/login']]

];
echo \yii\bootstrap\Nav::widget([
        'options'=>['class'=> 'navbar-nav navbar-right'],
        'items'=>$items
]);

\yii\bootstrap\NavBar::end();
?>

<div class="container" style="margin-top: 70px;">
<?= $content?>
</div>
<?php
$this->endBody();
?>
</body>


</html>
<?php $this->endPage(); ?>