<?php
// Include shared file for rendering header
define ('BASE_PATH', __DIR__ . '/..');
require_once BASE_PATH . '/inc/lib/Language.php';
require_once('env.php');

//<!-- CSS concatenated and minified via ant build script-->
$cssFileName = __ADIDAS_URL__.'assets/css/'.($brand == 'adidas' ? 'adidas' : 'reebok').'style.css';

?> 
<script>
    var isIndex2 = false;
	var isCntryManSet = false;
</script>
<!-- Type C to Type B section start-->
<script>
    var theLocale = "<?php echo $market; ?>";
    var theCountryName = "<?php echo $locale; ?>";
	var theLanguage = "<?php echo $lan; ?>";
	var adidas_URL = "<?php echo __ADIDAS_URL__?>";
	var theBrand = "<?php echo $brand; ?>";
	var places_URL="<?php echo __PLACES_URL__?>";
	var utag_URL="<?php echo __UTAG_URL__?>";
</script>

<link type="text/css" rel="stylesheet" media="all" href="<?php echo $cssFileName; ?>">
<script src='//js.maxmind.com/js/apis/geoip2/v2.1/geoip2.js'></script>

<script src='//code.jquery.com/jquery-1.7.1.min.js'></script>
<script src='//tags.tiqcdn.com/utag/adidas/adidasbrand/prod/utag.sync.js'></script>
<!-- Type C to Type B section end-->

<script src='<?php echo __ADIDAS_URL__?>assets/js/37ab05a59cf4ecce07a4c17fa0aaacf58f113484.js'></script> 
<script src='<?php echo __ADIDAS_URL__?>assets/js/f5e5d5537ab77ff64ae8a318da28721fbe8b2b5b.js'></script>
<script type="text/javascript">		function dateTealium(){		var date = new Date();		var d  = date.getDate();		var day = (d < 10) ? '0' + d : d;		var m = date.getMonth() + 1;		var month = (m < 10) ? '0' + m : m;		var yy = date.getYear();		var year = (yy < 1000) ? yy + 1900 : yy;		return day + "" + month + "" + year.toString().substring(2);	}	function countryTealium(){		if(theLocale.toLowerCase() == "global" )			return "UK";		else			return theLocale.toUpperCase();	}	function languageTealium(){		return theMapsLocale.toUpperCase();	}	var utag_data = {		campaign_name : 'STOREFINDER',		country : countryTealium(),		date : dateTealium(),		environment : 'PRODUCTION',		is_mobile : '',		language : languageTealium(),		page_category : 'STOREFINDER',		page_name : 'HOME',		page_type: 'PLATFORM',		site_name : 'ADIDAS',		site_owner : 'BRAND',	};</script><script type="text/javascript">    (function(a,b,c,d){    	a=utag_URL;		b=document;c='script';d=b.createElement(c);d.src=a;d.type='text/java'+c;d.async=true;		a=b.getElementsByTagName(c)[0];a.parentNode.insertBefore(d,a);    })();</script>
<script type='text/template' id='bigButtonTemplate'>

<div class="<%= classes %>">
	<div class="normal">
		<div class="left"></div>
		<div class="middle">
			<a href="<%= href %>"><%= label %></a>
			<div class="arrow"></div>
		</div>
		<div class="right"></div>
	</div>
	<div class="highlighted transparent">
		<div class="left"></div>
		<div class="middle">
			<a href="<%= href %>"><%= label %></a>
			<div class="arrow"></div>
		</div>
		<div class="right"></div>
	</div>
</div>
</script>
<script type='text/template' id='directionsDestinationTemplate'><div class="marker">
	<div class="direction-tag"></div>
</div>
<div class="destination">
    <h2><%= name %></h2>

	<p>	
		<% if(asl.utils.RegEx.countryJP.test( id ) ) { %> 	
			<%= (store_owner && store_owner ) != '' ? store_owner + ', ' : ''  %><br/>	 	
			<%= (postal_code && postal_code) != '' ? postal_code + ', ' : ''  %><%= (state && state) != '' ? state + ', ' : ''  %><%= (city && city) != '' ? city + ', ' : ''  %><%= street1 %>	 	
		<% } else {%>	 	
	        <%= (store_owner && store_owner ) != '' ? store_owner + ', ' : ''  %><br/>	 	
			<%= (street1 && street1) != '' ? street1 + ', ' : ''  %><%= (street2 && street2) != '' ? street2 + ', ' : ''  %><%= (addressline && addressline) != '' ? addressline + ', ' : ''  %><%= (buildingname && buildingname) != '' ? buildingname + ', ' : ''  %><%= (postal_code && postal_code) != '' ? postal_code + ', ' : ''  %><%= (city && city) != '' ? city + ', ' : ''  %><%= country %>	 	
	    <% } %>
	</p>
	
</div></script>
<script type='text/template' id='directionsTemplate'><div class="heading clearfix animated unselectable">
    <span class="localized">directions.header</span>

    <div class="hide">
        <div class="icon black"></div>
        <div class="icon grey"></div>
    </div>
</div>
<div id="directionsContainer">
    <div id="directionsNavigation">
		<div class="btn-group travelModes all hidden">
			<button class="btn travelMode driving active"><i class="icon driving"></i></button>
			<button class="btn travelMode walking"><i class="icon walking"></i></button>
			<button class="btn travelMode bicycling"><i class="icon bicycling"></i></button>
		</div>
		<div class="btn-group travelModes subset hidden">
			<button class="btn travelMode driving active"><i class="icon driving"></i></button>
			<button class="btn travelMode walking"><i class="icon walking"></i></button>
		</div>
        <div class="btn-group right hidden">
            <button class="btn print"><i class="icon print"></i></button>
        </div>
    </div>
    <div id="directionsInput">
        <div id="directionsForm">
            <div>
                <div class="marker">
                    <div class="direction-tag"></div>
                </div>
                <label for="originInput"></label>
                <span class="inputContainer"><input id="originInput"></span>
            </div>

            <div id="destinationItem"></div>
            <div class="buttonContainer">
                <a class="directions blueButton" href="#"><span class="localized">storeDetails.getDirections</span></a>
            </div>
        </div>
    </div>
	<div class="hr"></div>
    <div class="directionsError hidden"><span class="localized">directions.noRouteFound</span></div>
	<div id="directionsPanel" class="hidden"></div>
</div></script>
<script type='text/template' id='findTemplate'><div id="topTitle" class="gmnoprint title unselectable">
	<h1><span class="localized">general.title</span></h1>
</div>
		
<div id="find" class="gmnoprint">
	<div id="noFilters" class="unselectable hidden">
		<div class="text">
			<span class="localized">search.firstFindSegment</span>
			<span class="products"><span class="localized">search.boldFindSegment</span></span>
			<span class="localized">search.lastFindSegment</span>
		</div>
	</div>
	<div id="filters" class="unselectable hidden">
		<div class="text"><span class="localized">search.firstFindSegment</span></div>
		<div class="filterDropdownContainer">

		</div>
		<div class="text"><span class="localized">search.lastFindSegment</span></div>
	</div>
	<span class="inputContainer">
		<input id="searchInput" class="placeholder" type="text" placeholder="" />
	</span>
	<div class="icons">
		<div class="searchButton unselectable">
			<div class="normal"></div>
			<div class="highlighted transparent"></div>
		</div>
	</div>
</div>

</script>
<script type='text/template' id='introductionTemplate'><div id="introductionView">
	<h2 class="unselectable"><span class="localized"><?php echo ($brand == 'adidas' ? "introduction.header" : "introduction.reebokheader") ?></span></h2>
	<div class="dottedLine white"></div>
	<p class="unselectable">
		<span class="localized"><?php echo ($brand == 'adidas' ? "introduction.body" : "introduction.reebokbody") ?></span>
	</p>
	<div class="clearfix">
		<a class="largeBlueButton start unselectable" href="#"><span class="localized">introduction.start</span></a>
	</div>
</div></script>
<script type='text/template' id='mapLegendTemplate'><div class="button unselectable"><span class="localized">legend.legend</span></div>
<div class="markers unselectable">
	<% _.each(markers, function(marker){ %>
		<div class="marker">
			<div class="list-marker <%= marker.id %>"></div>
			<div class="text"><%= marker.label %></div>
		</div>
	<% }); %>
</div></script>
<script type='text/template' id='mapLegend2Template'>
<div class="button unselectable"><span class="localized">legend2.legend</span></div>
<div class="markers unselectable">
	<% _.each(markers, function(marker){ %>
		<div class="marker">
			<div class="list-marker adidas-logo"></div>
			<div class="text"><strong><span class="localized">legend2.legend</span></strong></div>
			<div class="list-marker <?php echo $lan; ?><%= marker.id %>"></div>
			<div class="text"><span class="localized">legend2.download</span></br><span class="localized">legend2.storevisit</span></div>
		</div>
	<% }); %>
</div>
</script>
<script type='text/template' id='mapStoreDetailsInfoTemplate'><!--<h2><%= name %></h2>-->
<table>
	<tr>
      <td>
        <p class="address">
		
			<% if(asl.utils.RegEx.countryJP.test( id ) ) { %>

				<% if(!_.isEmpty(store_owner )){ %>
					<%= store_owner %><br />
				<% } %>
				
				<% if(!_.isEmpty(postal_code)){ %>
					<%= postal_code %><br />
				<% } %>
				
				<% if(!_.isEmpty(state)){ %>
					<%= state %><br />
				<% } %>
				
				<% if(!_.isEmpty(city)){ %>
					<% if(city != 'Hong Kong'){ %>
						<%= city %><br />
					<% } %>	
				<% } %>
				
				<% if(!_.isEmpty(street1)){ %>
					<%= street1 %><br />
				<% } %>
				
			<% } else {%>
				<% if(!_.isEmpty(store_owner)){ %>
					<%= store_owner %><br />
				<% } %>
				
				<% if(!_.isEmpty(street1)){ %>
					<%= street1 %><br />
				<% } %>
				
				<% if(!_.isEmpty(street2)){ %>
					<%= street2 %><br />
				<% } %>
				
				<% if(!_.isEmpty(addressline)){ %>
					<%= addressline %><br />
				<% } %>
				
				<% if(!_.isEmpty(buildingname)){ %>
					<%= buildingname %><br />
				<% } %>
				
				<% if(!_.isEmpty(postal_code) || !_.isEmpty(city)){ %>
					<%= postal_code %>
					<% if(city != 'Hong Kong'){ %>
						<%= city %><br />
					<% } %>
				<% } %>
				<% if(!_.isEmpty(country)){ %>
					<% if(!_.isEmpty(dont_show_country)){ %>
						<% if(dont_show_country != 1){ %>
							<%= country %>
						<% } %>
					<% } else {%>
					<%= country %>
					<% } %>
				<% } %>
			<% } %>
        </p>
      </td>
      <td style="vertical-align: top;">
		<p class="contact">
		<!--TODO: validate phone, email, web, remove http:// if already there-->
		<% if(!_.isEmpty(phone) && phone.length>2){ %>
			<%= phone %><br/>
		<% } %>

		<%   if(!_.isEmpty(email1) && asl.utils.RegEx.email.test( email1 ) ) { %>
            <a href="mailto:<%= email1 %>" class="emailInfo"><img src="" class="mailIcon"/>  E-Mail</a></br>
        <% } %>
      
        <% if(!_.isEmpty(url1) && asl.utils.RegEx.url.test( url1 ) ){
          var urlRegex = url1.match(new RegExp("^https?://(.*)", "i"));
          var urlDisplay = url1; if (urlRegex) { urlDisplay = urlRegex[1];} %>
          <a href="<%= url1 %>" target="_blank" class="textlink"><span class="localized">storeDetails.VisitLink</span></a><br/>
        <% } %> 
      </p>
      </td>
    </tr>
</table>
<div class="tagList"></div>
</script>
<script type='text/template' id='mapStoreDetailsInstoreServicesTemplate'><table>
	<tr>
		<td class="day">
			<ul>
				<% if(!_.isEmpty(CnC) && CnC == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.cnc</span>
				  <span class="tooltiptext"><span class="localized">Services.cnc_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(ela) && ela == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.ela</span>
				  <span class="tooltiptext"><span class="localized">Services.ela_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(run_genie) && run_genie == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.run_genie</span>
				  <span class="tooltiptext"><span class="localized">Services.run_genie_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(gift_wrapping) && gift_wrapping == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.gift_wrapping</span>
				  <span class="tooltiptext"><span class="localized">Services.gift_wrapping_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(mi_adidas) && mi_adidas == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.mi_adidas</span>
				  <span class="tooltiptext"><span class="localized">Services.mi_adidas_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(shoe_lasering) && shoe_lasering == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.shoe_lasering</span>
				  <span class="tooltiptext"><span class="localized">Services.shoe_lasering_desc</span></span>
				</div></li>
				<% } %>
			</ul>
		</td>
		<td class="day">
			<ul>
				<% if(!_.isEmpty(flocking) && flocking == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.flocking</span>
				  <span class="tooltiptext"><span class="localized">Services.flocking_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(food_nutrition) && food_nutrition == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.food_nutrition</span>
				  <span class="tooltiptext"><span class="localized">Services.food_nutrition_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(gift_cards) && gift_cards == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.gift_cards</span>
				  <span class="tooltiptext"><span class="localized">Services.gift_cards_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(free_wifi) && free_wifi == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.free_wifi</span>
				  <span class="tooltiptext"><span class="localized">Services.free_wifi_desc</span></span>
				</div></li>
				<% } %>
				<% if(!_.isEmpty(take_back_program) && take_back_program == "1"){ %>
				<li><div class="tooltip"><span class="localized">Services.take_back_program</span>
				  <span class="tooltiptext"><span class="localized">Services.take_back_program_desc</span></span>
				</div></li>
				<% } %>
			</ul>
		</td>
	</tr>
	<% if((_.isEmpty(CnC) || CnC == "0") && (_.isEmpty(ela) || ela == "0") && (_.isEmpty(run_genie) || run_genie == "0") && (_.isEmpty(gift_wrapping) || gift_wrapping == "0") && (_.isEmpty(mi_adidas) || mi_adidas == "0") && (_.isEmpty(shoe_lasering) || shoe_lasering == "0") && (_.isEmpty(flocking) || flocking == "0") && (_.isEmpty(food_nutrition) || food_nutrition == "0") &&  (_.isEmpty(gift_cards) || gift_cards == "0") && (_.isEmpty(free_wifi) || free_wifi == "0") && (_.isEmpty(take_back_program) || take_back_program == "0")) { %>
	<tr>
		<td class="day" colspan="2"><span class="localized">Services.NoService</span></td>
	</tr>
	<% } %>
</table>
</script>
<script type='text/template' id='mapStoreDetailsOpeningHoursTemplate'><!--<h2><%= name %></h2>-->
<table>
	<tr>
		<td class="day"><span class="localized">days.monday</span></td>
		<td class="time monday"><%= openinghours_Monday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.tuesday</span></td>
		<td class="time tuesday"><%= openinghours_Tuesday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.wednesday</span></td>
		<td class="time wednesday"><%= openinghours_Wednesday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.thursday</span></td>
		<td class="time thursday"><%= openinghours_Thursday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.friday</span></td>
		<td class="time friday"><%= openinghours_Friday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.saturday</span></td>
		<td class="time saturday"><%= openinghours_Saturday || '-' %></td>
	</tr>
	<tr>
		<td class="day"><span class="localized">days.sunday</span></td>
		<td class="time sunday"><%= openinghours_Sunday || '-' %></td>
	</tr>
