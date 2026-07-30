<?php
$this->registerJsFile('/admin/js/pages/demo.apex-candlestick.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apex</a></li>
                                            <li class="breadcrumb-item active">K线图</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">K线图</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">简单 K线图 Chart</h4>
                                        <div dir="ltr">
                                            <div id="simple-candlestick" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">组合 K线图 Chart</h4>
                                        <div dir="ltr">
                                            <div id="combo-candlestick" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                                            <div id="combo-bar-candlestick" class="apex-charts" data-colors="#727cf5,#ffbc00"></div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->