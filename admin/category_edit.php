<?php
    include('includes/hdb.php'); 
    include('includes/sidenavadmin.php'); 
    include('includes/topnav.php');
?>
<div class="container  py-5">
    <div class="row justify-content-center">
        <div class="col-md-10"> 
            <div class="card">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <h1 class="modal-title fs-4 text-primary text-center" id="exampleModalLabel">Edit Category</h1>
                        <input type="hidden" name="edit_id"> 
                        <div class="card-body">                
                            <div class="mb-3 mt-3">
                                <label class="form-label">Category:</label>
                                <input type="text" name="editCategory_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tag Name:</label>
                                <input type="text" name="editCategory_tag"" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Image:</label>
                                <input type="file" name="editCategory_image" accept="image/jpg, image/png, image/jpeg" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="location.reload();">Close</button>
                                <button type="submit" class="btn btn-primary" name="edit_category">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

       

<?php
    include('includes/fdb.php');
    include('includes/script.php');
?>
