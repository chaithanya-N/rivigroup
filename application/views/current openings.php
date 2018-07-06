<div class="container-fluid" style="padding:0px;">
 	<img  style=" background-size: cover;width:100%"src="<?php echo base_url();?>/assets/images/globalhunt_current_openings.jpg">
 </div>
 <div class="container" style=" background:#ebebeb;">
 	<div  class="row" style="background:#fff;">
		<h2 class="ser-head" style="text-align:center; "><b>CURRENT OPEN POSITIONS</b></h2>
	</div>
	<div class="row" >
       <div class="col-md-12" style="padding:10px; background: #fff; ">
       	<!-- job start -->
       	<?php foreach($job_desc as $list){ ?>
		   <div class="col-md-4" >
		   	<div class="col-md-12" style="padding:15px; border:1px solid #ccc; margin-bottom:10px;  ">
		   		<div class="row" style="height:50px;">
			   		<div class="col-md-12">
			   			<label><?php echo $list->job_title; ?></label>
			   		</div>
 			   	</div>
		   		<div class="row" style="height:55px;">
		   			<div class="col-md-8">
		   				<h6 style="font-weight:600; font-size:15px;"><?php echo $list->job_location; ?></h6>
		   			</div>
		   			<div class="col-md-4">
		   				<h6 style="font-weight:600; font-size:15px;"><?php echo $list->job_posting_date; ?></h6>
		   			</div>
		   		</div>
			 	<div class="row">
			   		<div class="col-md-12">
 			   			<p style="text-align:justify; font-weight: 400px; font-size:15px;"><?php 
                         $string = strip_tags($list->job_description);
                        if (strlen($string) > 250) {

                         // truncate string
                         $stringCut = substr($string, 0, 250);
                          $endPoint = strrpos($stringCut, ' ');

   
						    $string = $endPoint? substr($stringCut, 0, $endPoint):substr($stringCut, 0);
						    $string .= '...';
						}
						echo $string; ?></p>




			   		</div>
 			   	</div>
 			   	<div class="row">
			   		<div class="col-md-12">
			   			<button class="btn btn-info btn-sm">Apply</button>
			   		</div>
 			   	</div>
		   	</div>
			   	
		  </div> 
		  <!-- end job -->
		  <?php } ?>
  	</div>
</div>
 
 </div>

