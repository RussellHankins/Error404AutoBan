<?php
header('HTTP/1.1 404 Not Found');
// This looks line an IIS 404 error. I don't want them to know I'm using nginx. They might try IIS exploits.
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>IIS 8.0 Detailed Error - 404.0 - Not Found</title> 
<style type="text/css"> 
<!-- 
body{margin:0;font-size:.7em;font-family:Verdana,Arial,Helvetica,sans-serif;} 
code{margin:0;color:#006600;font-size:1.1em;font-weight:bold;} 
.config_source code{font-size:.8em;color:#000000;} 
pre{margin:0;font-size:1.4em;word-wrap:break-word;} 
ul,ol{margin:10px 0 10px 5px;} 
ul.first,ol.first{margin-top:5px;} 
fieldset{padding:0 15px 10px 15px;word-break:break-all;} 
.summary-container fieldset{padding-bottom:5px;margin-top:4px;} 
legend.no-expand-all{padding:2px 15px 4px 10px;margin:0 0 0 -12px;} 
legend{color:#333333;;margin:4px 0 8px -12px;_margin-top:0px; 
font-weight:bold;font-size:1em;} 
a:link,a:visited{color:#007EFF;font-weight:bold;} 
a:hover{text-decoration:none;} 
h1{font-size:2.4em;margin:0;color:#FFF;} 
h2{font-size:1.7em;margin:0;color:#CC0000;} 
h3{font-size:1.4em;margin:10px 0 0 0;color:#CC0000;} 
h4{font-size:1.2em;margin:10px 0 5px 0; 
}#header{width:96%;margin:0 0 0 0;padding:6px 2% 6px 2%;font-family:"trebuchet MS",Verdana,sans-serif; 
 color:#FFF;background-color:#5C87B2; 
}#content{margin:0 0 0 2%;position:relative;} 
.summary-container,.content-container{background:#FFF;width:96%;margin-top:8px;padding:10px;position:relative;} 
.content-container p{margin:0 0 10px 0; 
}#details-left{width:35%;float:left;margin-right:2%; 
}#details-right{width:63%;float:left;overflow:hidden; 
}#server_version{width:96%;_height:1px;min-height:1px;margin:0 0 5px 0;padding:11px 2% 8px 2%;color:#FFFFFF; 
 background-color:#5A7FA5;border-bottom:1px solid #C1CFDD;border-top:1px solid #4A6C8E;font-weight:normal; 
 font-size:1em;color:#FFF;text-align:right; 
}#server_version p{margin:5px 0;} 
table{margin:4px 0 4px 0;width:100%;border:none;} 
td,th{vertical-align:top;padding:3px 0;text-align:left;font-weight:normal;border:none;} 
th{width:30%;text-align:right;padding-right:2%;font-weight:bold;} 
thead th{background-color:#ebebeb;width:25%; 
}#details-right th{width:20%;} 
table tr.alt td,table tr.alt th{} 
.highlight-code{color:#CC0000;font-weight:bold;font-style:italic;} 
.clear{clear:both;} 
.preferred{padding:0 5px 2px 5px;font-weight:normal;background:#006633;color:#FFF;font-size:.8em;} 
--> 
</style> 
 
</head> 
<body> 
<div id="content"> 
<div class="content-container"> 
  <h3>HTTP Error 404.0 - Not Found</h3> 
  <h4>The resource you are looking for has been removed, had its name changed, or is temporarily unavailable.</h4> 
</div> 
<div class="content-container"> 
 <fieldset><h4>Most likely causes:</h4> 
  <ul> 	<li>The directory or file specified does not exist on the Web server.</li> 	<li>The URL contains a typographical error.</li> 	<li>A custom filter or module, such as URLScan, restricts access to the file.</li> </ul> 
 </fieldset> 
</div> 
<div class="content-container"> 
 <fieldset><h4>Things you can try:</h4> 
  <ul> 	<li>Create the content on the Web server.</li> 	<li>Review the browser URL.</li> 	<li>Create a tracing rule to track failed requests for this HTTP status code and see which module is calling SetStatus. For more information about creating a tracing rule for failed requests, click <a href="http://go.microsoft.com/fwlink/?LinkID=66439">here</a>. </li> </ul> 
 </fieldset> 
</div> 
 
<div class="content-container"> 
 <fieldset><h4>Detailed Error Information:</h4> 
  <div id="details-left"> 
   <table border="0" cellpadding="0" cellspacing="0"> 
    <tr class="alt"><th>Module</th><td>&nbsp;&nbsp;&nbsp;IIS Web Core</td></tr> 
    <tr><th>Notification</th><td>&nbsp;&nbsp;&nbsp;MapRequestHandler</td></tr> 
    <tr class="alt"><th>Handler</th><td>&nbsp;&nbsp;&nbsp;PHP_via_FastCGI</td></tr> 
    <tr><th>Error Code</th><td>&nbsp;&nbsp;&nbsp;0x80070002</td></tr> 
     
   </table> 
  </div> 
  <div id="details-right"> 
   <table border="0" cellpadding="0" cellspacing="0"> 
    <tr class="alt"><th>Requested URL</th><td>&nbsp;&nbsp;&nbsp;http://<?php echo $_SERVER['SERVER_NAME'].":80".$_SERVER['REQUEST_URI']; ?></td></tr> 
    <tr><th>Physical Path</th><td>&nbsp;&nbsp;&nbsp;C:\inetpub\<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?></td></tr> 
    <tr class="alt"><th>Logon Method</th><td>&nbsp;&nbsp;&nbsp;Anonymous</td></tr> 
    <tr><th>Logon User</th><td>&nbsp;&nbsp;&nbsp;Anonymous</td></tr> 
     
   </table> 
   <div class="clear"></div> 
  </div> 
 </fieldset> 
</div> 
 
<div class="content-container"> 
 <fieldset><h4>More Information:</h4> 
  This error means that the file or directory does not exist on the server. Create the file or directory and try the request again. 
  <p><a href="http://go.microsoft.com/fwlink/?LinkID=62293&amp;IIS70Error=404,0,0x80070002,9200">View more information &raquo;</a></p> 
   
 </fieldset> 
</div> 
</div> 
</body> 
</html><?php
// If they are trying to browse to vulnerabilities in wordpressor phpmyadmin, they're a hacker. Ban them.
$uri = $_SERVER['REQUEST_URI'];
$evil_spots = array('phpmyadmin','/scripts/setup.php','phpMyAdmin','w00tw00t','config.inc','admin','dbadmin','cgi-bin','wp-admin','wp-content','wp-login');
$should_ban = false;
foreach($evil_spots as $evil_spot) {
  if (strpos($uri,$evil_spot)!==FALSE) {
    $should_ban = true;    
    break;
  }
}
// Ban users that have certain hacker words in their user agent string.
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$bad_user_agents = array(
'zgrab','Wget','sysscan','masscan','python','Scanbot','Auto Spider','libwww-perl','Python','curl');
foreach($bad_user_agents as $bad_user_agent)
{
	if (strpos($user_agent,$bad_user_agent)!==FALSE) {
		$should_ban = true;
		break;
	}
}
if ($should_ban) {
	// They are a hacker. Ban them now.
	// Get the remote ip the server is using.
	$remote_addr = $_SERVER['REMOTE_ADDR'];
	if ((substr($remote_addr,0,8)!="192.168.") 
	&& (substr($remote_addr,0,3)!="10.")
	&& ($remote_addr != '127.0.0.1'))
	{
	  if (is_ip($remote_addr)) {
		ban_ip($remote_addr);
	  }
	}
}

// Returns true if $ip is a valid ip address.
public function is_ip($ip)
{
	$count = strlen($ip);
	$valid = '0123456789.:';
	for($loop=0;$loop<$count;$loop++) {
		if (strpos($valid,substr($ip,$loop,1))===false) {
			return false;
		}
	}
	return true;
}
// Bans an ip address.
public function ban_ip($ip)
{
	$cmd = 'sudo /sbin/iptables -A INPUT -s ' . $ip . ' -j DROP';
	exec($cmd);
	return;
}
?>