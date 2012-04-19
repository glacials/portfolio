<?php

$age = floor((time() - mktime(0, 0, 0, 8, 21, 1990, 1)) / 60 / 60 / 24 / 365);
$uri = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>

<html>

<head>
	<title>Ben Carlsson</title>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="Ben Carlsson"/>
	<script type="text/javascript"
	        src="javascript/jquery-1.2.1.pack.js"> </script>
	<script type="text/javascript"
	        src="javascript/jquery-easing.1.2.pack.js"></script>
	<script type="text/javascript"
	        src="javascript/jquery-easing-compatibility.1.2.pack.js"></script>
	<script type="text/javascript"
	        src="javascript/coda-slider.1.1.1.pack.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/default.css"/>
	
	<!-- Initialize each slider on the page. Each slider must have a unique id -->
	<script type="text/javascript">
		jQuery(window).bind("load", function() {
			jQuery("div#slider1").codaSlider()
		});
	</script>
</head>

<body>

<noscript>
	<p>
		<span class="phead">Woops!</span> Looks like you've got JavaScript turned
		off. Sorry, but I haven't had the chance to make a non-JavaScript version
		of my site yet, so you'll have to look at the ugly backside for now!
	</p>
</noscript>

<div class="slider-wrap">
<div id="slider1" class="csw">
<div class="panelContainer">

<div class="panel">
	<div class="wrapper">
		<img src="images/bencarlsson.png" alt="ben carlsson"/>
		<img src="images/about.png" alt="about"/><br />
		<span class="cross-notlink">about</span>
		<a href="#2" class="cross-link">portfolio</a>
		<a href="#3" class="cross-link">contact</a>
		<br/><br/>
		<div class="content_wrapper">
			<p>
				<span class="phead">Hello.</span> My name is Ben Carlsson. I'm
				<?php print $age; ?> years old and I'm currently a student at
				<a href="http://www.csuchico.edu/">California State University, Chico</a>.
				I'm majoring in Computer Science, and I'm a gamer in my free time.  I
				dislike not only long walks and beaches, but also situations in which
				the former takes place on the latter.
			</p>
			<p>
				<b>Things I'm awesome at</b> include fixing your computer problems and
				correcting your written English, which, I admit, is sometimes more
				obsession than skill.
			</p>
			<p>
				<b>Things I'm pretty good at</b> include PHP, Java, C++, HTML/CSS, SQL,
				and leaving an abundance of soda cans on my desk.
			</p>
			<p>
				<b>Things I'm okay at</b> include cosmetic website design, and coming
				up with lists of things I'm okay at.
			</p>
		</div>
	</div>
</div>

<div class="panel">
	<div class="wrapper">
		<img src="images/bencarlsson.png" alt="ben carlsson"/>
		<img src="images/portfolio.png" alt="portfolio"/><br />
		<a href="#1" class="cross-link">about</a>
		<span class="cross-notlink">portfolio</span>
		<a href="#3" class="cross-link">contact</a>
		<br/><br/>
		<div class="content_wrapper">
			<p><img src="images/myprojects.png" alt="my projects"/></p>
			<p class="projectlogo">
				<img src="images/kure.png" alt="kure" style="padding-right: 8px;"/>
				<span class="projectsub">
					flat-file php blogging engine /
					<a href="http://skoh-fley.github.com/kure/" class="projectsub">website</a>
				</span><br />
			</p>
			<p class="project">
				Kure is my PHP brainchild. I started it in 2004 (I was 14). It's a real
				project, but it's also kind of my sandbox. Whenever I learn a new
				trick, I go and update Kure to take advantage of it. It's been like
				that for years, since before I even knew what a function was
				(remember, I was 14). Now, it's a bit more powerhouse than that.
			</p>
			<p class="project">
				Kure is a free, open-source blogging engine written in PHP that runs on
				a very simple flat-file database system. It is extendable via plugins
				and skinnable via templates.
			</p>
		</div>
	</div>
</div>

<div class="panel">
	<div class="wrapper">
		<img src="images/bencarlsson.png" alt="ben carlsson"/>
		<img src="images/contact.png" alt="contact"/><br />
		<a href="#1" class="cross-link">about</a>
		<a href="#2" class="cross-link">portfolio</a>
		<span class="cross-notlink">contact</span>
		<br/><br/>
		<div class="content_wrapper">
			<p>
				If you need to get a hold of me, feel free to email me at
				<img src="images/email.png" alt="email" style="position: relative; top: 4px;"/>.
			</p>
		</div>
	</div>
</div>

</div><!-- .panelContainer -->

<p class="footer">
	get the
	<a href="http://github.com/skoh-fley/portfolio/" class="footer">source</a>!
	<br/>
	w3c valid <a href="http://validator.w3.org/check?uri=<?php print $uri; ?>"
	             class="footer">html5</a> /
	<a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php print $uri; ?>"
		 class="footer">css</a>
	<br/>
 props to niall doherty's
	<a href="http://www.ndoherty.biz/tag/coda-slider/" class="footer">
		coda-slider
	</a>
	<br/>
</p>

</div><!-- #slider1 -->
</div><!-- .slider-wrap -->

</body>

</html>
