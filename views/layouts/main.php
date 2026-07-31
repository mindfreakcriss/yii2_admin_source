<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\Html;
use app\assets\AdminAsset;

AdminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'shortcut icon', 'href' => Yii::getAlias('@web/admin/images/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu {
            top: auto !important;
            bottom: auto !important;
        }
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu #leftside-menu-container {
            height: auto !important;
        }
        .content-page {
            position: relative;
        }
    </style>
</head>
<body data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
    <?php $this->beginBody() ?>
        <div class="wrapper">

            <?= $this->render('left'); ?>

            <div class="content-page">
                <div class="content">
                    <?= $this->render('header'); ?>
                    <!---- end Topbar -->
                    <div class="container-fuild">
                        <?= $content ?>
                    </div>
                </div>
                <?= $this->render('footer'); ?>
            </div>
            <!-- Right Sidebar -->  
            <?= $this->render('right-sidebar'); ?>

        <div class="rightbar-overlay"></div>
        </div>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
