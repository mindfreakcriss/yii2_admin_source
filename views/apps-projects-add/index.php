<?php
$this->registerJsFile('/admin/js/ui/component.fileupload.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">项目</a></li>
                                            <li class="breadcrumb-item active">创建项目</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">创建项目</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="mb-3">
                                                    <label for="projectname" class="form-label">名称</label>
                                                    <input type="text" id="projectname" class="form-control" placeholder="输入项目名称">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="project-overview" class="form-label">概述</label>
                                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="输入项目简介..."></textarea>
                                                </div>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker1">
                                                    <label class="form-label">开始日期</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker1" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="project-budget" class="form-label">预算</label>
                                                    <input type="text" id="project-budget" class="form-control" placeholder="输入项目预算">
                                                </div>

                                                <div class="mb-0">
                                                    <label for="project-overview" class="form-label">团队成员</label>
                                                    
                                                    <select class="form-control select2" data-toggle="select2">
                                                        <option>选择</option>
                                                        <option value="AZ">Mary Scott</option>
                                                        <option value="CO">Holly Campbell</option>
                                                        <option value="ID">Beatrice Mills</option>
                                                        <option value="MT">Melinda Gills</option>
                                                        <option value="NE">Linda Garza</option>
                                                        <option value="NM">Randy Ortez</option>
                                                        <option value="ND">Lorene Block</option>
                                                        <option value="UT">Mike Baker</option>
                                                    </select>

                                                    <div class="mt-2" id="tooltip-container">
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                                            <img src="/admin/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                                            <img src="/admin/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                                            <img src="/admin/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
            
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Lorene Block" class="d-inline-block">
                                                            <img src="/admin/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                
                                                        <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mike Baker" class="d-inline-block">
                                                            <img src="/admin/images/users/avatar-5.jpg" class="rounded-circle avatar-xs" alt="friend">
                                                        </a>
                                                    </div>
        
                                                </div>

                                            </div> <!-- end col-->

                                            <div class="col-xl-6">
                                                <div class="mb-3 mt-3 mt-xl-0">
                                                    <label for="projectname" class="mb-0">头像</label>
                                                    <p class="text-muted font-14">推荐缩略图尺寸 800x400 (像素)。</p>

                                                    <form action="https://coderthemes.com/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                        data-upload-preview-template="#uploadPreviewTemplate">
                                                        <div class="fallback">
                                                            <input name="file" type="file" />
                                                        </div>

                                                        <div class="dz-message needsclick">
                                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                                            <h4>拖放文件或点击上传</h4>
                                                        </div>
                                                    </form>

                                                    <!-- Preview -->
                                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                                    <!-- file preview template -->
                                                    <div class="d-none" id="uploadPreviewTemplate">
                                                        <div class="card mt-1 mb-0 shadow-none border">
                                                            <div class="p-2">
                                                                <div class="row align-items-center">
                                                                    <div class="col-auto">
                                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                                    </div>
                                                                    <div class="col ps-0">
                                                                        <a href="javascript:void(0);" class="text-muted fw-bold" data-dz-name></a>
                                                                        <p class="mb-0" data-dz-size></p>
                                                                    </div>
                                                                    <div class="col-auto">
                                                                        <!-- Button -->
                                                                        <a href="#" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                                            <i class="dripicons-cross"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end file preview template -->
                                                </div>

                                                <!-- Date View -->
                                                <div class="mb-3 position-relative" id="datepicker2">
                                                    <label class="form-label">截止日期</label>
                                                    <input type="text" class="form-control" data-provide="datepicker" data-date-container="#datepicker2" data-date-format="d-M-yyyy" data-date-autoclose="true">
                                                </div>
                                            </div> <!-- end col-->
                                        </div>
                                        <!-- end row -->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->