</table>
</script>
<script type='text/template' id='mapStoreDetailsTemplate'><div id="storeDetails" class="mapStoreDetails clearfix shadow">
	<div class="topBar unselectable">
		<div class="img"></div>
	</div>
	<div class="top tabs unselectable">
		<div class="storeDetailsTab tab selected">
			<div class="forceBoldWidth"><span class="localized">storeDetails.storeDetails</span></div>
			<span class="localized">storeDetails.storeDetails</span>
		</div>
		<div class="openingHoursTab tab hidden">
			<div class="forceBoldWidth"><span class="localized">storeDetails.openingHours</span></div>
			<span class="localized">storeDetails.openingHours</span>
		</div>
		<div class="instoreServiceTab tab hidden">
			<div class="forceBoldWidth"><span class="localized">storeDetails.instoreServices</span></div>
			<span class="localized">storeDetails.instoreServices</span>
		</div>
		<div class="closeButton">
			<div class="closeIcon"></div>
			<div class="closeShadow"></div>
		</div>
	</div>
	<div class="animationContainer">
		<div class="contentContainer transparent">
			<div class="block middle clearfix">
				<h2><%= name %></h2>
				<p class="<%=(operational_status && operational_status != '') ? ((operational_status == 'Temporarily_Closing_Soon') ? 'CGreen' : ((operational_status == 'Temporarily_Closed') ? 'CRed' : ((operational_status == 'Closing_Soon') ? 'CGreen' : 'CBlack'))) : 'CBlack' %>" >
				<%= (operational_status && operational_status != '') ? ((operational_status == 'Temporarily_Closing_Soon') ? 'Temporarily Closing From ' + from_date + ' To ' + to_date : ((operational_status == 'Temporarily_Closed') ? 'Temporarily Closed From ' + from_date + ' To ' + to_date : ((operational_status == 'Re-opening_Soon') ? 'Re-opening on ' + to_date : ((operational_status == 'Closing_Soon') ? 'Closing on ' + from_date : '')))) : '' %>	
				</p>
				<div class="openingHours section transparent">
				</div>
				<div class="instoreServices section transparent">
				</div>
				<div class="storeDetails info section">
				</div>
			</div>

			<div class="block bottom">
				<div class="dottedLine"></div>
				<div class="sendSuccess transparent"><span class="localized">storeDetails.emailHasBeenSent</span></div>
				<div class="sendForm transparent">
					<!--<form>-->
						<span class="inputContainer"><input id="emailInput" class="placeholder" type="text" name="email" placeholder="" /></span>
						<div class="formButtons">
							<a class="greyButton cross cancelEmail" href="#close"><span class="localized">storeDetails.cancelEmail</span></a>
							<a class="blueButton sendEmail" href="#submit"><span class="localized">storeDetails.sendEmail</span></a>
						</div>
						<div class="error-message"></div>
					<!--</form>-->
				</div>
				<div class="links">
					<!--<a class="emailInfo" href=""><div class="mailIcon"></div><span class="localized">storeDetails.emailInfo</span></a>-->
					<!--<div style="height:29px"></div>--><!--TMP while directions is not available, use this div to force set the proper height-->
					<a class="directions blueButton" href="#directions"><span class="localized">storeDetails.getDirections</span></a>
				</div>
			</div>
		</div>

		<div class="loader">
			<div class="loaderIcon" id="detailLoaderIcon"></div>
		</div>
	</div>
</div>

<div class="empty transparent"></div></script>
<script type='text/template' id='mapZoomTemplate'><div class="gmnoprint clearfix unselectable" no-style="position: absolute; left: 0px; top: 0px; " controlwidth="25" controlheight="226">
	<div class="loaderIcon" id="mainLoaderIcon">
	</div>
	<div class="location canHover">
	</div>
	<div class="zoomTop canHover">
		<div class="zoomIn"></div>
	</div>
	<div class="zoomTrack">
		<div class="zoomHandle canHighlight"><div class="img"></div><div class="img highlighted transparent"></div></div>
	</div>
	<div class="zoomBottom canHover">
		<div class="zoomOut"></div>
	</div>
