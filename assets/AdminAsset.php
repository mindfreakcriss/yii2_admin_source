<?php

/**
 * @Description: 后台资源文件 
 * @author huangkaibo 
 */

namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
       // 'css/admin.css', 格式
       //third party css
       'admin/css/vendor/jquery-jvectormap-1.2.2.css',
       //app css
       'admin/css/app.min.css',
       'admin/css/icons.min.css'
    ];
    public $js = [
      //  'js/admin.js', 格式
      //third party js
      'admin/js/vendor/apexcharts.min.js',
      'admin/js/vendor/jquery-jvectormap-1.2.2.min.js',
      'admin/js/vendor/jquery-jvectormap-world-mill-en.js',
      //demo app
      'admin/js/pages/demo.dashboard.js'

    ];

    //需要增加这一步，不然资源会无法生效
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}