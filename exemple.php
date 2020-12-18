<div class="col-md-12 col-lg-4 card">
   <div class="card-header">
      <h3 class="card-title">Exemple</h3>
   </div>
   <div class="card-body">
      <form class="col-md-12 col-lg-12" method="POST" enctype="multipart/form-data">
         <div class="form-group">
            <label class="form-label">Image</label>
            <input type='file' class="form-control" name="image" required="">
         </div>
         <button class='btn btn-success' name='upload'>Upload</button>
      </form>
   </div>
</div>

<?php

if (isset($_POST['upload']))
{
    $IMAGE      = $_FILES['image'];
    
    $move_file_path  = "stockage/images/"; // Move file to this path after uploading
    $upload          = ImagesUploder($IMAGE, $move_file_path); // Call The 'ImageUploader' function  inside a ' Upload ' Variable

   // 0 => Error - 1 => Success
   // $upload variable inside it an array returned from 'ImagesUploder' function
   if ($upload['is_uploaded'] == 0)
    {
        echo "There is an error please try again";
    }
    else
    {

    // Your Code Here if success upload and move to the target file

    }

}
else
{

}

?>
