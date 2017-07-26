<?php include_once('header.php');?>
<?php include_once('sidebar.php');?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 <!-- <img src="dist/img/superior_colg.jpg" height="600px" width="100%"> --> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student Registration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Your Page Content Here -->
     <div class="box-body">

	     <div class="row">
	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>First Name</label>
			     	<input type="text" class="form-control"placeholder="Enter First Name" >
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Last Name</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Full Name</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>
	     	
	     </div>

	     <!--row 1 end here-->

	     <div class="row">
	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Father Name</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Address</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Class</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>
	     	
	     </div>

	     <!--row 2 end here-->

	     <div class="row">
	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Roll number</label>
			     	<input type="number" class="form-control">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Section</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>Registration number</label>
			     	<input type="text" class="form-control">
              	</div>
	     	</div>
	     	
	     </div>

	     <!--row 3 end here-->

	     <div class="row">
	     	<div class="col-md-4">
		     	<div class="form-group">
			     	<label>CNIC #</label>
			     	<input type="number" class="form-control data-inputmask="'mask'[999_999]">
              	</div>
	     	</div>

	     	<div class="col-md-4">
		     	<div class="form-group">
                  <label>Select</label>
	                  <select class="form-control">
	                    <option>option 1</option>
	                    <option>option 2</option>
	                    <option>option 3</option>
	                    <option>option 4</option>
	                    <option>option 5</option>
	                  </select>
                </div>
	     	</div>

	     	<div class="col-md-4">
		     	<!-- Date -->
              <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
	     	</div>
				     	
	     </div>
<button class="btn btn-success" name="submit">Submit</button>
	     <!--row 4 end here-->
     </div>
            
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

	<!-- bootstrap datepicker -->
	<script src="../../plugins/datepicker/bootstrap-datepicker.js">
	</script>  

<?php include_once('footer.php')?>