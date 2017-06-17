body { 
  display: grid;
  grid-template-areas: 
    "header header header"
    "nav article ads"
    "footer footer footer";
  grid-template-rows: 60px 1fr 60px;
  grid-template-columns: 20% 1fr 15%;
  grid-gap: 10px;
  height: 100vh;
  margin: 0;
  }
#pageHeader {
  grid-area: header;
}
#pageFooter {
  grid-area: footer;
}
#mainArticle { 
  grid-area: article;      
  }
#mainNav { 
  grid-area: nav; 
  }
#siteAds { 
  grid-area: ads; 
  }
header, footer, article, nav, div {
  padding: 20px;
  background: gold;
}
</style>
<body>
  <header id="pageHeader">Anagram Generator</header>
  <script type="text/javascript">
	function solve(){var b=document.getElementById("form").value,c=document.getElementById("results"),d=document.getElementById("lang_eng");document.getElementById("loading").style.display="block";document.getElementById("results").style.display="none";if(b==""||b==" ")c.innerHTML="You need to enter an anagram!";else{var a=new XMLHttpRequest;a.open("GET","search.php?q="+b+"&lang="+(d.checked?"english":"dutch"),true);a.onreadystatechange=function(){if(a.readyState==4)if(a.status==200){c.innerHTML=a.responseText;
	document.getElementById("loading").style.display="none";document.getElementById("results").style.display="block"}else c.innerHTML="Our database server seems to be on fire..."};a.send(null)}};
</script>
  <article id="mainArticle">Anagram query</article>
  <body onload="document.getElementById('form').focus();">
	<div id="cc">
		<div id="title">Type your word (English only) and the Enter key</div>
		<form action="javascript:solve()" onsubmit="solve();">
			<input type="text" name="q" id="form" style="outline: none;" autocomplete="off"/>
			
		
			
			
		</form>

		<div id="loading">
			<img src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwoKCggAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADGwi6MjRiSenIm9hqPOvljAOBZGmeaKqubOu6CQAh+QQJCgAAACwAAAAAEAAQAAADHAi63A5ikCEek2TalftWmPZFU/WdaKqubOu+bwIAIfkECQoAAAAsAAAAABAAEAAAAxwIutz+UIlBhoiKkorB/p3GYVN1dWiqrmzrvmkCACH5BAkKAAAALAAAAAAQABAAAAMbCLrc/jDKycQgQ8xL8OzgBg6ThWlUqq5s604JACH5BAkKAAAALAAAAAAQABAAAAMbCLrc/jDKSautYpAhpibbBI7eOEzZ1l1s6yoJACH5BAkKAAAALAAAAAAQABAAAAMaCLrc/jDKSau9OOspBhnC5BHfRJ7iOXAe2CQAIfkECQoAAAAsAAAAABAAEAAAAxoIutz+MMpJ6xSDDDEz0dMnduJwZZulrmzbJAAh+QQJCgAAACwAAAAAEAAQAAADGwi63P4wRjHIEBJUYjP/2dZJlIVlaKqubOuyCQAh+QQJCgAAACwAAAAAEAAQAAADHAi63A5ikCEek2TalftWmPZFU/WdaKqubOu+bwIAOwAAAAAAAAAAAA==" width="16" height="16" alt="loading...">
		</div>
		
			<div id="results">These match the letter and character count</div>
			
		
				
		</div>
	</div>

</body>
  <nav id="mainNav">Nav</nav>
  
  <div id="siteAds">Ads</div>
  	<div style="text-align:center; left: 5%; width:100px; position:absolute;">
				<input type="radio" id="lang_eng" name="a" checked> English<br />
				<span class="count">150,762 words</span>
			</div>
  <footer id="pageFooter">Footer</footer>
  <div style="text-align:center; right: 5%; width:600px; position:absolute;">
					<name="a"> 
					<?php include ('instance.php');?><br />
			</div>
</body>