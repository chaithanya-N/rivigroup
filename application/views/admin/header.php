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


		.header{background:#000; padding:10px; color:#fff;}
	 	h1>a{color:#fff; text-decoration: none}
	 	.login{padding:40px;}
	 	.login-div{border:1px solid #ccc; padding:10px; background:#ccc;}
	 	.loginlbl{font-size:20px; color:#fff;}
	 	.lbl1{text-align: left!important}
	 	.footer{color:#fff; height:60px; margin-top:161px;bottom: 0;text-align:center}



        .navbar{border-radius:0px; margin-bottom:0px;}
   /*db sidemenu start*/
        div>ul>li >a:hover{color:#234 !important}
        div>ul>li >a.active{color:green !important}  
   .sidebar{background:#000; color:#fff; height:600px;}
   .sidebar>ul{list-style: none; margin:0px; padding:0px;}
   .sidebar>ul>li{padding:10px; margin:0px -15px;}
   .sidebar>ul>li:hover{background:#ccc; color:#fff;}
    .sidebar>ul>li>a{color:#fff; text-decoration:none;}
   .sidebar>ul>li>a:hover{color:#fff; }
     /*db sidemenu end*/

   /*login page validations start*/
    .error {color:red; font-size:10px;}
    #login{color:#fff;}
    input:invalid {border: 1px solid red;}
   /*login page end*/
    
   /*footer start*/
 footer {
  
    height: 130px;
    bottom: 0;
    width:100%;
    color:#fff;
    background-color:#000;
}
/*footer end*/

/*db tabs and clr box start*/
.nav-tabs{margin-bottom:0px;}
.nav-tabs>li>a{color:#000; border:0px ;}
  
.nav-tabs>li.active:hover{ background:none;}
.nav-tabs>li.active:hover>a{background:#ccc;}

.nav-tabs>li:hover{ background:none;}
.nav-tabs>li:hover>a{background:#ccc;}
.dbclrbox{padding:10px 30px;}
.dbclrbox-main{padding:20px;}
.dbclrbox-main > span{background:orange; padding:20px;}
.dbclrbox-main-span1{font-size:13px; color:#fff}
.dbclrbox-main-span2{font-size:16px; color:#fff}
.fa-icon{font-size:40px; color:#fff}
.dbclrbox-main-row{margin-bottom:10px;}
.dbclr1{background: #2c374c}
.dbclr2{background: green}
.dbclr3{background: purple}
.dbclr4{background: blue}
/*db tabs and clr box end*/

/*new sub file start*/
#txtc{color:#000;text-decoration:none;}
#sn{margin:7px;}

/*new sub file end*/

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
	    
       
	  </div>
	</nav>
 </div>
<!-- navbar end -->
