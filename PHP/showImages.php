<?php

// $servername = "localhost";
// $dbuser = "root";
// $password = "admin";
// $dbname = "OHMs";

// $con = mysqli_connect($servername, $dbuser, $password, $dbname);
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $sql = "SELECT * FROM uploadtable WHERE active=yes";
// $result = mysqli_query($con, $sql);


// while ($row = mysqli_fetch_assoc($result)) {
//     // echo $file;
//     $email = $row["EmailAddress"];

// $context=  get_resource_type($fileType);

// [, bool $use_include_path = FALSE [, resource $context ]] 
// readfile($fileName, $fileDestination, $context)
// echo "<div class='container' style='display:grid'> ";
// // echo ($fileDestination);
// // readfile($image)
// $image = glob($fileDestination);
// // echo $fileDestination;
// // echo $image[1];
// // $images=array();
// // $images[]=$image;
// // foreach($fileDestination as $image){
// if (is_dir($fileDestination)) {
//   $images = glob($fileDestination);
//   for ($i = 0; $i <= count($images); $i++) {
//     // if($images[$i] != '.' && $images!='..'){
//     echo '<img style="width: 200px; height:200px;"  src="' . $fileDestination . $images[$i] . '" alt="Random image" />' . "<br /><br />";
//     // }
//   }
// }
echo "images";
$images = glob("../PHP/$email.{jpg,gif,png}", GLOB_BRACE);


for ($i = 0; $i <= count($images); $i++) {
    print_r($images);
    // echo "<img src=' $images[$i]' style='width:100px;height:100px;'><br>";
}
// 
// foreach ($images as $image) {
//     echo "<img src='$image' style='width:100px;height:100px;'><br>";
// }

//   $dir_path = "../PHP";
//   $extensions_array = array('jpg','png','jpeg');

//   if(is_dir($dir_path))
//   {
//       $files = scandir($dir_path);

//       for($i = 0; $i < count($files); $i++)
//       {
//           if($files[$i] !='.' && $files[$i] !='..')
//           {
//               // get file name
//               echo "File Name -> $files[$i]<br>";

//               // get file extension
//               $file = pathinfo($files[$i]);
//               $extension = $file['extension'];
//               echo "File Extension-> $extension<br>";

//              // check file extension
//               if(in_array($extension, $extensions_array))
//               {
//               // show image
//               
//               }
//           }
//       }
//   }



// for ($i = 0; $i < count($fileD); $i++) {
//   $image = $file[$i];
//   echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
//   // echo '<img src="' . $image . '" alt="Random image" />' . "<br /><br />";

// }


// $files = glob($fileDestination);
// for ($i = 0; $i < count($files); $i++) {
//   $image = $files[$i];
//   $supported_file = array(
//     'gif',
//     'jpg',
//     'jpeg',
//     'png'
//   );

//   while ($ext = strtolower(pathinfo($image, PATHINFO_EXTENSION))) {
//     if (in_array($ext, $supported_file)) {
//       echo basename($image) . "<br />"; // show only image name if you want to show full path then use this code // echo $image."<br />";
//       echo '<img style="width: 200px; height:200px;"  src="' . $image . '" alt="Random image" />' . "<br /><br />";
//     } else {
//       continue;
//     }
//   }


// echo "<img style='width: 200px; height:200px; ,'". ($images[0])."> " ;
// }
echo "</div>";
    

    // mysqli_close($con);
