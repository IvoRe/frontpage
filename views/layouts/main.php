<?php
use yii\helpers\Html;
use frontpage\assets\ModuleAsset;
use frontpage\models\Browser;

/* @var $this \yii\web\View */
/* @var $content string */

ModuleAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php if( Browser::iPhone()): ?>
        <meta name="viewport" content="width=device-width,  minimum-scale=1.0, maximum-scale=1.0" />
    <?php elseif( Browser::iPad()): ?>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
    <?php else: ?>
        <!-- iPhone & iPad have a bug in background-attachment:fixed: -->
        <style>.background-specifications{background-attachment:fixed;}</style>
    <?php endif; ?>
    <?php         
        $this->head();
    ?>
</head>
<body>

<?php $this->beginBody() ?>
    <?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
