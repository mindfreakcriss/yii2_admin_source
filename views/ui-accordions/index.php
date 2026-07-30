<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">基础 UI</a></li>
                                            <li class="breadcrumb-item active">手风琴</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">手风琴</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">简单手风琴</h4>
                                        <p class="text-muted font-14 mb-3">
                                            Using the card component, you can
                                            extend the default collapse behavior to create an accordion. To properly achieve
                                            the accordion style, be sure to use <code>.accordion</code> as a wrapper.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item" role="presentation">
                                                <a href="#default-accordions-preview" class="nav-link active" data-bs-toggle="tab" role="tab" aria-controls="nav-preview" aria-selected="true">
                                                    预览
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#default-accordions-code" class="nav-link" data-bs-toggle="tab" role="tab" aria-controls="nav-code" aria-selected="false">
                                                    代码
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->

                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="default-accordions-preview">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingOne">
                                                            <h5 class="m-0">
                                                                <a class="custom-accordion-title d-block pt-2 pb-2" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    可折叠分组项 #1
                                                                </a>
                                                            </h5>
                                                        </div>

                                                        <div id="collapseOne" class="collapse show"
                                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                sunt aliqua put a bird on it squid single-origin coffee
                                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                                aesthetic synth nesciunt you probably haven't heard of them
                                                                accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingTwo">
                                                            <h5 class="m-0">
                                                                <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                                                    data-bs-toggle="collapse" href="#collapseTwo"
                                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                                    可折叠分组项 #2
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                sunt aliqua put a bird on it squid single-origin coffee
                                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                                aesthetic synth nesciunt you probably haven't heard of them
                                                                accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card mb-0">
                                                        <div class="card-header" id="headingThree">
                                                            <h5 class="m-0">
                                                                <a class="custom-accordion-title collapsed d-block pt-2 pb-2"
                                                                    data-bs-toggle="collapse" href="#collapseThree"
                                                                    aria-expanded="false" aria-controls="collapseThree">
                                                                    可折叠分组项 #3
                                                                </a>
                                                            </h5>
                                                        </div>
                                                        <div id="collapseThree" class="collapse"
                                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                            <div class="card-body">
                                                                Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                                accusamus terry richardson ad squid. 3 wolf moon officia
                                                                aute, non cupidatat skateboard dolor brunch. Food truck
                                                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                                                sunt aliqua put a bird on it squid single-origin coffee
                                                                nulla assumenda shoreditch et. Nihil anim keffiyeh
                                                                helvetica, craft beer labore wes anderson cred nesciunt
                                                                sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                                                Leggings occaecat craft beer farm-to-table, raw denim
                                                                aesthetic synth nesciunt you probably haven't heard of them
                                                                accusamus labore sustainable VHS.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end preview-->

                                            <div class="tab-pane" id="default-accordions-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;accordion&quot; id=&quot;accordionExample&quot;&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingOne&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseOne&quot;
                                                                            aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;
                                                                            可折叠分组项 #1
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                        
                                                                &lt;div id=&quot;collapseOne&quot; class=&quot;collapse show&quot;
                                                                    aria-labelledby=&quot;headingOne&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingTwo&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseTwo&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;
                                                                            可折叠分组项 #2
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseTwo&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingTwo&quot;
                                                                    data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;card mb-0&quot;&gt;
                                                                &lt;div class=&quot;card-header&quot; id=&quot;headingThree&quot;&gt;
                                                                    &lt;h5 class=&quot;m-0&quot;&gt;
                                                                        &lt;a class=&quot;custom-accordion-title collapsed d-block pt-2 pb-2&quot;
                                                                            data-bs-toggle=&quot;collapse&quot; href=&quot;#collapseThree&quot;
                                                                            aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;
                                                                            可折叠分组项 #3
                                                                        &lt;/a&gt;
                                                                    &lt;/h5&gt;
                                                                &lt;/div&gt;
                                                                &lt;div id=&quot;collapseThree&quot; class=&quot;collapse&quot;
                                                                    aria-labelledby=&quot;headingThree&quot; data-bs-parent=&quot;#accordionExample&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card-body-->