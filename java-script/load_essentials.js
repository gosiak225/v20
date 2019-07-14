document.getElementById("myHead").innerHTML =
	"<meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">"
	+"<meta content=\"width=device-width,initial-scale=1\" name=\"viewport\">"
	+"<meta content=\"Małgorzata Kamińska\" name=\"author\">"
	+"<meta name=\"google\" content=\"notranslate\" />"
	+"<meta name=\"msapplication-tap-highlight\" content=\"no\">"
	+"<link href=\"./images/images-logo/LuT_0.ico\" rel=\"icon\" id=\"icon\">"
	+"<title>Lucie Thizy</title>"
	+"<link href=\"./css/page-layout.css\" rel=\"stylesheet\">"
	+"<link href=\"./css/button.css\" rel=\"stylesheet\">";
document.getElementById("myNav").innerHTML =
	"<ul id='navLinks'>"
	+ "<li><a href='index.html'>Home</a></li>"
	+ "<li><a href='about.html'>About</a>"
	+ "<li><a href='donate.html'>Donate</a></li>"
	+ "</ul>";
document.getElementById("myFooter").innerHTML =
	"<p id='copyright'>Copyright &copy; " + new Date().getFullYear() + " You. All"
	+ " rights reserved.</p>"
	+ "<p id='credits'>Layout by You</p>"
	+ "<p id='contact'><a href='mailto:you@you.com'>Contact Us</a> / "
	+ "<a href='mailto:you@you.com'>Report a problem.</a></p>";