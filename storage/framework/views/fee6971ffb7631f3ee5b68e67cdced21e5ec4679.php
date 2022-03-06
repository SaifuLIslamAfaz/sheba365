

<?php $__env->startSection('content'); ?>
    
    <?php if(get_setting('home_slider_images') != null): ?>
    <div class="home-banner-area">
        <?php $slider_images = json_decode(get_setting('home_slider_images'), true);  ?>
        <div class="aiz-carousel dots-inside-bottom dot-small-white" data-dots="true" data-infinite="true" data-autoplay='true'>
            <?php $__currentLoopData = $slider_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="position-relative">
                <img
                    class="d-block mw-100 lazyload img-fit rounded shadow-sm absolute-full"
                    src="<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>"
                    data-src="<?php echo e(uploaded_asset(json_decode(get_setting('home_slider_background'), true)[$key])); ?>"
                    alt="<?php echo e(env('APP_NAME')); ?> promo"
                    onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>';"
                >

                <div class="container position-relative z-1 py-4 py-md-5 text-white">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center text-lg-left pb-3 pb-lg-0">
                            <p class="text-uppercase mb-2"><?php echo e(json_decode(get_setting('home_slider_subtitle'), true)[$key]); ?></p>
                            <h2 class="mb-4 fw-900 h1"><?php echo json_decode(get_setting('home_slider_title'), true)[$key] ?></h2>
                            <a href="<?php echo e(json_decode(get_setting('home_slider_links'), true)[$key]); ?>" class="btn bg-alter rounded-0 text-uppercase"><?php echo e(translate('View Products')); ?></a>
                        </div>
                        <div class="col-lg-6 text-center">
                            <div class="px-4 px-md-0">
                                <img src="<?php echo e(uploaded_asset($slider_images[$key])); ?>" class="img-fluid mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php endif; ?>
    
    <!--added by nh start-->
    
    
<!--    <div class="tab-pane fade active in" id="flights-tab">-->
<!--    <section class="flight-section"> -->
<!--<div class="container-fluid"> -->
<!--<div class="row"> -->
<!--    <div class="col-sm-12 flight-box"> -->
<!--        <ul class="flight-btn nav">-->
<!--              <nav class="tabs tablink">-->
<!--    <div class="fligt_selector"></div>-->
<!--    <li class="ow" id="owtD"> <a href="#roundtab" data-toggle="tab" class="active"><i class="far fa-dot-circle"></i> One way</a></li>-->
<!--     <li class="rt" id="rtD"><a  href="#roundtab" data-toggle="tab"><i class="far fa-dot-circle"></i> Round trip</a></li>-->
<!--    <li class="mc"><a href="#mctab" data-toggle="tab"><i class="far fa-dot-circle"></i> Multicity</a></li>-->
<!--  </nav>-->
          
<!--        </ul>-->
<!--        <form class="tab-pane active" id="roundtab" action="https://travel.sheba365.com.bd/secure/flights/search" method="get">-->
<!--        <ul>-->
<!--              <li class="bussnessclass"><i class="far fa-clock"></i> -->
<!--            <select style="background: none;" name="class">-->
<!--                <option value="1">ECONOMY</option>-->
<!--                <option value="4">BUSINESS</option>-->
<!--            </select></li>-->
<!--                            <input type="hidden" name="pageSessionID" />-->
<!--                            <input type="hidden" name="journeyType" id="jtype" value="1" />-->
<!--                <input type="hidden" name="tab" id="tab" value="1" />-->
<!--                <input type="hidden" id="count_input" value="0" />-->
<!--        </ul>-->
<!--            <div class="col-md-12 col-xs-12  src-location"> -->
<!--                <div class="col-md-2 col-xs-12 col-sm-2 going-form-area">-->
<!--                    <div class="form-group on-way-form form-inline">-->
<!--                        <div class="col-xs-12 flway"> -->
<!--                            <label for="f1"><h3>Flying From</h3></label>-->
<!--                            <label class="lbicon"><i class="fas defico fa-plane-departure"></i></label>-->
<!--                            <input type="text" name="from" id="f1"  class="input-text src-going-input full-width" autocomplete="off" value="" placeholder=" Airport " onchange="movetoNext(this, 't1')" required="" style="font-size: 15px;">-->
<!--                            <ul class="dropdown-menu dmu txtcountry_f1" style="position: inherit;float: inherit; cursor: pointer;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry_f1"></ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>                   -->
<!--                <div class="col-md-2 col-xs-12 col-sm-2 going-form-area">-->
<!--                    <div class="form-group form-inline to-for-area">-->
<!--                        <div class="col-xs-12 flwayrt"> -->
<!--                            <label for="t1"><h3>Flying To</h3></label>-->
<!--                             <label class="lbicon"><i class="fas flyto fa-plane-arrival"></i></label>-->
<!--                            <input type="text" name="to" id="t1"  class="input-text full-width src-going-input" autocomplete="off" value="" placeholder=" Airport " onclick="this.select();" onchange="movetoNext(this, 'd1')" required="" style="font-size: 15px;">-->
<!--                            <ul class="dropdown-menu dmu txtcountry_t1" style="position: inherit;float: inherit; cursor: pointer;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry_t1"></ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div  class="datepanel col-xs-12 col-sm-3">-->
<!--                    <div class="col-md-6 col-xs-6 col-sm-6 going-form-area going-form-1">-->
<!--                        <div class="form-group">-->
<!--							<label><h3 style="margin-bottom:-5px;">Departing On</h3></label>-->
<!--								<div class="datepicker-wrap">-->
									<!--<input type="text" name="depDate"  class="input-text input-border check-in  " autocomplete="off" placeholder="mm/dd/yy" onChange="movetoNext(this, 'd22')" required />-->
