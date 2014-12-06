<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<!--
Modified on - 15/May/2012
Modified by - Shakti Singh
-->
<html>
<head>
<title>IRCTC Online Passenger Reservation System</title>
<meta http-equiv="cache-control" content="public" >
<meta http-equiv="expires" content="Mon, 03 Dec 2012 12:00:01 GMT" >
<meta name="ROBOTS" content="INDEX,FOLLOW" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="IRCTC's Online Passenger Reservation System provides booking facility of Railway tickets online and offers other services like checking reservation status, train schedules, train routes, availability of tickets and cancellation." >
<meta name="keywords" content="irctc,train,ticket,eticket,iticket,ticket booking,E-booking,E-Ticket,I-Ticket,rail booking,railway ticket,railway booking,I-booking,catering,tourism,agent booking,E ticket booking,I ticket Booking,cancellation ticket,tatkal,tatkal booking,general booking,lady quota booking,indian rail,indian railway,enquiry,hotel,loyalty booking,soft booking,mobile booking,quick booking,subh yatra,railway reservation,online tickets,online ticket booking,online reservation,current,done card bookng,ITZ booking,PNR,MSST,mumbai ticket,season ticket,waitlisted ticket,train enquiry,SBI railway,irctc mobile booking,irctc mobile application (ngpay),irctc mobile application,irctc agent,sms rail,sms rail to 139,irctc sms service,irctc fare enquiry,popular trains,train schedules,availability of ticket,reservation status,popular stations,track of tikcet,sbi railway card,know your ers,know your PNR,know your ticket,know your eticket,cancel  eticket,cancel railway ticket,trav
 el,passenger,journey,rail journey,planner,plannerbody,plannerresults,bankresponse,Senior Citizen,Boarding Point,Reservation Upto,Train Name,Train No,TDR filing,file TDR,TDR History,banner,banner auction,offline cancellation,refund status,TDR Refund ,partially travelled,Train Cancelled,Ticket Deposit Receipt,chart preparation,File Online TDR Refund Request,Passenger Travel Lists,reservation form,booked history,Cancellation Procedure" >
<link href="/beta_stylesheet/homestylesheet.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/betaJS/mootools.v1.11.js"></script>
<!-- Added by Shakti on 15/May/2012 (Compressed JS) -->
<script type="text/javascript" src="/betaJS/showhidenew2.js"></script>
 
<link rel="stylesheet" type="text/css" href="/beta_stylesheet/bluetabs.css" />
<script type="text/javascript" src="/betaJS/dropdowntabs.js"></script>
 
<script type="text/javascript"> 
//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
tabdropdown.init("bluemenu")
</script>
 
 
<script  type="text/javascript" >
	function isEmpty(s,txt_fld)
{
        if ((s == null) || (s.length == 0)){
			alert("Enter Value for  "+txt_fld);
           	 return false;
		}//end of if
 
       for (var i=0; i<s.length; i++){
           if(s.charAt(i) != " ")
		      return true;
           else{
		      alert("Enter Value for "+txt_fld);
		  	  return false
		   }//end of else
		 }//end of for
		 return true;
}
	function validate()
	{
		if(!isEmpty(document.LoginForm.userName.value,"UserName"))
		{
			document.LoginForm.userName.focus();
			return false;
		}
		if(document.LoginForm.password.value.length==0)
		{
			alert("Please Enter The Password");
			document.LoginForm.password.focus();
			return false;
		}
 
	}
/*function ipFinder()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("ipContent").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ip_finder.asp",true);
xmlhttp.send();
}*/
 
 
	</script>
	<SCRIPT type="text/javascript">
     function noBack()
     {
       document.getElementById('button').disabled=false;
     }
 
    </SCRIPT>
 
</head>
<body onload="fillDefault(); changeText(); noBack();setTimeout(ipFinder,2000)"  style="margin:0; padding:0; font:12px arial;" onpageshow="if (event.persisted) noBack();">
<input type="hidden" id="indicator" value="0">
<div style="width:auto; background-color:#2781BA; margin:0 auto; text-align:center;">
<div style="width:905px; margin:0 auto; background:url(/beta_images/bgnd_sides.gif) repeat-y; text-align:center;">
<div class="header"><img src="beta_images/header_print.gif" alt="IRCTC header" ></div>
<div style="height:19px; width:874px; background-color:#FFAC1B; text-align:center; margin:0 auto; margin-right:16px; margin-left:15px;">
 
<div id="orngnavi">
<a href="/enquiry.html" class="enquiries" style="float:left; border-left:0px;" target="_blank"></a>
 
<!-- <a href="#" style="border-left:1px solid #fff; float:left; margin-left:5px; border-right:0px solid #fff; " onclick="window.open('http://www.teriin.org/survey/irctc/index.php');"><b>Online Survey</b></a> -->
 
<a href="#" style="border-left:0px; margin-right:50px; border-right:1px solid #fff; " onclick="window.open('http://www.irctc.com/gerenalComplaints.jsp','','toolbar=yes,scrollbars=yes,status=yes,resizable=yes');" class="topmenu">Feedback</a>
<a href="/homebodyh.html" style="border:0px;"  tabindex="-2" class="hindilink"></a>
<a href="#" style="border-left:1px solid #fff; margin-left:65px;" tabindex="-2"  onclick="window.open('/beta_htmls/contact1.html','','width=480,height=450,toolbar=no,scrollbars=yes,status=no,resizable=no');" class="topmenu">Contact Us</a>
 
 
 
</div>
</div>
 
<!-- Code added for Topnav -->
<div id="bluemenu" class="bluetabs">
<ul>
<li><a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/booking/vatplanner.do?click=true&screen=fromHome&offset=0" target="_blank">Tour Packages</a></li>
<li><a href="http://air.irctc.co.in" target="_blank">Flights</a></li>
<li><a href="http://www.railtourismindia.com/cgi-bin/hotel.dll/irctc/ctrip/home.do" target="_blank">Hotels</a></li>
<li><a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/booking/planner.do?click=true&amp;screen=FromTrainType" target="_blank">Tourist Train</a></li>
<li><a style="padding:9px 61px; border-right:none; background: url(beta_images/new_navicon.gif) no-repeat;"  
 href="http://www.shop.irctc.co.in/index.aspx" target="_blank" rel="dropmenu1_b" >Shop </a> <img style="margin-top:13px; margin-left:-45px" src="/beta_images/arrow_navdown.gif" /></li>
</ul>
</div>
 
<!--1st drop down menu -->                                                   
<div id="dropmenu1_b" class="dropmenudiv_b">
<a href="http://www.shop.irctc.co.in/online-shopping/shoes.html" target="_blank" id="shoes">Shoes <span class="Shoe"><img src="/beta_images/shoes.gif" alt="Shoes" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/apparels.html" target="_blank">Clothing <span class="cloth"><img src="/beta_images/apparels.gif" alt="Clothing" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/bags.html" target="_blank">Bags and handbags<span class="handbags"><img src="/beta_images/handbags.gif" alt="Bags and handbags" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/jewellery.html" target="_blank">Jewellery<span class="Jewellery"><img src="/beta_images/jewellery.gif" alt="Jewellery" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/lifestyle/purses-and-wallets.html" target="_blank">Purses and Wallet<span class="wallet"><img src="/beta_images/wallets.gif" alt="Purses and Wallet" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/Eyewear/sunglasses.html" target="_blank">Sunglasses<span class="Sunglasses"><img src="/beta_images/sunglasses.gif" alt="Sunglasses" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/lifestyle.html" target="_blank">Fashion Accessories<span class="accessories"><img src="/beta_images/accessories.gif" alt="Fashion Accessories" /></span></a>
 
<a href="http://www.shop.irctc.co.in/online-shopping/mobile-phones.html" target="_blank">Mobiles<span class="mobile"><img src="/beta_images/mobiles.gif" alt="mobile" /></span></a>
 
<a href="http://www.shop.irctc.co.in/buy-online/electronics.html" target="_blank">Electronics<span class="Electronics"><img src="/beta_images/electronics.gif" alt="Electronics" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/home-furnishing.html" target="_blank">Home furnishing<span class="furnishing"><img src="/beta_images/furnishing.gif" alt="Home furnishing" /></span></a>
<a href="http://www.shop.irctc.co.in/online-shopping/watches.html" target="_blank">Watches<span class="Watches"><img src="/beta_images/watches.gif" alt="Watches" /></span></a>
</div>
 
 
 
 
 
 
<div class="productstus">
<div class="inrbdyprosts">
<a href="/beta_htmls/SMS_USSD.html" target="_blank"><B>SMS/USSD based Mobile booking</B></a> <a href="/beta_images/sms_booking/sms_ussd.pdf" target="_blank"> <img style="vertical-align:middel" src="/beta_images/book_now_icon.gif"/></a>&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#999">|</span> &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#FF8400"><b>ING Vysya & Karur Vysya-Net Banking live on IRCTC</b></span>&nbsp;&nbsp;&nbsp;&nbsp; <span style="color:#999">|</span> &nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.shop.irctc.co.in" target="_blank"><img style="vertical-align:middle" src="/beta_images/irctc_shopping.gif" alt="IRCTC Shopping" /></a>
</div>
</div>
 
 
<div style="width:850px; height:202px; margin:10px auto 0 auto;">
 
<div style="float:left; display:inline; height:200px; border:1px solid #4A9ACE; width:210px;">
<div class="boxHead"> <div class="heading">Login</div></div>
 
 <form method="post" action="https://www.irctc.co.in/cgi-bin/bv60.dll/irctc/services/login.do" name="LoginForm" autocomplete="off" style="margin:0; padding:0;"onsubmit="document.getElementById('button').disabled=true;" >
  <input type="hidden" name="screen" value="home" >
  <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
	<table width="96%" style="margin-top:10px; border-bottom:1px solid #ccc" border="0" cellspacing="0" cellpadding="3" align="center" class="txt1">
 
  <tr>
    <td width="40%">Username</td>
    <td width="1%">:</td>
    <td width="59%"><input type="text" name="userName" class="txtfld" autocomplete="off" size="12" ></td>
  </tr>
  <tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" class="txtfld" autocomplete="off" size="12"></td>
  </tr>
  <tr>
    <td colspan="3" height="1"></td>
  </tr>
 
  <tr id="hide_home">
    <td colspan="3" align="right">
	<input type="submit" name="button" id="button"  class="buttonSubmit" value="Login" onclick="return validate();" >	</td>
  </tr>
 
 
<tr>
<td align="right" colspan="3">
 
<table width="76%" style="height:42px;" border="0" align="right" cellspacing="0" cellpadding="2">
<tr>
<td align="right" >
<a href="https://www.irctc.co.in/cgi-bin/bv60.dll/irctc/services/register.do?click=true" id="tabslinksright">Signup</a>
</td>
</tr>
 
<tr>
<td align="right">
<a href="https://www.irctc.co.in/cgi-bin/bv60.dll/irctc/services/forgotpassword.do?username=" id="tabslinksright1">Forgot Password?</a>
</td>
</tr>
</table>
 
</td>
</tr>
 
 
</table></td>
  </tr>
  <tr>
<td bgcolor="#E9F1F1">
 
<table width="100%" border="0" align="right" cellspacing="0" cellpadding="0">
<tr>
<td align="right" height="19"><a href="https://www.irctc.co.in/rtsa_home.asp" id="tabslinksright3">Agent Login</a>&nbsp;&nbsp;&nbsp;</td>
</tr>
 
<tr>
<td align="right" height="20"><a href="https://www.irctc.co.in/cgi-bin/bv71.dll/irctc/services/login.do" id="tabslinksright4" >Mumbai Suburban Season Ticket</a>&nbsp;&nbsp;&nbsp;</td>
</tr>
</table>
 
</td>
  </tr>
</table>
 
</form>
</div>
 
 
<div style="float:left; display:inline; margin-left:1em; border:1px solid #4A9ACE; height:200px; width:304px;">
<div class="boxHead"><div class="heading">Alerts &amp; Updates</div></div>
 
 
<div id="scroller"></div>
 
<div class="Advt">
 
<div class="promoImgfirst">
<a href="#" class="sms139"
onclick="window.open('/sms_139.html','','width=400,height=300,left=325,top=100,toolbar=no,menubar=no,scrollbars=no,status=no,resizable=no');" alt="SMS 139"></a></div>
 
<div class="promoImgfirst">
<a href="#"
onclick="window.open('/banner.html','','width=400,height=400,left=325,top=100,toolbar=no,menubar=no,scrollbars=no,status=no,resizable=no');">
<img style="margin-top:4px; margin-left:8px;" align="left"  src="/beta_images/banner_139.gif" alt="Call 139"></a></div>
 
</div>
 
 
<!--Advt Close-->
</div>
 
 
<div style="float:left; display:inline; margin-left:1em; border:1px solid #4A9ACE; height:200px; width:306px;">
<div class="boxHead"><div class="heading">An Appeal to passengers</div></div>
 
 
<div style="height:122px; width:288px; border:0px solid #000; margin:14px 7px 0px 7px;">
<img src="/beta_images/printout1.gif" alt="Save Paper">
</div>
 
<div class="Advt" style=" background-color:#4A9ACE">
 
<div style="float:left; display:inline; height:22px; width:90px; margin:9px 0 0 6px; border:0px solid #000;"><a href="#"
onclick="window.open('https://www.irctc.co.in/VRM.htm','','width=750,height=650,left=325,top=100,toolbar=no,menubar=no,scrollbars=no,status=no,resizable=no');"><img src="/beta_images/knowmore.gif" alt="Konw More"></a></div>
 
<div style="float:left; display:inline; width:190px; margin:9px 0 0 6px; border:0px solid #000; font:bold 12px arial; color:#fff; padding:4px 0 0 4px;">Must carry your valid ID</div>
 
</div>
 
 
</div>
 
</div>
 
 
<table cellpadding="0" cellspacing="0" border="0" width="850" align="center" style="margin-top:6px;"><tr>
<td align="center">
 
 <!-- <a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/enquiry/bannerdetails.jsp?code=MPEBUDHA" target="_blank">
<img src="/beta_images/newbanner/buddha.jpg"  alt="" ></a>  -->
 
<!-- <a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/booking/vatplanner.do?screen=fromCity&Submit=Search&frompackage=true&cityName=0&bhTirth=&packageCategory=CHARDHAM&submitClicks=0&categoryName=CHARDHAM&destinationCity=&packageCity=0" target="_blank">
<img src="/beta_images/newbanner/char_dham_irctc1_home.jpg"  alt="" ></a>
-->
 <a href="http://shop.irctc.co.in" target="_blank"><img src="/images/newbanner/irctc_homepage.jpg" align="left"  alt="" ></a> 
 
  <a href="http://www.mobileandinternetadvertising.com/CScript/IRCTCJS13.aspx?Pname=HPAtel" target="_blank"><img src="/images/newbanner/TDI 4June_airtel.gif" alt="" width="418" height="200"></a> 
 
<!-- <a href="http://www.air.irctc.co.in" target="_blank"><img src="/images/newbanner/air_homepage_sbi.gif" align="right"  alt="" width="418" height="200" ></a>
 --> 
 
 
<!-- <a href="
http://www.airtel.in/money/ticket-booking.html?utm_source=IRCTC&utm_medium=Fixed&utm_content=Homepage_425x200&utm_campaign=airtel_money" target="_blank"><img src="/images/newbanner/Airtel_home_page.gif" alt="" width="418" height="197"></a> -->
 
 
<!--<a href="http://ads.komli.com/click2,AAAAAKBfHgCnBcQAAAAAAE..LgAAAAAAAAAAAAcAAAAAAAAAAAAAAGkJPwAAAAAAKBQ.AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAAAvj1x9DQBAAAAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=,,," target="_blank"><img src="/beta_images/newbanner/irctc-banner.png" width="418"  alt="" style="margin-left:3px;" ></a>
 
<a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/enquiry/bannerdetails.jsp?code=HOTELOFFER2" target="_blank"><img src="/beta_images/newbanner/hotel_superSale.jpg" width="418"  alt="" style="margin-left:3px;" ></a>  -->
 
<!--<a href="http://www.mobileandinternetadvertising.com/CScript/IRCTCJS.aspx?Pname=HPMMI" target="_blank"><img src="/beta_images/home_page.jpg" width="418"  alt="" style="margin-left:3px;" ></a>  -->
 
 
<!-- <a href="http://ad.yieldmanager.com/click2,AAAAAKBfHgAOUsgAAAAAADTELwAAAAAAAAAAAAcAAAAAAAAAAAAAAO4aQAAAAAAA.RpAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAAAAAqXF-QzUBAAAAAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA=,,," target="_blank"><img src="/beta_images/newbanner/Samsung_IRCTC.jpg" width="418"  alt="" style="margin-left:3px;" ></a> -->
 
 
 
<!-- <a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/enquiry/bannerdetails.jsp?code=BSTHTL2" target="_blank"><img src="/beta_images/newbanner/irctc_hotel.jpg"  alt="" style="margin-left:6px;" ></a>
 
<a href="http://www.railtourismindia.com/cgi-bin/dev1.dll/irctc/enquiry/bannerdetails.jsp?code=RAILTOUR1" target="_blank">
<img src="/beta_images/newbanner/rtpbanner.gif" style="margin-left:6px;" alt="" ></a> -->
 
 
 
</td>
</tr>
</table>
 
 
 
 
<div id="demo" style="width:850px; margin:0 auto; margin-top:6px;">
 
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;"><img name="userImg" onclick="showforall('user')" id="userImg" src="/beta_images/collapse_icon.gif" alt="Collapse" ></div>
<div id="userTab" onclick="showforall('user')" > User Guide</div>
 
 
<div id="user" style="float:left; width:850px; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks">
<tr><td height="5" colspan="4"></td></tr>
<tr>
<td width="25%" class="borderR"><a href="/beta_htmls/Registation.htm">User Registration Guide</a></td>
<td width="25%" class="borderR"><a href="/beta_htmls/eticketguides.html">Booking E-Ticket</a></td>
<td width="25%" class="borderR"><a href="/beta_htmls/MSSTGUIDE.html">Booking Season Ticket</a></td>
<td width="25%"><a href="/beta_htmls/quickbookguide.html"> Quick Book Ticket Guide</a></td>
</tr>
 
<tr>
<td width="25%" class="borderR"><a href="/beta_htmls/iticketGuide.html">Booking I-Ticket</a></td>
<td class="borderR"><a href="/beta_htmls/etktcanc.html">Canceling E-Ticket</a></td>
 <td width="25%"><a href="/beta_htmls/browser.html">Browser Settings</a></td>
</tr>
<tr>
<td class="borderR"><a href="/beta_htmls/itktcanc_new.html">Canceling I-Ticket</a></td>
<td class="borderR"><a href="/beta_htmls/CompatibleBrowser.html">Compatible Browser</a></td>
<td class="borderR"><a href="/beta_htmls/TatkalBookingGuide.htm">Tatkal Booking Guide</a></td>
<td class="borderR">&nbsp;</td>
<td>&nbsp;</td>
 
</tr>
<tr>
<td height="5" colspan="4"></td>
</tr>
</table>
</div>
<!--User Tab Close-->
 
<!--User Tab Start-->
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;" id="forchange" onmouseover="fillcolor('enqu')"><img name="enquImg" onclick="showforall('enqu')" id="enquImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div>
<div id="enquTab" onclick="showforall('enqu')">Enquiries</div>
 
<div id="enqu" style="float:left; display:none; width:850px; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks1">
<tr><td height="5" colspan="4"></td></tr>
 
 
<tr>
  <td class="borderR" width="25%"><a href="http://www.indianrail.gov.in/index.html" target="_Blank">Reservation Enquiries</a></td>
  <td class="borderR" width="25%"><a href="http://www.indianrail.gov.in/pnr_Enq.html" target="_Blank">PNR Enquiry</a></td>
  <td class="borderR" width="25%"><a href="http://www.trainenquiry.com/" target="_Blank">Train Enquiry</a></td>
  <td width="25%"><a href="http://www.indianrailways.gov.in/railwayboard/view_section.jsp?lang=0&id=0,1,304,366,537" target="_Blank">Trains at a Glance</a></td>
</tr>
 
<tr>
  <td class="borderR"><a href="http://www.indianrail.gov.in/inet_srcdest_names.html" target="_Blank">Train/Fare Accommodation</a></td>
  <td class="borderR"><a href="http://www.indianrail.gov.in/inet_metro_trns.html" target="_Blank">Train Between Important Stations</a></td>
  <td class="borderR"><a href="http://indianrail.gov.in/inet_trnno_enq.html" target="_Blank">New Train Number <br>(w.e.f.20/12/2010)</a></td>
   <td><a href="/beta_htmls/SMS139.html" target="_Blank">Railway Enquiry-139</a></td>
    <td>&nbsp;</td>
</tr>
 
<tr>
    <td height="5" colspan="4"></td>
   </tr>
</table>
</div>
<!--Enquiries Tab Close-->
 
