<?php
$this->registerJsFile('/admin/js/pages/demo.project-detail.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">项目</a></li>
                                            <li class="breadcrumb-item active">项目详情</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">项目详情</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xxl-8 col-lg-6">
                                <!-- project card -->
                                <div class="card d-block">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h3 class="">App design and development</h3>
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="dripicons-dots-3"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>编辑</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>删除</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>邀请</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>退出</a>
                                                </div>
                                            </div>
                                            <!-- project title-->
                                        </div>
                                        <div class="badge bg-secondary text-light mb-3">进行中</div>

                                        <h5>项目概述：</h5>

                                        <p class="text-muted mb-2">
                                            With supporting text below as a natural lead-in to additional contenposuere erat a ante. Voluptates, illo, iste itaque voluptas
                                            corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores libero voluptas quod perferendis! Voluptate,
                                            quod illo rerum? Lorem ipsum dolor sit amet.
                                        </p>

                                        <p class="text-muted mb-4">
                                            Voluptates, illo, iste itaque voluptas corrupti ratione reprehenderit magni similique? Tempore, quos delectus asperiores
                                            libero voluptas quod perferendis! Voluptate, quod illo rerum? Lorem ipsum dolor sit amet. With supporting text below
                                            as a natural lead-in to additional contenposuere erat a ante.
                                        </p>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>开始日期</h5>
                                                    <p>17 March 2018 <small class="text-muted">1:00 PM</small></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>结束日期</h5>
                                                    <p>22 December 2018 <small class="text-muted">1:00 PM</small></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-4">
                                                    <h5>预算</h5>
                                                    <p>$15,800</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="tooltip-container">
                                            <h5>团队成员：</h5>
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-6.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-7.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-8.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>

                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
    
                                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                                <img src="/admin/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                                            </a>
                                        </div>

                                    </div> <!-- end card-body-->
                                    
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 mb-3">评论 (258)</h4>

                                        <textarea class="form-control form-control-light mb-2" placeholder="写消息" id="example-textarea" rows="3"></textarea>
                                        <div class="text-end">
                                            <div class="btn-group mb-2">
                                                <button type="button" class="btn btn-link btn-sm text-muted font-18"><i class="dripicons-paperclip"></i></button>
                                            </div>
                                            <div class="btn-group mb-2 ms-2">
                                                <button type="button" class="btn btn-primary btn-sm">提交</button>
                                            </div>
                                        </div>

                                        <div class="d-flex align-items-start mt-2">
                                            <img class="me-3 avatar-sm rounded-circle" src="/admin/images/users/avatar-3.jpg" alt="Generic placeholder image">
                                            <div class="w-100 overflow-hidden">
                                                <h5 class="mt-0">Jeremy Tomlinson</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                                                in faucibus.
                                        
                                                <div class="d-flex align-items-start mt-3">
                                                    <a class="pe-3" href="#">
                                                        <img src="/admin/images/users/avatar-4.jpg" class="avatar-sm rounded-circle" alt="Generic placeholder image">
                                                    </a>
                                                    <div class="w-100 overflow-hidden">
                                                        <h5 class="mt-0">Kathleen Thomas</h5>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                        vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                                        felis in faucibus.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center mt-2">
                                            <a href="javascript:void(0);" class="text-danger">加载更多 </a>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-lg-6 col-xxl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">进度</h5>
                                        <div dir="ltr">
                                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                                <canvas id="line-chart-example"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">文件</h5>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title rounded">
                                                                .ZIP
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">criss-admin-design.zip</a>
                                                        <p class="mb-0">2.3 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-1 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img src="/admin/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image" />
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                                        <p class="mb-0">3.25 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar-sm">
                                                            <span class="avatar-title bg-secondary text-light rounded">
                                                                .MP4
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col ps-0">
                                                        <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                                        <p class="mb-0">7.05 MB</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                                            <i class="dripicons-download"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->