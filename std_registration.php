<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well" style="text-align: center; font-weight: bold; font-size: 35px;">
        |STUDENT REGISTRATION|
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    	<div class="box-body">
    		<div class="form-group">
    			<div class="row">
    				<div class="col-md-4">
    					<label>Form Number</label>
    					<input type="number" class="form-control" name="frm_no" placeholder="Enter Form Number">
    				</div>
    				<div class="col-md-4">
    					<label>Student Name</label>
    					<input type="text" class="form-control" name="std_name" placeholder="Enter Student Name">
    				</div>
    				<div class="col-md-4">
    					<label>Father Name</label>
    					<input type="text" class="form-control" name="f_name" placeholder="Enter Father Name">
    				</div>
    			</div>
    			<!--row 1 closed-->

    			<div class="row">
    				<div class="col-md-4">
    					<label>Phone No.</label>
    					<input type="number" class="form-control" name="phn_no" placeholder="Enter Phone No">
    				</div>
    				<div class="col-md-4">
    					<label>E-mail</label>
    					<input type="email" class="form-control" name="email" placeholder="Enter Email">
    				</div>
    				<div class="col-md-4">
    					<label>Class</label>
    					<input type="text" class="form-control" name="class" placeholder="Enter Class">
    				</div>
    			</div>
    			<!--row 2 closed-->

    			<div class="row">
    				<div class="col-md-4">
    					<label>Age</label>
    					<input type="number" class="form-control" name="age" placeholder="Enter Age">
    				</div>
    				<div class="col-md-4">
    					<label>CNIC</label>
    					<input type="number" class="form-control" name="cnic" placeholder="Enter CNIC">
    				</div>
    				<div class="col-md-4">
    					<label>Enrollment #</label>
    					<input type="number" class="form-control" name="enroll_no" placeholder="Enter Enrollment No">
    				</div>
    			</div>
    			<!--row 3 closed-->

    			<div class="row">
    				<div class="col-md-4">
    					<label>Date of Birth</label>
    					<input type="text" class="form-control" name="d_of_b" placeholder="Enter DOB">
    				</div>
    				<div class="col-md-4">
    					<label>Date of Admission</label>
    					<input type="text" class="form-control" name="d_of_add" placeholder="Enter DOA">
    				</div>
    				<div class="col-md-4">
    					<label>Fee Package</label>
    					<input type="number" class="form-control" name="fee_pkge" placeholder="Enter Fee Package">
    				</div>
    			</div>
    			<!--row 4 closed-->

    			<div class="row">
    				<div class="col-md-4">
    					<label>Registration Fee</label>
    					<input type="number" class="form-control" name="reg_fee" placeholder="Enter Registration Fee">
    				</div>
    				<div class="col-md-4">

    					<label>Installments</label>
    					<select class="form-control">
		                    <option>Annual base</option>
		                    <option>Semester vise</option>
		                    
                  		</select>
                
    				</div>

    				<div class="col-md-4">
    					<label>Department</label>
    					<input type="text" class="form-control" name="depart" placeholder="Semester/Annual">
    				</div>
    				
    			</div>
    			<!--row 5 closed-->

    			<div class="row">
    				<div class="col-md-4">
    					<label>Session</label>
    					<input type="text" class="form-control" name="sess" placeholder="From - To">
    				</div>
    				<div class="col-md-4">
    					<label>Address</label>
    					<input type="text" class="form-control" name="add" placeholder="Enter Address">
    				</div>
    				<div class="col-md-4">
    				<label>Gender</label>
    					<div class="radio">
	                    
		                    <label>
		                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
		                      Male
		                      </label>
		                      <label>
		                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Female
		                    </label>
	                    </div>
    				</div>
    				
	                    
    				
    			</div>
    			<!--row 6 closed-->

    		</div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once 'footer.php'; ?>