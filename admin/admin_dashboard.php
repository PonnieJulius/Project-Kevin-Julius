<?php
 include('includes/hdb.php'); 
 include('includes/sidenavadmin.php'); 
include('includes/topnav.php');
?>
<div class="container-xxl flex-grow-1 container-p-y">

  <div class="row">
    <div class="col-lg-12 col-md-3 order-1">
      <div class="row">
        <!-- registered users -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="users.php">View More</a>
                    <a class="dropdown-item" href="users.php">Add</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Registered Users</span>
              <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
        <!-- registered student -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="users.php">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Students</span>
              <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
          <!-- registered instructors -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="instructors.php">View More</a>
                    <a class="dropdown-item" href="instructors.php">Add</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Instructors</span>
              <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
          <!-- Enolled last month -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="users.php" target="_blank">View More</a>
                    <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Enolled Last Month</span>
              <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
          <!-- categories -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="category.php" target="_blank">View More</a>
                    <a class="dropdown-item" href="category.php">Add</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Categories</span>            
             <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
          <!-- coursest -->
        <div class="col-md-3 col-3 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="card-title d-flex align-items-start justify-content-between">
                <div class="avatar flex-shrink-0">
                  <img src="assets/profile.png"alt="chart success"class="rounded"/>
                </div>
                <div class="dropdown">
                  <button class="btn p-0"type="button"id="cardOpt3"data-bs-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
                    <i class="bx bx-dots-vertical-rounded"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                    <a class="dropdown-item" href="courses.php" target="_blank">View More</a>
                    <a class="dropdown-item" href="courses.php">Add</a>
                  </div>
                </div>
              </div>
              <span class="fw-semibold d-block mb-1">Courses</span>
              <h3 class="card-title mb-2" >600</h3>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
<?php 
include('includes/fdb.php');
include('includes/script.php');
?>
