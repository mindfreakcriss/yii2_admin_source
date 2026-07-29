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
        //app css
        'admin/css/app.min.css',
        'admin/css/icons.min.css',
        //third party css
        'admin/css/vendor/fullcalendar.min.css',
        'admin/css/vendor/dataTables.bootstrap5.css',
        'admin/css/vendor/responsive.bootstrap5.css',
        'admin/css/vendor/jquery-jvectormap-1.2.2.css',
        'admin/css/vendor/frappe-gantt.css',
        'admin/css/vendor/quill.core.css',
        'admin/css/vendor/quill.snow.css',
        'admin/css/vendor/quill.bubble.css',
        'admin/css/vendor/simplemde.min.css',
        'admin/css/vendor/jstree.min.css',
        'admin/css/vendor/britecharts.min.css',
        'admin/css/vendor/buttons.bootstrap5.css',
        'admin/css/vendor/fixedColumns.bootstrap5.css',
        'admin/css/vendor/fixedHeader.bootstrap5.css',
        'admin/css/vendor/select.bootstrap5.css',
    ];
    public $js = [
        //third party js
        'admin/js/vendor.min.js',
        'admin/js/app.min.js',
        'admin/js/vendor/apexcharts.min.js',
        'admin/js/vendor/jquery-jvectormap-1.2.2.min.js',
        'admin/js/vendor/jquery-jvectormap-world-mill-en.js',
        'admin/js/vendor/fullcalendar.min.js',
        'admin/js/vendor/jquery.dataTables.min.js',
        'admin/js/vendor/dataTables.bootstrap5.js',
        'admin/js/vendor/dataTables.responsive.min.js',
        'admin/js/vendor/responsive.bootstrap5.min.js',
        'admin/js/vendor/dataTables.checkboxes.min.js',
        'admin/js/vendor/frappe-gantt.min.js',
        'admin/js/vendor/quill.min.js',
        'admin/js/vendor/simplemde.min.js',
        'admin/js/vendor/dropzone.min.js',
        'admin/js/vendor/dragula.min.js',
        'admin/js/vendor/chart.min.js',
        'admin/js/vendor/gmaps.min.js',
        'admin/js/vendor/jstree.min.js',
        'admin/js/vendor/britecharts.min.js',
        'admin/js/vendor/d3.min.js',
        'admin/js/vendor/buttons.bootstrap5.min.js',
        'admin/js/vendor/dataTables.buttons.min.js',
        'admin/js/vendor/buttons.html5.min.js',
        'admin/js/vendor/buttons.print.min.js',
        'admin/js/vendor/buttons.flash.min.js',
        'admin/js/vendor/fixedColumns.bootstrap5.min.js',
        'admin/js/vendor/fixedHeader.bootstrap5.min.js',
        'admin/js/vendor/dataTables.keyTable.min.js',
        'admin/js/vendor/dataTables.select.min.js',
        'admin/js/vendor/jquery.sparkline.min.js',
        'admin/js/vendor/ion.rangeSlider.min.js',
        'admin/js/vendor/jquery.rateit.min.js',
        'admin/js/vendor/handlebars.min.js',
        'admin/js/vendor/typeahead.bundle.min.js',
        'admin/js/vendor/jquery-jvectormap-au-mill-en.js',
        'admin/js/vendor/jquery-jvectormap-ca-lcc-en.js',
        'admin/js/vendor/jquery-jvectormap-es-merc.js',
        'admin/js/vendor/jquery-jvectormap-es-mill.js',
        'admin/js/vendor/jquery-jvectormap-europe-mill-en.js',
        'admin/js/vendor/jquery-jvectormap-fr-merc-en.js',
        'admin/js/vendor/jquery-jvectormap-in-mill-en.js',
        'admin/js/vendor/jquery-jvectormap-uk-mill-en.js',
        'admin/js/vendor/jquery-jvectormap-us-il-chicago-mill-en.js',
        'admin/js/vendor/jquery-jvectormap-us-merc-en.js',
        //ui components
        'admin/js/ui/component.dragula.js',
        'admin/js/ui/component.fileupload.js',
        'admin/js/ui/component.range-slider.js',
        'admin/js/ui/component.rating.js',
        'admin/js/ui/component.chat.js',
        'admin/js/ui/component.todo.js',
        //demo app
        'admin/js/pages/demo.dashboard.js',
    ];

    //需要增加这一步，不然资源会无法生效
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}