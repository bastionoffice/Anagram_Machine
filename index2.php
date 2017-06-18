<!DOCTYPE html>
<!-- Template by quackit.com -->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Anagrams</title>
	<style type="text/css">

		/* Layout */
		body {
			min-width: 630px;
		}

		#container {
			padding-left: 200px;
			padding-right: 190px;
		}
		
		#container .column {
			position: relative;
			float: left;
		}
		
		#center {
			padding: 10px 20px;
			width: 100%;
		}
		
		#left {
			width: 180px;
			padding: 0 10px;
			right: 240px;
			margin-left: -100%;
		}
		
		#right {
			width: 130px;
			padding: 0 10px;
			right: 240px;
			margin-right: -100%;
		}
		
		#footer {
			clear: both;
		}
		
		/* IE hack */
		* html #left {
			left: 150px;
		}

		/* Make the columns the same height as each other */
		#container {
			overflow: hidden;
		}

		#container .column {
			padding-bottom: 1001em;
			margin-bottom: -1000em;
		}

		/* Fix for the footer */
		* html body {
			overflow: hidden;
		}
		
		* html #footer-wrapper {
			float: left;
			position: relative;
			width: 100%;
			padding-bottom: 10010px;
			margin-bottom: -10000px;
			background: #fff;
		}

		/* Aesthetics */
		body {
			margin: 0;
			padding: 0;
			font-family:Sans-serif;
			line-height: 1.5em;
		}
		
		p {
			color: #555;
		}

		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: darkgreen;
			text-decoration: none;
		}

		#header, #footer {
			font-size: large;
			padding: 0.3em;
			background: #BCCE98;
		}

		#left {
			background: #DAE9BC;
		}
		
		#right {
			background: #F7FDEB;
		}

		#center {
			background: #fff;
		}

		#container .column {
			padding-top: 1em;
		}
		
	</style>
	

	</script>
<script type="text/javascript">
	function solve(){var b=document.getElementById("form").value,c=document.getElementById("results"),d=document.getElementById("lang_eng");document.getElementById("loading").style.display="block";document.getElementById("results").style.display="none";if(b==""||b==" ")c.innerHTML="You need to enter an anagram!";else{var a=new XMLHttpRequest;a.open("GET","search.php?q="+b+"&lang="+(d.checked?"english":"dutch"),true);a.onreadystatechange=function(){if(a.readyState==4)if(a.status==200){c.innerHTML=a.responseText;
	document.getElementById("loading").style.display="none";document.getElementById("results").style.display="block"}else c.innerHTML="Our database server seems to be on fire..."};a.send(null)}};
</script>	
</head>

<body>

	<header id="header"><p>Anagram Machine</p></header>

	<div id="container">

		<main id="center" class="column">
			<article>
			
				<h1>Heading1</h1>
				<p><script>generateText(50)</script></p>
						<p>Type your word (English only) and the Enter key</p>
		<form action="javascript:solve()" onsubmit="solve();">
			<input type="text" name="q" id="form" style="outline: none;" autocomplete="off"/>
		<input type="radio" id="lang_eng" name="a" checked> English<br />
			</form>

		<nav id="left" class="column">
			<h3>Left heading1</h3>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
			</ul>
			<h3>Left heading2</h3>
			<ul>
				<li><a href="#">Link 1</a></li>
				<li><a href="#">Link 2</a></li>
				<li><a href="#">Link 3</a></li>
				<li><a href="#">Link 4</a></li>
				<li><a href="#">Link 5</a></li>
			</ul>

		</nav>

		<div id="right" class="column">
			<h3>Right heading</h3>
			<p> Instance goes here </p>
			<?php include ('instance.php');?>
			<p><script>generateText(1)</script></p>
		</div>

	</div>

	<div id="footer-wrapper">
		<footer id="footer"><p>Footer...</p></footer>
	</div>

</body>

</html>
<body>
		
  <div id="siteAds">Sponsors</div>
  <footer id="pageFooter">
					<name="a"> 
					<br /
					</footer>
</body>