<!--							 <input type="text" name="depDate" id="d1" value="03 Feb 2022" class="input-text input-border datepicker  full-width" placeholder="mm/dd/yy" readonly required="" style="padding-left:37px; font-size: 14px; font-weight: 500;" />-->
<!--								</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div style="display:none" class="col-md-6 col-xs-6 col-sm-6 going-form-area going-form-2">-->
<!--                        <div class="form-group">-->
<!--							<label><h3 style="margin-bottom:-5px;">Returning On</h3></label>-->
<!--								<div class="datepicker-wrap">-->
<!--									<input type="text" name="returnDate" id="d2" value="04 Feb 2022" readonly class="input-text input-border check-out"  placeholder="mm/dd/yy" style="padding-left:37px; font-size: 14px; font-weight: 500;" />-->
<!--								</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div style="padding-left:0px;padding-right:0px;" class="pagengar-list col-sm-4 col-md-4" >-->
<!--                                            <div style="padding-right:0px;" class="col-xs-4 pagess-area" >-->
<!--                                                <h3><i class="fas fa-male pasicona"></i> Adults</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="adultCount">-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                        <option value="5">05</option>-->
<!--                                                        <option value="6">06</option>-->
<!--                                                        <option value="7">07</option>-->
<!--                                                        <option value="8">08</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div style="padding-right:0px;" class="col-xs-4 pagess-area">-->
<!--                                                <h3> <i class="fas fa-child pasiconc"></i> children</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="childCount">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div style="padding-right:0px;" class="col-xs-4 pagess-area">-->
<!--                                                <h3><i class="pasiconi fas fa-baby"></i> Infants</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="infantCount">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                <div class="col-sm-1 col-md-1 text-center submit_btn_area">-->
<!--                     <button class="srcb" id="bhushan" data-toggle="modal" type="submit">SEARCH</button> -->
<!--                </div>-->
                   
<!--            </div>-->
<!--        </form>-->
        
        
<!--        <form class="formFlight tab-pane fade  in" id="mctab" action="https://travel.sheba365.com.bd/secure/flights/multiCitySearch" method="get">-->
<!--                   <div class="col-sm-12 col-md-12">-->
<!--                        <div  class="col-md-12 col-xs-12  src-location"> -->
<!--                        <div class="col-md-4 col-xs-12 col-sm-4 going-form-area">-->
<!--                            <div class="form-group on-way-form form-inline">-->
<!--                                <label style="margin-bottom:4px !important;" for="f1"><h3  class="mhed" style="margin-bottom: 11px;">From</h3></label>-->
<!--                                <div class="col-xs-12 flway">-->
<!--                                    <label style="margin-top: 9px;" class="lbicon"><i class="fas defico fa-plane-departure"></i></label>-->
<!--                                    <input type="text" name="from[]" id="f3" class="input-text input-border   full-width" placeholder="Airport" onClick="this.select();"  required style="font-size: 15px;padding-left:35px;" />-->
<!--                                    <ul class="dropdown-menu dmu txtcountry4" style="position: inherit;cursor: pointer;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry4"></ul>-->
<!--								</div>-->
<!--							</div>-->
							<!--<a href="javascript:;" class="exchange alt-exchange" tabindex="-1"><i class="fas fa-exchange-alt exchange-icon"></i></a>-->
<!--						</div>-->
<!--						<div class="col-md-4 col-xs-12 col-sm-4 going-form-area">-->
<!--                            <div class="form-group form-inline to-for-area">-->
<!--                                <label style="margin-bottom: 0px !important;" for="t1"><h3  class="mhed" style="margin-bottom: 11px;padding-left: 8px;">To</h3></label>-->
<!--                                <div class="col-xs-12 flwayrt">-->
<!--                                    <label style="margin-top: 9px;" class="lbicon"><i class="fas flyto fa-plane-arrival"></i></label>-->
<!--                                    <input type="text" name="to[]" id="t3" class="input-text  input-border full-width" placeholder="Airport" onClick="this.select();"  required style="font-size: 15px;padding-left:35px;" />-->
<!--                                    <ul class="dropdown-menu dmu txtcountry5" style="position: inherit;cursor: pointer;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry5"></ul>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-md-4 col-xs-6 col-sm-4 going-form-area">-->
<!--						    <label for="t1"><h3 class="mhed" style="margin-bottom: 20px;padding-left: 14px;text-transfarm">Date</h3></label>-->
<!--                            <div class="form-group ffgroup" style="margin: -13px 0 0 15px;">-->
<!--								<div class="datepicker-wrap" style="width: 100%;border: none;height: 50px;">-->
								    
<!--									<input type="text" name="depDate[]" id="d3" class="input-text  input-border full-width" readonly placeholder="mm/dd/yy" required style="font-size: 14px; font-weight: 500;padding-left:35px;" />-->
<!--								</div>-->
<!--								                            </div>-->
<!--                        </div>-->
<!--                    <div class="col-md-12 col-xs-12  src-location" id="multi-block"> -->
<!--                        <div class="col-md-4 col-xs-12 col-sm-4 going-form-area">-->
<!--                            <div class="form-group on-way-form form-inline">-->
<!--                                <div class="col-xs-12 flway">-->
<!--                                    <label style="margin-top: 9px;" class="lbicon"><i class="fas defico fa-plane-departure"></i></label>-->
<!--                                    <input type="text" name="from[]" id="f4" class="input-text input-border   full-width" placeholder="Airport" required style="font-size: 14px; font-weight: 500;padding-left:35px;" />-->
<!--									<ul class="dropdown-menu dmu txtcountry6" style="position: inherit;cursor: pointer;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry6"></ul>-->
<!--								</div>-->
<!--							</div>-->
							<!--<a href="javascript:;" class="exchange alt-exchange" tabindex="-1"><i class="fas fa-exchange-alt exchange-icon"></i></a>-->
