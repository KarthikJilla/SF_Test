<?php
   require_once('mobile/env.php');
   $cssFileName = __BRAND_URL__.'assets/css/'.($brand == 'adidas' ? 'adidas' : 'reebok').'mobilestorefinder.css';
?>
   
         <meta name="HandheldFriendly" content="True">
         <meta name="MobileOptimized" content="320">
         <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
         <meta http-equiv="cleartype" content="on">
         <title>adidas mobile_store_finder</title>
         <!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
         <!-- For iPhone 4 with high-resolution Retina display: -->
         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo __BRAND_URL__?>assets/img/h/apple-touch-icon.png">
         <!-- For first-generation iPad: -->
         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo __BRAND_URL__?>assets/img/m/apple-touch-icon.png">
         <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
         <link rel="apple-touch-icon-precomposed" href="<?php echo __BRAND_URL__?>assets/img/l/apple-touch-icon-precomposed.png">
         <!-- For nokia devices: -->
         <link rel="shortcut icon" href="<?php echo __BRAND_URL__?>assets/img/l/apple-touch-icon.png">

		<script>
		   var theLocale="<?php echo $locale; ?>";
		   var theCountryName="<?php echo $market; ?>";
		   var theLanguage="<?php echo $lan; ?>";
		   var BRAND_URL="<?php echo __BRAND_URL__?>";
		   var theBrand="<?php echo $brand ?>";
		   var PLACES_URL="<?php echo __PLACES_URL__?>";
		   console.log(theLocale+'-'+theCountryName+'-'+BRAND_URL+'-'+theBrand);
	   </script> 

	   <script type="text/javascript">
            var utag_data = {
                campaign_name: "STOREFINDER",
                country: "UK",
                date: "090718",
                environment: "DEFAULT",
                is_mobile: "TRUE",
                language: "EN",
                page_category: "STOREFINDER",
                page_name: "HOME",
                page_type: "PLATFORM",
                site_name: "ADIDAS",
                site_owner: "BRAND"
            };
         </script>
         <script type="text/javascript">
            (function(a,b,c,d){
                a='//tags.tiqcdn.com/utag/adidas/adidasglobal/dev/utag.js';
                b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;
                a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);
            })();
        
         </script>
         <link rel='stylesheet' media='screen' type='text/css' href='<?php echo __BRAND_URL__?>assets/css/main.css' />
		 <link rel='stylesheet' type='text/css' href='<?php echo $cssFileName; ?>' />
         <script src="//maps.googleapis.com/maps/api/js?client=gme-adidasag&v=3.31&libraries=places&sensor=true&channel=SF_Mobile"></script>
         <script src='//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js'></script>
         <script type="text/javascript">
            var locationServiceBasePath = '{{locationServiceBasePath}}';
         </script>
         <script type="text/javascript">
		 window.onload = function(){
            utag.view({
                campaign_name: utag_data.campaign_name,
                country: utag_data.country,
                date: utag_data.date,
                environment: utag_data.environment,
                is_mobile: utag_data.is_mobile,
                language: utag_data.language,
                page_category: utag_data.page_category,
                page_name: "HOME",
                page_type: utag_data.page_type,
                search_term: utag_data.search_term,
                site_name: utag_data.site_name,
                site_owner: utag_data.site_owner,
            });
		 }
         </script>
         
		 <script src="<?php echo __BRAND_URL__?>assets/js/jquery.js"></script>
         <script src="<?php echo __BRAND_URL__?>assets/js/mobilestorefinder.js"></script>
      
         <script type="text/javascript">
            (function() {
                window['localizationString'] = {
                    "addressbar_placeholder": "{%trans%}mobile_input_address{%endtrans%}",
                    "main_loadingMessage": "{%trans%}mobile_loading_message{%endtrans%}",
                    "main_loadingErrorMessage": "{%trans%}mobile_loading_error_message{%endtrans%}",
                    "main_ListLabel": "{%trans%}mobile_list{%endtrans%}",
                    "main_MapLabel": "{%trans%}mobile_map{%endtrans%}",
                    "main_BackButtonLabel": "{%trans%}mobile_back_button{%endtrans%}",
                    "list_MoreLabel": "{%trans%}mobile_more{%endtrans%}",
                    "list_GpsAlertLabel": "{%trans%}mobile_gps_alert{%endtrans%}",
                    "suggest_HeaderLabel": "{%trans%}mobile_header{%endtrans%}",
                    "suggest_CancelLabel": "{%trans%}mobile_cancel{%endtrans%}",
                    "detail_OpeningHoursLabel": "{%trans%}mobile_opening_hours{%endtrans%}",
                    "detail_AddressLabel": "{%trans%}mobile_address{%endtrans%}",
                    "detail_DirectionsLabel": "{%trans%}mobile_openmap{%endtrans%}",
                    "search_ChooseOnMapLabel": "{%trans%}mobile_choose_on_map{%endtrans%}",
                    "search_UseMyLocationLabel": "{%trans%}mobile_use_my_location{%endtrans%}",
                    "main_FilterByShopLabel": "{%trans%}mobile_filter_by_shop{%endtrans%}",
                    "main_MapViewLabel": "{%trans%}mobile_map_view{%endtrans%}",
                    "main_ListViewLabel": "{%trans%}mobile_list_view{%endtrans%}",
                    "list_WhenWeAreOpenLabel": "{%trans%}mobile_when_we_are_open{%endtrans%}",
                    "list_OpenTodayFromLabel": "{%trans%}mobile_open_today_from{%endtrans%}",
                    "directions_GetDirections": "{%trans%}mobile_get_directions{%endtrans%}",
                    "directions_FromLabel": "{%trans%}mobile_from{%endtrans%}",
                    "directions_ToLabel": "{%trans%}mobile_to{%endtrans%}",
                    "directions_BikeLabel": "{%trans%}mobile_bike{%endtrans%}",
                    "directions_PublicLabel": "{%trans%}mobile_public{%endtrans%}",
                    "directions_CarLabel": "{%trans%}mobile_car{%endtrans%}",
                    "directions_WalkLabel": "{%trans%}mobile_walk{%endtrans%}",
                    "timings_MondayLabel": "{%trans%}mobile_monday{%endtrans%}",
                    "timings_TuesdayLabel": "{%trans%}mobile_tuesday{%endtrans%}",
                    "timings_WednesdayLabel": "{%trans%}mobile_wednesday{%endtrans%}",
                    "timings_ThursdayLabel": "{%trans%}mobile_thursday{%endtrans%}",
                    "timings_FridayLabel": "{%trans%}mobile_friday{%endtrans%}",
                    "timings_SaturdayLabel": "{%trans%}mobile_saturday{%endtrans%}",
                    "timings_SundayLabel": "{%trans%}mobile_sunday{%endtrans%}",
                    "detail_SeeOnMapsLabel": "{%trans%}mobile_see_on_maps{%endtrans%}",
					"main_legend2Label": "{%trans%}wait_less_shop_more{%endtrans%}"
                };
            })();
         </script>
		 <section class="msf">
            <div class="loadingDiv overlay_block"></div>
            <!-- Start of first page -->
            <div data-role="page" id="splashscreen" class="splashscreen" data-theme='a'>
               <div data-role="content">
                  <a href="#listview">
                     <div id="brandload"></div>
                  </a>
                  <div id="indicator"></div>
               </div>
               <!-- /content -->
            </div>
            <!-- /page -->
            <section data-role="none" id="msf_controls"  class="msf_controls" data-theme="c" >
               <a href="#" id="filter_by_button" class="filter_by_button" title="Find by stores" data-role="none">            
               <span class="filterByShop">{{'mobile_filter_by_shop'|trans}}</span>
               <span class="all"> [All]</span>
               <i></i>
               </a>
               <a href="#" class="view_switcher_button"  title="{{'mobile_store_finder_map_view'|trans}}"><i class="view_switcher_icon icon"></i><span class="map_list">map</span></a>
            </section>
            <section  data-role="none" id="buttonsview" class="buttonsview" data-theme="c" style="display: none;">
               <button class="search_button" data-role="none" style="display: block;">
               <i></i>
               </button>
               <button class="locate_me" data-role="none" style="display: block;">
               <i></i>
               </button>
			   <?php if($brand == 'adidas' && ($lan == 'DE' || $lan == 'ES' || $lan == 'NL' || $lan == 'PT' || $lan == 'IT')) : ?>
			   <button class="legend2_button" data-role="none" style="display: block;"><span class="legend2">{{'wait_less_shop_more'|trans}}</span>
			   <i></i>
               </button>
			   <?php endif; ?>
            </section>
            <section data-role="page" id ="mapview" class="mapview">
               <section class="directionsfromto" style="display:none;">
                  <table>
                     <tr>
                        <td rowspan="2">
                           <a href="#" data-role="none">
                              <img class="travelModeImg" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_running_gray.png" width="30" height="30" style="opacity:0.5;">
                              <p class="travelModeText">walk</p>
                           </a>
                        </td>
						<?php if($brand == 'adidas') : ?>
                        <td style="width:12%;vertical-align: bottom; font-style:italic ; color : #1987D1;"><span class="FromText">{{'mobile_from'|trans}}</span></td>
						<td style="text-align: left;vertical-align: bottom;width:60%;">
                           <p class="directionsFrom" style="font-size:13px ;"></p>
                        </td>
                        <td rowspan="2">
                           <a href="#" data-role="none">
                              <img class="closeRouteMap" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_close.png" width="35" height="35">
                        </td>
						<?php elseif($brand == 'reebok') : ?>
						<td style="width:12%;vertical-align: bottom; font-style:italic ; color : #ab2328;"><span class="FromText">{{'mobile_from'|trans}}</span></td>
						<td style="text-align: left;vertical-align: bottom;width:60%;">
                           <p class="directionsFrom" style="font-size:13px ;"></p>
                        </td>
                        <td rowspan="2">
                           <a href="#" data-role="none">
                              <img class="closeRouteMap" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_close_red.png" width="35" height="35">
                        </td>
						<?php endif; ?>
                        
                     </tr>
                     </tr>    
                     <tr>
					 <?php if($brand == 'adidas') : ?>
						<td style="width:12%;vertical-align: top; font-style:italic ; color : #1987D1;"><span class="ToText">{{'mobile_to'|trans}}</span></td>
					<?php elseif($brand == 'reebok') : ?>
					<td style="width:12%;vertical-align: top; font-style:italic ; color : #ab2328;"><span class="ToText">{{'mobile_to'|trans}}</span></td>
					<?php endif; ?>
						<td style="text-align: left;vertical-align: top; width:60%;"><p class="directionsTo" style="font-size:13px ;"></p></td>
					</tr>
                  </table>
               </section>
               <section class="chooseonmapview" style="display:none;">
               <table>
               <tbody><tr style="display:none;">                            
               <td><input type="text" id="latitude" data-role="none"></td>                
               <td><input type="text" id="longitude" data-role="none"></td>
               </tr><tr>                            
               <td class="ok"><input type="button" id="save" value="Ok" data-role="none"></td>                
               <td class="cancel"><input type="button" id="cancel" value="Cancel" data-role="none"></td>
               </tr>
               </table>
               </section>
               <section id="map_canvas" class="map_canvas">
               <!-- map loads here... -->
               </section>
               <!--TBD-B -->
               <!--<button class="legend_button" data-role="none">{{'mobile_store_finder_legend'|trans}}</button>-->
               <section id="map_controls" class="map_controls">
               <button class="locate_me" data-role="none"></button>
               <button class="search_button" data-role="none"></button>
               </section>
               <section class="directionsrenderer"  style="display:none;">
               <table id="directionsummary">
               <tr><td class="summary"></td><td class="ui-icon ui-icon-shadow ui-icon-minus" style="margin-top:15px;"></td></tr>
               </table>
               <!--<a href="#" class="directionsnavigation" style="display:none;"><img class="" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_navigation.png" width="30" height="30"></a>-->
               <div id="directiondetails" style="position:relative;">
               <a href="#" class="directionsnavigationTop" style="display:none;"><img class="" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_navigation.png" width="30" height="30"></a>
               <table class="directions" style="display:none;"></table>
               </div>
               </section>
            </section>
            <section data-role="page" id="listview" class="listview content" data-theme="c">
               <!--<section class="msf_controls">
                  <a href="#" id="filter_by_button" class="filter_by_button" title="Find by stores" data-role="none">            
                      <span class="filterByShop">{{'mobile_filter_by_shop'|trans}}</span>
                      <span class="all"> [All]</span>
                      <i></i>
                  </a>
                  <a href="#" class="view_switcher_button"  title="{{'mobile_store_finder_list_view'|trans}}"><i class="view_switcher_icon icon"></i><span class="map_list">map</span></a>
                  </section>-->
				<!--<div><span class="legend2" >WAIT LESS, SHOP MORE</span></div>-->
               <ul id="resultlist" class="resultlist" data-role="collapsibleset" data-iconpos="right"></ul>
               <div id="msf_myPopup_cnc" class="popup">
                  <div class="popup-content">
                     <p><span id="cncDesc">cnc_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_ela" class="popup">
                  <div class="popup-content">
                     <p><span id="elaDesc">ela_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_run_genie" class="popup">
                  <div class="popup-content">
                     <p><span id="runGenieDesc">run_genie_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_gift_wrapping" class="popup">
                  <div class="popup-content">
                     <p><span id="giftWrappingDesc">gift_wrapping_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_mi_adidas" class="popup">
                  <div class="popup-content">
                     <p><span id="miAdidasDesc">mi_adidas_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_shoe_lasering" class="popup">
                  <div class="popup-content">
                     <p><span id="shoeLaseringDesc">shoe_lasering_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_flocking" class="popup">
                  <div class="popup-content">
                     <p><span id="flockingDesc">flocking_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_food_nutrition" class="popup">
                  <div class="popup-content">
                     <p><span id="foodNutritionDesc">food_nutrition_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_confirmed_app" class="popup">
                  <div class="popup-content">
                     <p><span id="confirmedAppDesc">confirmed_app_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_gift_cards" class="popup">
                  <div class="popup-content">
                     <p><span id="giftCardsDesc">gift_cards_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_free_wifi" class="popup">
                  <div class="popup-content">
                     <p><span id="freeWifiDesc">free_wifi_desc</span></p>
                  </div>
               </div>
               <div id="msf_myPopup_take_back_program" class="popup">
                  <div class="popup-content">
                     <p><span id="takeBackProgramDesc">take_back_program_desc</span></p>
                  </div>
               </div>
            </section>
            <section id ="detailview" class="detailview" data-role="page">
               <section class="backHeader">
                  <div class="back">
                     <a href="#" class="clearfix" data-role="none">
                     <i class="back_arrow"></i>
                     </a>
                  </div>
               </section>
               <section class="details" data-role="content">
                  <ul>
                     <li class="name"></li>
                     <li class="companyOwned"></li>
                     <li class="street"></li>
                     <li class="city"></li>
                     <li class="email"><a data-role="none" rel="external"></a></li>
                     <li class="website"><a target="_blank" data-role="none" rel="external"></a></li>
                  </ul>
                  <table class="detailsbutton">
                     <tr id="call" class="clickbutton">
                        <td><a href="#"><img  alt="contact" src="<?php echo __BRAND_URL__?>assets/img/sf/iconOpen.png"><span class="phone">CALL</span></a></td>
                     </tr>
                     <tr class="clickbutton">
                        <td><a href="#" class="clickdirections"><img  alt="contact" src="<?php echo __BRAND_URL__?>assets/img/sf/iconOpen.png"><span class="directions">{{'mobile_get_directions'|trans}}</span></a></td>
                     </tr>
                  </table>
                  <div >
                     <p class="open"><span class="WhenWeAreOpenText">{{'mobile_when_we_are_open'|trans}}</span></p>
                  </div>
                  <div class="days">
                     <table id="AllOpeningHours"></table>
                     <table id="AllInstoreServices"></table>
                  </div>
               </section>
               <section class="staticMap" data-role="content">        
               </section>
               <!--
                  <section class="open big_button_block2">
                      <a id="routebutton" href="#" data-role="none">{{'mobile_openmap'|trans}}</a>
                  </section>
                  -->
            </section>
            <section id="legendview" class="legendview" data-role="page">
               <!--<section class="msf_controls">
                  <a href="#" id="filter_by_button" class="filter_by_button" title="Find by stores" data-role="none">            
                       <span class="filterByShop">{{'mobile_filter_by_shop'|trans}}</span>
                       <span class="all"> [All]</span>
                       <i class="filterby"></i>
                   </a>
                   <a href="#" class="view_switcher_button"  title="{{'mobile_store_finder_list_view'|trans}}"><i class="view_switcher_icon icon"></i><span class="map_list"></span></a>
                  </section> -->
               <section class="msf_filterby">
                  <div class="center">
                     <a href="#" id="Show_all_stores_button" class="Show_all_stores_button" title="Show all stores" data-role="none">
                     <span id="ShowAllStores">SHOW ALL STORES</span>
                     </a>
                     <a href="#" id="clear_all_filters_button" class="Show_all_stores_button" title="Show all stores" data-role="none" style="display:none;">
                     <span id="ClearAllFilters">CLEAR ALL FILTERS</span>
                     </a>
                  </div>
					<?php if($brand == 'adidas') : ?>
					<div class="Icons_Block">
						<!--<div class="Icons_Block_Icon" data="performance"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/performance.png" width="45" height="58"><p>adidas</br>Store</p></a></div>-->
						 <div class="Icons_Block_Icon" data="performance">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_store.svg" width="45" height="58">
							   <p>adidas</br>Store</p>
							</a>
						 </div>
						 <!--<div class="Icons_Block_Icon" data="brand_store">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_brand.svg" width="45" height="58">
							   <p>adidas</br>Brand Center</p>
							</a>
						 </div>-->
						  <div class="Icons_Block_Icon" data="action_sports">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/blackbird_b.png" width="45" height="58">
							   <p>Action</br>Sports</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="factory_outlet">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_outlet.svg" width="45" height="58">
							   <p>adidas</br>Outlet Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="originals">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_originals.svg" width="45" height="58">
							   <p>adidas</br>Originals Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="neo_label">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_neo.svg" width="45" height="58">
							   <p>adidas</br>Neo Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="y3">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_y3.svg" width="45" height="58">
							   <p>Y-3</br>Store</p>
							</a>
						 </div>
						 <!--<div class="Icons_Block_Icon" data="slvr"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_slvr.svg" width="45" height="58"><p>adidas</br>SLVR Store</p></a></div>-->
						 <div class="Icons_Block_Icon" data="children">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_kids.svg" width="45" height="58">
							   <p>adidas</br>Kids Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="woman">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_women.svg" width="45" height="58">
							   <p>adidas</br>Woman's Store</p>
							</a>
						 </div>
						 <!--<div class="Icons_Block_Icon" data="footwear"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/footwear.png" width="45" height="58"><p>adidas</br>Footware Stroe</p></a></div>-->
						 <!--<div class="Icons_Block_Icon" data="football"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/football.png" width="45" height="58"><p>adidas</br>Football store</p></a></div>-->
						 <!--<div class="Icons_Block_Icon" data="football"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/football.png" width="45" height="58"><p>adidas</br>Football store</p></a></div>
							<div class="Icons_Block_Icon" data="basketball"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/svg/markers/Pin_ Brand copy 2.png" width="45" height="58"><p>adidas</br>Basketball Store</p></a></div>
							<div class="Icons_Block_Icon" data="outdoor"><a href="#"><img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/outdoor.png" width="45" height="58"><p>adidas</br>Outdoor Store</p></a></div>-->
						 <div class="Icons_Block_Icon" data="porsche_design">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_porsche.svg" width="45" height="58">
							   <p>Porsche Design</br>Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="stella_mccartney">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_stella.svg" width="45" height="58">
							   <p>adidas</br>Stella McCartney</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="Retail">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_retail.svg" width="45" height="58">
							   <p>Retail</br>Store</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="golf">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_retail.svg" width="45" height="58">
							   <p>Golf</br>Stores</p>
							</a>
						 </div>
						 
					  </div>
					<?php elseif($brand == 'reebok') : ?>
					<div class="Icons_Block">
						 <div class="Icons_Block_Icon" data="store">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_reebok.svg" width="45" height="58">
							   <p>Stores</p>
							</a>
						 </div>
						 <div class="Icons_Block_Icon" data="gym">
							<a href="#">
							   <img class="img1" src="<?php echo __BRAND_URL__?>assets/img/sf/svg/markers/marker_icon_reebok.svg" width="45" height="58">
							   <p>Gym</p>
							</a>
						 </div>
					  </div>
				  <?php endif; ?>
                  <div class="center_bottom">
                     <a href="#" id="Show_selected_stores_button" class="Show_selected_stores_button" title="Show selected stores" data-role="none">
                     <span id="ShowSelectedStores">SHOW SELECTED STORES</span>
                     </a>
                  </div>
               </section>
            </section>
            <section data-role="page" id ="directionview" class="directionview">
               <section class="directionpanel">
                  <table class="directionsFromTo">
                     <tr>
                        <!--
                           <td><a href="#" class="back" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/icon_chevron_left_black.png" width="25" height="30"/><p>back</p></a></td>
                           <td><a href="#" class="running active" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_walk_active.svg" width="45" height="30"/><p>{{'mobile_walk'|trans}}</p></a></td>
                           <td><a href="#" class="cycling" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_bicycle_inactive.svg" width="45" height="30"/><p>{{'mobile_bike'|trans}}</p></a></td>
                           <td><a href="#" class="public" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_public_inactive.svg" width="45" height="30"/><p>{{'mobile_public'|trans}}</p></a></td>
                           <td><a href="#" class="car" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icons_car_inactive.svg" width="45" height="30"/><p>{{'mobile_car'|trans}}</p></a></td>
                           <td></td>
                           -->
                        <td><a href="#" class="back" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/icon_chevron_left_black.png" width="15" height="30"/></a></td>
                        <td><a href="#" class="running active" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_walk_active.svg" width="45" height="30"/></a></td>
                        <td><a href="#" class="cycling" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_bicycle_inactive.svg" width="45" height="30"/></a></td>
                        <td><a href="#" class="public" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icon_public_inactive.svg" width="45" height="30"/></a></td>
                        <td><a href="#" class="car" data-role="none"><img src="<?php echo __BRAND_URL__?>assets/img/sf/svg/drivingmodes/icons_car_inactive.svg" width="45" height="30"/></a></td>
                        <td></td>
                     </tr>
                     <tr id="hr">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                     </tr>
                     <tr>
					 <?php if($brand == 'adidas') : ?>
                        <td rowspan="3" style="background: url(&quot;<?php echo __BRAND_URL__?>assets/img/sf/icon_fromto.png&quot;);background-size: 4px 40%;vertical-align: middle;text-align: center;position: relative;background-repeat: no-repeat;background-position: center;">
                           <span class="srcImgBefore">
								<img class="top" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_directions_geolocation.png" width="30" height="30" style="margin-top: -67%;">
                           </span>
                           <span style="display: block;height: 0px;">
                           <span class="destImgBefore">
                           <i style="margin-left: 5px;" class="pin"></i></span>
                           </span>
                        </td>
					<?php elseif($brand == 'reebok') : ?>
                        <td rowspan="3" style="background: url(&quot;<?php echo __BRAND_URL__?>assets/img/sf/icon_fromto_red.png&quot;);background-size: 4px 40%;vertical-align: middle;text-align: center;position: relative;background-repeat: no-repeat;background-position: center;">
                           <span class="srcImgBefore">
								<img class="top" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_directions_geolocation_red.png" width="30" height="30" style="margin-top: -67%;">
                           </span>
                           <span style="display: block;height: 0px;">
                           <span class="destImgBefore">
                           <i style="margin-left: 5px;" class="pin"></i></span>
                           </span>
                        </td>
					<?php endif; ?>
                        <td colspan="4" class="srcText">
                           <!-- [2,2] [2,3] [2,4] [2,5]  -->
                           <div class="source">
                           <p>ENTER A LOCATION</p>
                           <input type="text" readonly="" data-role="none">
                           <div>
                        </td>
                        <td></td>
                     </tr>
                     <!--<td><img class="" src="<?php echo __BRAND_URL__?>assets/img/sf/icon_fromto.png" height="60"/></td>-->
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><a href="#" class="switch" data-role="none">
					 <?php if($brand == 'adidas') : ?>
						<img src="<?php echo __BRAND_URL__?>assets/img/sf/icon_direction_switch.png" width="20" height="25"/>
					<?php elseif($brand == 'reebok') : ?>
						<img src="<?php echo __BRAND_URL__?>assets/img/sf/icon_direction_switch_red.png" width="20" height="25"/>
					<?php endif; ?>
					 
					 </a></td>
                     <td></td>
                     <tr>
                        <!--<td><i class="pin" style="margin-left: 10px;"></i></td>-->
                        <td colspan="4" class="destText">
                           <!-- [4,2] [4,3] [4,4] [4,5] -->
                           <ul class="destination">
                              <!--<div id="companyOwned" style="display:none;"> COMPANY OWNED STORE </div>-->
                              <li class="name"></li>
                              <li class="street"></li>
                              <li class="city"></li>
                           </ul>
                        </td>
                        <td>&nbsp;</td>
                     </tr>
                     <!--
                        <tr>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        -->
                  </table>
               </section>
               <section class="routes">
                  <table class="suggestroutes"></table>
               </section>
            </section>
            <section data-role="page" id ="searchview" class="searchview">
               <!--<section class="msf_controls">
                  <a href="#" id="filter_by_button" class="filter_by_button" title="Find by stores" data-role="none">            
                      <span class="filterByShop">{{'mobile_filter_by_shop'|trans}}</span>
                      <span class="all"> [All]</span>
                      <i></i>
                  </a>
                  <a href="#" class="view_switcher_button"  title="{{'mobile_store_finder_list_view'|trans}}"><i class="view_switcher_icon icon"></i><span class="map_list">list</span></a>
                  </section>-->
               <table id="searchlocation">
                  <tr>
                     <td>
                        <a href="#" class="back"><i></i></a>
                        <a href="#" class="search"><i></i></a>        
                        <div id="placeholder">
                           <input type="search" class="search_input" data-role="none" required>
                           <label>Country city state zip</label>
                        </div>
                     </td>
                  </tr>
                  <tr  id="location" class="loc_options" >
                     <td>    
                        <a href="#" data-role="none"><i></i><span class="UseMyLocationText"></span></a>
                     </td>
                  </tr>
                  <tr id="choose_map" class="loc_options">
                     <td>
                        <a href="#" data-role="none"><i></i><span class="ChooseOnMapText"></span></a>
                     </td>
                  </tr>
               </table>
            </section>
			<section data-role="page" id ="legend2view" class="legend2view">
               <table id="legend2location">
                  <tr>
                      <td>
						<a href="#" class="back"><i></i></a>
						<img src="<?php echo __BRAND_URL__?>assets/img/sf/adidas-logo.png" width="100" height="100" style="margin: 0 30%"/>
					  </td>
                  </tr>
                  <tr>
                     <td><span id="firsttext" class="firsttext">wait_less_shop_more</span></td>
                  </tr>
                  <tr>
                     <td>
						<?php if($lan == 'DE') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/de-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php elseif($lan == 'ES') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/es-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php elseif($lan == 'FR') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/fr-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php elseif($lan == 'NL') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/nl-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php elseif($lan == 'IT') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/it-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php elseif($lan == 'PT') : ?>
							<img src="<?php echo __BRAND_URL__?>assets/img/sf/pt-qrcode.png" width="100" height="100" style="margin: 0 35%"/>
						<?php endif; ?>
					 </td>
                  </tr>
				  <tr>
                     <td><span id="secondtext" class="secondtext">download_app</span> </br><span class="thirdtext">book_store_visit</span></td>
                  </tr>
               </table>
            </section>
         </section>
   
