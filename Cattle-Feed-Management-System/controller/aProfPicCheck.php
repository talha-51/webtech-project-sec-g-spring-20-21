<?php
    $file_info=$_FILES['image'];
    $path='../asset/'.$file_info['name'];

    if(move_uploaded_file($file_info['tmp_name'], $path))
    {
        echo "Success";
    }
    else{
        echo "Error";
    }
?>