<?php 
$this->registerJsFile('/admin/js/pages/demo.crm-dashboard.js', ['depends' => 'app\assets\AdminAsset']);
?>
<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">页面</a></li>
                                            <li class="breadcrumb-item active">预加载</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">预加载</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="已发送广告">已发送广告</h5>
                                                <h3 class="my-2 py-1">9,184</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
        
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="新线索">新线索</h5>
                                                <h3 class="my-2 py-1">3,254</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="new-leads-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="商机">商机</h5>
                                                <h3 class="my-2 py-1">861</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="deals-chart" data-colors="#727cf5"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="预定收入">预定收入</h5>
                                                <h3 class="my-2 py-1">$253k</h3>
                                                <p class="mb-0 text-muted">
                                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                                </p>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-1">
                                            <h4 class="header-title">广告活动</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">昨天</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">上周</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">上月</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="dash-campaigns-chart" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>

                                        <div class="row text-center mt-3">
                                            <div class="col-sm-4">
                                                <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>6,510</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> 总发送</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>3,487</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> 已到达</p>
                                            </div>
                                            <div class="col-sm-4">
                                                <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                                                <h3 class="fw-normal mt-3">
                                                    <span>1,568</span>
                                                </h3>
                                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> 已打开</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-lg-7">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">收入</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">今天</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">昨天</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">上周</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">上月</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="chart-content-bg">
                                            <div class="row text-center">
                                                <div class="col-sm-6">
                                                    <p class="text-muted mb-0 mt-3">本月</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <span>$42,025</span>
                                                    </h2>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="text-muted mb-0 mt-3">上月</p>
                                                    <h2 class="fw-normal mb-3">
                                                        <span>$74,651</span>
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>

                                        <div dir="ltr">
                                            <div id="dash-revenue-chart" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                                        </div>

                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->


                        <div class="row">
                            <div class="col-xl-4 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h4 class="header-title">最佳表现</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">设置</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">操作</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>用户</th>
                                                        <th>线索</th>
                                                        <th>商机</th>
                                                        <th>任务</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Jeremy Young</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>187</td>
                                                        <td>154</td>
                                                        <td>49</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Thomas Krueger</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>235</td>
                                                        <td>127</td>
                                                        <td>83</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Pete Burdine</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>365</td>
                                                        <td>148</td>
                                                        <td>62</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Mary Nelson</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>753</td>
                                                        <td>159</td>
                                                        <td>258</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5 class="font-15 mb-1 fw-normal">Kevin Grove</h5>
                                                            <span class="text-muted font-13">Senior Sales Executive</span>
                                                        </td>
                                                        <td>458</td>
                                                        <td>126</td>
                                                        <td>73</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col-->

                            <div class="col-xl-4 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">最近线索</h4>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">设置</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">操作</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-2.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">冷线索</span>
                                                <h5 class="mt-0 mb-1">Risa Pearson</h5>
                                                <span class="font-13">richard.john@mail.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-3.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-danger-lighten float-end">丢失线索</span>
                                                <h5 class="mt-0 mb-1">Margaret D. Evans</h5>
                                                <span class="font-13">margaret.evans@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-4.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">赢单线索</span>
                                                <h5 class="mt-0 mb-1">Bryan J. Luellen</h5>
                                                <span class="font-13">bryuellen@dayrep.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-5.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">冷线索</span>
                                                <h5 class="mt-0 mb-1">Kathryn S. Collier</h5>
                                                <span class="font-13">collier@jourrapide.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-1.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-warning-lighten float-end">冷线索</span>
                                                <h5 class="mt-0 mb-1">Timothy Kauper</h5>
                                                <span class="font-13">thykauper@rhyta.com</span>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-3">
                                            <img class="me-3 rounded-circle" src="/admin/images/users/avatar-6.jpg" width="40" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <span class="badge badge-success-lighten float-end">赢单线索</span>
                                                <h5 class="mt-0 mb-1">Zara Raws</h5>
                                                <span class="font-13">austin@dayrep.com</span>
                                            </div>
                                        </div>
                                           
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col -->  
                            
                            <div class="col-xl-4 col-lg-6">
                                <div class="card cta-box bg-primary text-white">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-center">
                                            <div class="w-100 overflow-hidden">
                                                <h2 class="mt-0"><i class="mdi mdi-bullhorn-outline"></i>&nbsp;</h2>
                                                <h3 class="m-0 fw-normal cta-box-title">提升您的<b>广告活动</b>以获得更好的推广效果 <i class="mdi mdi-arrow-right"></i></h3>
                                            </div>
                                            <img class="ms-3" src="/admin/images/email-campaign.svg" width="120" alt="Generic placeholder image">
                                        </div>
                                    </div>
                                    <!-- end card-body -->
                                </div>
                                <!-- end card-->

                                <!-- Todo-->
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="header-title">待办事项</h4>
                                            <div class="dropdown float-end">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">设置</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">操作</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="todoapp">
                                        <div class="card-body py-0" data-simplebar style="max-height: 231px">
                                            <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                                        </div>
                                    </div> <!-- end .todoapp-->
                                </div> <!-- end card-->

                            </div>
                            <!-- end col -->  
                        </div>
                        <!-- end row-->