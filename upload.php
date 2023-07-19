<?php include 'connect.php' ?>

<?php
if ($conn) {
    if (isset($_POST['upload']) && empty($_FILES['image']['name']) || empty($_POST['title'])) {
        echo"fill all data";
    } else {
        $title = $_POST['title'];
        $image = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $destination = "images/" . $image;
        (move_uploaded_file($tmp_name, $destination));

        $sql = "INSERT INTO imagegallery (image, title) VALUES ('".$image."','".$title."')";
        $query = $conn->query($sql);

        if ($query) {
            echo "success";
        } else {
            die($conn->connect_error);
        }
    }
}

// if(isset($_POST) && !empty($_FILES['image']['name']) && !empty($_POST['title'])){  
  
//     $name = $_FILES['image']['name']; 
//     // echo $name; 
//     // list($txt, $ext) = explode(".", $name);  
//     // $image_name = time().".".$ext;  
//     $tmp = $_FILES['image']['tmp_name'];  
  
//     if(move_uploaded_file($tmp, 'images/'.$name)){  
  
//         $sql = "INSERT INTO imagegallery (title, image) VALUES ('".$_POST['title']."', '".$name."')";  
//         $conn->query($sql);  
  
     
//     }else{
//         echo "success";  
//     }
     
// }  
  


?>
