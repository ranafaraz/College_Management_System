<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center;">
        <strong>Superior Group of Colleges</strong>        
        | Learning Management System (LMS)
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><button type="submit" class="btn btn-success">Home</button></a></li>
        <li><a href="semester.php"><button type="submit" class="btn btn-danger">Back</button></a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    <h2 class="well well-sm" style="border-top:3px solid teal;">Student Record</h2>
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Add session</a></li>
              <li><a href="#tab_2" data-toggle="tab">Student Registration</a></li>
              <li><a href="#tab_3" data-toggle="tab">Fee Details</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Dropdown <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
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

                <div class="row">
                    <div class="col-md-4">
                        <label>Gaurdian Name</label>
                        <input type="text" class="form-control" name="Gaurd_name" placeholder="Enter gaurdian name">
                    </div>
                </div>
                <!--row 7 closed-->

        </div>
      </div>
    </section>
    <!-- /.content -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="well" style="text-align: center; font-weight: bold; font-size: 35px;">
        |STUDENT FEE DETAIL|
      </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="box-body">
        <div class="form-group">
          <div class="row">
            <div class="col-md-3">
              <label>Registration Fee</label>
              <input type="number" class="form-control" name="reg_fee" placeholder="Enter Registration Fee">
            </div>
            <div class="col-md-3">
              <label>Student Roll #</label>
              <input type="number" class="form-control" name="std_roll" placeholder="Enter Roll No">
            </div>
            <div class="col-md-3">
                        <label>Student Name</label>
                        <input type="text" class="form-control" name="std_name" placeholder="Enter Student Name">
                    </div>
                    <div class="col-md-3">
                        <label>Registration #</label>
                        <input type="number" class="form-control" name="reg_no" placeholder="Enter Registration No">
                    </div>
          </div>
          <!--row 1 closed-->

                <div class="row">
                    <div class="col-md-3">
                        <label>Program</label>
                        <input type="text" class="form-control" name="prgrm" placeholder="Enter Program">
                    </div>
                    <div class="col-md-3">
                        <label>Session</label>
                        <input type="number" class="form-control" name="sessn" placeholder="Enter Session">
                    </div>
                    <div class="col-md-3">
                        <label>Semester</label>
                        <input type="number" class="form-control" name="smstr" placeholder="Enter Semester">
                    </div>
                    <div class="col-md-3">
                        <label>Total Fee</label>
                        <input type="number" class="form-control" name="total_fee" placeholder="Enter Total Fee">
                    </div>
                </div>
                <!--row 2 closed-->

                <div class="row">
                    <div class="col-md-3">
                        <label>Total Number of Installment</label>
                        <input type="number" class="form-control" name="t_n_o_i" placeholder="Enter Installment">
                    </div>
                    <div class="col-md-3">
                        <label>Installment Per Amount</label>
                        <input type="number" class="form-control" name="i_p_a" placeholder="Enter Installment Amount">
                    </div>
                    <div class="col-md-3">
                        <label>Next Due Date for Installment</label>
                        <input type="date" class="form-control" name="n_dd_f_i" placeholder="Enter Due Date">
                    </div>
                    <div class="col-md-3">
                        <label>Number of Installment Remaining</label>
                        <input type="number" class="form-control" name="n_o_i_r" placeholder="Enter Remaining Installment">
                    </div>
                </div>
                <!--row 3 closed-->

                <button style="margin: 3px;" type="button" class="btn btn-success">Submit</button>

        </div>
      </div>
    </section>
    <!-- /.content -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'footer.php'; ?>