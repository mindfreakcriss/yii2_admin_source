<?php
$this->registerJsFile('/admin/js/pages/demo.crm-management.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                            <li class="breadcrumb-item active">管理</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">管理</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="header-title">收入统计</h4>
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

                                        <div dir="ltr">
                                            <div id="revenue-statistics-chart" class="apex-charts mt-2" data-colors="#727cf5,#0acf97"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- End col -->

                            <div class="col-xxl-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> 编辑</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> 移除</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-primary-lighten text-primary rounded">
                                                                <i class="mdi mdi-shopping-outline font-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">电商应用设计 <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                                        <p class="text-muted mb-0">仪表盘、页面和认证页面</p>
                                                    </div>
                                                </div>

                                                <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">进行中</span>
                                                <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>145 Hours</span>

                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <p class="text-muted fw-semibold mb-1">任务</p>
                                                        <h3 class="my-0 text-muted fw-normal">16</h3>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <p class="text-muted fw-semibold mb-1">分配给</p>
                                                        <div class="multi-user">
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-1.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> 编辑</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> 移除</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-success-lighten text-success rounded">
                                                                <i class="mdi mdi-account-network font-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">客户电力系统 <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                                        <p class="text-muted mb-0">仪表盘、电力系统页面</p>
                                                    </div>
                                                </div>

                                                <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">进行中</span>
                                                <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>260 Hours</span>

                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <p class="text-muted fw-semibold mb-1">任务</p>
                                                        <h3 class="my-0 text-muted fw-normal">24</h3>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <p class="text-muted fw-semibold mb-1">分配给</p>
                                                        <div class="multi-user">
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> 编辑</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> 移除</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-info-lighten text-info rounded">
                                                                <i class="mdi mdi-page-layout-header font-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">着陆页设计 <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                                        <p class="text-muted mb-0">商业着陆页和认证页面</p>
                                                    </div>
                                                </div>

                                                <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">进行中</span>
                                                <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>48 Hours</span>

                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <p class="text-muted fw-semibold mb-1">任务</p>
                                                        <h3 class="my-0 text-muted fw-normal">05</h3>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <p class="text-muted fw-semibold mb-1">分配给</p>
                                                        <div class="multi-user">
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->

                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item"><i class=""></i><i class="uil uil-pen me-1"></i> 编辑</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="uil uil-trash me-1"></i> 移除</a>
                                                    </div>
                                                </div>

                                                <div class="d-flex align-items-center mb-3">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-danger-lighten text-danger rounded">
                                                                <i class="mdi mdi-monitor-dashboard font-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <a href="javascript:void(0);" class="font-16 fw-bold text-secondary">业务仪表盘设计 <i class="mdi mdi-checkbox-marked-circle-outline text-success"></i></a>
                                                        <p class="text-muted mb-0">仪表盘、组件页面</p>
                                                    </div>
                                                </div>

                                                <span class="badge badge-lg bg-light text-secondary rounded-pill me-1">进行中</span>
                                                <span class="font-12 fw-semibold text-muted"><i class="mdi mdi-clock-time-four me-1"></i>24 Hours</span>

                                                <div class="row mt-2">
                                                    <div class="col-6">
                                                        <p class="text-muted fw-semibold mb-1">任务</p>
                                                        <h3 class="my-0 text-muted fw-normal">08</h3>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <p class="text-muted fw-semibold mb-1">分配给</p>
                                                        <div class="multi-user">
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block">
                                                                <img src="/admin/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                            </a>
                                                            <a href="javascript:void(0);" class="d-inline-block ms-n2">
                                                                <div class="avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle">
                                                                        +2
                                                                    </span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                    
                                </div> <!-- end row -->
                            </div>
                        </div> <!-- End row -->

                        <h4 class="page-title mb-3">最近更新的客户</h4>

                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xxl-5">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle avatar-sm" src="/admin/images/users/avatar-1.jpg" alt="Avtar image">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Kevin Snowden</h5></a>                                                
                                                <p class="text-muted mb-0">Simple Solutions LLC</p>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>查看资料</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>屏蔽</a>
                                                    <!-- item-->
                                                    <div class="dropdown-divider my-1"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>移除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                                        <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 05 2022</h5>
                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="聊天"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle avatar-sm" src="/admin/images/users/avatar-2.jpg" alt="Avtar image">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Steven Embry</h5></a>                                                
                                                <p class="text-muted mb-0">Flipside Records LLC</p>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>查看资料</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>屏蔽</a>
                                                    <!-- item-->
                                                    <div class="dropdown-divider my-1"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>移除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                                        <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 10 2022</h5>
                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="聊天"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle avatar-sm" src="/admin/images/users/avatar-3.jpg" alt="Avtar image">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">James McDonald</h5></a>                                                
                                                <p class="text-muted mb-0">Vision Clinics LLC</p>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>查看资料</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>屏蔽</a>
                                                    <!-- item-->
                                                    <div class="dropdown-divider my-1"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>移除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                                        <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 12 2022</h5>
                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="聊天"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle avatar-sm" src="/admin/images/users/avatar-5.jpg" alt="Avtar image">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Ralph Wolford</h5></a>                                                
                                                <p class="text-muted mb-0">Merry-Go-Round LLC</p>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>查看资料</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>屏蔽</a>
                                                    <!-- item-->
                                                    <div class="dropdown-divider my-1"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>移除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                                        <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Jan 18 2022</h5>
                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="聊天"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img class="rounded-circle avatar-sm" src="/admin/images/users/avatar-6.jpg" alt="Avtar image">
                                            </div>
                                            <div class="flex-grow-1 ms-2">
                                                <a href="javascript:void(0);" class="text-secondary"><h5 class="my-1">Tomas Cooper</h5></a>                                                
                                                <p class="text-muted mb-0">Museum LLC</p>
                                            </div>

                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-account me-1"></i>查看资料</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-block-helper me-1"></i>屏蔽</a>
                                                    <!-- item-->
                                                    <div class="dropdown-divider my-1"></div>
                                                    <a href="javascript:void(0);" class="dropdown-item text-danger"><i class="mdi mdi-trash-can-outline me-1"></i>移除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center card-body py-2 border-top border-light">
                                        <h5 class="my-0 font-13 fw-semibold text-muted"><i class="mdi mdi-calendar me-1"></i> Feb 02 2022</h5>
                                        <a href="javascript:void(0);" class="text-muted" data-bs-toggle="modal" data-bs-target="#client-chat"><i class="uil uil-comment-alt-lines font-18" data-bs-toggle="tooltip" data-bs-placement="top" title="聊天"></i></a>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-xxl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="header-title">月度进度</h4>
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

                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">员工姓名</th>
                                                        <th scope="col">邮箱地址</th>
                                                        <th scope="col">项目名称</th>
                                                        <th scope="col">状态</th>
                                                        <th scope="col">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="/admin/images/users/avatar-1.jpg" alt="Avtar image" width="31">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Adam Baldwin
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>AdamNBaldwin@dayrep.com</td>
                                                        <td>Admin Dashboard</td>
                                                        <td>
                                                            <span class="badge bg-primary-lighten text-primary">处理中</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="编辑"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="删除"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="/admin/images/users/avatar-2.jpg" alt="Avtar image" width="31">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Peter Wallace
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>PeterGWallace@dayrep.com</td>
                                                        <td>Landing Page</td>
                                                        <td>
                                                            <span class="badge bg-success-lighten text-success">已完成</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="编辑"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="删除"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="/admin/images/users/avatar-3.jpg" alt="Avtar image" width="31">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Jacob Dunn
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>JacobEDunn@dayrep.com</td>
                                                        <td>Logo Design</td>
                                                        <td>
                                                            <span class="badge bg-warning-lighten text-warning">待处理</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="编辑"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="删除"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="/admin/images/users/avatar-4.jpg" alt="Avtar image" width="31">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Terry Adams
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>TerryCAdams@dayrep.com</td>
                                                        <td>Client Project</td>
                                                        <td>
                                                            <span class="badge bg-primary-lighten text-primary">处理中</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="编辑"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="删除"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="flex-shrink-0">
                                                                    <img class="rounded-circle" src="/admin/images/users/avatar-5.jpg" alt="Avtar image" width="31">
                                                                </div>
                                                                <div class="flex-grow-1 ms-2">
                                                                    Jason Stovall
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>JasonJStovall@armyspy.com</td>
                                                        <td>Figma Work</td>
                                                        <td>
                                                            <span class="badge bg-warning-lighten text-warning">待处理</span>
                                                        </td>
                                                        <td>
                                                            <a href="javascript:void(0);" class="font-18 text-info me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="编辑"><i class="uil uil-pen"></i></a>
                                                            <a href="javascript:void(0);" class="font-18 text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="删除"><i class="uil uil-trash"></i></a>
                                                        </td>
                                                    </tr> <!-- end tr -->
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xxl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="header-title">任务状态</h4>
                                            <div class="dropdown float-end">
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

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-file-edit widget-icon bg-primary-lighten text-primary"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="my-0 fw-semibold">进行中项目</h5>
                                                </div>
                                                <h5 class="my-0">145/160</h5>
                                            </div>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-account-multiple widget-icon bg-success-lighten text-success"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="my-0 fw-semibold">活跃客户</h5>
                                                </div>
                                                <h5 class="my-0">40/85</h5>
                                            </div>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 47%" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-account-multiple-plus widget-icon bg-danger-lighten text-danger"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="my-0 fw-semibold">新请求</h5>
                                                </div>
                                                <h5 class="my-0">68%</h5>
                                            </div>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="d-flex align-items-center mb-2">
                                                <div class="flex-shrink-0">
                                                    <i class="mdi mdi-emoticon-happy widget-icon bg-info-lighten text-info"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="my-0 fw-semibold">满意客户</h5>
                                                </div>
                                                <h5 class="my-0">48/50</h5>
                                            </div>
                                            <div class="progress" style="height: 6px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-md-6 col-xxl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h4 class="header-title">日历</h4>
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
                                    </div>
                                    <div class="card-body px-2 pb-2 pt-0">
                                        <div data-provide="datepicker-inline" data-date-today-highlight="true" class="calendar-widget"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>