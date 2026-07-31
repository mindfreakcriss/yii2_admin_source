<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">分页</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">分页</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">默认分页</h4>
                                        <p class="text-muted font-14">受 Rdio 启发的简单分页，适用于应用和搜索结果。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-pagination-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-pagination-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-pagination-preview">
                                                <nav>
                                                    <ul class="pagination mb-0">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="上一页">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="下一页">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="default-pagination-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav&gt;
                                                            &lt;ul class=&quot;pagination&quot;&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;上一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;下一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">禁用和激活状态</h4>
                                        <p class="text-muted font-14">分页链接可根据不同情况自定义。使用 <code>.disabled</code> 表示不可点击的链接，使用 <code>.active</code> 表示当前页面。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#disabled-pagination-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#disabled-pagination-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="disabled-pagination-preview">
                                                <nav aria-label="...">
                                                    <ul class="pagination mb-0">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">上一页</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item active" aria-current="page">
                                                            <a class="page-link" href="#">2</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">下一页</a>
                                                        </li>
                                                    </ul>
                                                </nav>                                            
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="disabled-pagination-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav aria-label=&quot;...&quot;&gt;
                                                            &lt;ul class=&quot;pagination mb-0&quot;&gt;
                                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                                &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;上一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
                                                                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;下一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">对齐</h4>
                                        <p class="text-muted font-14">使用 flexbox 工具更改分页组件的对齐方式。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#alignment-pagination-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#alignment-pagination-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="alignment-pagination-preview">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-center">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">上一页</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);">下一页</a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item disabled">
                                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">上一页</a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);">下一页</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="alignment-pagination-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Center Align --&gt;
                                                        &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                                            &lt;ul class=&quot;pagination justify-content-center&quot;&gt;
                                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; tabindex=&quot;-1&quot;&gt;上一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;下一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                        
                                                        &lt;!-- End Align --&gt;
                                                        &lt;nav aria-label=&quot;Page navigation example&quot;&gt;
                                                            &lt;ul class=&quot;pagination justify-content-end&quot;&gt;
                                                                &lt;li class=&quot;page-item disabled&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; tabindex=&quot;-1&quot;&gt;上一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;下一页&lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
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
                                        <h4 class="header-title">圆角分页</h4>
                                        <p class="text-muted font-14">添加 <code>.pagination-rounded</code> 实现圆角分页。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#rounded-pagination-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#rounded-pagination-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="rounded-pagination-preview">
                                                <nav>
                                                    <ul class="pagination pagination-rounded mb-0">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="上一页">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="下一页">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="rounded-pagination-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav&gt;
                                                            &lt;ul class=&quot;pagination pagination-rounded mb-0&quot;&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;上一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;4&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;5&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;下一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->

                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">尺寸</h4>
                                        <p class="text-muted font-14">添加 <code>.pagination-lg</code> 或 <code>.pagination-sm</code> 获取其他尺寸。</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#sizing-pagination-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#sizing-pagination-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="sizing-pagination-preview">
                                                <nav>
                                                    <ul class="pagination pagination-lg">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="上一页">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="下一页">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
    
                                                <nav>
                                                    <ul class="pagination pagination-sm mb-0">
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="上一页">
                                                                <span aria-hidden="true">&laquo;</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="javascript: void(0);" aria-label="下一页">
                                                                <span aria-hidden="true">&raquo;</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="sizing-pagination-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Large --&gt;
                                                        &lt;nav&gt;
                                                            &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;上一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;下一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;

                                                        &lt;!-- Small --&gt;
                                                        &lt;nav&gt;
                                                            &lt;ul class=&quot;pagination pagination-sm mb-0&quot;&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;上一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
                                                                &lt;li class=&quot;page-item&quot;&gt;
                                                                    &lt;a class=&quot;page-link&quot; href=&quot;javascript: void(0);&quot; aria-label=&quot;下一页&quot;&gt;
                                                                        &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
                                                                    &lt;/a&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->