<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">模态框</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">模态框</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap 模态框</h4>

                                        <p class="text-muted font-14">
                                            A rendered modal with header, body, and set of actions in the footer.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#bs-modals-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#bs-modals-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bs-modals-preview">

                                                <!-- Standard modal content -->
                                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">模态框标题</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>模态框中的文本</h6>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                                <hr>
                                                                <h6>溢出文本以显示滚动行为</h6>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">关闭</button>
                                                                <button type="button" class="btn btn-primary">保存更改</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <!--  Modal content for the Large example -->
                                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">大模态框</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="mySmallModalLabel">小模态框</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Full width modal content -->
                                                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-full-width">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>模态框中的文本</h6>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                                <hr>
                                                                <h6>溢出文本以显示滚动行为</h6>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">关闭</button>
                                                                <button type="button" class="btn btn-primary">保存更改</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Long Content Scroll Modal -->
                                                <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="scrollableModalTitle">模态框标题</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="关闭"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">关闭</button>
                                                                <button type="button" class="btn btn-primary">保存更改</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->  
                                                
                                                <div class="button-list">
                                                    <!-- Standard  modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">标准模态框</button>
                                                    <!-- 大模态框 -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">大模态框</button>
                                                    <!-- 小模态框 -->
                                                    <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">小模态框</button>
                                                    <!-- Full width modal -->
                                                    <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal">全宽模态框</button>
                                                    <!-- Scrollable modal -->
                                                    <button  type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal">可滚动模态框</button>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="bs-modals-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Standard modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#standard-modal&quot;&gt;标准模态框&lt;/button&gt;
                                                        &lt;div id=&quot;standard-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;standard-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;standard-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;关闭&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;保存更改&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- 大模态框 --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-lg&quot;&gt;大模态框&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-lg&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myLargeModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;myLargeModalLabel&quot;&gt;大模态框&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- 小模态框 --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-sm&quot;&gt;小模态框&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-sm&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;mySmallModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;mySmallModalLabel&quot;&gt;小模态框&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Full width modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#full-width-modal&quot;&gt;全宽模态框&lt;/button&gt;
                                                        &lt;div id=&quot;full-width-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fullWidthModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-full-width&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fullWidthModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;关闭&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;保存更改&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Scrollable modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollable-modal&quot;&gt;可滚动模态框&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;scrollable-modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;scrollableModalTitle&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollableModalTitle&quot;&gt;模态框标题&lt;/h5&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;关闭&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;保存更改&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
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
                                        <h4 class="header-title">带页面的模态框</h4>
                                        <p class="text-muted font-14">自定义模态框的示例。</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-pages-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-pages-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-pages-preview">
                                                <!-- Signup modal content -->
                                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                           
            
                                                            <div class="modal-body">
                                                                <div class="auth-brand text-center mt-2 mb-4 position-relative top-0">
                                                                    <a href="index.html" class="logo-dark">
                                                                        <span><img src="/admin/images/logo-dark.png" alt="" height="18"></span>
                                                                    </a>
                                                                    <a href="index.html" class="logo-light">
                                                                        <span><img src="/admin/images/logo.png" alt="" height="18"></span>
                                                                    </a>
                                                                </div>
            
                                                                <form class="ps-3 pe-3" action="#">
            
                                                                    <div class="mb-3">
                                                                        <label for="username" class="form-label">名称</label>
                                                                        <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="emailaddress" class="form-label">邮箱地址</label>
                                                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="password" class="form-label">密码</label>
                                                                        <input class="form-control" type="password" required="" id="password" placeholder="输入您的密码">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                            <label class="form-check-label" for="customCheck1">我接受 <a href="#">条款和条件</a></label>
                                                                        </div> 
                                                                    </div>
            
                                                                    <div class="mb-3 text-center">
                                                                        <button class="btn btn-primary" type="submit">免费注册</button>
                                                                    </div>
            
                                                                </form>
            
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
            
                                                <!-- SignIn modal content -->
                                                <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="auth-brand text-center mt-2 mb-4 position-relative top-0">
                                                                    <a href="index.html" class="logo-dark">
                                                                        <span><img src="/admin/images/logo-dark.png" alt="" height="18"></span>
                                                                    </a>
                                                                    <a href="index.html" class="logo-light">
                                                                        <span><img src="/admin/images/logo.png" alt="" height="18"></span>
                                                                    </a>
                                                                </div>
            
                                                                <form action="#" class="ps-3 pe-3">
                                                                    <div class="mb-3">
                                                                        <label for="emailaddress1" class="form-label">邮箱地址</label>
                                                                        <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="password1" class="form-label">密码</label>
                                                                        <input class="form-control" type="password" required="" id="password1" placeholder="输入您的密码">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">记住我</label>
                                                                        </div>
                                                                    </div>
            
                                                                    <div class="mb-3 text-center">
                                                                        <button class="btn rounded-pill btn-primary" type="submit">登录</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="button-list">
                                                    <!-- Sign Up modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">注册模态框</button>
                                                    <!-- Log In modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">登录模态框</button>
                                                </div>                                       
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-pages-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Signup modal--&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#signup-modal&quot;&gt;注册模态框&lt;/button&gt;
                                                        &lt;div id=&quot;signup-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                        
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;div class=&quot;text-center mt-2 mb-4&quot;&gt;
                                                                            &lt;a href=&quot;index.html&quot; class=&quot;text-success&quot;&gt;
                                                                                &lt;span&gt;&lt;img src=&quot;assets/images/logo-dark.png&quot; alt=&quot;&quot; height=&quot;18&quot;&gt;&lt;/span&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                        
                                                                        &lt;form class=&quot;ps-3 pe-3&quot; action=&quot;#&quot;&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;username&quot; class=&quot;form-label&quot;&gt;名称&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;username&quot; required=&quot;&quot; placeholder=&quot;Michael Zenaty&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;emailaddress&quot; class=&quot;form-label&quot;&gt;邮箱地址&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;emailaddress&quot; required=&quot;&quot; placeholder=&quot;john@deo.com&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;password&quot; class=&quot;form-label&quot;&gt;密码&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;password&quot; required=&quot;&quot; id=&quot;password&quot; placeholder=&quot;输入您的密码&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck1&quot;&gt;
                                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck1&quot;&gt;I accept &lt;a href=&quot;#&quot;&gt;Terms and Conditions&lt;/a&gt;&lt;/label&gt;
                                                                                &lt;/div&gt; 
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3 text-center&quot;&gt;
                                                                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;免费注册&lt;/button&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                        &lt;/form&gt;
                                                        
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Login modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#login-modal&quot;&gt;登录模态框&lt;/button&gt;
                                                        &lt;div id=&quot;login-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;div class=&quot;text-center mt-2 mb-4&quot;&gt;
                                                                            &lt;a href=&quot;index.html&quot; class=&quot;text-success&quot;&gt;
                                                                                &lt;span&gt;&lt;img src=&quot;assets/images/logo-dark.png&quot; alt=&quot;&quot; height=&quot;18&quot;&gt;&lt;/span&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                        
                                                                        &lt;form action=&quot;#&quot; class=&quot;ps-3 pe-3&quot;&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;emailaddress1&quot; class=&quot;form-label&quot;&gt;邮箱地址&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;emailaddress1&quot; required=&quot;&quot; placeholder=&quot;john@deo.com&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;password1&quot; class=&quot;form-label&quot;&gt;密码&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;password&quot; required=&quot;&quot; id=&quot;password1&quot; placeholder=&quot;输入您的密码&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck2&quot;&gt;
                                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck2&quot;&gt;记住我&lt;/label&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3 text-center&quot;&gt;
                                                                                &lt;button class=&quot;btn rounded-pill btn-primary&quot; type=&quot;submit&quot;&gt;登录&lt;/button&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                        &lt;/form&gt;
                                                        
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->