<!--						</div>-->
<!--						<div class="col-md-4 col-xs-12 col-sm-4 going-form-area">-->
<!--                            <div class="form-group form-inline to-for-area">-->
<!--                                <div class="col-xs-12 flwayrt">-->
<!--                                    <label style="margin-top: 9px;" class="lbicon"><i class="fas flyto fa-plane-arrival"></i></label>-->
<!--                                    <input type="text" name="to[]" id="t4" class="input-text input-border   full-width" placeholder="Airport" required style="font-size: 14px; font-weight: 500;padding-left:35px;" />-->
<!--									<ul class="dropdown-menu dmu txtcountry7" style="position: inherit;cursor: pointer;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry7"></ul>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--						<div class="col-md-4 col-xs-6 col-sm-4 going-form-area">-->
<!--                            <div class="form-group ffgroup" style="margin: -13px 0 0 15px;">-->
<!--								<div class="datepicker-wrap" style="width: 100%;border: none;height: 50px;">-->
<!--								    <input type="text" name="depDate[]" id="d4" class="input-text input-border datepicker  full-width" readonly placeholder="mm/dd/yy" required style="font-size: 14px; font-weight: 500;" />-->
<!--								</div>-->
								
<!--                            </div>-->
<!--                        </div>-->
                        
						

<!--					</div>-->
<!--					<div class="col-md-12 col-xs-12 col-sm-12 text-center">-->
<!--							<a  href="javascript:;" id="addCity" class="addcitybtn btn"><i class="fa fa-plus"></i> Add City</a>-->
<!--						</div>-->
<!--					</div>-->
					
<!--     <div class="pagengar-list col-sm-offset-2 col-md-offset-2 col-sm-8 col-md-8">-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>Adults</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="adultCount">-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>children</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="childCount">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>Infants</h3>-->
<!--                                                <div class="selector pag_select" style="font-size: 15px; font-weight: 600;">-->
<!--                                                    <select class="full-width" name="infantCount">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div style="padding:40px;" class="col-md-12 text-center">-->
<!--                                                                                            <input type="hidden" name="pageSessionID" />-->
<!--                                                                                                <input type="hidden" name="journeyType" value="3" />-->
<!--                                                <input type="hidden" name="tab" value="3" />-->
<!--                                            <button type="submit" style="padding: 0 13px !important;" class="btn-medium proced-btn">Search Flights</button>-->
<!--                                        </div>-->
<!--                   </div>-->
<!--        </form>-->
<!--            </div>-->
<!--        </div>-->
<!--     </div>-->
<!--</section>-->
<!--</div>-->
<!--<div class="tab-pane fade" id="tour">-->
<!--    <section class="tour-pkg"> -->
            <!-- <div class="col-md-12 gif-tour">
<!--              <img class="tour-gif-icon" src="images/tourr-icon.gif" alt="air" >              -->
<!--             </div> -->         -->
<!--            <div class="col-xs-12 torserch"> -->
<!--                <form class="tour-form" action="https://travel.sheba365.com.bd/secure/tour/search" method="post">-->
<!--                    <div class="col-md-6 col-xs-12 dextop-src-area src-location"> -->
<!--                            <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                <div class="form-group on-way-form form-inline ">-->
                                    <!--<i class="fas fa-plane-departure col-xs-1 col-md-1"></i>-->
<!--                                    <div class="dest col-xs-11 col-md-12"> -->
<!--                                    <label class="toudesti"><h3>Destination Country</h3></label>-->
<!--                                    <select class="form-control col-xs-11 tourr-class" name="countryes[]" id="tour-country" required >-->
<!--                                        <option value="">Select Destination Country</option>-->
<!--                                                                                <option value="Bangladesh">Bangladesh</option>-->
<!--                                                                                <option value="India">India</option>-->
<!--                                                                                <option value="Thailand">Thailand</option>-->
<!--                                                                            </select>-->
<!--                                </div>-->
<!--                                </div>-->
<!--                           </div>                   -->
<!--                        </div>-->
<!--                       <div class="tour-sit-area"> -->
                       <!--<i class="fas fa-users col-xs-1"></i>-->
<!--                                <div class=" col-xs-12 col-md-6">-->
<!--                                     <div class="col-md-12 col-xs-12 col-sm-12">-->
<!--                                <div class="form-group form-inline totra">-->
<!--                                    <label class="toudesti"><h3>Location</h3></label>-->
                                    <!--<label for="readonly"> <h3 class="takeoff-area">Find tour location </h3></label>-->
<!--                                    <select id="tour-loc" name="" class="form-control col-xs-11 tourr-class">-->
<!--                                      <option value="">Find Tour Location</option>-->
<!--                                    </select>-->
<!--                                    <input type="hidden" name="totstar" value="3" />-->
<!--                                    <input type="hidden" name="totroom" value="1" />-->
<!--                                    <input type="hidden" name="tot_person" value="1" />-->
<!--                                    <input type="hidden" name="totAdult1" value="1" />-->
<!--                                    <input type="hidden" name="totKid1" value="0" />-->
<!--                                                                            <input type="hidden" name="pageSessionID" />-->
<!--                                                                    </div>-->
<!--                            </div>-->
                            
<!--                                </div>-->
<!--                            </div>-->
<!--                                 <div class="col-xs-12 col-md-12 text-center submit_btn_area"> -->
<!--                                   <button type="submit" class="btn-medium  tour-proced-btn">Search Tour</button>-->
<!--                                </div>-->
                    

                            
<!--                </form>-->
<!--            </div>-->
        
    
<!--</section>-->
<!--</div>-->
<!--<div class="tab-pane fade" id="train-tab">-->
<!--<section class="train-section"> -->
<!--    <div class="container-fluid"> -->
<!--        <div class="row"> -->
<!--            <div class="col-sm-12"> -->
<!--                 <form class="train-form" action="https://travel.sheba365.com.bd/secure/rail/search" method="post">-->
<!--                    <div class="col-md-4 col-xs-12  src-location"> -->
<!--                            <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                <div class="form-group on-way-form form-inline">-->
                                    <!--<i class="fas fa-train col-xs-1"></i>-->
