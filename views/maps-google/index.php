<?php
$this->registerJsFile('/admin/js/pages/demo.google-maps.js', ['depends' => 'app\assets\AdminAsset']);
$this->registerJsFile('https://maps.google.com/maps/api/js', ['depends' => 'app\assets\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">地图</a></li>
                                            <li class="breadcrumb-item active">谷歌地图</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">谷歌地图</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">基本 Google Map</h4>
                                        <div id="gmaps-basic" class="gmaps"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">标记s Google Map</h4>
                                        <div id="gmaps-markers" class="gmaps"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">街景 Panoramas Google Map</h4>
                                        <div id="panorama" class="gmaps"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Google 地图类型</h4>
                                        <div id="gmaps-types" class="gmaps"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Ultra Light with Labels</h4>
                                        <div id="ultra-light" class="gmaps"></div>
                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                            <h4 class="header-title mb-3">Dark</h4>
                                        <div id="dark" class="gmaps"></div>
                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->