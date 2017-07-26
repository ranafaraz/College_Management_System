<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well" style="text-align: center; font-weight: bold; font-size: 35px;">
        |STUDENT COURSE|
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    	<div class="box-body">
    		<div class="form-group">
    			<div class="row">
    				<div class="col-md-4">
    					<label>Program</label>
                        <select class="form-control">
                            <option>Fsc-Pre medical</option>
                            <option>Fsc-Pre engineering</option>
                            <option>ICS</option>
                            <option>Semester</option>
                        </select>
    				</div>
    				<div class="col-md-4">
    					<label>Course code</label>
    					<input type="number" class="form-control" name="course_code" placeholder="Enter course code">
    				</div>
    				<div class="col-md-4">
    					<label>Course Name</label>
    					<input type="text" class="form-control" name="course_name" placeholder="Enter course name">
    				</div>
    			</div>
    			<!--row 1 closed-->

                <div class="row">
                    <div class="col-md-4">
                        <label>Credit Hours</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <!--row 2 closed-->

    			
    		</div>
    	</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include_once 'footer.php'; ?>