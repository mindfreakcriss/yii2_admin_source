<?php
$this->registerJsFile('/admin/js/pages/demo.toastr.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                        <li class="breadcrumb-item active">通知</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">通知</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Bootstrap 提示通知</h4>
                                    <p class="text-muted font-14">通过 toast 向访客推送通知，这是一种轻量且易于自定义的提示消息。</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                预览
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                代码
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="bootstrap-toasts-preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">基本</h5>
                                                    <p class="text-muted font-14">Toasts 可以根据需要灵活使用，所需标记很少。至少需要一个元素来包含您的消息内容，并强烈建议添加关闭按钮。</p>
                                                    <div class="p-3">

                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="/admin/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">criss-admin</strong>
                                                                <small>11 mins ago</small>
                                                                <button type="button" class="ms-2 mb-1 btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                        <!--end toast-->

                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">半透明</h5>
                                                    <p class="text-muted font-14">Toasts 也略微半透明，因此可以融入它们所覆盖的任何内容。对于支持 backdrop-filter CSS 属性的浏览器，我们还会尝试模糊 toast 下方的元素。</p>

                                                    <div class="p-3 bg-light">
                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="/admin/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">criss-admin</strong>
                                                                <small>11 mins ago</small>
                                                                <button type="button" class="ms-2 mb-1 btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                        <!--end toast-->
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->

                                            <div class="row">
                                                <div class="col-md-6 mt-4">
                                                    <h5 class="mb-2">堆叠</h5>
                                                    <p class="text-muted font-14">当有多个 toasts 时，默认会以可读的方式垂直堆叠它们。</p>
                                                    <div class="p-3">
                                                        <div aria-live="polite" aria-atomic="true"
                                                            style="position: relative; min-height: 200px;">
                                                            <!-- Position it -->
                                                            <div class="toast-container"
                                                                style="position: absolute; top: 0; right: 0;">

                                                                <!-- Then put toasts within -->
                                                                <div class="toast fade show" role="alert"
                                                                    aria-live="assertive" aria-atomic="true">
                                                                    <div class="toast-header">
                                                                        <img src="/admin/images/logo_sm_dark.png"
                                                                            alt="brand-logo" height="12" class="me-1" />
                                                                        <strong class="me-auto">criss-admin</strong>
                                                                        <small class="text-muted">just now</small>
                                                                        <button type="button"
                                                                            class="ms-2 mb-1 btn-close"
                                                                            data-bs-dismiss="toast"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        See? Just like this.
                                                                    </div>
                                                                </div>
                                                                <!--end toast-->

                                                                <div class="toast fade show" role="alert"
                                                                    aria-live="assertive" aria-atomic="true">
                                                                    <div class="toast-header">
                                                                        <img src="/admin/images/logo_sm_dark.png"
                                                                            alt="brand-logo" height="12" class="me-1" />
                                                                        <strong class="me-auto">criss-admin</strong>
                                                                        <small class="text-muted">2 seconds ago</small>
                                                                        <button type="button"
                                                                            class="ms-2 mb-1 btn-close"
                                                                            data-bs-dismiss="toast"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Heads up, toasts will stack automatically
                                                                    </div>
                                                                </div>
                                                                <!--end toast-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-6 mt-4">
                                                    <h5 class="mb-2">位置</h5>
                                                    <p class="text-muted font-14">使用自定义 CSS 将 toasts 放置在任何需要的位置。右上角常用于通知，顶部中间也是如此。如果一次只显示一个 toast，可以将定位样式直接放在 <code>.toast</code> 上。</p>
                                                    <div class="p-3">
                                                        <div aria-live="polite" aria-atomic="true"
                                                            class="d-flex justify-content-center align-items-center"
                                                            style="min-height: 200px;">

                                                            <!-- Then put toasts within -->
                                                            <div class="toast fade show" role="alert"
                                                                aria-live="assertive" aria-atomic="true"
                                                                data-bs-toggle="toast">
                                                                <div class="toast-header">
                                                                    <img src="/admin/images/logo_sm_dark.png"
                                                                        alt="brand-logo" height="12" class="me-1" />
                                                                    <strong class="me-auto">criss-admin</strong>
                                                                    <small>11 mins ago</small>
                                                                    <button type="button" class="ms-2 mb-1 btn-close"
                                                                        data-bs-dismiss="toast"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                            <!--end toast-->
                                                        </div>
                                                    </div>