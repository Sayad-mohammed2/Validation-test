<?php
if (isset($_POST['validation'])) {
    // include cnx
        include('conexion.php');
    //

    $file = $_FILES['file'];
?>
    <!-- <pre> -->


    <?php


    $imgName = $file['name'];
    $imgTmp = $file['tmp_name'];
    $imgSize = $file['size'];
    $err = $file['error'];
    $path = $file['full_path'];
    $imgType = $file['type'];

    $explodeFile = explode('.', $imgName);
    $imgExt = strtolower(end($explodeFile));
    $itemType = array('jpg', 'png', 'jpge');

    if (in_array($imgExt, $itemType) && $err === 0) {
        if ($imgSize < 100000) {
            $newImgName = uniqid('', true) . "." . $imgExt;
            $imgUpload = move_uploaded_file($imgTmp, 'images/' . $newImgName);
            
            $query = "INSERT INTO validation_tab (file_chosen) VALUES ('$newImgName')";
            $stmt = $conn->prepare($query);
          

            if($stmt->execute())
            {
                echo "File Uploaded";
                header('location:imgToDB.php');

            }else
            {
                echo "Error: " . $query . "<br>" ;
            }

        } else {
            echo "File size is too big";
        }
    } else {
        echo "File type is not supported";
    }

    ?>

    <!-- </pre> -->

<?php

}
?>
