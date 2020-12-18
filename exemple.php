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
// Add new Game Type
if (isset($_POST['upload']))
{
    $GAME_THUMB = $_FILES['image'];
    
    $move_file_path = "stockage/images/";
    $upload = ImagesUploder($GAME_THUMB, $move_file_path);
    // 0 Mean Image was not uploaded - 1 Mean Image was uploaded Successfuly
    if ($upload['is_uploaded'] == 0)
    {
        echo "There is an error please try again";
    }
    else
    {

    // Your Code Here

    }

}
else
{

}

?>
