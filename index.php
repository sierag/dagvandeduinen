<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dag van de Duinen</title>
<style type="text/css" media="screen, projection">
@import "css/style.css";
</style>
</head>
<body>
<img src="img/websitebg.jpg" class="bg" />
<div id="content" class="same">
	<div class="header same">
		<div class="cl">
			<a href="/duin/"><h1 class="logo">Dag van de Duinen</h1></a>
		</div>
		<div class="cr">
			inschrijven / 
		</div>
		<div class="clear"></div>
		<br />
		<ul class="menu">
			<li><a href="?action=bike">Bike</a></li>
			<li><a href="?action=run">Run</a></li>
			<li><a href="?action=walk">Walk</a></li>
			<li><a href="?action=kunstroute">Kunstroute</a></li>
			<li><a href="?action=programma">Muziek</a></li>
			<li>&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><a href="?action=programma">Het goede doel</a></li>
			<li>&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>


			<li><a href="?action=voorbereiding">Gratis voorbereiding</a></li>
			<li><a href="?action=programma">Programma en Locatie</a></li>
			<li><a href="?action=programma">Organisatie</a></li>
		</ul>
	</div>
	<br />
	<div class="contentcontainer same">
		<?
		$action = $_GET["action"];
		
		if(file_exists($action.".php")) {
			include($action . ".php");
		} else {
			//include("frontpage.php");
		}
		?>
	</div>
	<br />
	<div class="footer same">
		<div class="cl">
			<div class="cl">
				<h3>Organisator</h3>
				<p>Dit evenement wordt mogelijk gemaakt door duursportief. Regel tekst met advertentie inhoud.</p>
				<a href="http://www.duursportief.nl/"><img src="img/duursportief.gif" alt="" /></a><br />
			</div>
			<div class="cr">
				<h3>Belangrijke data</h3>
					<ul>
					<li>12 mei 2010 <strong>Inschrijven x</strong></li>
					<li>22 mei 2010 <strong>Inschrijven y</strong></li>
					<li>12 juni 2010 <strong>Inschrijven z</strong></li>
					<li>Zaterdag 28 augustus <strong>Evenement!</strong></li>
					</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="cr">
			<div class="cl">
				<h3>Zie ook</h3>
					<ul>
					<li><a href="?action=promotiemateriaal">Promotiemateriaal</a></li>
					<li><a href="">Lorum ipsum</a></li>
					<li><a href="">Lorum ipsum</a></li>
					<li><a href="">Lorum ipsum</a></li>
					<li><a href="">Lorum ipsum</a></li>
					</ul>
			</div>
			<div class="cr">
				<h3>Contact informatie</h3>
				<p>U kunt ons bereiken op:
				
				</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>

	</div>
	<div class="clear"></div>
</div>


</body>

</html>