<!--                                    <div class="flway col-md-6 col-xs-6 col-sm-6"> -->
<!--                                    <label  for="rfrom"><h3>From</h3></label>-->
                                    
<!--                                    <input type="text" name="from" id="rfrom" class="input-text src-going-input full-width " autocomplete="off" placeholder="Enter Station Name" onclick="this.select();" onchange="movetoNext(this, 'rto')" required="">-->
                                    <!--<input type="text" class="input-text full-width" id="from" name="from" autocomplete="off" placeholder="enter a Leaving Station" required />-->
<!--                                <ul class="dropdown-menu dmu txtcountryRail" style="position: relative;float: inherit;cursor: pointer;width: 180px;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountryRail"></ul>-->
<!--                                </div>-->
<!--                                </div>-->
                                <!--<a href="javascript:;" class="exchange alt-exchange" tabindex="-1"><i class="fas fa-exchange-alt exchange-icon trin-ex"></i></a>-->
<!--                                <div class="col-md-6 col-xs-6 col-sm-6 going-form-area">-->
<!--                                <div class="form-group form-inline to-for-area">-->
                                     <!--<i class="fas fa-train col-xs-1"></i>-->
<!--                                     <div class=" flwayrt col-xs-12"> -->
<!--                                    <label for="rto"><h3>To</h3></label>-->
                                    <!--<a href="javascript:;" class="exchange" tabindex="-1"><i class="fa fa-exchange  "></i></a>-->
<!--                                    <input type="text" name="to" id="rto" class="input-text full-width src-going-input" autocomplete="off" placeholder="Enter Station Name" onclick="this.select();" required="">-->
                                    <!--<input type="text" class="input-text full-width" id="to" name="to" autocomplete="off" placeholder="enter a destination Station" required />-->
<!--                                <ul class="dropdown-menu dmu txtcountryRail1" style="position: relative;float: inherit;cursor: pointer;width: 180px;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountryRail1"></ul>-->
<!--                                </div>-->
<!--                                </div>-->
                                
<!--                            </div>-->
<!--                           </div>                   -->
                            
<!--                        </div>-->
<!--                            <div style="padding:0px;" class="col-md-2 date-area"> -->
                            <!--<i class="fas fa-calendar-alt col-xs-1"></i>-->
<!--                                <div class="datepanel col-xs-12">-->
<!--                                     <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                <div class="form-group  traindep t-datepicker form-inline">-->
<!--                                    <label for="readonly"> <h3 class="takeoff-area">Departing On</h3></label>-->
<!--                                    <div class="datepicker-wrap">-->
<!--                						<input style="padding-left:36px;" type="text" name="date_from"  readonly value="03 Feb 2022" class="input-text input-border datepicker  full-width"  placeholder="mm/dd/yy"  required />-->
<!--                					 </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            
                        
            
<!--            <div style="margin-top: 28px;" class="pagengar-list col-sm-5 col-md-5">-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>Adults</h3>-->
<!--                                                <div class="selector pag_select">-->
<!--                                                    <select name="adult" class="full-width">-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                        <option value="5">05</option>-->
<!--                                                        <option value="6">06</option>-->
<!--                                                    </select><span class="custom-select full-width">01</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>children</h3>-->
<!--                                                <div class="selector pag_select">-->
<!--                                                    <select name="child" class="full-width">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select><span class="custom-select full-width">00</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class="col-xs-4 pagess-area">-->
<!--                                                <h3>Infants</h3>-->
<!--                                                <div class="selector pag_select">-->
<!--                                                    <select name="infant" class="full-width">-->
<!--                                                        <option value="0">00</option>-->
<!--                                                        <option value="1">01</option>-->
<!--                                                        <option value="2">02</option>-->
<!--                                                        <option value="3">03</option>-->
<!--                                                        <option value="4">04</option>-->
<!--                                                    </select><span class="custom-select full-width">00</span>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="col-sm-1 col-md-1 text-center">-->
<!--                     <button style="margin-top:50px;" class="srcb"  onclick="myFunction()" type="submit">SEARCH</button> -->
<!--                </div>-->
<!--                                                        <input type="hidden" name="pageSessionID" />-->
<!--                                            </form>-->
<!--            </div>-->
<!--        </div>-->
<!--     </div>-->
<!--</section>-->
<!--</div>-->

<!-- <div class="tab-pane fade" id="bus">-->
<!--     <section class="bus-section"> -->
<!--    <div class="container-fluid"> -->
<!--        <div class="row"> -->
<!--            <div class="col-sm-12"> -->
<!--                 <form action="">-->
<!--                    <div class="col-md-12 col-xs-12  src-location"> -->
<!--                            <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                <div class="form-group on-way-form form-inline">-->
<!--                                    <i class="fas fa-bus col-xs-1"></i>-->
                                    
<!--                                    <div class="col-xs-11"> -->
<!--                                    <label><h3>From</h3></label>-->
                                    
<!--                                    <input type="text" name="from" id="f221" class="input-text src-going-input full-width " autocomplete="off" placeholder="Enter Station Name" onclick="this.select();" onchange="movetoNext(this, 't1')" required="">-->
                                    <!--<input type="text" class="input-text full-width" id="from" name="from" autocomplete="off" placeholder="enter a Leaving Station" required />-->
<!--                                <ul class="dropdown-menu dmu txtcountry" style="position: inherit;float: inherit;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry_3"></ul>-->
<!--                                </div>-->
<!--                                </div>-->
                                <!--<a href="javascript:;" class="exchange alt-exchange" tabindex="-1"><i class="fas fa-exchange-alt exchange-icon"></i></a>-->
