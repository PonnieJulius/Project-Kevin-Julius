<?php
 include('includes/hdb.php'); 
 include('includes/sidenavadmin.php'); 
include('includes/topnav.php');
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add a Course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="" method="POST" enctype="multipart/form-data">

                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control"required>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Phone Number:</label>
                        <input type="text" name="phone" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Password:</label>
                        <input type="text" name="cfmPassword" class="form-control"required>
                    </div>
                    <div class="mb-3">
                        <label for="pwd" class="form-label">Confirm Password:</lasbel>
                        <input type="text" name="Password" class="form-control"required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image:</label>
                        <input type="file" name="course_image" accept="image/jpg, image/png, image/jpeg" class="form-control" required>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="location.reload();">Close</button>
                    <button type="submit" class="btn btn-primary" name="courses">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
  <div class="container-fluid py-5">
          <div class="card shadow">
            <div class="card-header py-3">
              <h6 class="m-0 text-primary font-weight-bold">Registered Users
              <!-- Button trigger modal -->
                <button type="button" class="mx-2 btn btn-primary justify-content-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  Add
                </button>
              </h6>
            </div> 
            
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Edit</th>
                      <th>DELETE</th>
                    </tr>
                  </thead>
                  <tbody> 
                    <tr>
                      <td></td>  
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <a class="dropdown-item btn-primary text-center rounded-5" href="category_edit.php">
                        <i class="bx bx-edit-alt me-1"></i></a>
                      </td>
                      <td>
                        <form action="" method="post">
                            <input type="hidden" name="deleteCategory_id">
                            <button type="submit" name="deleteEditBtn" class="dropdown-item btn-danger btn-sm align-items-center text-center " href="javascript:void(0);"><i class="bx bx-trash me-1"></i></button>
                        </form>
                      </td>
                    </tr>              
                  </tbody>

                </table>
              </div>
            </div>

          </div>
  </div>

<?php 
include('includes/fdb.php');
include('includes/script.php');
?>
