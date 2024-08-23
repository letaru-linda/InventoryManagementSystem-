<?php include('header.php'); ?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
           
              <div class="card-header">
                <h5 class="card-title">  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default">
                  Add User 
                </button></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Full Name</th>
                    <th>Contact</th>
                    <th>Nin Number</th> <th>Photo</th>
                    <th>Role</th><th>Password</th><th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                
                 
                 
                  <tr>
                    <td>001</td>
                    <td>Teddy Nandutu</td>
                    <td>+256123456789</td>
                    <td>CF19227873827GH</td> <td>My Photo</td>
                    <td>Admin</td> <td>Password</td><td> 
                                            <a data-toggle="modal" href="#edit<?= $rx->user_id; ?>">
                                                <i class="fa fa-edit" style="color:blue;" aria-hidden="true"></i></a>

                                            <a href="#" onclick="confirmDelete(<?= $rx->user_id; ?>)">
                                                <i class="fa fa-times" style="color:red;" aria-hidden="true"></i>
                                            </a>

                                           

                                        </td>
                  </tr>
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content --><div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFullname">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputFullname" placeholder="Enter Fullname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputContatct">Contact</label>
                    <input type="text" class="form-control" id="exampleInputContact" placeholder="Contatc">
                  </div> <div class="form-group">
                    <label for="exampleInputNIN">Nin Number</label>
                    <input type="text" class="form-control" id="exampleInputNIN" placeholder="NIN">
                  </div><div class="form-group">
                        <label>Role</label>
                        <select class="form-control">
                          <option>Admin</option>
                          <option>Cashier</option>
                          <option>Manager</option>
                          <option>Delivery Man</option>
                          
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
              </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  </div>
  <?php include('footer.php'); ?>