<!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">电子商务</a></li>
                                            <li class="breadcrumb-item active">结算</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">结算</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Checkout Steps -->
                                        <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                            <li class="nav-item">
                                                <a href="#billing-information" data-bs-toggle="tab" aria-expanded="false"
                                                    class="nav-link rounded-0 active">
                                                    <i class="mdi mdi-account-circle font-18"></i>
                                                    <span class="d-none d-lg-block">账单信息</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#shipping-information" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                    <i class="mdi mdi-truck-fast font-18"></i>
                                                    <span class="d-none d-lg-block">收货信息</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#payment-information" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                    <i class="mdi mdi-cash-multiple font-18"></i>
                                                    <span class="d-none d-lg-block">支付信息</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Steps Information -->
                                        <div class="tab-content">

                                            <!-- Billing Content-->
                                            <div class="tab-pane show active" id="billing-information">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">账单信息</h4>

                                                        <p class="text-muted mb-4">请填写以下表格，以便我们向您发送订单发票。</p>

                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-first-name" class="form-label">名字</label>
                                                                        <input class="form-control" type="text" placeholder="请输入您的名字" id="billing-first-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-last-name" class="form-label">姓</label>
                                                                        <input class="form-control" type="text" placeholder="请输入您的姓氏" id="billing-last-name" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-email-address" class="form-label">邮箱地址 <span class="text-danger">*</span></label>
                                                                        <input class="form-control" type="email" placeholder="请输入邮箱" id="billing-email-address" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="billing-phone" class="form-label">电话 <span class="text-danger">*</span></label>
                                                                        <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="billing-phone" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="billing-address" class="form-label">地址</label>
                                                                        <input class="form-control" type="text" placeholder="请输入完整地址" id="billing-address">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="billing-town-city" class="form-label">城市</label>
                                                                        <input class="form-control" type="text" placeholder="请输入城市名称" id="billing-town-city" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="billing-state" class="form-label">州/省</label>
                                                                        <input class="form-control" type="text" placeholder="请输入州/省" id="billing-state" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="billing-zip-postal" class="form-label">邮政编码</label>
                                                                        <input class="form-control" type="text" placeholder="请输入邮政编码" id="billing-zip-postal" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">国家</label>
                                                                        <select data-toggle="select2" title="Country">
                                                                            <option value="0">选择国家</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antarctica</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="BN">Brunei Darussalam</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Cote d'Ivoire</option>
                                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KR">Korea, Republic of</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macau</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="MD">Moldova, Republic of</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="AN">Netherlands Antilles</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Reunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                            <option value="LC">Saint LUCIA</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SH">St. Helena</option>
                                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands (British)</option>
                                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>                                    
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">运送到不同地址？</label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="mb-3 mt-3">
                                                                        <label for="example-textarea" class="form-label">订单备注：</label>
                                                                        <textarea class="form-control" id="example-textarea" rows="3" placeholder="填写备注..."></textarea>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                        <i class="mdi mdi-arrow-left"></i> 返回购物车 </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                            <i class="mdi mdi-truck-fast me-1"></i> 前往配送 </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                            <h4 class="header-title mb-3">订单摘要</h4>
            
                                                            <div class="table-responsive">
                                                                <table class="table table-nowrap table-centered mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-1.jpg" alt="contact-img" title="contact-img" class="rounded me-2"
                                                                                    height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Amazing Modern Chair</a>
                                                                                    <br>
                                                                                    <small>5 x $148.66</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $743.30
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-2.jpg" alt="contact-img" title="contact-img" class="rounded me-2"
                                                                                    height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Designer Awesome Chair</a>
                                                                                    <br>
                                                                                    <small>2 x $99.00</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $198.00
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-3.jpg" alt="contact-img" title="contact-img" class="rounded me-2"
                                                                                    height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html" class="text-body fw-semibold">Biblio Plastic Armchair</a>
                                                                                    <br>
                                                                                    <small>1 x $129.99</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $129.99
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">小计：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">运费：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                FREE
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h5 class="m-0">合计：</h5>
                                                                            </td>
                                                                            <td class="text-end fw-semibold">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end table-responsive -->
                                                        </div> <!-- end .border-->
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Billing Information Content-->

                                            <!-- Shipping Content-->
                                            <div class="tab-pane" id="shipping-information">
                                                <div class="row">
                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">已保存地址</h4>

                                                        <p class="text-muted mb-3">请填写以下表格，以便我们向您发送订单发票。</p>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded mb-3 mb-md-0">
                                                                    <address class="mb-0 address-lg">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio1" name="customRadio" class="form-check-input" checked>
                                                                            <label class="form-check-label font-16 fw-bold" for="customRadio1">家庭</label>
                                                                        </div>
                                                                        <br />
                                                                        <span class="fw-semibold">Stanley Jones</span> <br />
                                                                        795 Folsom Ave, Suite 600<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                                                    </address>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="border p-3 rounded">
                                                                    <address class="mb-0 address-lg">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="customRadio2" name="customRadio" class="form-check-input">
                                                                            <label class="form-check-label font-16 fw-bold" for="customRadio2">办公室</label>
                                                                        </div>
                                                                        <br />
                                                                        <span class="fw-semibold">Stanley Jones</span> <br />
                                                                        795 Folsom Ave, Suite 600<br>
                                                                        San Francisco, CA 94107<br>
                                                                        <abbr title="Phone">P:</abbr> (123) 456-7890 <br>
                                                                    </address>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row-->

                                                        <h4 class="mt-4">新增地址</h4>

                                                        <p class="text-muted mb-4">请填写以下表格，以便我们向您发送订单发票。</p>

                                                        <form>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-first-name" class="form-label">名字</label>
                                                                        <input class="form-control" type="text" placeholder="请输入您的名字" id="new-adr-first-name" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-last-name" class="form-label">姓</label>
                                                                        <input class="form-control" type="text" placeholder="请输入您的姓氏" id="new-adr-last-name" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-email-address" class="form-label">邮箱地址 <span class="text-danger">*</span></label>
                                                                        <input class="form-control" type="email" placeholder="请输入邮箱" id="new-adr-email-address" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-phone" class="form-label">电话 <span class="text-danger">*</span></label>
                                                                        <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="new-adr-phone" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-address" class="form-label">地址</label>
                                                                        <input class="form-control" type="text" placeholder="请输入完整地址" id="new-adr-address">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-town-city" class="form-label">城市</label>
                                                                        <input class="form-control" type="text" placeholder="请输入城市名称" id="new-adr-town-city" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-state" class="form-label">州/省</label>
                                                                        <input class="form-control" type="text" placeholder="请输入州/省" id="new-adr-state" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="new-adr-zip-postal" class="form-label">邮政编码</label>
                                                                        <input class="form-control" type="text" placeholder="请输入邮政编码" id="new-adr-zip-postal" />
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">国家</label>
                                                                        <select data-toggle="select2" title="Country">
                                                                            <option value="0">选择国家</option>
                                                                            <option value="AF">Afghanistan</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DZ">Algeria</option>
                                                                            <option value="AS">American Samoa</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antarctica</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaijan</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrain</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BY">Belarus</option>
                                                                            <option value="BE">Belgium</option>
                                                                            <option value="BZ">Belize</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermuda</option>
                                                                            <option value="BT">Bhutan</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BV">Bouvet Island</option>
                                                                            <option value="BR">Brazil</option>
                                                                            <option value="BN">Brunei Darussalam</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="KH">Cambodia</option>
                                                                            <option value="CM">Cameroon</option>
                                                                            <option value="CA">Canada</option>
                                                                            <option value="CV">Cape Verde</option>
                                                                            <option value="KY">Cayman Islands</option>
                                                                            <option value="CF">Central African Republic</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CX">Christmas Island</option>
                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comoros</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CK">Cook Islands</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="CI">Cote d'Ivoire</option>
                                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="CY">Cyprus</option>
                                                                            <option value="CZ">Czech Republic</option>
                                                                            <option value="DK">Denmark</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="DO">Dominican Republic</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egypt</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Ethiopia</option>
                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                            <option value="FO">Faroe Islands</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="FI">Finland</option>
                                                                            <option value="FR">France</option>
                                                                            <option value="GF">French Guiana</option>
                                                                            <option value="PF">French Polynesia</option>
                                                                            <option value="GA">Gabon</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="DE">Germany</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GR">Greece</option>
                                                                            <option value="GL">Greenland</option>
                                                                            <option value="GD">Grenada</option>
                                                                            <option value="GP">Guadeloupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="GY">Guyana</option>
                                                                            <option value="HT">Haiti</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HK">Hong Kong</option>
                                                                            <option value="HU">Hungary</option>
                                                                            <option value="IS">Iceland</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Iraq</option>
                                                                            <option value="IE">Ireland</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italy</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japan</option>
                                                                            <option value="JO">Jordan</option>
                                                                            <option value="KZ">Kazakhstan</option>
                                                                            <option value="KE">Kenya</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KR">Korea, Republic of</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="KG">Kyrgyzstan</option>
                                                                            <option value="LV">Latvia</option>
                                                                            <option value="LB">Lebanon</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lithuania</option>
                                                                            <option value="LU">Luxembourg</option>
                                                                            <option value="MO">Macau</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MY">Malaysia</option>
                                                                            <option value="MV">Maldives</option>
                                                                            <option value="ML">Mali</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MH">Marshall Islands</option>
                                                                            <option value="MQ">Martinique</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="MU">Mauritius</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">Mexico</option>
                                                                            <option value="MD">Moldova, Republic of</option>
                                                                            <option value="MC">Monaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MA">Morocco</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="MM">Myanmar</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NL">Netherlands</option>
                                                                            <option value="AN">Netherlands Antilles</option>
                                                                            <option value="NC">New Caledonia</option>
                                                                            <option value="NZ">New Zealand</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Niger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk Island</option>
                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                            <option value="NO">Norway</option>
                                                                            <option value="OM">Oman</option>
                                                                            <option value="PW">Palau</option>
                                                                            <option value="PA">Panama</option>
                                                                            <option value="PG">Papua New Guinea</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Peru</option>
                                                                            <option value="PH">Philippines</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PL">Poland</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="RE">Reunion</option>
                                                                            <option value="RO">Romania</option>
                                                                            <option value="RU">Russian Federation</option>
                                                                            <option value="RW">Rwanda</option>
                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                            <option value="LC">Saint LUCIA</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                            <option value="SA">Saudi Arabia</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leone</option>
                                                                            <option value="SG">Singapore</option>
                                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                                            <option value="SI">Slovenia</option>
                                                                            <option value="SB">Solomon Islands</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="ZA">South Africa</option>
                                                                            <option value="ES">Spain</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="SH">St. Helena</option>
                                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                                            <option value="SD">Sudan</option>
                                                                            <option value="SR">Suriname</option>
                                                                            <option value="SZ">Swaziland</option>
                                                                            <option value="SE">Sweden</option>
                                                                            <option value="CH">Switzerland</option>
                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                            <option value="TJ">Tajikistan</option>
                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                            <option value="TH">Thailand</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TK">Tokelau</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                            <option value="TN">Tunisia</option>
                                                                            <option value="TR">Turkey</option>
                                                                            <option value="TM">Turkmenistan</option>
                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UA">Ukraine</option>
                                                                            <option value="AE">United Arab Emirates</option>
                                                                            <option value="GB">United Kingdom</option>
                                                                            <option value="US">United States</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistan</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Viet Nam</option>
                                                                            <option value="VG">Virgin Islands (British)</option>
                                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                                            <option value="EH">Western Sahara</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabwe</option>                                    
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->

                                                            <h4 class="mt-4">配送方式</h4>

                                                            <p class="text-muted mb-3">请填写以下表格，以便我们向您发送订单发票。</p>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="border p-3 rounded mb-3 mb-md-0">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="shippingMethodRadio1" name="shippingOptions" class="form-check-input" checked>
                                                                            <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio1">标准配送 - 免费</label>
                                                                        </div>
                                                                        <p class="mb-0 ps-3 pt-1">预计5-7天送达（关税和税费可能需要在送达时支付）</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="border p-3 rounded">
                                                                        <div class="form-check">
                                                                            <input type="radio" id="shippingMethodRadio2" name="shippingOptions" class="form-check-input">
                                                                            <label class="form-check-label font-16 fw-bold" for="shippingMethodRadio2">快速配送 - $25</label>
                                                                        </div>
                                                                        <p class="mb-0 ps-3 pt-1">预计1-2天送达（关税和税费可能需要在送达时支付）</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end row-->

                                                            <div class="row mt-4">
                                                                <div class="col-sm-6">
                                                                    <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                        <i class="mdi mdi-arrow-left"></i> 返回购物车 </a>
                                                                </div> <!-- end col -->
                                                                <div class="col-sm-6">
                                                                    <div class="text-sm-end">
                                                                        <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                            <i class="mdi mdi-cash-multiple me-1"></i> 继续支付 </a>
                                                                    </div>
                                                                </div> <!-- end col -->
                                                            </div> <!-- end row -->
                                                        </form>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                            <h4 class="header-title mb-3">订单摘要</h4>
            
                                                            <div class="table-responsive">
                                                                <table class="table table-nowrap table-centered mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-1.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Amazing Modern Chair</a>
                                                                                    <br>
                                                                                    <small>5 x $148.66</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $743.30
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-2.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Designer Awesome Chair</a>
                                                                                    <br>
                                                                                    <small>2 x $99.00</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $198.00
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-3.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Biblio Plastic Armchair</a>
                                                                                    <br>
                                                                                    <small>1 x $129.99</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $129.99
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">小计：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">运费：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                FREE
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h5 class="m-0">合计：</h5>
                                                                            </td>
                                                                            <td class="text-end fw-semibold">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end table-responsive -->
                                                        </div> <!-- end .border-->
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Shipping Information Content-->

                                            <!-- Payment Content-->
                                            <div class="tab-pane" id="payment-information">
                                                <div class="row">

                                                    <div class="col-lg-8">
                                                        <h4 class="mt-2">选择支付方式</h4>

                                                        <p class="text-muted mb-4">请填写以下表格，以便我们向您发送订单发票。</p>

                                                        <!-- Pay with Paypal box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio2" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio2">使用PayPal支付</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">您将被重定向到PayPal网站以安全完成购买。</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="/admin/images/payments/paypal.png" height="25" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Pay with Paypal box-->

                                                        <!-- Credit/Debit Card box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio1" name="billingOptions" class="form-check-input" checked>
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio1">信用卡/借记卡</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">使用您的银行账户安全转账。我们支持Mastercard、Visa、Discover和Stripe。</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="/admin/images/payments/master.png" height="24" alt="master-card-img">
                                                                    <img src="/admin/images/payments/discover.png" height="24" alt="discover-card-img">
                                                                    <img src="/admin/images/payments/visa.png" height="24" alt="visa-card-img">
                                                                    <img src="/admin/images/payments/stripe.png" height="24" alt="stripe-card-img">
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row mt-4">
                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="card-number" class="form-label">卡号</label>
                                                                        <input type="text" id="card-number" class="form-control" data-toggle="input-mask" data-mask-format="0000 0000 0000 0000" placeholder="4242 4242 4242 4242">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="card-name-on" class="form-label">持卡人姓名</label>
                                                                        <input type="text" id="card-name-on" class="form-control" placeholder="Master Shreyu">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-expiry-date" class="form-label">有效期</label>
                                                                        <input type="text" id="card-expiry-date" class="form-control" data-toggle="input-mask" data-mask-format="00/00" placeholder="MM/YY">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="card-cvv" class="form-label">CVV验证码</label>
                                                                        <input type="text" id="card-cvv" class="form-control" data-toggle="input-mask" data-mask-format="000" placeholder="012">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end row -->
                                                        </div>
                                                        <!-- end Credit/Debit Card box-->

                                                        <!-- Pay with Payoneer box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio3" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio3">使用Payoneer支付</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">您将被重定向到Payoneer网站以安全完成购买。</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="/admin/images/payments/payoneer.png" height="30" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Pay with Payoneer box-->

                                                        <!-- Cash on Delivery box-->
                                                        <div class="border p-3 mb-3 rounded">
                                                            <div class="row">
                                                                <div class="col-sm-8">
                                                                    <div class="form-check">
                                                                        <input type="radio" id="BillingOptRadio4" name="billingOptions" class="form-check-input">
                                                                        <label class="form-check-label font-16 fw-bold" for="BillingOptRadio4">货到付款</label>
                                                                    </div>
                                                                    <p class="mb-0 ps-3 pt-1">订单送达时使用现金支付。</p>
                                                                </div>
                                                                <div class="col-sm-4 text-sm-end mt-3 mt-sm-0">
                                                                    <img src="/admin/images/payments/cod.png" height="22" alt="paypal-img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end Cash on Delivery box-->

                                                        <div class="row mt-4">
                                                            <div class="col-sm-6">
                                                                <a href="apps-ecommerce-shopping-cart.html" class="btn text-muted d-none d-sm-inline-block btn-link fw-semibold">
                                                                    <i class="mdi mdi-arrow-left"></i> 返回购物车 </a>
                                                            </div> <!-- end col -->
                                                            <div class="col-sm-6">
                                                                <div class="text-sm-end">
                                                                    <a href="apps-ecommerce-checkout.html" class="btn btn-danger">
                                                                        <i class="mdi mdi-cash-multiple me-1"></i> 完成订单 </a>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row-->

                                                    </div> <!-- end col -->

                                                    <div class="col-lg-4">
                                                        <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                            <h4 class="header-title mb-3">订单摘要</h4>
            
                                                            <div class="table-responsive">
                                                                <table class="table table-nowrap table-centered mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-1.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Amazing Modern Chair</a>
                                                                                    <br>
                                                                                    <small>5 x $148.66</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $743.30
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-2.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Designer Awesome Chair</a>
                                                                                    <br>
                                                                                    <small>2 x $99.00</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $198.00
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <img src="/admin/images/products/product-3.jpg" alt="contact-img"
                                                                                    title="contact-img" class="rounded me-2" height="48" />
                                                                                <p class="m-0 d-inline-block align-middle">
                                                                                    <a href="apps-ecommerce-products-details.html"
                                                                                        class="text-body fw-semibold">Biblio Plastic Armchair</a>
                                                                                    <br>
                                                                                    <small>1 x $129.99</small>
                                                                                </p>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $129.99
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">小计：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h6 class="m-0">运费：</h6>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                FREE
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="text-end">
                                                                            <td>
                                                                                <h5 class="m-0">合计：</h5>
                                                                            </td>
                                                                            <td class="text-end fw-semibold">
                                                                                $1071.29
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <!-- end table-responsive -->
                                                        </div> <!-- end .border-->
            
                                                    </div> <!-- end col -->            
                                                </div> <!-- end row-->
                                            </div>
                                            <!-- End Payment Information Content-->

                                        </div> <!-- end tab content-->

                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->