<?
if(strlen($_POST["Email"])>2)
{
if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$",$_POST["Email"]))
{
 $EmailAddr = $_POST["Email"];
}else
{
print "Sorry.  Your address was not valid.  Please try again.";
return;
}
$maillist_address = "nighttrain_onelist-join@lists.purdue.edu";
$subject = "";
$body = "";
$headers = "From: " . $EmailAddr;

if (mail("$maillist_address",
"$subject",
"$body",
"$headers"))
{
echo "<p>Thank you. A subscription confirmation has been sent to $EmailAddr.  You need to confirm the request before it will become official. Click return to enter another email address</p>";
echo "<a href='mailinglist.html'>Return</a></p>";

}else{
print "The subscription request failed. Please check your address and try again.";
}
}
?>