<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                            <li class="breadcrumb-item active">Alerts</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Alerts</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default Alert</h4>
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
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-alert-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-alert-preview">
                                                <div class="alert alert-primary" role="alert">
                                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                                </div>
                                                <div class="alert alert-secondary" role="alert">
                                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                                </div>
                                                <div class="alert alert-success" role="alert">
                                                    <strong>Success - </strong> A simple success alert—check it out!
                                                </div>
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>Error - </strong> A simple danger alert—check it out!
                                                </div>
                                                <div class="alert alert-warning bg-warning text-white border-0"
                                                    role="alert">
                                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                                </div>
                                                <div class="alert alert-info bg-info text-white border-0" role="alert">
                                                    <strong>Info - </strong> A simple info alert—check it out!
                                                </div>
                                                <div class="alert alert-light bg-light text-dark border-0" role="alert">
                                                    <strong>Light - </strong> A simple light alert—check it out!
                                                </div>
                                                <div class="alert alert-dark bg-dark text-light border-0 mb-0" role="alert">
                                                    <strong>Dark - </strong> A simple dark alert—check it out!
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
                                        <h4 class="header-title">Dismissing Alerts</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                                            extra padding to the right of the alert
                                            and positions the <code>.btn-close</code> button.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-preview" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#dismissing-alerts-code" data-bs-toggle="tab" aria-expanded="true"
                                                    class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="dismissing-alerts-preview">
                                                <div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Primary - </strong> A simple primary alert—check it out!
                                                </div>
                                                <div class="alert alert-secondary alert-dismissible bg-secondary text-light border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Secondary - </strong> A simple secondary alert—check it out!
                                                </div>
                                                <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Success - </strong> A simple success alert—check it out!
                                                </div>
                                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"
                                                    role="alert">
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Error - </strong> A simple danger alert—check it out!
                                                </div>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Warning - </strong> A simple warning alert—check it out!
                                                </div>
                                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Info - </strong> A simple info alert—check it out!
                                                </div>
                                                <div class="alert alert-light alert-dismissible fade show" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Light - </strong> A simple light alert—check it out!
                                                </div>
                                                <div class="alert alert-dark alert-dismissible fade show mb-0" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <strong>Dark - </strong> A simple dark alert—check it out!
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