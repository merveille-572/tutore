@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Make Your Checkout Here</h2>
                                <p>Please register in order to checkout more quickly</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>First Name<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Last Name<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email Address<span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Phone Number <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Country<span>*</span></label>
                                            <select name="country" id="country">
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
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
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="VG">British Virgin Islands</option>
                                                <option value="BN">Brunei</option>
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
                                                <option value="CC">Cocos [Keeling] Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo - Brazzaville</option>
                                                <option value="CD">Congo - Kinshasa</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d’Ivoire</option>
                                                <option value="HR">Croatia</option>
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
                                                <option value="FK">Falkland Islands</option>
                                                <option value="FO">Faroe Islands</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finland</option>
                                                <option value="FR">France</option>
                                                <option value="GF">French Guiana</option>
                                                <option value="PF">French Polynesia</option>
                                                <option value="TF">French Southern Territories</option>
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
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong SAR China</option>
                                                <option value="HU">Hungary</option>
                                                <option value="IS">Iceland</option>
                                                <option value="IN">India</option>
                                                <option value="ID">Indonesia</option>
                                                <option value="IR">Iran</option>
                                                <option value="IQ">Iraq</option>
                                                <option value="IE">Ireland</option>
                                                <option value="IM">Isle of Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Italy</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japan</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordan</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau SAR China</option>
                                                <option value="MK">Macedonia</option>
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
                                                <option value="FM">Micronesia</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar [Burma]</option>
                                                <option value="NA">Namibia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP" selected="selected">Nepal</option>
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
                                                <option value="KP">North Korea</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestinian Territories</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn Islands</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russia</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia</option>
                                                <option value="KR">South Korea</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="TH">Thailand</option>
                                                <option value="TL">Timor-Leste</option>
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
                                                <option value="Uk">United Kingdom</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UM">U.S. Minor Outlying Islands</option>
                                                <option value="VI">U.S. Virgin Islands</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vatican City</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Address Line 1<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Address Line 2</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>CART  TOTALS</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal<span>{{number_format(Helper::totalCartPrice(),2)}}  XAF</span></li>
                                            <li class="shipping">
                                                Shipping Cost
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">Select your address</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Free</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">You Save<span>${{number_format(session('coupon')['value'],2)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>{{number_format($total_amount,2)}} XAF</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>{{number_format($total_amount,2)}} XAF</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Payments</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Cash On Delivery</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label> 
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content d-flex justify-content-between">
                                        {{-- <img src="{{('backend/img/payment-method.png')}}" alt="#"> --}}
                                        <img class="img-fluid" height="50" width="50" src="data:image/png;base64,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" alt="">
                                        <img class="img-fluid" height="50" width="50" src="data:image/png;base64,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" alt="">
                                        <img class="img-fluid" height="50" width="50" src="data:image/jpeg;base64,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" alt="">
                                        {{-- <img class="img-fluid" height="50" width="50" src="data:image/png;base64,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" alt=""> --}}
                                        <img class="img-fluid" height="50" width="50" src="data:image/png;base64,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" alt="">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">proceed to checkout</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over 1500  XAF</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush