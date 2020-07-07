<?php
if(isset($_POST['submit'])) {
    $newFileName = $_POST['filename'];
    if (empty($newFileName)) {
        $newFileName = "gallery";
    } else {
        $newFileName = strtolower(str_replace(" ", "-", $newFileName));
    }
    $imageTitle = $_POST['filetitle'];
    $imageDesc = $_POST['filedesc'];

    //tên mặc định có sẵn khi truyền file
    $file = $_FILES['file'];
    $filename = $file["name"];
    $fileType = $file["type"];
    $fileTempName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];

    $fileExt = explode(".", $filename);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array("jpg", "png", "jpeg");
    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $imageFullName = $newFileName . "." . uniqid("", true) . "." . $fileActualExt;
                $fileDestination = "../img/gallery/" . $imageFullName;
                include_once "dhb.inc.php";
                if (empty($imageTitle) || empty($imageDesc)) {
                    header("Location: ../gallery.php?upload=empty");
                    exit();
                } else {
                    $sql = "Select * from gallery;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed.";
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        $rowCount = mysqli_num_rows($result);
                        $setImageOrder = $rowCount + 1;

                        $sql = "Insert into gallery(titleGallery,descGallery,imgFullNameGallery, orderGallery) values(?,?,?,?);";
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed.";
                        } else {
                            mysqli_stmt_bind_param($stmt, "ssss", $imageTitle, $imageDesc, $imageFullName, $setImageOrder);
                            mysqli_stmt_execute($stmt);
                            move_uploaded_file($fileTempName, $fileDestination);
                            header("Location:../cases.php");
                        }
                    }
                }
            } else {
                echo "File size to large!";
                exit();
            }}
        else {
                echo "You have an error!";
                exit();
            }}else{
                echo "You nedd to upload a proper file type!";
            }
        }




?>