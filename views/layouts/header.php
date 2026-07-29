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
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
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
        /* body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu .simplebar-wrapper,
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu .simplebar-mask,
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu .simplebar-offset,
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu .simplebar-content-wrapper,
        body[data-leftbar-compact-mode="condensed"] .wrapper .leftside-menu .simplebar-content {
            height: auto !important;
            min-height: auto !important;
            max-height: none !important;
        }
        body[data-leftbar-compact-mode="condensed"] .wrapper {
            overflow: visible !important;
        }
        body[data-leftbar-compact-mode="condensed"] .wrapper .content-page {
            min-height: 1600px;
        }
        body[data-leftbar-compact-mode="condensed"] .wrapper .footer {
            position: relative !important;
            bottom: auto !important;
            left: auto !important;
            margin-left: 70px;
        } */
    </style>
</head>

