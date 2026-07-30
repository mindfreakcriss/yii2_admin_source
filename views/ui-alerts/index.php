<?php
$this->registerJsFile('/admin/js/pages/demo.toastr.js', ['depends' => 'app\assets\\AdminAsset']);
?>

<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">警告</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">警告</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">默认警告</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
                                            Alerts are available for any length of text, as well as an optional dismiss
                                            button. 
                                        </p>
                                        <p>
                                            For proper styling, use one of the eight
                                            <strong>required</strong> contextual classes (e.g.,
                                            <code>.alert-success</code>). For background color use class
                                            <code>.bg-* </code>, <code>.text-white </code>
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#default-alert-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-alert-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-alert-preview">
                                                <div class="alert alert-primary" role="alert">
                                                    <strong>主要 - </strong> 一个简单的主要警告——看看吧！
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    <strong>次要 - </strong> 一个简单的次要警告——看看吧！
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>成功 - </strong> 一个简单的成功警告——看看吧！
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>错误 - </strong> 一个简单的危险警告——看看吧！
                                                </div>
                                                <div class="alert alert-warning bg-warning text-white border-0"
                                                    role="alert">
                                                    <strong>警告 - </strong> 一个简单的警告警告——看看吧！
                                                </div>
                                                <div class="alert alert-info bg-info text-white border-0" role="alert">
                                                    <strong>信息 - </strong> 一个简单的信息警告——看看吧！
                                                </div>
                                                <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                    <strong>浅色 - </strong> 一个简单的浅色警告——看看吧！
                                                </div>
                                                <div class="alert alert-dark bg-dark text-light border-0 mb-0" role="alert">
                                                    <strong>深色 - </strong> 一个简单的深色警告——看看吧！
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="default-alert-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-warning bg-warning text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-info bg-info text-white border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-light bg-light text-dark border-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;alert alert-dark bg-dark text-light border-0 mb-0&quot; role=&quot;alert&quot;&gt;
                                                            &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                        &lt;/div&gt; 
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">可关闭的警告</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                                            extra padding to the right of the alert
                                            and positions the <code>.btn-close</code> button.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dismissing-alerts-preview">
                                                <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>主要 - </strong> 一个简单的主要警告——看看吧！
                                                </div>
                                                <div class="alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>次要 - </strong> 一个简单的次要警告——看看吧！
                                                </div>
                                                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>成功 - </strong> 一个简单的成功警告——看看吧！
                                                </div>
                                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>错误 - </strong> 一个简单的危险警告——看看吧！
                                                </div>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>警告 - </strong> 一个简单的警告警告——看看吧！
                                                </div>
                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>信息 - </strong> 一个简单的信息警告——看看吧！
                                                </div>
                                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>浅色 - </strong> 一个简单的浅色警告——看看吧！
                                                </div>
                                                <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="关闭"></button>
                                                    <strong>深色 - </strong> 一个简单的深色警告——看看吧！
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="dismissing-alerts-code">
                                                <div class="highlight">
                                                    <pre class="mb-0">
                                                        <span class="html escape">
                                                            &lt;div class=&quot;alert alert-primary alert-dismissible bg-primary text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Primary - &lt;/strong&gt; A simple primary alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Secondary - &lt;/strong&gt; A simple secondary alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-success alert-dismissible bg-success text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Success - &lt;/strong&gt; A simple success alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-danger alert-dismissible bg-danger text-white border-0 fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Error - &lt;/strong&gt; A simple danger alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-warning alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Warning - &lt;/strong&gt; A simple warning alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-info alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Info - &lt;/strong&gt; A simple info alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-light alert-dismissible fade show&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Light - &lt;/strong&gt; A simple light alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;alert alert-dark alert-dismissible fade show mb-0&quot; role=&quot;alert&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;strong&gt;Dark - &lt;/strong&gt; A simple dark alert&mdash;check it out!
                                                            &lt;/div&gt;
                                                        </span>
                                                    </pre> <!-- end pre -->
                                                </div> <!-- end highlight-->
                                            </div> <!-- end preview code-->