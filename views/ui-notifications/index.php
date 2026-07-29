<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                        <li class="breadcrumb-item active">Notifications</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Notifications</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Bootstrap Toasts</h4>
                                    <p class="text-muted font-14">Push notifications to your visitors with a toast, a
                                        lightweight and easily customizable alert message.</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="bootstrap-toasts-preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">Basic</h5>
                                                    <p class="text-muted font-14">Toasts are as flexible as you need and
                                                        have very little required markup. At a minimum, we
                                                        require a single element to contain your “toasted” content and
                                                        strongly encourage a dismiss button.</p>
                                                    <div class="p-3">

                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="/admin/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">Hyper</strong>
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
                                                    <h5 class="mb-2">Translucent</h5>
                                                    <p class="text-muted font-14">Toasts are slightly translucent, too,
                                                        so they blend over whatever they might appear over.
                                                        For browsers that support the backdrop-filter CSS property,
                                                        we’ll also attempt to blur the elements under a toast.</p>

                                                    <div class="p-3 bg-light">
                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="/admin/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">Hyper</strong>
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
                                                    <h5 class="mb-2">Stacking</h5>
                                                    <p class="text-muted font-14">When you have multiple toasts, we
                                                        default to vertiaclly stacking them in a readable manner.</p>
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
                                                                        <strong class="me-auto">Hyper</strong>
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
                                                                        <strong class="me-auto">Hyper</strong>
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
                                                    <h5 class="mb-2">Placement</h5>
                                                    <p class="text-muted font-14">Place toasts with custom CSS as you
                                                        need them. The top right is often used for
                                                        notifications, as is the top middle. If you’re only ever going
                                                        to show one toast at a time, put the positioning
                                                        styles right on the <code>.toast</code>.</p>
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
                                                                    <strong class="me-auto">Hyper</strong>
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