</div></script>
<script type='text/template' id='printTemplate'>
<body class="print">

<div id="printContainer" class="printContainer">
	<div id="printHeader">
		<h1><span class="localized"><?php echo (($brand == 'adidas') ? "directions.printTitle" : "directions.reebokprintTitle") ?></span></h1>

		<div class="noprint btn-group right">
			<button class="btn print" onclick="window.close();window.print();"><i class="icon print"></i></button>
		</div>
	</div>
	<div id="printDirectionsContainer">
		<div id="staticMap">
			<img class="staticMapImage" src="<%= staticMapOverviewURL %>" width="555" height="400"/>
		</div>
		<div id="printDirectionsPanel"></div>
	</div>
</div>
</body></script>
<script type='text/template' id='sidebarTemplate'><div id="topShadow">
	<div class="shadow"></div>
</div>

<div class="show hidden animated slow unselectable shadow">
	<div class="icon black"></div>
	<div class="icon grey"></div>
</div>


<div id="sideShadow" class="animated shadow hidden">
	<!--<div class="shadow" style="width:30px;height:100%"></div>-->
</div>
<div id="sidebarBackground" class="animated"></div>

<div id="mapBottomBar"></div>
</script>
<script type='text/template' id='storeListTemplate'><div class="heading clearfix animated unselectable">
	<span class="localized">storeList.header</span>
	<div class="hide">
		<div class="icon black"></div>
		<div class="icon grey"></div>
	</div>
</div>

<ul></ul></script>
<script type='text/template' id='storeTemplate'><div class="whiteLine"></div>
<div class="marker">
	<div class="list-marker"></div>
</div>
<div class="text">
	<h2><%= name %></h2>
	<p class="<%=(operational_status && operational_status != '') ? ((operational_status == 'Temporarily_Closing_Soon') ? 'CGreen' : ((operational_status == 'Temporarily_Closed') ? 'CRed' : ((operational_status == 'Closing_Soon') ? 'CGreen' : 'CBlack'))) : 'CBlack' %>" >
		<%= (operational_status && operational_status != '') ? ((operational_status == 'Temporarily_Closing_Soon') ? 'Temporarily Closing From ' + from_date + ' To ' + to_date : ((operational_status == 'Temporarily_Closed') ? 'Temporarily Closed From ' + from_date + ' To ' + to_date : ((operational_status == 'Re-opening_Soon') ? 'Re-opening on ' + to_date : ((operational_status == 'Closing_Soon') ? 'Closing on ' + from_date : '')))) : '' %>	
	</p>	
	<p>
		<% if(asl.utils.RegEx.countryJP.test( id ) ) { %>
			<%= (store_owner  && store_owner ) != '' ? store_owner  + ', ' : ''  %>
			<%= (postal_code && postal_code) != '' ? postal_code + ', ' : ''  %>
			<%= (state && state != '') ? state + ', ' : '' %>
			<%= (city && city != '' && city != 'Hong Kong') ? city + ', ' : '' %>
			<%= (street1 && street1 != '') ? street1 : '' %>
		<% } else {%>
			<%= (store_owner && store_owner != '') ? store_owner + ', ' : '' %>
			<%= (street1 && street1 != '') ? street1 + ', ' : '' %>
			<%= (street2 && street2 != '') ? street2 + ', ' : '' %>
			<%= (addressline && addressline != '') ? addressline + ', ' : '' %>
			<%= (buildingname && buildingname != '') ? buildingname + ', ' : '' %>
			<%= (postal_code && postal_code != '') ? postal_code + ', ' : ''  %>
			<%= (city && city != '' && city != 'Hong Kong') ? city + ', ' : '' %>
			<%= (dont_show_country && dont_show_country == '1') ? '' : country %>
		<% } %>
	</p>

	<div class="tagList"></div>
	<div class="dottedLine"></div>
