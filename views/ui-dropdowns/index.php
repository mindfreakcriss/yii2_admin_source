<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">criss-admin</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">下拉菜单</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">下拉菜单</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">单按钮下拉菜单</h4>
                                        <p class="text-muted font-14">
                                            Any single <code
                                                >.btn</code> can be turned into a dropdown
                                            toggle with some markup changes. Here’s how you can put them to work
                                            with either <code>&lt;button&gt;</code>
                                            elements:
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#single-button-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#single-button-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="single-button-preview">
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                下拉按钮
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <a class="dropdown-item" href="#">操作</a>
                                                                <a class="dropdown-item" href="#">其他操作</a>
                                                                <a class="dropdown-item" href="#">其他选项</a>
                                                            </div>
                                                        </div>
                                                    </div>
    
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                下拉链接
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                                <a class="dropdown-item" href="#">操作</a>
                                                                <a class="dropdown-item" href="#">其他操作</a>
                                                                <a class="dropdown-item" href="#">其他选项</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="single-button-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default Drodown --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                下拉按钮
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Link with Dropdown --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;a class=&quot;btn btn-secondary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                下拉链接
                                                            &lt;/a&gt;
                                                            
                                                            &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">变体</h4>
                                        <p class="text-muted font-14">最好的部分是，您也可以使用任何按钮变体来实现：</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#variant-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#variant-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="variant-preview">
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">主要</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">次要</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">成功</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">信息</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">警告</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">危险</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
        
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="variant-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Light --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Light&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Secondary --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Secondary&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        
                                                        &lt;!-- Primary --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Primary&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Success --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Success&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Info --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Info&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Warning --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Warning&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Danger --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Danger&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Dark --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dark&lt;/button&gt;
                                                        &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                            &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">动画下拉菜单</h4>
                                        <p class="text-muted font-14">
                                                Add <code>.dropdown-menu-animated</code>
                                                to a <code>.dropdown-menu</code> to have animated dropdown menu.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#animated-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#animated-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active">
                                                <div class="dropdown btn-group">
                                                    <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="animated-preview">
                                                        动画下拉菜单
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-animated">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                    </div>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="animated-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;dropdown btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                动画下拉菜单
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu dropdown-menu-animated&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">向上弹出变体</h4>
                                        <p class="text-muted font-14">通过添加 <code>.dropup</code> 到父元素，在元素上方触发展开菜单。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropup-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropup-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropup-preview">
                                                <!-- Default dropup button -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">向上弹出</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
    
                                                <!-- 分割向上弹出 button -->
                                                <div class="btn-group dropup">
                                                    <button type="button" class="btn btn-light">
                                                        分割向上弹出
                                                    </button>
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropup-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropup button --&gt;
                                                        &lt;div class=&quot;btn-group dropup&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;向上弹出&lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- 分割向上弹出 button --&gt;
                                                        &lt;div class=&quot;btn-group dropup&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;
                                                                分割向上弹出
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;切换下拉&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">向右弹出变体</h4>
                                        <p class="text-muted font-14">通过添加 <code>.dropend</code> 到父元素，在元素右侧触发展开菜单。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropend-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropend-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropend-preview">
                                                <!-- Default dropend button -->
                                                <div class="btn-group mb-2 dropend">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        向右弹出
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
    
                                                <!-- Split dropend button -->
                                                <div class="btn-group mb-2 dropend">
                                                    <button type="button" class="btn btn-primary">
                                                        Split 向右弹出
                                                    </button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle-split dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换右弹</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                          
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropend-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropend button --&gt;
                                                        &lt;div class=&quot;btn-group mb-2 dropend&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                向右弹出
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- Split dropend button --&gt;
                                                        &lt;div class=&quot;btn-group mb-2 dropend&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary &quot;&gt;
                                                                Split 向右弹出
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle-split dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;切换右弹&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">禁用项</h4>
                                        <p class="text-muted font-14">在菜单项中添加 <code>.disabled</code> 来<strong>设置禁用样式</strong>。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#disabled-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#disabled-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="disabled-preview">
                                                <!-- 已禁用 -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        已禁用
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">常规链接</a>
                                                        <a class="dropdown-item disabled" href="#" tabindex="-1" aria-disabled="true">已禁用 link</a>
                                                        <a class="dropdown-item" href="#">另一个链接</a>
                                                    </div>
                                                </div>
                                          
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="disabled-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 已禁用 --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                已禁用
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;常规链接&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item disabled&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;已禁用 link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;另一个链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">文本</h4>
                                        <p class="text-muted font-14">在下拉菜单中放置任意文本，并使用间距工具。注意，您可能需要添加额外的尺寸样式来限制菜单宽度。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#text-dropdown-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#text-dropdown-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="text-dropdown-preview">
                                                <!-- Text Example -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary   dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        文本下拉
                                                    </button>
                                                    <div class="dropdown-menu p-3 text-muted" style="max-width: 200px;">
                                                        <p>
                                                            Some example text that's free-flowing within the dropdown menu.
                                                        </p>
                                                        <p class="mb-0">
                                                            And this is more example text.
                                                        </p>
                                                    </div>
                                                </div>
                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="text-dropdown-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Text Example --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary   dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                文本下拉
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu p-3 text-muted&quot; style=&quot;max-width: 200px;&quot;&gt;
                                                                &lt;p&gt;
                                                                    Some example text that's free-flowing within the dropdown menu.
                                                                &lt;/p&gt;
                                                                &lt;p class=&quot;mb-0&quot;&gt;
                                                                    And this is more example text.
                                                                &lt;/p&gt;
                                                            &lt;/div&gt;
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
                                        <h4 class="header-title">菜单对齐</h4>
                                        <p class="text-muted font-14">
                                            Add <code>.dropdown-menu-end</code>
                                            to a <code>.dropdown-menu</code> to right
                                            align the dropdown menu.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#menu-alignment-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#menu-alignment-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="menu-alignment-preview">
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        右对齐菜单
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="menu-alignment-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                右对齐菜单
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">分割按钮下拉菜单</h4>
                                        <p class="text-muted font-14">
                                            Similarly, create split button dropdowns with virtually the same markup as single button dropdowns, but with the addition of <code>.dropdown-toggle-split</code> for proper spacing around the dropdown caret.
                                        </p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#split-button-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#split-button-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="split-button-preview">
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-primary">Primary</button>
                                                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-light">Secondary</button>
                                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-success">Success</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-info">Info</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-warning">Warning</button>
                                                    <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                                <div class="btn-group mb-2">
                                                    <button type="button" class="btn btn-danger">Danger</button>
                                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div><!-- /btn-group -->
                                           
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="split-button-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;切换下拉&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;&lt;!-- /btn-group --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">尺寸</h4>
                                        <p class="text-muted font-14">按钮下拉菜单适用于所有尺寸的按钮，包括默认和分割下拉按钮。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#sizing-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sizing-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="sizing-preview">
                                                <!-- 大按钮 groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        大按钮
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-lg" type="button">
                                                        大按钮
                                                    </button>
                                                    <button type="button" class="btn btn-lg btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
    
                                                <!-- 小按钮 groups (default and split) -->
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        小按钮
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-light btn-sm" type="button">
                                                        小按钮
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="visually-hidden">切换下拉</span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                       
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="sizing-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- 大按钮 groups (default and split) --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-lg dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                大按钮
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-lg&quot; type=&quot;button&quot;&gt;
                                                                大按钮
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-lg btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;切换下拉&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
            
                                                        &lt;!-- 小按钮 groups (default and split) --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-sm dropdown-toggle&quot; type=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                小按钮
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button class=&quot;btn btn-light btn-sm&quot; type=&quot;button&quot;&gt;
                                                                小按钮
                                                            &lt;/button&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-sm btn-light dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                &lt;span class=&quot;visually-hidden&quot;&gt;切换下拉&lt;/span&gt;
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">向左弹出变体</h4>
                                        <p class="text-muted font-14">通过添加 <code>.dropleft</code> 到父元素，在元素左侧触发展开菜单。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropstart-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropstart-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropstart-preview">
                                                <!-- Default dropstart button -->
                                                <div class="btn-group dropstart ">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Dropstart 
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                        <a class="dropdown-item" href="#">其他选项</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">分离链接</a>
                                                    </div>
                                                </div>
                                                
                                                <!-- Split dropstart button -->
                                                <div class="btn-group">
                                                    <div class="btn-group dropstart" role="group">
                                                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <span class="visually-hidden">Toggle Dropstart</span>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="#">操作</a>
                                                            <a class="dropdown-item" href="#">其他操作</a>
                                                            <a class="dropdown-item" href="#">其他选项</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#">分离链接</a>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary">
                                                        Split dropstart
                                                    </button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropstart-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Default dropstart button --&gt;
                                                        &lt;div class=&quot;btn-group dropstart&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Dropstart
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                        
                                                        &lt;!-- Split dropstart button --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;div class=&quot;btn-group dropstart&quot; role=&quot;group&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle dropdown-toggle-split&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot;
                                                                    aria-expanded=&quot;false&quot;&gt;
                                                                    &lt;span class=&quot;visually-hidden&quot;&gt;Toggle Dropstart&lt;/span&gt;
                                                                &lt;/button&gt;
                                                                &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他选项&lt;/a&gt;
                                                                    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;分离链接&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;
                                                                Split dropleft
                                                            &lt;/button&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">活跃项</h4>
                                        <p class="text-muted font-14">在下拉菜单项中添加 <code>.active</code> 来<strong>设置活跃样式</strong>。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#active-item-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#active-item-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="active-item-preview">
                                                <!-- Active Item -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Active Item
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">常规链接</a>
                                                        <a class="dropdown-item active" href="#">Active link</a>
                                                        <a class="dropdown-item" href="#">另一个链接</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="active-item-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Active Item --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Active Menu
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;常规链接&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item active&quot; href=&quot;#&quot;&gt;Active link&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;另一个链接&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">标题</h4>
                                        <p class="text-muted font-14">添加标题来标记下拉菜单中的操作分组。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#headers-item-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#headers-item-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="headers-item-preview">
                                                <!-- Header Item -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Header
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <h6 class="dropdown-header">Dropdown header</h6>
                                                        <a class="dropdown-item" href="#">操作</a>
                                                        <a class="dropdown-item" href="#">其他操作</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="headers-item-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Header Item --&gt;
                                                        &lt;div class=&quot;btn-group&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Header
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;h6 class=&quot;dropdown-header&quot;&gt;Dropdown header&lt;/h6&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;操作&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;其他操作&lt;/a&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">表单</h4>
                                        <p class="text-muted font-14">在下拉菜单中放置表单，或将其制作为下拉菜单，使用边距或填充工具来获得所需的负空间。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dropdown-form-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dropdown-form-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dropdown-form-preview">
                                                <!-- Forms -->
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Form
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <form class="px-4 py-3">
                                                            <div class="mb-3">
                                                                <label for="exampleDropdownFormEmail1" class="form-label">邮箱地址</label>
                                                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="exampleDropdownFormPassword1" class="form-label">密码</label>
                                                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="密码">
                                                            </div>
                                                            <div class="mb-2">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                                                    <label class="form-check-label" for="dropdownCheck">
                                                                        记住我
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">登录</button>
                                                        </form>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="#">新用户？注册</a>
                                                        <a class="dropdown-item" href="#">忘记密码？</a>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="dropdown-form-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Forms --&gt;
                                                        &lt;div class=&quot;dropdown&quot;&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary dropdown-toggle&quot; data-bs-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
                                                                Form
                                                            &lt;/button&gt;
                                                            &lt;div class=&quot;dropdown-menu&quot;&gt;
                                                                &lt;form class=&quot;px-4 py-3&quot;&gt;
                                                                    &lt;div class=&quot;mb-3&quot;&gt;
                                                                        &lt;label for=&quot;exampleDropdownFormEmail1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                                        &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormEmail1&quot; placeholder=&quot;email@example.com&quot;&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;mb-3&quot;&gt;
                                                                        &lt;label for=&quot;exampleDropdownFormPassword1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                        &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleDropdownFormPassword1&quot; placeholder=&quot;Password&quot;&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;mb-3&quot;&gt;
                                                                        &lt;div class=&quot;form-check&quot;&gt;
                                                                            &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;dropdownCheck&quot;&gt;
                                                                            &lt;label class=&quot;form-check-label&quot; for=&quot;dropdownCheck&quot;&gt;
                                                                                Remember me
                                                                            &lt;/label&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Sign in&lt;/button&gt;
                                                                &lt;/form&gt;
                                                                &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;New around here? Sign up&lt;/a&gt;
                                                                &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Forgot password?&lt;/a&gt;
                                                            &lt;/div&gt;
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