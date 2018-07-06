<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
<div class="container-fluid main"  >

   <div class="col-md-9 content-div">
         <div class="col-md-12">
          <!-- Heading -->
          <div class="row">
            <div class="col-md-12">
              <h2>Job Management</h2>
              <hr>
            </div>
          </div>
          <!-- main body -->
          <div class="row">
            <div class="col-md-12">
              <ul class="nav nav-tabs">
                 <li class="active"><a data-toggle="tab" href="#home">Create Job</a></li>
                 <li><a data-toggle="tab" href="#menu1">Job List</a></li>
            </ul>
            </div>
          </div>
       </div>
        <!-- tab content -->
       <div class="tab-content">
        <!-- first tab -->
         <div id="home" class="tab-pane fade in active">
             <div class="col-md-12"> <h3>Create Job</h3>  <span id"success_job" style="color:green;display:none;">Job Created Successfully</span></div>

            <div class="col-md-12" >
               <form class="form-horizontal" name="crea_job" id="crea_job" method="post">
                <div class="col-md-6" style="padding:20px;">

                  <div class="form-row">
                    <div class="form-group">

                        <label for="inputName">Date:</label>
                        <label style="font-weight:400" class="form-control"><?php echo date("d/m/Y")?></label>
                       <!--  <input type="date" style="border-color:#99e6e6" class="form-control" name="job_date" id="job_date" value="<?php echo date("d/m/Y")?>" data-date-format="mm/dd/yyyy"> -->
                    </div>
                   
                     <div class="form-group">
                            <label for="inputEmail">Job Title</label>
                            <input type="text" style="border-color:#99e6e6"  name="job_title" class="form-control" id="job_title" required tabindex="2">
                             
                     </div>
                     <div class="form-group">
                            <label for="inputEmail">Work Experience</label>
                            <input type="text" style="border-color:#99e6e6"  name="job_experience" class="form-control" id="job_experience"  required tabindex="4">
                             
                     </div>
                     <div class="form-group">
                            <label for="inputName">Job Opening Status</label>
                           <select id="job_opening_status" style="border-color:#99e6e6" name="job_opening_status" class="form-control" required tabindex="6">
                      <option selected="yes" disabled="yes" value="">Select Job Status</option>
                      <option value="In Progress">In Progress</option>
                      <option value="Closed">Closed</option>
                      <option value="Halted">Halted</option>
                       
                          </select>
                     </div>  
                  </div> 
                </div>
                 <div class="col-md-6" style="padding:20px;">
                   <div class="form-row">
                     <div class="form-group">
                        <label for="inputMobile">Job Id</label>
                        <input type="text" style="border-color:#99e6e6" id="job_id" name="job_id" class="form-control" id="job_id"  required tabindex="1">
                          
                    </div>
                    <div class="form-group ">
                        <label for="inputMobile">Job Location</label>
                        <input type="text" style="border-color:#99e6e6" id="job_location" name="job_location" class="form-control"  required tabindex="3">
                          
                    </div> 
                     
                    <div class="form-group">
                            <label for="inputEmail">No Of Positions</label>
                            <input type="text" style="border-color:#99e6e6"  name="job_positions" class="form-control" id="job_positions" required tabindex="5">
                    </div>

                  </div>
                 </div>
                 <div  class="col-md-12" style="padding:20px;">
                 <div class="form-group">
                       <label for="inputRole">Qualification</label>
                       <textarea style="border-color:#99e6e6; resize:none"  name="job_qualification" class="form-control" id="job_qualification" tabindex="7" rows="7"></textarea>
                    </div>
                      <div class="form-group">
                       <label for="inputRole">Job Description</label>
                       <textarea style="border-color:#99e6e6; resize:none"  name="job_description" class="form-control" id="job_description" tabindex="8" rows="7"></textarea>
                    </div>
                    </div>
                  <div class="col-md-12 text-center">
                    <div class="form-row">
                    <div class="form-group ">
                      <button type="submit" class="btn btn-primary" onclick="cre_job()">Create Job</button>
                    </div>
                  </div>
                  </div>
               </form>               
            </div>              
          </div>
          <!-- First tab end -->
<!-- Second tab -->
           <div id="menu1" class="tab-pane fade">
            <div style="margin-top: 10px">
              <div> <h2 class="col-md-12">Users List</h2></div>
        
               <table  class="table table-bordered">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Role</th>
                    <th>Edit/View</th>
                   </tr>
                </thead>
              
              </table>
 
          </div>
      <!-- Second tab -->
      </div>

    </div>
    <!-- content div end -->
 </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
 <!-- Main end -->
<script type="text/javascript">
document.getElementById('job_date').valueAsDate = new Date();
</script>