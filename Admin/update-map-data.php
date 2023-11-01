    <?PHP
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }



    $id = $_POST['id'];
    $name = $_POST['name'];
    $s_length = $_POST['s_length'];
    $width = $_POST['s_width'];

    $wall_dimension = $_POST['wall_dimension'];
    $area = $_POST['area'];
    $beds = $_POST['beds'];
    $baths = $_POST['baths'];
    $kitchens = $_POST['kitchens'];
    $garages = $_POST['garages'];
    $floors = $_POST['floors'];
    $description = $_POST['description'];
    
    $targetFile = basename($_FILES["map_img"]["name"]);


    $generatedstring = generateRandomString();

    $myfilename = $generatedstring . '_' . time() . '.' . strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    //echo $myfilename;exit;
    // Handle image upload
    $targetDir = "upload/"; // Directory where you want to store uploaded images

    //$targetFile = $targetDir . basename($_FILES["map_img"]["name"]);


    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["map_img"]["name"], PATHINFO_EXTENSION));

    // Check if the image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["map_img"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check file size (limit it to 2MB in this example)
    if ($_FILES["map_img"]["size"] > 2 * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (JPEG, JPG, PNG)
    $allowedExtensions = ["jpeg", "jpg", "png"];
    if (!in_array($imageFileType, $allowedExtensions)) {
        echo "Sorry, only JPEG, JPG, and PNG files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // If everything is ok, try to upload the file
    } else {
        if (move_uploaded_file($_FILES["map_img"]["tmp_name"], 'upload/' . $myfilename)) {
            echo "The file " . basename($_FILES["map_img"]["name"]) . " has been uploaded.";


// update data
            $conn = mysqli_connect("localhost", "root", "", "house-design") or die("connection failled");
            $sql = "UPDATE maps SET name = '{$name}' ,area = '{$area}', carea = '{$carea}', dimension = '{$dimension}', beds = '{$beds}',
    baths ='{$baths}',kitchens ='{$kitchens}',garages ='{$garages}',
    floors ='{$floors}',description = '{$description}',map_img = '{$myfilename}'  WHERE id = '{$id}'";

            $reslut = mysqli_query($conn, $sql) or die("querry unsuccefull");

            header("Location: http://localhost/housedesign/admin/dashboard.php");

            mysqli_close($conn);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>