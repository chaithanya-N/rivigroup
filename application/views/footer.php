 <!-- Our Footer start -->
	     <div class="container-fluid">
		<div class="row">
		  <div class="col-md-12" style=" background:#4c4c4c;float:left;width:100%;height:300px;">
		  	<div class="col-md-2" style="text-align:center;font-size:12px;color:#fff;padding:45px;">
		  		<lable style="padding:6px; ">SIGNUP FOR THE NEWSLETTER</lable>
		  		<input type="email" name="mail" placeholder="Email address" style="text-align:center;height:35px;width:100%;background-color:#4c4c4c;border:1px solid #fff;" >
		  	</div>
		  	<div class="col-md-2" style="text-align:center;font-size:12px;color:#fff;padding:45px;">
		  		<lable>USEFUL LINKS</lable>
		  		<ul style="padding:6px;" type="none">
		  		<li>Sitemap</li>
		  		<li>Feedback</li>
		  		<li>Partners</li>
		  		<li>Request for Services</li>
		  	</ul>
		  	</div>
		  	<div class="col-md-2" style="text-align:center;font-size:12px;color:#fff;padding:45px;">
		  		<lable>FOLLOW US</lable>
		  		<ul style="font-size:15px;padding:8px;">
		  	  <i style="padding:6px;" class="fab fa-facebook"></i>
		  	  <i style="padding:6px;" class="fab fa-linkedin-in"></i>
		  	  <i style="padding:6px;" class="fab fa-twitter"></i>
				</ul>	
		  	</div>
		  	<div class="col-md-3" style="text-align:center;font-size:12px;color:#fff;padding:45px;">
		  		<lable>CORPORATE HEAD QUARTERS</lable><br>
		  		<p style="font-size:10px;padding:6px;">RiVi Consulting Group L.L.C <br>
				2475 Northwinds Pkny, <br>
				Suite 200, Alpharetta <br>
				GA 30009<br> Phone: 1-866-921-7484,<br>
				1-678-909-0600<br>Fax: 1-866-921-7484<br>Email: info@rivigroup.com</p>	
		  	</div>
            <div class="col-md-3" style="text-align:center;font-size:12px;color:#fff;padding:45px;">
		  		<lable>GLOBAL DEVELOPMENT CENTER INDIA</lable><br>
		  		<p style="font-size:10px;padding:6px;">RiVi Consulting Group L.L.C <br>
				Plot No. 550-B, 1st Floor, Anitha Square  <br>
				Road No. 92, Jubilee Hills,<br>
				Hyderabad, Telangana – 500033, India<br> Phone: +91 812 545 0007<br>
				Fax: 1-866-921-7484<br>Email: info@rivigroup.com</p>	
		  	</div>
		  	</div>
             	</div> 
           
	       <div class="row">
			  <div class="col-md-12" style=" background:#4c4c4c;float:left;width:100%;">
			  	<div class="col-md-3" style="text-align:center;color:#fff;margin-top:-150px;">
			  	   <img src="<?php echo base_url();?>assets/images/footer-logo.png" style="height:36px;">
			    </div>
				 	<div style="color:#fff;width:100%;margin-top:-55px;">
					 <p style="text-align:center;font-size:11px;">A CMMI Level 3, ISO 9001:2008, ISO/IEC 27001:2013, SBA 8(a), MBE, WBENC,EDWOSB,NAICS, NMSDC, GSA IT Schedule 70 COMPANY </p>
					 </div>	  
			  	</div>
			  </div>
	</div>

    <!-- Our Footer end -->
    <!-- java script start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	// image scroller-clients 
		 $(document).ready(function(){
	    var speed = 5;
	    var items, scroller = $('.scroller');
	    var width = 0;
	    scroller.children().each(function(){
	        width += $(this).outerWidth(true);
	    });
	    scroller.css('width', width);
	    scroll();
	    function scroll(){
	        items = scroller.children();
	        var scrollWidth = items.eq(0).outerWidth();
	        scroller.animate({'left' : 0 - scrollWidth}, scrollWidth * 100 / speed, 'linear', changeFirst);
	    }
	    function changeFirst(){
	        scroller.append(items.eq(0).remove()).css('left', 0);
	        scroll();
	    }
	});
	 // image scroller-clients end


	 $(".submenu-head").click(function(e){
	 	$(".option").toggle();
	 	$(".option").toggleClass('open');
	 	e.preventDefault();

	 })
	 $(".submenu-headleft").click(function(){
	 	$(".optionleft").toggle();
	 })


	 $("#aboutbtn").mouseover(function(){
	 	$("#aboutsubmenu").show();
	 })
	  $("#aboutbtn").mouseout(function(){
	 	$("#aboutsubmenu").hide();
	 })
	 $("#servicebtn").mouseover(function(){
	 	$("#servicesubmenu").show();
	 })
	  $("#servicebtn").mouseout(function(){
	 	$("#servicesubmenu").hide();
	 })
     
     $("#expertisebtn").mouseover(function(){
	 	$("#expertisesubmenu").show();
	 })
	  $("#expertisebtn").mouseout(function(){
	 	$("#expertisesubmenu").hide();
	 })
 

      $("#casebtn").mouseover(function(){
	 	$("#casesubmenu").show();
	 })
	  $("#casebtn").mouseout(function(){
	 	$("#casesubmenu").hide();
	 })

	  $("#careersbtn").mouseover(function(){
	 	$("#careerssubmenu").show();
	 })
	  $("#careersbtn").mouseout(function(){
	 	$("#careerssubmenu").hide();
	 })
 
	 </script>


</body>
</html>