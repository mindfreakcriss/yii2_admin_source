<?php
$this->registerJsFile('/admin/js/pages/demo.calendar.js', ['depends' => 'app\assets\AdminAsset']);
?>

<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">应用</a></li>
                                        <li class="breadcrumb-item active">日历</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">日历</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="d-grid">
                                                <button class="btn btn-lg font-16 btn-danger" id="btn-new-event"><i
                                                        class="mdi mdi-plus-circle-outline"></i> 新建事件</button>
                                            </div>
                                            <div id="external-events" class="m-t-20">
                                                <br />
                                                <p class="text-muted">拖放事件或点击日历</p>
                                                <div class="external-event bg-success-lighten text-success" data-class="bg-success"><i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>新主题发布</div>
                                                <div class="external-event bg-info-lighten text-info" data-class="bg-info"><i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>我的事件</div>
                                                <div class="external-event bg-warning-lighten text-warning" data-class="bg-warning"><i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>与经理会面</div>
                                                <div class="external-event bg-danger-lighten text-danger" data-class="bg-danger"><i class="mdi mdi-checkbox-blank-circle me-2 vertical-middle"></i>创建新主题</div>
                                            </div>

                                            <div class="mt-5 d-none d-xl-block">
                                                <h5 class="text-center">使用说明</h5>
                                            
                                                <ul class="ps-3">
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                                                    </li>
                                                    <li class="text-muted mb-3">
                                                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                                                    </li>
                                                </ul>
                                            </div>

                                        </div> <!-- end col-->

                                        <div class="col-lg-9">
                                            <div class="mt-4 mt-lg-0">
                                                <div id="calendar"></div>
                                            </div>
                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->

                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                            <div class="modal-header py-3 px-4 border-bottom-0">
                                                <h5 class="modal-title" id="modal-title">事件</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body px-4 pb-4 pt-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="control-label form-label">事件名称</label>
                                                            <input class="form-control" placeholder="输入事件名称" type="text" name="title" id="event-title" required />
                                                            <div class="invalid-feedback">请输入有效的事件名称</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="control-label form-label">分类</label>
                                                            <select class="form-select" name="category" id="event-category" required>
                                                                <option value="bg-danger" selected>危险</option>
                                                                <option value="bg-success">成功</option>
                                                                <option value="bg-primary">主要</option>
                                                                <option value="bg-info">信息</option>
                                                                <option value="bg-dark">深色</option>
                                                                <option value="bg-warning">警告</option>
                                                            </select>
                                                            <div class="invalid-feedback">请选择有效的事件分类</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="button" class="btn btn-danger" id="btn-delete-event">删除</button>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">关闭</button>
                                                        <button type="submit" class="btn btn-success" id="btn-save-event">保存</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- end modal-content-->
                                </div> <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->
                        </div>
                        <!-- end col-12 -->
                    </div> <!-- end row -->