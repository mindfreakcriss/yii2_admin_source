<?php
$this->registerJsFile('/admin/js/pages/demo.dashboard-analytics.js', ['depends' => 'app\assets\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">分析</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-users-alt float-end'></i>
                                        <h6 class="text-uppercase mt-0">活跃用户</h6>
                                        <h2 class="my-2" id="active-users-count">121</h2>
                                        <script>
                                            document.getElementById('active-users-count').innerText = Math.floor(30 + Math.random() * 100);
                                        </script>
                                        <p class="mb-0 text-muted">
                                            <span class="text-nowrap">较上月</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-window-restore float-end'></i>
                                        <h6 class="text-uppercase mt-0">新订单</h6>
                                        <h2 class="my-2" id="new-orders-count">341</h2>
                                        <script>
                                            document.getElementById('new-orders-count').innerText = Math.floor(100 + Math.random() * 1000);
                                        </script>
                                        <p class="mb-0 text-muted">
                                            <span class="text-nowrap">较上月</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-window float-end'></i>
                                        <h6 class="text-uppercase mt-0">新用户</h6>
                                        <h2 class="my-2" id="new-users-count">199</h2>
                                        <script>
                                            document.getElementById('new-users-count').innerText = Math.floor(10 + Math.random() * 100);
                                        </script>
                                        <p class="mb-0 text-muted">
                                            <span class="text-nowrap">较上月</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-3 col-lg-4">
                                <div class="card tilebox-one">
                                    <div class="card-body">
                                        <i class='uil uil-chart float-end'></i>
                                        <h6 class="text-uppercase mt-0">总销售额</h6>
                                        <h2 class="my-2" id="total-sales-count">542</h2>
                                        <script>
                                            document.getElementById('total-sales-count').innerText = Math.floor(200 + Math.random() * 1000);
                                        </script>
                                        <p class="mb-0 text-muted">
                                            <span class="text-nowrap">较上月</span>
                                        </p>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">会话概览</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本周</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本月</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">今年</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div dir="ltr">
                                            <div id="sessions-overview" class="apex-charts" data-colors="#727cf5,#e3eaef"></div>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">访客</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本周</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本月</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">今年</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="visitors-chart" class="apex-charts" data-colors="#727cf5,#0acf97"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">收入明细</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本周</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本月</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">今年</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="revenue-breakdown" class="apex-charts" data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">目标</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本周</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">本月</a>
                                                    <a href="javascript:void(0);" class="dropdown-item">今年</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="targets-chart" class="apex-charts" data-colors="#727cf5,#0acf97"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->