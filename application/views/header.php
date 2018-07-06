<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rivi Consultancy Services Pvt Ltd :: RIVIGROUP</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


	<style type="text/css">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body { margin:0;}
	.navbar {margin-bottom:0px;}
	.navbar-inverse{border-radius: 0px; min-height: 90px;}
	.navbar-nav {float: right;margin: 0;    padding-top: 20px;}
	.oservices{border:solid 1px #fff;height:180px;color:#fff;background-color:#ccc;margin:0px -10px;padding:10px;}
	/*.scrollerWrapper { overflow: hidden; *position: relative; }*/
	/*client slider css*/
	ul.scroller { position: relative; white-space: nowrap; font-size: 0; }
	ul.scroller li { display: inline-block; *display: inline; white-space: normal; vertical-align: middle; padding: 10px; }
 	

	/*testimonial css*/
	.carousel-control.left{background-image: none}
	.carousel-control.right{background-image: none}
	@brand-color: none;
#tcb-testimonial-carousel {
    a{
        color: @brand-color;
    }
    .text-brand{
        color: @brand-color;
    }
    margin-top: 30px;
    .carousel-indicators .active {
        background: @brand-color;
    }
    .no-margin{
        margin: 0;
    }
    .carousel-indicators li {
        border: 1px solid transparent;
    }
    .carousel-control {
        color: @brand-color;
        width: 5%;
    }
    .carousel-control:hover,
    .carousel-control:focus {
        color: @brand-color;
    }
    .carousel-control.left,
    .carousel-control.right {
        background-image: none;
        background-color:none;
    }
    .item{
        padding: 15px 40px;
        background: #f8f8f8;
    }
    .media-object {
        margin: auto;
    }
    @media screen and (max-width: 768px) {
        .media-object {
            margin-bottom: 15px;
        }
    }
}