<!--                           </div>                   -->
<!--                            <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                <div class="form-group form-inline to-for-area">-->
<!--                                     <i class="fas fa-bus col-xs-1"></i>-->
<!--                                     <div class="col-xs-11"> -->
<!--                                    <label><h3>To</h3></label>-->
<!--                                    <a href="javascript:;" class="exchange hidden-xs" tabindex="-1"><i class="fa fa-exchange exchange-icon"></i></a>-->
<!--                                    <input type="text" name="to" id="t222" class="input-text full-width src-going-input" autocomplete="off" placeholder="Enter Station Name" onclick="this.select();" required="">-->
                                    <!--<input type="text" class="input-text full-width" id="to" name="to" autocomplete="off" placeholder="enter a destination Station" required />-->
<!--                                <ul class="dropdown-menu dmu txtcountry1" style="position: inherit;float: inherit;" role="menu" aria-labelledby="dropdownMenu" id="DropdownCountry1"></ul>-->
<!--                                </div>-->
<!--                                </div>-->
                                
<!--                            </div>-->
<!--                        </div>-->
<!--                            <div class="row date-area"> -->
                            <!--<i class="fas fa-calendar-alt col-xs-1"></i>-->
<!--                                <div class="datepanel col-xs-11">-->
<!--                                     <div  class="col-md-6 col-xs-6 col-sm-6 going-form-area going-form-1">-->
<!--                                <div class="form-group  t-datepicker form-inline">-->
<!--                                    <label for="readonly"> <h3 class="takeoff-area">Departing On</h3></label>-->
<!--                                    <div class="t-check-in check-in"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-xs-12 submit-btn bus-src-btn"> -->
<!--                                <button type="submit" class="btn-medium proced-btn">Search Bus</button>-->
<!--                            </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--     </div>-->
<!--</section>-->
<!--</div>-->
                                    
<!--                                    <div class="tab-pane fade" id="activity-tab">-->
<!--                                        <section style="    margin-top: -48px;" class="activitis-section"> -->
<!--                                        <div class="container-fluid"> -->
<!--                                            <div class="row"> -->
<!--                                                    <form action="https://travel.sheba365.com.bd/secure/activity/search" method="post">-->
<!--                                                        <div class="form-group col-md-8 col-md-offset-2">-->
                                                                        <!--<i style="margin-left: 11px;top:40px;" class="fas fa-umbrella-beach acti-icon col-xs-1"></i>-->
<!--                                                                        <div class="col-xs-10"> -->
<!--                                                                        <label><h3>Search for Cities, Activities, tours</h3></label>-->
<!--                                                                        <select class="form-control col-xs-11 tourr-class" name="countryes[]" required>-->
<!--                                                                            <option value="">Select Location</option>-->
<!--                                                                                                                                                        <option value="Bangladesh">Bangladesh</option>-->
<!--                                                                                                                                                        <option value="Bhutan">Bhutan</option>-->
<!--                                                                                                                                                        <option value="China">China</option>-->
<!--                                                                                                                                                        <option value="Hong Kong">Hong Kong</option>-->
<!--                                                                                                                                                        <option value="India">India</option>-->
<!--                                                                                                                                                        <option value="Indonesia">Indonesia</option>-->
<!--                                                                                                                                                        <option value="Japan">Japan</option>-->
<!--                                                                                                                                                        <option value="Malaysia">Malaysia</option>-->
<!--                                                                                                                                                        <option value="Maldives">Maldives</option>-->
<!--                                                                                                                                                        <option value="Saudi Arabia">Saudi Arabia</option>-->
<!--                                                                                                                                                        <option value="Sri Lanka">Sri Lanka</option>-->
<!--                                                                                                                                                        <option value="Thailand">Thailand</option>-->
<!--                                                                                                                                                        <option value="Turkey">Turkey</option>-->
<!--                                                                                                                                                    </select>-->
<!--                                                                        </div>-->
<!--                                                                        <div class="col-xs-2 col-md-2 submit-btn activates-btn"> -->
<!--                                                                        <label><h3>&nbsp</h3></label>-->
<!--                                                                    <button style="margin-top: 14px;height:40px;" type="submit" class="btn-medium proced-btn">Search Tour</button>-->
<!--                                                                </div>-->
<!--                                                                    </div>-->
                                                                
<!--                                                    </form>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                    </section>-->
<!--                                    </div>-->
<!--                                    <div class="tab-pane fade" id="visa-tab">-->
<!--                                        <form class="visa-area" action="https://travel.sheba365.com.bd/secure/visa/search" method="post">-->
<!--                                            <div style="margin-top: -52px;" class="src-location  col-md-12 ">-->
<!--                                                 <div class="col-md-3 col-xs-5 src-location"> -->
<!--                                                <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                                    <div class="form-group on-way-form form-inline">-->
                                                        <!--<i class="fas fa-plane-departure col-xs-1"></i>-->
<!--                                                        <div class="col-xs-12 col-md-12 col-sm-12"> -->
<!--                                                        <label class="visalavel"><h3>From Country</h3></label>-->
<!--                                                        <input type="text" name="to" id="visa1" class="input-text input-border   full-width" autocomplete="off" value="Bangladesh" onClick="this.select();"  required style="margin: 12px 0px;border: 1px solid #ccc;"/>-->
<!--                                                        <ul class="dropdown-menu dmu txtcountry_visa1" style="margin-top: -13px;left: 15px;float: inherit;min-width: 265px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry_visa1"></ul>-->
<!--                                                        </div> -->
<!--                                                    </div>-->
<!--                                               </div>                   -->
<!--                                           </div>-->
<!--                                        <div class="col-md-3 col-xs-5 src-location"> -->
<!--                                                <div class="col-md-12 col-xs-12 col-sm-12 going-form-area">-->
<!--                                                    <div class="form-group on-way-form form-inline">-->
                                                        <!--<i class="fas fa-plane-departure col-xs-1"></i>-->