<!--General Information Tab Start-->
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;">
<img name="GeneralImg" onclick="showforall('General')"  id="GeneralImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div>
<div id="GeneralTab" onclick="showforall('General')">General Information</div>
 
<div id="General" style="float:left; width:850px; display:none; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks2">
<tr><td height="5" colspan="4"></td></tr>
<tr>
<td width="25%" class="borderR"><a href="/beta_htmls/IRRules.html" target="_Blank">Rules &amp; Policies</a></td>
<td width="25%" class="borderR"><a href="/beta_htmls/newfaqs.html" target="_Blank">Frequently Asked Questions</a></td>
<td width="25%" class="borderR" ><a href="/betaDoc/PG_SuccessRate.pdf" target="_Blank">Statistics</a></td>
<td width="25%"><a href="/beta_htmls/term.html" target="_Blank">Terms And Conditions</a></td>
</tr>
 
<tr>
<td class="borderR"><a href="/beta_htmls/Eticket_new_cancel.html" target="_Blank">New Facilities In E-Ticket</a></td>
<td class="borderR"><a href="/beta_htmls/womenconc.html" target="_Blank" >Women Sr.Citizens Concession</a></td>
<td class="borderR"><a href="/beta_htmls/Waitlisted_E-Ticket.html" target="_Blank">Scheme for issue of waitlisted E-tickets</a></td>
<td ><a href="/beta_htmls/refundrules.html">Refund Rules (Old)</a></td>
</tr>
 
<tr>
<td class="borderR"><a href="/beta_htmls/Deliverypopup.html" target="_Blank">Areas Covered</a></td>
<td class="borderR"><a href="https://www.irctc.co.in/cgi-bin/bv60.dll/irctc/services/pinNarea.do?" >Pincodes Covered</a></td>
<td class="borderR"><a href="/beta_htmls/emailAlert.html" target="_Blank">Protect against fraudulent emails</a></td>
<td class="borderR"><a href="/beta_htmls/REFUND RULES wef 1-Jul-13.pdf" target="_Blank">Amended Refund Rules w.e.f 01-07-2013</a></td>
 
</tr>
 
<tr><td height="5" colspan="4"></td></tr>
</table>
</div>
 
<!--Agent Tab Close-->
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;"><img name="agentImg" onclick="showforall('agent')" id="agentImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div><div id="agentTab" onclick="showforall('agent')">Agents</div>
 
<div id="agent" style="float:left; width:850px; display:none; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks3">
<tr><td height="5" colspan="4"></td></tr>
<tr>
<!-- <td class="borderR"><a href="/EOI_WS.html" >EOI For Web Services</a></td> -->
<td width="25%"  class="borderR" ><a href="/beta_htmls/Booking_Cancellation_request_slip_for_agents.pdf" >Booking/Cancellation Request Slip for Agents </a></td>
 
 
 <td width="25%" class="borderR"><a href="/betaDoc/IRCTCAuthorisedPrincipal.pdf" target="blank"> IRCTC's Authorised Principal Agents</a></td>
<td width="25%" class="borderR"><a href="/beta_htmls/iata_agent.html">Scheme for IATA/TAAI/TAFI/IATO/ADTOI Members</a></td>
<!-- <td class="borderR" width="27%"><a href="/beta_htmls/Dont_for_the_Agents_hindi.pdf" target="blank" >Do's &amp; Dont's For The Agents(Hindi)</a></td>
 -->
<td width="25%" ><a href="/beta_htmls/CertificateCreationProcess.pdf" target="blank">Certificate Generation Process for Site Agents </a></td>
 
</tr>
 
<tr>
<td class="borderR" ><a href="https://www.irctc.co.in/cgi-bin/bv60.dll/irctc/enquiry/FindAgents.do?click=true" >Find Agents</a></td>
<td class="borderR" ><a href="/beta_htmls/tktsolution.html" >IRCTC invites proposal for non internet based mobile ticketing solution</a></td>
<td class="borderR"><a href="/betaDoc/List of BlackListAgent.xls">List Of Blacklisted Agents:Principal agents should not appoint the blacklisted agents</a></td>
<td class=><a href="/betaDoc/RulesRegulationsAgents.pdf" target="blank"  >Rules &amp; Regulations for the Agents(English)</a></td>
 
