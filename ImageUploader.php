<?php
function ImagesUploder($file, $move_to)
{

    $rand_token = rand();
    @$target_dir = $move_to;
    @$target_file = $target_dir . $rand_token . basename($file["name"]);
    @$uploadOk = 1;
    @$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);

    if ($check !== false)
    {

        $uploadOk = 1;

        // Check if file already exists
        if (file_exists($target_file))
        {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
        {
            echo "Sorry, only JPG, JPEG, PNG files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0)
        {
            echo " Sorry, your file was not uploaded.";

            // if everything is ok, try to upload file
            
        }
        else
        {

            if (move_uploaded_file($file["tmp_name"], $target_file))
            {
                $uploadOk = 1;
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";

            }

        }

    }
    else
    {

        echo "File is not an image.";
        $uploadOk = 0;
    }

    // If Return 1 That mean every thing is ok if return 0 that mean there is error happen
    $RETURNING = array(
        'is_uploaded' => $uploadOk,
        'target_file' => $target_file
    );

    return $RETURNING;

}

?>
