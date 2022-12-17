 <html>
  <title>ارسال</title>
  <body bgcolor ="lightcyan">
<html dir="rtl"> 
   <?php
   $lastname = $_POST["lname"] . PHP_EOL;
   $name = $_POST["fname"] . PHP_EOL; 
   $email = $_POST["email"] . PHP_EOL;
   $msg = $_POST["message"] . PHP_EOL; 
   
   echo ($name) ;
   echo "  ";
   echo ($lastname);
   echo "، پیام شما ارسال شد";
	
$fn = 1;
$newfn=0;
while(!$newfn){
    if(!file_exists("$fn.txt"))
        $newfn = "$fn.txt";
        $fn++;
}

file_put_contents("$newfn", $name,FILE_APPEND);
file_put_contents("$newfn", $lastname,FILE_APPEND);
file_put_contents("$newfn", $email,FILE_APPEND);
file_put_contents("$newfn", $msg,FILE_APPEND);

  ?>
  </body>
 </html>