</tr>
 
 
<!-- <td  class="borderR"><a href="/beta_htmls/RTSA.html">RTSA</a></td>
<td class="borderR"><a href="/beta_htmls/Internet_Cafe.html">Internet Cafe Scheme</a></td>
<td class="borderR"><a href="/beta_htmls/IATA.html">IATA / TAAI / TAFI</a></td>
<td><a href="#">Temporary suspension of registrations of new agents and sub- agents under All Schemes</a></td> -->
 
 <tr>
           
            <td class="borderR"><a href="/beta_htmls/B2B.html"  target="blank">B2B Scheme</a></td>
            <td class="borderR"><a href="/beta_htmls/B2C.html"  target="blank">B2C or Mobile Scheme</a></td>
            <td class="borderR"><a href="/beta_htmls/Internet_Cafe.html"  target="blank">Internet Cafe Scheme</a></td>
            <td ><a href="/beta_htmls/rtsa_agent.html"  target="blank">Scheme for RTSA Agent (Rail Travel Service Agent)</a></td>
</tr>
 
 <tr>
			 <td class="borderR" ><a class="readon" href="#" onClick="window.open('/beta_htmls/circuler.html','','width=800,height=400,left=325,top=100,toolbar=no,menubar=no,scrollbars=no,status=no,resizable=no');" >Agents Banned by Ministry Of Railways(Railway Board)</a></td>
 
 
            <td ></td>
 
</tr>
<tr>
    <td height="5" colspan="4"></td>
   </tr>
</table>
</div>
<!-- Agent Tab Closed-->
 
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;"><img name="auctionImg" onclick="showforall('auction')" id="auctionImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div><div id="auctionTab" onclick="showforall('auction')">Advertise with us</div>
 
<div id="auction" style="float:left; width:850px; display:none; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks4">
<tr><td height="5" colspan="4"></td></tr>
 
 
<tr>
<td class="borderR" width="25%"><a  href="/betaDoc/BannerAuctionDetail_2013.pdf"  target="blank" >Banner Auction Details</a></td>
<td class="borderR" width="25%"><a href="/beta_htmls/Marketing.html" target="_blank">Mailers and TextLinks</a></td>
<td class="borderR" width="25%"><a href="/beta_htmls/viewbanner.html"  target="blank">Banner View</a></td>
 <td class="" width="25%"><a href="/beta_htmls/adwithus.html" target="_blank">Advertisement Enquiries</a></td>
 
 
 <td width="25%">&nbsp;</td>
 
<!-- <td width="20%">&nbsp;</td> -->
</tr>
<tr>
 <td class="borderR" width="25%"><a href="/betaDoc/Termscondition.pdf " target="_blank">Terms&nbsp;&amp;Conditions_ Banners</a></td>
 <td class="borderR" width="25%"><a href="/betaDoc/Terms_condition_Mailers.pdf " target="_blank">Terms&nbsp;&amp;Conditions_ Mailers</a></td>
    <td height="5" colspan="4"></td>
   </tr>
</table>
</div>
 
 
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;"><img name="irctcImg" onclick="showforall('irctc')" id="irctcImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div><div id="irctcTab" onclick="showforall('irctc')">IRCTC Zone</div>
 
<div id="irctc" style="float:left; width:850px; display:none; background-color:#fff;">
<table border="0" cellpadding="3" cellspacing="0" style="width:98%" align="center" id="tabslinks5">
<tr><td height="5" colspan="4"></td></tr>
<tr>
<td width="25%" class="borderR"><a href="/betaDoc/RTI.pdf">RTI Information</a></td>
<td width="25%" class="borderR"><a href="/jago_yatri.pdf">Jago yatri jago </a></td>
<td class="borderR"><a href="/beta_htmls/sbidetails.html">SBI Railway Credit Card</a></td>
 
</tr>
 
 
<tr>
 
<td  class="borderR"><a href="http://www.jsk.gov.in" target="_blank">Jansankhya Sthirata Kosh</a></td>
<!-- <td class="borderR"><a href="/Dial-a-Meal.pdf"> Dial a Meal </a></td> -->
<td class="borderR"><a href="/beta_htmls/Awards_Achievements.html" >Awards &amp; Achievements</a></td>
<td class="borderR"><a href="/beta_htmls/irctc_menu.html" >Standard Menu</a></td>
 
