<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">工具提示</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">工具提示</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Examples</h4>
                                        <p class="text-muted font-14">悬停在下方链接上查看工具提示。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-tooltips-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-tooltips-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-tooltips-preview">
                                                <p class="muted mb-0" id="tooltip-container">
                                                    Tight pants next level keffiyeh <a href="#" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" title="Default tooltip">you probably</a> haven't heard
                                                    of them. Photo booth beard raw denim letterpress vegan messenger bag
                                                    stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa
                                                    8-bit american apparel <a href="#" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" title="Another tooltip">have a</a> terry richardson
                                                    vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                                                    Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan
                                                    chambray. A really ironic artisan <a href="#" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" title="Another one here too">whatever
                                                    </a> keytar, scenester farm-to-table banksy Austin <a href="#" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred
                                                    raw denim single-origin coffee viral.
                                                </p>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="default-tooltips-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;p class=&quot;muted mb-0&quot; id=&quot;tooltip-container&quot;&gt;
                                                            Tight pants next level keffiyeh &lt;a href=&quot;#&quot; data-bs-container=&quot;#tooltip-container&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Default tooltip&quot;&gt;you probably&lt;/a&gt; haven't heard
                                                            of them. Photo booth beard raw denim letterpress vegan messenger bag
                                                            stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa
                                                            8-bit american apparel &lt;a href=&quot;#&quot; data-bs-container=&quot;#tooltip-container&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Another tooltip&quot;&gt;have a&lt;/a&gt; terry richardson
                                                            vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats.
                                                            Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan
                                                            chambray. A really ironic artisan &lt;a href=&quot;#&quot; data-bs-container=&quot;#tooltip-container&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Another one here too&quot;&gt;whatever
                                                            &lt;/a&gt; keytar, scenester farm-to-table banksy Austin &lt;a href=&quot;#&quot; data-bs-container=&quot;#tooltip-container&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;The last tip!&quot;&gt;twitter handle&lt;/a&gt; freegan cred
                                                            raw denim single-origin coffee viral.
                                                        &lt;/p&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">禁用元素</h4>
                                        <p class="text-muted font-14">带有 <code>disabled</code> 属性的元素不可交互，用户无法聚焦、悬停或点击来触发工具提示（或弹出框）。作为解决方法，您需要从包装的 <code>&lt;div&gt;</code> 或 <code>&lt;span&gt;</code> 触发工具提示，最好使用 <code>tabindex="0"</code> 使其可键盘聚焦，并覆盖禁用元素上的 <code>pointer-events</code>。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#disabled-tooltips-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#disabled-tooltips-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="disabled-tooltips-preview">
                                                <div id="tooltip-container1">
                                                    <span class="d-inline-block" tabindex="0" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" title="Disabled tooltip">
                                                        <button class="btn btn-primary" style="pointer-events: none;" type="button" disabled>Disabled button</button>
                                                    </span>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="disabled-tooltips-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;tooltip-container1&quot;&gt;
                                                            &lt;span class=&quot;d-inline-block&quot; tabindex=&quot;0&quot; data-bs-container=&quot;#tooltip-container1&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;Disabled tooltip&quot;&gt;
                                                                &lt;button class=&quot;btn btn-primary&quot; style=&quot;pointer-events: none;&quot; type=&quot;button&quot; disabled&gt;Disabled button&lt;/button&gt;
                                                            &lt;/span&gt;
                                                        &lt;/div&gt;
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
                                        <p class="text-muted font-14">悬停在下方按钮上查看四个方向的工具提示：上、右、下、左。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#four-tooltips-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#four-tooltips-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="four-tooltips-preview">
                                                <div class="button-list" id="tooltip-container2">
                                                    <button type="button" class="btn btn-info" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">Tooltip on top</button>
                                                    <button type="button" class="btn btn-info" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                                                    <button type="button" class="btn btn-info" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="left" title="Tooltip on left">Tooltip on left</button>
                                                    <button type="button" class="btn btn-info" data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">Tooltip on right</button>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="four-tooltips-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;tooltip-container2&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-container=&quot;#tooltip-container2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;Tooltip on top&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-container=&quot;#tooltip-container2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;bottom&quot; title=&quot;Tooltip on bottom&quot;&gt;Tooltip on bottom&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-container=&quot;#tooltip-container2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;left&quot; title=&quot;Tooltip on left&quot;&gt;Tooltip on left&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-container=&quot;#tooltip-container2&quot; data-bs-toggle=&quot;tooltip&quot; data-bs-placement=&quot;right&quot; title=&quot;Tooltip on right&quot;&gt;Tooltip on right&lt;/button&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">HTML 标签</h4>
                                        <p class="text-muted font-14">并添加自定义 HTML：</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#html-tooltips-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#html-tooltips-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="html-tooltips-preview">
                                                <div id="tooltip-container3">
                                                    <button type="button" class="btn btn-secondary" data-bs-container="#tooltip-container3" data-bs-toggle="tooltip"
                                                        data-bs-html="true" title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">
                                                        Tooltip with HTML
                                                    </button>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="html-tooltips-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div id=&quot;tooltip-container3&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-container=&quot;#tooltip-container3&quot; data-bs-toggle=&quot;tooltip&quot;
                                                                data-bs-html=&quot;true&quot; title=&quot;&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;&quot;&gt;
                                                                Tooltip with HTML
                                                            &lt;/button&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->