<?php
    session_start();    
    if(isset($_POST['submit'])){
        $file_info=$_FILES['image'];
        $path='../asset/'.$file_info['name'];

        $fileExt= explode('.', $file_info['name']);
        $fileActualExt= strtolower(end($fileExt));
        $allowed= array('jpg', 'jpeg', 'png');

        if(in_array($fileActualExt, $allowed)){
            if($file_info['error']=== 0){
                if($file_info['size']>4000){
                    move_uploaded_file($file_info['tmp_name'], $path);
                    $_SESSION['profPic'] = $file_info['name'];
                    header('location: ../view/image.php');
                }else{
                    echo "File size must be less than 4MB";
                }
            }else{
                echo "There was an error uploading your file";
            }
        }else{
            echo "Only 'jpg','jpeg' and 'png' types are allowed";
        }
    }
?>