</div>
</script>
<script type='text/template' id='ui-dropdownTemplate'><div class="select unselectable">
	<div class="selected <%= selectedId %>">
		<table><tr>
			<td><div class="selectedLabel"><%= selectedLabel %></div></td>
			<td><div class="handle">
					<div class="icon"></div>
				</div></td>
		</tr></table>
	</div>
</div>
<div class="dropdownLayer hidden unselectable">
	<div class="optionsContainer">
		<div class="dropdownOptions">
			<% _.each(options, function(option){ %>
				<div class="optionContainer">
					<div class="option <%= option.id %>" value="<%= option.id %>"><%= option.label %></div>
				</div>
			<% }); %>
		</div>
	</div>
</div></script>
<script type='text/template' id='ui-tagTemplate'><div class="ui-tag clearfix <%= tag %>">
	<div class="normal">
		<div class="left"></div>
		<div class="middle">
			<div class="icon"></div>
			<div class="tagLabel"><span class="localized">tags.<%= tag %></span></div>
		</div>
		<div class="right"></div>
	</div>

	<div class="highlight transparent">
		<div class="left"></div>
		<div class="middle">
			<div class="icon"></div>
			<div class="tagLabel"><span class="localized">tags.<%= tag %></span></div>
		</div>
		<div class="right"></div>
	</div>
</div></script>
<script type='text/template' id='zeroResultsTemplate'><div class="hide">
	<div class="icon black"></div>
	<div class="icon grey"></div>
</div>
<p>
	<span class="sorry"><span class="localized">locationError.sorry</span></span><span class="localized"><?php echo ($brand == 'adidas' ? "locationError.body" : "locationError.Reebokbody") ?></span>
</p>
<div class="dottedLine black"></div>
<a href="#" class="blueButton findNearestStore"><span class="localized">locationError.findNearestStore</span></a>
<a href="#" class="greyButton shopOnline"><span class="localized">locationError.shopOnline</span></a></script>
 <div style="display:none"> <!--[if gt IE 7]><!--> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/basketball-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/brand_store-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/children-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/factory_outlet-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/football-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/footwear-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/neo_label-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/originals-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/outdoor-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/performance-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/regular-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/slvr-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/woman-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/y3-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/shadow-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/shadow-regular-over.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0001.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0002.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0003.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0004.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0005.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0006.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0007.png"/> <img alt=preloading src="<?php echo __ADIDAS_URL__?>assets/images/map-markers/clusterers/markerclusterer0008.png"/> <img alt="preloading loaderIcon" src="<?php echo __ADIDAS_URL__?>assets/images/spritesheets/adidas_preloader_2.png"/> <img alt="preloading cursor" src="//maps.gstatic.com/mapfiles/openhand_8_8.cur"/> <!--<![endif]--> </div> <div id=appContainer class=appContainer> <div id=appSubContainer> <div id=headerContainer></div> <div id=contentMain> <div id=mainContainer class=mainContainer></div> <div id=introductionContainer></div> </div> </div> </div> <!--[if lte IE 7]><!--> <script src='<?php echo __ADIDAS_URL__?>assets/js/b6dacbe167f22a2a8a379cfcf468953973803dc3.js'></script> <!--<![endif]--> <!--[if gt IE 7]><!-->  <!--<![endif]--> <script>$(function(){if(asl.constant.Capabilities.ie7AndOlder){this.applicationRouter=new asl.IE6ApplicationRouter();asl.utils.ie6.layoutHelperStart()}else{this.applicationRouter=new asl.ApplicationRouter();asl.utils.layoutHelperStart()}Backbone.history.start({})});</script> <?php

?>
<div id="signinDiv" title ="adidas" style="display:none; overflow:hidden;">
    <iframe id="thedialog"></iframe>
</div>