.aboutul{list-style: none}
.aboutul>li{background: url(<?php echo base_url();?>/assets/images/list-aro.png) no-repeat left 9px; padding:5px;padding-left: 25px;}
.servicesul{list-style: none}
/*home*/
.content{font-size:14px; color:#fff;line-height: 18px;}
/*contact page*/
 .contact{
 	float: left;
    width: 100%;
    height: 34px;
    border: 1px solid #000;
    padding: 0 10px;
    font-family: 'Mallanna',sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #000;
    box-sizing: border-box;
    background-color: #fff;}
.sendmsg{ border-radius: 10px;
    background-color: #696969;
    float: left;
    width: auto;
    height: 26px;
    border: none;
    padding: 0 20px 1px;
    font-family: "Roboto",sans-serif;
    font-size: 15px;
    font-weight: 900;
    color: #fff;
    box-sizing: border-box;
    cursor: pointer;}

    .vali{color:orange;}


    /*contact page end*/
    /*case study*/
    .read-btn {
    display: inline-block;
    background: #fff;
    color: #262626;
    font-size: 15px;
    font-weight: 900;
    font-family: 'Roboto',sans-serif;
    border-radius: 8px;
    padding: 7px 12px;
}

.addressp{font-size: 14px;}
.os{background-color: #d2d2d2;
    float: left;
    padding: 4px 0;
    width: 100%; list-style: none}
.os>li {
    border-left: 1px solid #6a6a6a;
    float: left;
    height: 230px;
    margin: 4px 0;
    width: 16.66%;
}

.otser-lnk {
    float: left;
    height: 100%;
    width: 100%;
    padding: 25px;
}
.os-figure{
    display: table;
    float: left;
    height: 65px;
    table-layout: fixed;
    width: 100%;    
    margin: 1em 0px;
}
.os-span{
    display: table-cell;
    height: 100%;
    text-align: center;
    vertical-align: middle;
    width: 100%;
}
.os-span>img {
    max-height: 65px;
    -webkit-transition: all 200ms ease-in;
    -webkit-transform: scale(1);
    -ms-transition: all 200ms ease-in;
    -ms-transform: scale(1);
    -moz-transition: all 200ms ease-in;
    -moz-transform: scale(1);
    transition: all 200ms ease-in;
    transform: scale(1);
}
.os-h3 {
    color: #fff;
    float: left;
    font-size: 14px;
    font-weight: 400;
    line-height: 18px;
    margin: 10px 0 0;
    width: 100%;
    text-align:center;
}
 	</style>
</head>
<body>
<!-- navbar start -->
<div id="container-fluid">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo base_url();?>">
	      	<img src="<?php echo base_url();?>/assets/images/logo.png" width="100%">
	      </a>
	    </div>
	    <ul class="nav navbar-nav">
 	      <li class="dropdown"  id="aboutbtn">
	        <a class="dropdown-toggle" href="<?php echo base_url();?>Welcome/about_us">ABOUT US
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu" id="aboutsubmenu">
 	          <li><a href="<?php echo base_url();?>assets/Capability_Profile_Updated.pdf" target="_blank">Capability Statement</a></li>
	          <li><a href="<?php echo base_url();?>About/Clients">Clients</a></li>
	          <li><a href="<?php echo base_url();?>About/Testimonials">Testimonials</a></li>
	        </ul>
	      </li>
	      <li class="dropdown"  id="servicebtn">
	        <a class="dropdown-toggle" href="<?php echo base_url();?>Welcome/Services">SERVICES
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu" id="servicesubmenu">
	          <li><a href="<?php echo base_url();?>Services/Strategy_Management_Consulting">Strategy-management-consulting</a>
	          </li>
	          <li><a href="<?php echo base_url();?>Services/System_Integration_Applications_Development">System Integration / Applications Development</a></li>
	          <li><a href="<?php echo base_url();?>Services/Program_Management">Program Management</a></li>
	          <li><a href="<?php echo base_url();?>Services/IT_Infrastructure_Program">IT Infrastructure Program</a></li>
	          <li><a href="<?php echo base_url();?>Services/Infrastructure_Security">Infrastructure Security</a></li>
	          <li><a href="<?php echo base_url();?>Services/Executive_Dashboards">Executive Dashboards / Data Warehouse</a></li>
	          <li><a href="<?php echo base_url();?>Services/Disaster_Recovery">Disaster Recovery</a></li>
	          <li><a href="<?php echo base_url();?>Services/Oracle_PeopleSoft_Solutions">Oracle/PeopleSoft Solutions</a></li>
	          <li><a href="<?php echo base_url();?>Services/SAP_Solutions">SAP Solutions</a></li>
	          <li><a href="<?php echo base_url();?>Services/Intelligence_Transportation_Systems">Intelligence Transportation Systems</a></li>
	          <li><a href="<?php echo base_url();?>Services/Geographical_Information_Systems">Geographical Information Systems</a></li>
	          <li><a href="<?php echo base_url();?>Services/Embedded_Services">Embedded Services</a></li>
	          <li><a href="<?php echo base_url();?>Services/IOT">IOT</a></li>
	          <li><a href="<?php echo base_url();?>Services/Enterprise_Security">Enterprise Security</a></li>
	          <li><a href="<?php echo base_url();?>Services/Machine_to_Machine_Learning">Machine to Machine Learning</a></li>
	          <li><a href="<?php echo base_url();?>Services/Cloud_Implementation">Cloud Implementation</a></li>
	          <li><a href="<?php echo base_url();?>Services/Investran">Investran</a></li>
	          <li><a href="<?php echo base_url();?>Services/Staffing">Staffing</a></li>
	          <li><a href="<?php echo base_url();?>Services/Testing">Testing</a></li>
	          <li><a href="<?php echo base_url();?>Services/Cyber_Security">Cyber Security</a></li>
              <li><a href="<?php echo base_url();?>Services/Web_Development">Web Development</a></li>
              <li><a href="<?php echo base_url();?>Services/App_Development">App Development</a></li>
              <li><a href="<?php echo base_url();?>Services/Digital_Marketing">Digital Marketing</a></li>

	        </ul>
	      </li>
	      <li class="dropdown" id="expertisebtn">
	        <a class="dropdown-toggle" href="<?php echo base_url();?>Welcome/Expertise">EXPERTISE
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu" id="expertisesubmenu">
	          <li><a href="<?php echo base_url();?>expertise/Telecommunications">Telecommunications
	          </a></li>
	          <li><a href="<?php echo base_url();?>expertise/Financial_Services">Financial Services</a></li>
	          <li><a href="<?php echo base_url();?>expertise/Insurance">Insurance</a></li>
	          <li><a href="<?php echo base_url();?>expertise/Manufacturing_Retail">Manufacturing / Retail</a></li>
	          <li><a href="<?php echo base_url();?>expertise/Government">Government</a></li>
	          <li><a href="<?php echo base_url();?>expertise/OffShore">Off Shore</a></li>

	        </ul>
	      </li>
	      <li class="dropdown" id="casebtn">
	        <a class="dropdown-toggle"  href="<?php echo base_url();?>Welcome/Case_Study">CASESTUDIES
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu" id="casesubmenu">
	          <li><a href="<?php echo base_url();?>CaseStudy/Strategy_Management_Consulting">Strategy & Management Consulting</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Enterprise_Architecture_SOA">Enterprise Architecture and SOA</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Business_Intelligence">Business Intelligence</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Enterprise_Portals_Solutions">Enterprise Portals Solutions</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Customer_Relationship_Management">Customer Relationship Management (CRM)</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Enterprise_Resource_Planning">Enterprise Resource Planning</a></li>
	          <li><a href="<?php echo base_url();?>CaseStudy/Billing_Systems">Billing Systems</a></li>

	        </ul>
	      </li>
	      <li class="dropdown" id="careersbtn">
	        <a class="dropdown-toggle" href="<?php echo base_url();?>Welcome/careers">CAREERS
	        <span class="caret"></span></a>
	        <ul class="dropdown-menu" id="careerssubmenu">
	          <li><a href="<?php echo base_url();?>Careers/Benefits">Benefits</a></li>
	          <!-- <li><a href="<?php echo base_url();?>Careers/Current_Openings">Current Openings</a></li> -->
	          <li><a href="https://recruit.zoho.com/recruit/Portal.na?iframe=false&digest=BmDJFY21GTrIQdXSx1uQDy2mls9gr1JFVtav.RwE4PI-" target="_blank">Current Openings</a></li>
	          <li><a href="<?php echo base_url();?>Careers/Referral_Program">Referral Program</a></li>
	          <li><a href="<?php echo base_url();?>Careers/Send_Your_Resume">Send Your Resume</a></li>
	        </ul>
	      </li>
	      <li><a href="<?php echo base_url();?>Welcome/Contact_Us">CONTACT US</a></li>
 	    </ul>
	  </div>
	</nav>
 </div>
<!-- navbar end -->
