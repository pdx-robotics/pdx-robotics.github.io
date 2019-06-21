<?php
// deleting images from the gallery
$gallery = "../gallery/images/";
if ( $_POST["delete"]) {
  $keys = array_keys($_POST);
  foreach($keys as $entry) {
    // the post request replaces . with _ so the following replaces the _ for the
    // suffix with a .
    $entry = explode("_", $entry);
    $temp = "";
    for($i = 0; $i < count($entry)-2; $i++){
      $temp .= $entry[$i]. "_";
    }
    $entry = $temp. $entry[$i]. ".". $entry[count($entry)-1];
    unlink($gallery.$entry);
  }
}
elseif(isset($_POST["submit"])){
  $target_dir = $gallery;
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  else{
    exit();
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
}
?>
<!DOCTYPE html>
<html>
  <style>
  table, th, td {
  border: 1px solid black;
  };
  </style>
  <body>
    <h2>Upload Image</h2>
    <form method="post" enctype="multipart/form-data">
      Select image to upload:
      <input type="file" name="fileToUpload" id="fileToUpload"><br>
      <input type="submit" value="Upload Image" name="submit">
    </form>
    <h2>Images in Gallery</h2>
    <table>
      <form method='post'>
      <thead>
        <tr>
          <th><input type='submit' value='Delete'></th>
          <th>images</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $files = scandir($gallery);
        echo "<input type='hidden' name='delete' value='true'>"; // allows the page to know of the type of request 
        foreach($files as $image){
          if($image != "." && $image != ".."){
            echo "<tr><td><input type ='checkbox' name='".$image. "'/></td>";
            echo "<td><a href=\"".$gallery.$image."\">".$image."<a></td></tr>\n";
          }
        }
        ?>
      </tbody>
    </table>
  </body>
</html>
