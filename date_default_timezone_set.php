#How to convert yyyy-MM-ddTHH:mm:ssZ to yyyy-MM-dd HH:mm:ss
 
date_default_timezone_set("America/Lima");
echo date('Y-m-d H:i:s', strtotime('2012-09-10T10:30:00Z'));//date format UTC +00.00
 
 
#convert date format UTC to timezone America/Lima
date_default_timezone_set("UTC");//server configured UTC
$date = strtotime(date('Y-m-d H:i:s'));
echo(date_default_timezone_get() . "<br />");//output: UTC
echo(date("Y-m-d H:i:s T P", $date) . "<br />"); //output: Y-m-d H:i:s UTC +00:00
echo(date_default_timezone_set("America/Lima") . "<br />");//set timezone America/Lima
echo(date("Y-m-d H:i:s T P", $date) . "<br />");//output: Y-m-d H:i:s PET -05:00
