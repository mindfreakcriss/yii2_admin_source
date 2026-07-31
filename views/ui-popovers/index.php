<!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                        <li class="breadcrumb-item active">弹出框</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">弹出框</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">简单弹出框</h4>
                                    <p class="text-muted font-14">
                                        Popover 是一个组件，点击元素后显示一个包含内容的气泡框 - 类似于 tooltip，但可以包含更多内容。
                                    </p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#simple-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#simple-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="simple-popover-preview">
                                            <button type="button" class="btn btn-danger" data-bs-toggle="popover"
                                                title="Popover title"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                                data-bs-container="#simple-popover-preview">Click to toggle
                                                popover</button>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="simple-popover-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;popover&quot; title=&quot;Popover title&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot;&gt;Click to toggle popover&lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">下次点击时关闭</h4>
                                    <p class="text-muted font-14">使用 <code>focus</code> 触发器，在用户下次点击切换元素之外的其他元素时关闭弹出框。</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#dismiss-popover-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#dismiss-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="dismiss-popover-preview">
                                            <button type="button" tabindex="0" class="btn btn-success"
                                                data-bs-toggle="popover" data-bs-trigger="focus"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                                title="可关闭弹出框"
                                                data-bs-container="#dismiss-popover-preview">
                                                可关闭弹出框
                                            </button>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="dismiss-popover-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;focus&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;可关闭弹出框&quot;&gt;
                                                            可关闭弹出框
                                                        &lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">悬停</h4>
                                    <p class="text-muted font-14">使用属性 <code>data-bs-trigger="hover"</code>
                                        在悬停元素时显示弹出框。</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#hover-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#hover-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="hover-popover-preview">
                                            <button type="button" tabindex="0" class="btn btn-dark"
                                                data-bs-toggle="popover" data-bs-trigger="hover"
                                                data-bs-content="And here's some amazing content. It's very engaging. Right?"
                                                title="Ohh Wow !" data-bs-container="#hover-popover-preview">
                                                Please Hover Me
                                            </button>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="hover-popover-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;button type=&quot;button&quot; tabindex=&quot;0&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;popover&quot; data-bs-trigger=&quot;hover&quot; data-bs-content=&quot;And here's some amazing content. It's very engaging. Right?&quot; title=&quot;Ohh Wow !&quot;&gt;
                                                            Please Hover Me
                                                        &lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">四个方向</h4>
                                    <p class="text-muted font-14">有四个方向可选：上、右、下、左对齐。</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#extras-popover-preview" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#extras-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="extras-popover-preview">
                                            <div class="button-list">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="popover"
                                                    data-bs-placement="top"
                                                    data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                    title="" data-bs-container="#extras-popover-preview">
                                                    上方弹出
                                                </button>

                                                <button type="button" class="btn btn-primary"
                                                    data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                    data-bs-placement="bottom"
                                                    data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                    title="">
                                                    下方弹出
                                                </button>

                                                <button type="button" class="btn btn-primary"
                                                    data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                    data-bs-placement="right"
                                                    data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                    title="">
                                                    右侧弹出
                                                </button>

                                                <button type="button" class="btn btn-primary"
                                                    data-bs-container="#extras-popover-preview" data-bs-toggle="popover"
                                                    data-bs-placement="left"
                                                    data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."
                                                    title="Popover title">
                                                    左侧弹出
                                                </button>
                                            </div>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="extras-popover-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Top Position --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;top&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                            上方弹出
                                                        &lt;/button&gt;
                                                        
                                                        &lt;!-- Bottom Position --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;bottom&quot; data-bs-content=&quot;Vivamus
                                                        sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                            下方弹出
                                                        &lt;/button&gt;
                                                        
                                                        &lt;!-- Right Position --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;right&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;&quot;&gt;
                                                            右侧弹出
                                                        &lt;/button&gt;
                                                        
                                                        &lt;!-- Left Position --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-container=&quot;body&quot; data-bs-toggle=&quot;popover&quot; data-bs-placement=&quot;left&quot; data-bs-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot; title=&quot;Popover title&quot;&gt;
                                                            左侧弹出
                                                        &lt;/button&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">禁用元素</h4>
                                    <p class="text-muted font-14">带有 <code>disabled</code> 属性的元素不可交互，用户无法悬停或点击来触发弹出框（或 tooltip）。作为解决方法，您可以从包装的 <code>&lt;div&gt;</code> 或 <code>&lt;span&gt;</code> 触发弹出框，并覆盖禁用元素上的 <code>pointer-events</code>。</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#disabled-popover-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#disabled-popover-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="disabled-popover-preview">
                                            <span class="d-inline-block" data-bs-toggle="popover"
                                                data-bs-content="Disabled popover"
                                                data-bs-container="#disabled-popover-preview">
                                                <button class="btn btn-primary" style="pointer-events: none;"
                                                    type="button" disabled>Disabled button</button>
                                            </span>
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="disabled-popover-code">
                                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;span class=&quot;d-inline-block&quot; data-bs-toggle=&quot;popover&quot; data-bs-content=&quot;Disabled popover&quot;&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
                                                        &lt;/span&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body -->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->