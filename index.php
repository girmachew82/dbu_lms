<!doctype html>

<html>
     <head>
	<title>Html 5 excercises </title>
<style>
ul {
list-style-type: circle;
}
</style>
   </head>

   <body style="background-color :green; color:white;font-family:Georgia, serif;">
<nav>

	<img src="images/dbuicon.png" alt="Logo" width="100" height="50">
	<a href="index.html">Home</a>	
   <a href="about.html">About </a>
   <a href="help.html">Help</a>
   <a href="contact.html">Contact</a>
   <a href="login.html">Login</a>

</nav>
<input type="file" accept=
" application/pdf">
<device type="media" onchange="update(this.data)"></device>
<video autoplay></video>
<script>
  function update(stream) {
    document.querySelector('video').src = stream.url;
  }
</script>
	<header> DBU E-learning System </header>		
<section>
	<article>


<!-- HTML 5 tutorils contents goes here -->
<P>HTML is new Markup language </p>
	<p>There are new feartures in this language such as Geolocation, drag and drop, API</p>
	<p>In HTMl elements or tags can be catagorize into two </p>
	<p>block level</p>
		<p> some of <a href="blocklevel.html" target="_top ">block level elements </a></p><a href="#pre">Pre</a>
			<ul >
			<li>paragraph</li>
			<li>heading</li>
			<li>list</li>
			<li>table</li>
			</ul>
	<hr>
	the above lists are presented by default unordered list element and if you want change the default list bullete add attrubute at open tag of unordered list  
	<hr>
			<ul >
			<li>paragraph</li>
										 <li>heading</li>
			<li>list</li>
			<li>table</li>
			</ul>
	<hr>
	<p>Inline</p>
		<ol>
		<li>italic</li>
					  <li>bold</li>
		<li>underline	</li>
		</ol>
		<ol type="A">
		<li>italic</li>
					  <li>bold</li>
		<li>underline	</li>
		</ol>
		<ol type="a">
		<li>italic</li>
					  <li>bold</li>
		<li>underline	</li>
		</ol>
		<ol type="I">
		<li>italic</li>
					  <li>bold</li>
		<li>underline	</li>
		</ol>
		<ol type="i">
		<li>italic</li>
					  <li>bold</li>
		<li>underline	</li>
		</ol>
	</article>
	<article>
	<hr>
	<p>Inline elements
		<i>italic </i> <b>bold</b> &nbsp;      &nbsp;  &nbsp;  &nbsp;                     <strong>strong</strong>
	X<sup>2</sup>H<sub>2</sub>O &nbsp;<em>emphasis</em>
	<u>Underline</u> &nbsp;<small>Small</small>
	This inline tags also called formting tags
	<del>Delte</del>
	<ins>Insert</ins>
	</p>
</article>
	<hr>
	Headings
	<h1>Heading</h1>
	<h2>Heading</h2>
	<h3>Heading</h3>
	<h4>Heading</h4>
	<h5>Heading</h5>
	<h6>Heading</h6>
	<p>Inline elements
		<i>italic </i> <b>bold</b> <br>
						<strong>strong</strong><br>
						X<sup>2</sup><br>
					   H<sub>2</sub>O <br>
	 <em>emphasis</em><br>
	<u>Underline</u> <br><small>Small</small>
	This inline tags also called formting tags
	<del>Delte</del>
	<ins>Insert</ins>
	</p>
	
	<pre id ="pre">
	  My Bonnie lies over the ocean.
	  My Bonnie lies over the sea.
	  My Bonnie lies over the ocean.
	  Oh, bring back my Bonnie to me.
	</pre>
	<hr>
	<img src="images/html5log.png" width="200" height="200" alt="" >
	
		</section>
<footer>

	<a href="index.html">Home</a>
     
	<a href="about.html">About</a>
 
	<a href="contact.html">Contact</a>
 
	<a href="privacy-policy.html">Privacy Policy</a>

	<a href="terms-of-use.html">Terms of use</a>
   <p>Important links</p>

</footer>
   </body>
</html>