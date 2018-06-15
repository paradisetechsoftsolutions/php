<?php
set_time_limit(0);
if (isset($_POST['button'])) {

$url=$_POST['url'];

$fname=$_POST['fname'];


try {
   file_put_contents($fname, fopen($url, 'r'));
   echo "File Downloaded Successfully";

} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

   
}


?>

<form method="post">
  <div class="form-group">
  
     <label for="Enter Url">Enter file name:</label>
    <input type="text" name="fname" class="form-control" id="fname">
    <label for="Enter Url">Enter Zip Url to download:</label>
    <input type="text" name="url" class="form-control" id="url">
  </div>
  
  
  <button type="submit" name="button" class="btn btn-default">Submit</button>
</form>
