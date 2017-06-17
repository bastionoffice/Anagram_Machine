<!DOCTYPE html>
<title>Anagramatically</title>
<style>
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
  margin: 5;
  }
/* Stack the layout on small devices/viewports. */
@media all and (max-width: 575px) {
  body { 
    grid-template-areas: 
      "header"
      "article"
      "ads"
      "nav"
      "footer";
    grid-template-rows: 80px 1fr 70px 1fr 70px;  
    grid-template-columns: 1fr;
 }
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
  background: orange;
}
</style>
<script type="text/javascript">
	function solve(){var b=document.getElementById("form").value,c=document.getElementById("results"),d=document.getElementById("lang_eng");document.getElementById("loading").style.display="block";document.getElementById("results").style.display="none";if(b==""||b==" ")c.innerHTML="You need to enter an anagram!";else{var a=new XMLHttpRequest;a.open("GET","search.php?q="+b+"&lang="+(d.checked?"english":"dutch"),true);a.onreadystatechange=function(){if(a.readyState==4)if(a.status==200){c.innerHTML=a.responseText;
	document.getElementById("loading").style.display="none";document.getElementById("results").style.display="block"}else c.innerHTML="Our database server seems to be on fire..."};a.send(null)}};
</script>
<body>
  <header id="pageHeader">Anagrams</header>
  <article id="mainArticle">AN ANAGRAM SOLVER</article>
  		<p>Type your word (English only) and the Enter key</p>
		<form action="javascript:solve()" onsubmit="solve();">
			<input type="text" name="q" id="form" style="outline: none;" autocomplete="off"/>
 <nav id="mainNav">Dictionary contains 150,762 words English</nav>
		</form>
  <div id="siteAds">Sponsors</div>
  <footer id="pageFooter">"text-align:center; right: 5%; width:600px; position:absolute;">
					<name="a"> 
					<?php include ('instance.php');?><br /
					</footer>
</body>