</tr>
  <tr>
    <!-- <td class="borderR"><a href="/beta_htmls/alacarte.html"> A-la-carte </a></td> -->
	<td class="borderR"><a href="/beta_htmls/cyclicMenuRajdhani.html" > Rajdhani Menu </a></td>
	<td  class="borderR"><a href="/betaDoc/SMS_Services_Tender.pdf" target="blank" >Tender for messaging process &amp;
advertising rights for irctc e/i-ticket customers</a></td>
	
	 <td class="borderR"><a href="http://www.the-maharajas.com"  target="blank">Maharajas' Express</a></td>
 
  </tr>
 
 
 
<tr>
    <td height="5" colspan="4"></td>
   </tr>
</table>
</div>
<!--IRCTC Zone-->
 
<div style="float:left; margin-top:6px; margin-right:5px; margin-left:6px;"><img name="mobImg" onclick="showforall('mob')" id="mobImg" src="/beta_images/plus_icon_home.gif" alt="Expand" ></div>
<div id="mobTab" onclick="showforall('mob')">Mobile Zone</div>
 
<div id="mob" style="float:left; width:850px; display:none; background-color:#fff;">
<table width="98%" align="center" cellpadding="3" cellspacing="0"  id="tabslinks6" style="text-align:left">
  <tr><td height="5" colspan="4"></td></tr>
	<tr>
	<td width="25%" class="borderR"><a href="/beta_htmls/ngpay/whatisngpay.html" target="_blank" >IRCTC Mobile Application (ngpay)</a></td>
	</tr>
 
<tr>
    <td width="25%" class="borderR"><a href="/beta_htmls/index.htm" target="_blank">IRCTC on mobile -Steps for booking rail tickets on mobile
</a></td>
<td width="25%" class="borderR"><a href="/BankHelpFile/imps/imps_help.htm" target="_blank">IMPS (Interbank Mobile Payment Service)</a></td>
</tr>
 
</table>
</div>
<div style="clear:both;"></div>
<!-- Mobile Zone Tab Close-->
 
</div>
<div style="width:850px; height:133px; margin:12px auto 0 auto; align='right'">
 
<a href="http://www.shop.irctc.co.in" target="blank"><img align="right" src="/beta_images/irctc_shop_r.jpg" alt="Banner" width="419" height="133" border="0" /></a>
 
   <a href="http://www.shop.irctc.co.in" target="blank"><img src="/beta_images/irctc_shop_l.jpg" alt="banner" width="419" height="133" border="0" /></a> 
 
</div> 
 
<div class="footer">
<div class="footerborder">
 
<div id="footerlogo">
<ul>
<li><a href="http://www.cris.org.in" target="_blank" class="cris"></a></li>
<!--<li><a href="https://sealinfo.thawte.com/thawtesplash?form_file=fdf/thawtesplash.fdf&dn=WWW.IRCTC.CO.IN&lang=en" target="_blank" class="verisign"></a></li>-->
<li><a href="http://usa.visa.com/personal/security/visa_security_program/vbv/verified_by_visa_faq.html" target="_blank" class="verisignvisa"></a></li>
<li><a href="http://www.mastercard.com/us/personal/en/cardholderservices/securecode/index.html" target="_blank" class="masterc"></a></li>
<li><a href="#" class="safekey"></a></li>
</ul>
</div>
 
 
<div class="footerlink">Copyright &copy; <script type="text/javascript">
var d = new Date();
var curr_year = d.getFullYear();
document.write(curr_year);</script> - www.irctc.co.in. All Rights Reserved&nbsp;<br/>
Site best viewed in IE 6 and above&nbsp;<span id="sip" style="color:#FFFFFF"><iframe name="inlineframe" src="serverIp.html" style="height:11px;" frameborder="0" scrolling="no" width="20" height="18" marginwidth="0" marginheight="0" ></iframe></span></div>
 
    
 
<!--Footerborder Close-->
</div>
<!--Footer Close-->
</div>
<!--Main Close-->
</div>
<!--wrapper Close-->
<!-- Google Analytics code start -->
 
 <script type="text/javascript"> 
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-5620340-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<!-- Google Analytics code end -->
 
<script type="text/javascript"> 
//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
tabdropdown.init("bluemenu")
</script>
</body>
</html>
<!-- ------=_20130620173210_64273--
 -->
