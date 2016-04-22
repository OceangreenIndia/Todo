<?php
$input_url = mysql_real_escape_string($_POST['url']);
if(empty($input_url) || (filter_var($input_url, FILTER_VALIDATE_URL) === false)){
	header("location: #FileNameWhereYouWantTORedirectOnIfPostUrlIsEmptyOrItsInvalidUrl");
  }else{
  $id=rand(10000,99999);
  $shorturl=base_convert($id,20,36);
  echo "id = ". $id."</br>";
  echo "short = ".$shorturl."<br/>";
  }
  
  ?>
