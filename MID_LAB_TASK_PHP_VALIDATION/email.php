<?php


if(isset($_REQUEST['submit']))
{
  $email=$_REQUEST['email'];
if ($email=="") {
  echo "Can not be empty";
}
else
{
  echo "Your Email is:".$email;
}

}




?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form  method="get">
      <fieldset>
       <legend>EMAIL</legend>
        <input type="email" name="email" value=""><br>
        <input type="submit" name="" value="Submit">
        </fieldset>
    </form>
  </body>
</html>