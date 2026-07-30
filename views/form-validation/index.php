<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">表单</a></li>
                                            <li class="breadcrumb-item active">表单验证</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">表单验证</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">自定义样式</h4>
                                        <p class="text-muted font-14">Custom feedback styles apply custom colors, borders,
                                            focus styles, and background
                                            icons to better communicate feedback. Background icons for
                                            <code>&lt;select&gt;</code>s are only available with
                                            <code>.form-select</code>, and not <code>.form-control</code>.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#custom-styles-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#custom-styles-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="custom-styles-preview">
                                                <form class="needs-validation" novalidate>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom01">名字</label>
                                                        <input type="text" class="form-control" id="validationCustom01" placeholder="名字" value="Mark" required>
                                                        <div class="valid-feedback">
                                                            看起来不错！
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom02">姓</label>
                                                        <input type="text" class="form-control" id="validationCustom02" placeholder="姓" value="Otto" required>
                                                        <div class="valid-feedback">
                                                            看起来不错！
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom用户名">用户名</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                            <input type="text" class="form-control" id="validationCustom用户名" placeholder="用户名"
                                                                aria-describedby="inputGroupPrepend" required>
                                                            <div class="invalid-feedback">
                                                                请选择一个用户名。
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom03">城市</label>
                                                        <input type="text" class="form-control" id="validationCustom03" placeholder="城市" required>
                                                        <div class="invalid-feedback">
                                                            请输入有效的城市。
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom04">州/省</label>
                                                        <input type="text" class="form-control" id="validationCustom04" placeholder="州/省" required>
                                                        <div class="invalid-feedback">
                                                            请输入有效的州/省。
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="validationCustom05">邮编</label>
                                                        <input type="text" class="form-control" id="validationCustom05" placeholder="邮编" required>
                                                        <div class="invalid-feedback">
                                                            请输入有效的邮编。
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                                            <label class="form-check-label form-label" for="invalidCheck">同意条款和条件</label>
                                                            <div class="invalid-feedback">
                                                                提交前必须同意。
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">提交表单</button>
                                                </form>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="custom-styles-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;needs-validation&quot; novalidate&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom01&quot;&gt;名字&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot; placeholder=&quot;名字&quot; value=&quot;Mark&quot; required&gt;
                                                                &lt;div class=&quot;valid-feedback&quot;&gt;
                                                                    看起来不错！
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom02&quot;&gt;姓&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot; placeholder=&quot;姓&quot; value=&quot;Otto&quot; required&gt;
                                                                &lt;div class=&quot;valid-feedback&quot;&gt;
                                                                    看起来不错！
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom用户名&quot;&gt;用户名&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom用户名&quot; placeholder=&quot;用户名&quot;
                                                                        aria-describedby=&quot;inputGroupPrepend&quot; required&gt;
                                                                    &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                        请选择一个用户名。
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom03&quot;&gt;城市&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; placeholder=&quot;城市&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    请输入有效的城市。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom04&quot;&gt;州/省&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom04&quot; placeholder=&quot;州/省&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    请输入有效的州/省。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationCustom05&quot;&gt;邮编&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; placeholder=&quot;邮编&quot; required&gt;
                                                                &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                    请输入有效的邮编。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;invalidCheck&quot; required&gt;
                                                                    &lt;label class=&quot;form-check-label form-label&quot; for=&quot;invalidCheck&quot;&gt;Agree to terms
                                                                        and conditions&lt;/label&gt;
                                                                    &lt;div class=&quot;invalid-feedback&quot;&gt;
                                                                        提交前必须同意。
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;提交表单&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->


                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tooltips</h4>
                                        <p class="text-muted font-14">If your form layout allows it, you can swap the
                                            <code>.{valid|invalid}-feedback</code> classes for
                                            <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in
                                            a styled tooltip. Be sure to have a parent with <code>position: relative</code>
                                            on it for tooltip positioning. In the example below, our column classes have
                                            this already, but your project may require an alternative setup.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#tooltips-validation-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#tooltips-validation-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="tooltips-validation-preview">
                                                <form class="needs-validation" novalidate>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip01">名字</label>
                                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="名字" value="Mark" required>
                                                        <div class="valid-tooltip">
                                                            看起来不错！
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter first name.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip02">姓</label>
                                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="姓" value="Otto" required>
                                                        <div class="valid-tooltip">
                                                            看起来不错！
                                                        </div>
                                                        <div class="invalid-tooltip">
                                                            Please enter last name.
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip用户名">用户名</label>
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="validationTooltip用户名Prepend">@</span>
                                                            <input type="text" class="form-control" id="validationTooltip用户名" placeholder="用户名"
                                                                aria-describedby="validationTooltip用户名Prepend" required>
                                                            <div class="invalid-tooltip">
                                                                Please choose a unique and valid username.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip03">城市</label>
                                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="城市" required>
                                                        <div class="invalid-tooltip">
                                                            请输入有效的城市。
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip04">州/省</label>
                                                        <input type="text" class="form-control" id="validationTooltip04" placeholder="州/省" required>
                                                        <div class="invalid-tooltip">
                                                            请输入有效的州/省。
                                                        </div>
                                                    </div>
                                                    <div class="position-relative mb-3">
                                                        <label class="form-label" for="validationTooltip05">邮编</label>
                                                        <input type="text" class="form-control" id="validationTooltip05" placeholder="邮编" required>
                                                        <div class="invalid-tooltip">
                                                            请输入有效的邮编。
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">提交表单</button>
                                                </form>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="tooltips-validation-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;form class=&quot;needs-validation&quot; novalidate&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip01&quot;&gt;名字&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; placeholder=&quot;名字&quot; value=&quot;Mark&quot; required&gt;
                                                                &lt;div class=&quot;valid-tooltip&quot;&gt;
                                                                    看起来不错！
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please enter first name.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip02&quot;&gt;姓&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; placeholder=&quot;姓&quot; value=&quot;Otto&quot; required&gt;
                                                                &lt;div class=&quot;valid-tooltip&quot;&gt;
                                                                    看起来不错！
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    Please enter last name.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip用户名&quot;&gt;用户名&lt;/label&gt;
                                                                &lt;div class=&quot;input-group&quot;&gt;
                                                                    &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltip用户名Prepend&quot;&gt;@&lt;/span&gt;
                                                                    &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip用户名&quot; placeholder=&quot;用户名&quot;
                                                                        aria-describedby=&quot;validationTooltip用户名Prepend&quot; required&gt;
                                                                    &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                        Please choose a unique and valid username.
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip03&quot;&gt;城市&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; placeholder=&quot;城市&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    请输入有效的城市。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip04&quot;&gt;州/省&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip04&quot; placeholder=&quot;州/省&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    请输入有效的州/省。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;position-relative mb-3&quot;&gt;
                                                                &lt;label class=&quot;form-label&quot; for=&quot;validationTooltip05&quot;&gt;邮编&lt;/label&gt;
                                                                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; placeholder=&quot;邮编&quot; required&gt;
                                                                &lt;div class=&quot;invalid-tooltip&quot;&gt;
                                                                    请输入有效的邮编。
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;提交表单&lt;/button&gt;
                                                        &lt;/form&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->