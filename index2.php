<html>
<head>
	<title>An Anagram solver</title>
	<meta content="Fastest online anagram solver on the planet! Solves anagrams in English or Dutch for free! Featuring two large dictionaries of well over 150,000 words." name="description" />
	<meta content="Anagram, solver, anagram solver, solving, english, dictionary, fast, easy" name="keywords" /> 
	
	<style type="text/css">
body{background-image:url("data:image/png;base64,	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");font-family:Verdana;}
#cc{position:absolute;margin-bottom:auto;margin-top:auto;top:40%;left:20%;right:20%;height:50px;border:0px solid black;padding:6px;}
#form{font-size:2em;text-align:center;width:100%;color:black;border-radius:25px;border:1px solid #CECECE;}
#title{width:100%;font-size:1.3em;color:black;letter-spacing:7px;text-align:center;font-family:monospace;}
.count{font-size:0.7em;color:black;}
#results{display:none;text-align:center;padding-top:60px;font-size:0.8em;color:black;}
#loading{display:none; text-align:center;padding-top:40px}
	</style>
	
<script type="text/javascript">
	function solve(){var b=document.getElementById("form").value,c=document.getElementById("results"),d=document.getElementById("lang_eng");document.getElementById("loading").style.display="block";document.getElementById("results").style.display="none";if(b==""||b==" ")c.innerHTML="You need to enter an anagram!";else{var a=new XMLHttpRequest;a.open("GET","search.php?q="+b+"&lang="+(d.checked?"english":"dutch"),true);a.onreadystatechange=function(){if(a.readyState==4)if(a.status==200){c.innerHTML=a.responseText;
	document.getElementById("loading").style.display="none";document.getElementById("results").style.display="block"}else c.innerHTML="Our database server seems to be on fire..."};a.send(null)}};
</script>
</head>
<body onload="document.getElementById('form').focus();">
	<div id="cc">
		<div id="title">AN ANAGRAM SOLVER</div>
		<div id="title">Type your word (English only) and the Enter key</div>
		<form action="javascript:solve()" onsubmit="solve();">
			<input type="text" name="q" id="form" style="outline: none;" autocomplete="off"/>
			
			<div style="text-align:center; left: 5%; width:100px; position:absolute;">
				<input type="radio" id="lang_eng" name="a" checked> English<br />
				<span class="count">150,762 words</span>
			</div>
			
			<div style="text-align:center; right: 5%; width:600px; position:absolute;">
					<name="a"> 
					<?php include ('instance.php');?><br />
			</div>
		</form>

		<div id="loading">
			<img src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwoKCggAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADGwi6MjRiSenIm9hqPOvljAOBZGmeaKqubOu6CQAh+QQJCgAAACwAAAAAEAAQAAADHAi63A5ikCEek2TalftWmPZFU/WdaKqubOu+bwIAIfkECQoAAAAsAAAAABAAEAAAAxwIutz+UIlBhoiKkorB/p3GYVN1dWiqrmzrvmkCACH5BAkKAAAALAAAAAAQABAAAAMbCLrc/jDKycQgQ8xL8OzgBg6ThWlUqq5s604JACH5BAkKAAAALAAAAAAQABAAAAMbCLrc/jDKSautYpAhpibbBI7eOEzZ1l1s6yoJACH5BAkKAAAALAAAAAAQABAAAAMaCLrc/jDKSau9OOspBhnC5BHfRJ7iOXAe2CQAIfkECQoAAAAsAAAAABAAEAAAAxoIutz+MMpJ6xSDDDEz0dMnduJwZZulrmzbJAAh+QQJCgAAACwAAAAAEAAQAAADGwi63P4wRjHIEBJUYjP/2dZJlIVlaKqubOuyCQAh+QQJCgAAACwAAAAAEAAQAAADHAi63A5ikCEek2TalftWmPZFU/WdaKqubOu+bwIAOwAAAAAAAAAAAA==" width="16" height="16" alt="loading...">
		</div>
		
			<div id="results">These match the letter and character count</div>
			
		
				
		</div>
	</div>

</body>
</html>