<!--                                                        <div class="col-xs-12 col-md-12 col-sm-12"> -->
<!--                                                        <label class="visalavel"><h3>To Country</h3></label>-->
<!--                                                        <input type="text" name="from" id="visa" class="input-text input-border   full-width" autocomplete="off" placeholder="Enter Country To Search...." onClick="this.select();"  required style="margin: 12px 0px;border: 1px solid #ccc;"/>-->
<!--                                                        <ul class="dropdown-menu dmu txtcountry_visa" style="margin-top: -13px;left: 15px;float: inherit;min-width: 265px;" role="menu" aria-labelledby="dropdownMenu"  id="DropdownCountry_visa"></ul>-->
<!--                                                        </div> -->
<!--                                                    </div>-->
<!--                                               </div>                   -->
<!--                                           </div>-->
<!--                                            <div class="col-md-4 col-xs-5  src-location"> -->
<!--                                                <div class="going-form-area">-->
<!--                                                    <div class="form-group on-way-form form-inline">-->
                                                        <!--<i class="fas fa-passport  col-xs-1"></i>-->
<!--                                                        <div class="col-xs-12"> -->
<!--                                                        <label class="visalavel"><h3>Visa Type</h3></label>-->
<!--                                                        <select class="full-width  input-border " name="visa_type" required style="margin: 12px 0px;background:#fff;border: 1px solid #ccc;">-->
<!--                                                            <option value="">Select Visa Type</option>-->
<!--                                                            <option value="Tourist Visa">Tourist Visa</option>-->
<!--                                                            <option value="Medical Visa">Medical Visa</option>-->
<!--                                                            <option value="Business Visa">Business Visa</option>-->
<!--                                                            <option value="Work Visa">Work Visa</option>-->
<!--                                                            <option value="Approval Visa">Approval Visa</option>-->
<!--                                                            <option value="E Visa">E Visa</option>-->
<!--                                                            <option value="Transit Visa">Transit Visa</option>-->
<!--                                                        </select>-->
<!--                                                    </div>-->
<!--                                               </div>                   -->
<!--                                           </div>-->
<!--                                           </div>-->
<!--                                        <div class="col-md-2 submit-btn visa-submit-btn"> -->
<!--                                            <button type="submit" style="    margin-top: 41px;" class="btn-medium srcb">Search Visa</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    </form>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                 
<!--                    </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <!--<section class="bg-alter-12 py-2">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-5">-->
    <!--            <div class="col-xl-12 col-md-12">-->
    <!--               <div class="w3-container">-->

    <!--                  <div class="w3-bar " style="background-color: #ff330d">-->
    <!--                    <button class="w3-bar-item w3-button tablink"  onclick="openCity(event,'London')">London</button>-->
    <!--                    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Paris')">Paris</button>-->
    <!--                    <button class="w3-bar-item w3-button tablink" onclick="openCity(event,'Tokyo')">Tokyo</button>-->
    <!--                  </div>-->
                      
    <!--                  <div id="London" class="w3-container w3-border city">-->
    <!--                    <h2>London</h2>-->
    <!--                    <p>London is the capital city of England.</p>-->
    <!--                  </div>-->
                    
    <!--                  <div id="Paris" class="w3-container w3-border city" style="display:none">-->
    <!--                    <h2>Paris</h2>-->
    <!--                    <p>Paris is the capital of France.</p> -->
    <!--                  </div>-->
                    
    <!--                  <div id="Tokyo" class="w3-container w3-border city" style="display:none">-->
    <!--                    <h2>Tokyo</h2>-->
    <!--                    <p>Tokyo is the capital of Japan.</p>-->
    <!--                  </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    
    <!--added by nh end-->

    <?php
        $featured_categories = \App\Category::where('featured', 1)->get();
    ?>
    <?php if(count($featured_categories) > 0): ?>
    <section class="bg-alter-3 py-5">
        <div class="container">
            <div class="row gutters-5">
                <?php $__currentLoopData = $featured_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo e(route('products.category', $category->slug)); ?>" class="bg-white border d-block text-reset rounded p-2 shadow-sm mb-2">
                        <div class="row align-items-center no-gutters">
                            <div class="col-3 text-center">
                                <img
                                    src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                                    data-src="<?php echo e(uploaded_asset($category->banner)); ?>"
                                    alt="<?php echo e($category->getTranslation('name')); ?>"
                                    class="img-fluid img lazyload h-60px"
                                    onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>';"
                                >
                            </div>
                            <div class="col-7">
                                <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left"><?php echo e($category->getTranslation('name')); ?></div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="la la-angle-right text-primary"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo e(route('categories.all')); ?>" class="bg-dark border d-block text-white rounded p-2 shadow-sm mb-2">
                        <div class="row align-items-center no-gutters">
                            <div class="col-3 text-center">
                                <img
                                    src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                                    data-src="<?php echo e(static_asset('assets/img/all_categories.png')); ?>"
                                    alt="<?php echo e($category->getTranslation('name')); ?>"
                                    class="img-fluid img lazyload h-60px py-10px"
                                    onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>';"
                                >
                            </div>
                            <div class="col-7">
                                <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left"><?php echo e(translate('Browse All Categories')); ?></div>
                            </div>
                            <div class="col-2 text-center">
                                <i class="la la-angle-right text-white"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="bg-white pt-6">
        <div class="container">
            <div class="border border-alter px-4 pb-4">
                <div class="text-center mb-4">
                    <div class="d-inline-block w-300px">
                        <img class="bg-white px-4 mb-3 mt-n4" src="<?php echo e(uploaded_asset(get_setting('falaaq_store_logo'))); ?>">
                        <p class="fs-15"><?php echo e(get_setting('falaaq_store_text')); ?></p>
                    </div>
                </div>
                <div class="aiz-carousel gutters-5 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-infinite='true' data-autoplay="true">
                    <?php $__currentLoopData = filter_products(\App\Product::where('published', 1)->orderBy('num_of_sale', 'desc'))->limit(12)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-alter border-width-2">
                                <div class="position-relative">
                                    <a href="<?php echo e(route('product', $product->slug)); ?>" class="d-block">
                                        <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                                            data-src="<?php echo e(uploaded_asset($product->thumbnail_img)); ?>"
                                            alt="<?php echo e($product->getTranslation('name')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-title="<?php echo e(translate('Add to wishlist')); ?>" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-title="<?php echo e(translate('Add to cart')); ?>" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-center bg-alter">
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 h-35px">
                                        <a href="<?php echo e(route('product', $product->slug)); ?>" class="d-block text-reset"><?php echo e($product->getTranslation('name')); ?></a>
                                    </h3>
                                    <div class="fs-15">
                                        <?php if(home_base_price($product->id) != home_discounted_base_price($product->id)): ?>
                                            <del class="fw-600 opacity-50 mr-1"><?php echo e(home_base_price($product->id)); ?></del>
                                        <?php endif; ?>
                                        <span class="fw-700 text-primary"><?php echo e(home_discounted_base_price($product->id)); ?></span>
                                    </div>

                                    <?php if(\App\Addon::where('unique_identifier', 'club_point')->first() != null && \App\Addon::where('unique_identifier', 'club_point')->first()->activated): ?>
                                        <div class="rounded px-2 mt-2 bg-soft-primary border-soft-primary border">
                                            <?php echo e(translate('Club Point')); ?>:
                                            <span class="fw-700 float-right"><?php echo e($product->earn_point); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="border-top border-light border-width-2">
                                    <button type="button" onclick="showAddToCartModal(<?php echo e($product->id); ?>)" class="btn btn-block bg-alter fw-700 rounded-0">
                                        <?php echo e(translate('Add to Cart')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="text-center mt-4">
                    <a href="<?php echo e(route('search')); ?>" class="btn btn-primary rounded-0 text-uppercase"><?php echo e(translate('View All')); ?></a>
                </div>
            </div>
        </div>
    </section>

    
    <?php
        $flash_deal = \App\FlashDeal::where('status', 1)->where('featured', 1)->first();
    ?>
    <?php if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date): ?>
    <section class="pt-4 bg-white">
        <div class="container">
            <div class="separator separator-alter mb-4">
                <span class="bg-white px-5 text-center d-inline-block">
                    <span class="h4 fw-900"><?php echo e(translate('Flash Sale')); ?></span>
                    <div class="aiz-count-down align-items-center justify-content-center mt-3" data-date="<?php echo e(date('Y/m/d H:i:s', $flash_deal->end_date)); ?>"></div>
                </span>
            </div>
            <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-infinite='true' data-autoplay="true">
                <?php $__currentLoopData = $flash_deal->flash_deal_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $flash_deal_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $product = \App\Product::find($flash_deal_product->product_id);
                    ?>
                    <?php if($product != null && $product->published != 0): ?>
                        <div class="carousel-box">
                            <div class="aiz-card-box border border-alter border-width-2">
                                <div class="position-relative">
                                    <a href="<?php echo e(route('product', $product->slug)); ?>" class="d-block">
                                        <img
                                            class="img-fit lazyload mx-auto h-140px h-md-210px"
                                            src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                                            data-src="<?php echo e(uploaded_asset($product->thumbnail_img)); ?>"
                                            alt="<?php echo e($product->getTranslation('name')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>';"
                                        >
                                    </a>
                                    <div class="absolute-top-right aiz-p-hov-icon">
                                        <a href="javascript:void(0)" onclick="addToWishList(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-title="<?php echo e(translate('Add to wishlist')); ?>" data-placement="left">
                                            <i class="la la-heart-o"></i>
                                        </a>
                                        <a href="javascript:void(0)" onclick="showAddToCartModal(<?php echo e($product->id); ?>)" data-toggle="tooltip" data-title="<?php echo e(translate('Add to cart')); ?>" data-placement="left">
                                            <i class="las la-shopping-cart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-md-3 p-2 text-center bg-alter">
                                    <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 h-35px">
                                        <a href="<?php echo e(route('product', $product->slug)); ?>" class="d-block text-reset"><?php echo e($product->getTranslation('name')); ?></a>
                                    </h3>
                                    <div class="fs-15">
                                        <?php if(home_base_price($product->id) != home_discounted_base_price($product->id)): ?>
                                            <del class="fw-600 opacity-50 mr-1"><?php echo e(home_base_price($product->id)); ?></del>
                                        <?php endif; ?>
                                        <span class="fw-700 text-primary"><?php echo e(home_discounted_base_price($product->id)); ?></span>
                                    </div>
                                    <?php if(\App\Addon::where('unique_identifier', 'club_point')->first() != null && \App\Addon::where('unique_identifier', 'club_point')->first()->activated): ?>
                                        <div class="rounded px-2 mt-2 bg-soft-primary border-soft-primary border">
                                            <?php echo e(translate('Club Point')); ?>:
                                            <span class="fw-700 float-right"><?php echo e($product->earn_point); ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="border-top border-light border-width-2">
                                    <button type="button" onclick="showAddToCartModal(<?php echo e($product->id); ?>)" class="btn btn-block bg-alter fw-700 rounded-0">
                                        <?php echo e(translate('Add to Cart')); ?>

                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center mt-4">
                <a href="<?php echo e(route('flash-deal-details', $flash_deal->slug)); ?>" class="btn btn-primary rounded-0 text-uppercase"><?php echo e(translate('View All')); ?></a>
            </div>
        </div>
    </section>
    <?php endif; ?>

    
    <div class="bg-white pt-5">
        <div class="container">
            <div class="row gutters-10">
                <?php if(get_setting('home_banner1_images') != null): ?>
                    <?php $banner_1_imags = json_decode(get_setting('home_banner1_images')); ?>
                    <?php $__currentLoopData = $banner_1_imags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl col-md-6">
                            <div class="mb-3 mb-lg-0">
                                <a href="<?php echo e(json_decode(get_setting('home_banner1_links'), true)[$key]); ?>" class="d-block text-reset">
                                    <img src="<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>" data-src="<?php echo e(uploaded_asset($banner_1_imags[$key])); ?>" alt="<?php echo e(env('APP_NAME')); ?> promo" class="img-fluid lazyload w-100">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <div id="section_featured">

    </div>

    <section class="bg-white py-6 bg-center bg-cover" style="background-image: url('<?php echo e(uploaded_asset(get_setting('big_banner_bg'))); ?>')">
        <div class="container">
            <img src="<?php echo e(uploaded_asset(get_setting('big_banner_logo'))); ?>">
            <div class="mt-3">
                <a href="<?php echo e(get_setting('big_banner_link')); ?>" class="btn text-uppercase rounded-0 bg-alter-4 text-white"><?php echo e(translate('View Product')); ?></a>
            </div>
        </div>
    </section>

    
    <div id="section_home_categories">

    </div>

    
    <?php if(\App\BusinessSetting::where('type', 'classified_product')->first()->value == 1): ?>
        <?php
            $customer_products = \App\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
        ?>
           <?php if(count($customer_products) > 0): ?>
               <section class="pt-5 bg-white">
                   <div class="container">
                        <div class="separator separator-alter mb-4">
                            <span class="bg-white px-5 h4 fw-900"><?php echo e(translate('Classified Ads')); ?></span>
                        </div>
                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true' data-autoplay="true">
                           <?php $__currentLoopData = $customer_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $customer_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <div class="carousel-box">
                                    <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                        <div class="position-relative">
                                            <a href="<?php echo e(route('customer.product', $customer_product->slug)); ?>" class="d-block">
                                                <img
                                                    class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                    src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                                                    data-src="<?php echo e(uploaded_asset($customer_product->thumbnail_img)); ?>"
                                                    alt="<?php echo e($customer_product->getTranslation('name')); ?>"
                                                    onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>';"
                                                >
                                            </a>
                                            <div class="absolute-top-left pt-2 pl-2">
                                                <?php if($customer_product->conditon == 'new'): ?>
                                                   <span class="badge badge-inline badge-success"><?php echo e(translate('new')); ?></span>
                                                <?php elseif($customer_product->conditon == 'used'): ?>
                                                   <span class="badge badge-inline badge-danger"><?php echo e(translate('Used')); ?></span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="p-md-3 p-2 text-left">
                                            <div class="fs-15 mb-1">
                                                <span class="fw-700 text-primary"><?php echo e(single_price($customer_product->unit_price)); ?></span>
                                            </div>
                                            <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                <a href="<?php echo e(route('customer.product', $customer_product->slug)); ?>" class="d-block text-reset"><?php echo e($customer_product->getTranslation('name')); ?></a>
                                            </h3>
                                        </div>
                                   </div>
                               </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="text-center mt-4">
                            <a href="<?php echo e(route('customer.products')); ?>" class="btn btn-primary rounded-0 text-uppercase"><?php echo e(translate('View All')); ?></a>
                        </div>
                   </div>
               </section>
           <?php endif; ?>
       <?php endif; ?>

    
    <div class="pt-5 bg-white">
        <div class="container">
            <div class="row gutters-10">
                <?php if(get_setting('home_banner2_images') != null): ?>
                    <?php $banner_2_imags = json_decode(get_setting('home_banner2_images')); ?>
                    <?php $__currentLoopData = $banner_2_imags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl col-md-6">
                            <div class="mb-3 mb-lg-0">
                                <a href="<?php echo e(json_decode(get_setting('home_banner2_links'), true)[$key]); ?>" class="d-block text-reset">
                                    <img src="<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>" data-src="<?php echo e(uploaded_asset($banner_2_imags[$key])); ?>" alt="<?php echo e(env('APP_NAME')); ?> promo" class="img-fluid lazyload  w-100">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    
    <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
    <div id="section_best_sellers">

    </div>
    <?php endif; ?>

    
    <section class="py-6 bg-cover bg-center" style="background-image: url('<?php echo e(uploaded_asset(get_setting('shop_by_brands_bg'))); ?>');">
        <div class="container">
            <div class="separator separator-white mb-5">
                <span class="bg-alter px-5 h4 fw-900"><?php echo e(translate('Shop By Brands')); ?></span>
            </div>
            <div class="aiz-carousel gutters-5 half-outside-arrow dot-small-black" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-dots='true' data-autoplay="true">
                <?php $top10_brands = json_decode(get_setting('top10_brands')); ?>
                <?php $__currentLoopData = $top10_brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $brand = \App\Brand::find($value); ?>
                <?php if($brand != null): ?>
                <div class="carousel-box">
                    <div class="bg-white border border-light rounded hov-shadow-md my-2 p-3 has-transition">
                        <img
                            src="<?php echo e(static_asset('assets/img/placeholder.jpg')); ?>"
                            data-src="<?php echo e(uploaded_asset($brand->logo)); ?>"
                            alt="<?php echo e($brand->getTranslation('name')); ?>"
                            class="img-fluid img lazyload h-60px mx-auto"
                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/placeholder-rect.jpg')); ?>';"
                        >
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function(){
            $.post('<?php echo e(route('home.section.featured')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('<?php echo e(route('home.section.best_selling')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('<?php echo e(route('home.section.home_categories')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });

            <?php if(\App\BusinessSetting::where('type', 'vendor_system_activation')->first()->value == 1): ?>
            $.post('<?php echo e(route('home.section.best_sellers')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                $('#section_best_sellers').html(data);
                AIZ.plugins.slickCarousel();
            });
            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shebaco1/public_html/resources/views/frontend/index.blade.php ENDPATH**/ ?>