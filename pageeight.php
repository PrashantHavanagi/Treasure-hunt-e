<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


	
	<title>E-Treasure Hunt</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="bluebliss.css" />
</head>

<body>

<div id="mainContentArea">
	<div id="contentBox">
        <div id="title" align="center" >E-Treasure Hunt</div>
        
        <div id="linkGroup">
           
        </div>
		
		
        
        <div id="blueBox"> 
          <div id="header"></div>
          
			<h1><div class="contentTitle"></div></h1>
			
			cómo viele kilenc er zijn entre uno og sută ?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="images/nine.jpg">
			<br>
			<br>
			<br>
			<br>
			<form name="q3" method="post" action="pagenine.php" onsubmit="return validate()">
			<input type="text" name="name"/><input type="submit" value="submit"/>
			
			</div>
			<div id="footer"><a>web development</a> by <a>Pramodh.N.R and Samarth.V.Shastri</a></div>
        </div>
					<div id="contentBox1">
     
     <h2>

                 <div id="blueBox1"> 
          		  
		  <h1>LEADERBOARD</h1>
		<?php
		  $a=$_REQUEST['name'];
		  $b=$_REQUEST['team'];
		  if($a!="iamwithstupid")
		  {
			?>
			<script type="text/javascript">window.location="error.html"</script>
			<?php }
$d=date('H:i');
$hostname='localhost';
$username='samarth';
$password='';
$dbname='score';
$s=7;

mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

	mysql_query("UPDATE score SET scor='$s' WHERE name='$b'");
	mysql_query("UPDATE score SET ip='$d' WHERE name='$b'");
	$res=mysql_query("SELECT * FROM score ORDER BY scor DESC LIMIT 5");
	while($c=mysql_fetch_array($res))
	{
		$res1=$c['name'];
		$res2=$c['scor'];
		echo"<html>$res1   $res2<br></html>";
	}
	?>
	<input type="hidden" name="team" value="<?php echo $b?>"  readonly /></form>
	</div>
	</div>
	</div>
			
			
			
			