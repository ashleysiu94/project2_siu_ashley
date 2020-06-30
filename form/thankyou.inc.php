<style type="text/css">

* {
	margin: 0;
	padding: 0;
	border: 0;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}

/* =============================================

			BODY, HEADER & FOOTER, OVERLAY TEMPLATE

============================================= */

body {
	background-color: #f3f3f3;
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}

header {
	background-color: #f3f3f3;
	height: 70px;
}

.mobile-header-container {
	height: 70px;
	display: flex;
	flex-direction: row;
}

header a {
	padding: 15px 0 0 10%;
}

#mobile-logo {
	max-width: 150px;
}

/***** START HAMBURGER NAV *****/

.hamburger{
  background:none;
  position:absolute;
  top:0;
  right:0;
  line-height:45px;
	padding: 10px 10% 0 0;
  color:#7f8084;
  border:0;
  font-size:2.5em;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.cross{
  background:none;
  position:absolute;
  top:0px;
  right:0;
	padding: 10px 11% 0 0;
  color:#7f8084;
  border:0;
  font-size:5em;
  line-height:65px;
  font-weight:bold;
  cursor:pointer;
  outline:none;
  z-index:10000000000000;
}
.menu{z-index:1000000; font-weight:bold; width:100%; background:#f1f1f1;  position:absolute; text-align:center;}
.menu ul {margin: 0; padding: 0; list-style-type: none; list-style-image: none;}
.menu li {display: block;   padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu li:hover{display: block;    background:#ffffff; padding:15px 0 15px 0; border-bottom:#dddddd 1px solid;}
.menu ul li a { text-decoration:none;  margin: 0px; color:#7f8084;}
.menu ul li a:hover {  color: #227ebb; text-decoration:none;}
.menu a{text-decoration:none; color:#666;}
.menu a:hover{text-decoration:none; color:#666;}

.menu ul li {
	font-family: 'Josefin Sans', sans-serif;
	font-weight: 300;
	font-size: 2rem;
}

/**** END HAMBURGER NAV *****/


nav ul {
	list-style-type: none;
}

.desktop-menu {
	display: none;
}

.desktop-menu ul li {
	font-family: 'Josefin Sans', sans-serif;
	font-weight: 300;
	font-size: 1.75rem;
	padding: 0 3%;
}

#logo {
	max-width: 150px;
}

nav ul li a {
	color: #7f8084;
	text-decoration: none;
}

nav ul li a:hover {
	color: #227ebb;
	text-decoration:none;
}

p {
	font-family: 'Muli', sans-serif;
	color: #f3f3f3;
}

main {
	flex: 1;
	height: 80vh;
	background-color: #252525;
}

.overlay {
	background-color: rgba(34, 113, 187, .7);
	width: 100%;
	height: 80vh;
}

footer {
	background-color: #f3f3f3;
	height: 10vh;
	display: flex;
	align-items: center;
	justify-content: center;
}

.footer-icons {
	display: flex;
	flex-direction: row;
}

.footer-icons img {
	height: 50px;
	padding: 0 1em;
}

/***** HIDDEN HEADING FOR ACCESSIBILTY *****/
.hidden-heading {
	display: none;
}

/* =============================================

										ABOUT

============================================= */

#about-titlebar {
	background-image: url('images/about-background.png');
}

#about-titlebar img {
	width: 100px;
	border-radius: 45%;
}

.form-response {
	padding: 20px;
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 0 auto;
}

.form-response h2 {
  font-family: 'Josefin Sans', sans-serif;
  font-weight: 700;
  color: #f3f3f3;
  padding: .75rem 0;
	font-size: 1.75rem;
	text-align: center;
}

.form-response p {
  padding: .5rem 0;
  font-size: 1rem;
}

/***** START ABOUT MIN-WIDTH 800PX *****/

@media (min-width: 800px) {
	#about-titlebar {
		background-position: right;
	}

	#about-titlebar img {
		width: 75%;
	}

	.about-main {
		display: flex;
	}

	.about-content {
		max-width: 70%;
		margin: 0 auto;
		padding: 10px;
	}
}

/***** END ABOUT MIN-WIDTH 800PX *****/

</style>

<head>

  <meta charset="utf-8">

  <title>Ashley Siu | About</title>

  <link type="text/css" rel="stylesheet" href="styles.css" />

  <link rel="icon" type="image/ico" href="images/favicon.ico" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if lt IE 9]>
    <script src="js/html5shiv-printshiv.min.js"></script>
  <![endif]-->

      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;300;400;700&family=Muli&display=swap" rel="stylesheet">

      <!-- JQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>


<body>
  <header>

    <!-- Mobile -->
    <div class="mobile-header-container">
      <a href="index.html"><img id="mobile-logo" src="images/logo.png" alt="Ashley Siu logo" title="Ashley Siu logo"></a>

      <button class="hamburger">&#9776;</button>
      <button class="cross">&#735;</button>
    </div>

    <nav class="menu">
      <ul>
        <li><a href="tvnews.html">tv news</a></li>
        <li><a href="resume.html">resume</a></li>
        <li><a href="artwork.html">artwork</a></li>
        <li><a href="about.html">about</a></li>
      </ul>
    </nav>

    <!-- Desktop -->
    <nav class="desktop-menu">
      <ul>
        <li><a href="tvnews.html">tvnews</a></li>
        <li><a href="resume.html">resume</a></li>
        <li><a href="index.html"><img id="logo" src="images/logo.png" alt="Ashley Siu logo" title="Ashley Siu logo"></a></li>
        <li><a href="artwork.html">artwork</a></li>
        <li><a href="about.html">about</a></li>
      </ul>
    </nav>
  </header>

  <main class="about-main">
    <section class="titlebar" id="about-titlebar">
      <h1 class="hidden-heading">Hidden Heading</h1>
      <div class="overlay-titlebar">
        <div class="titlebar-container">
          <h1>About</h1>
          <img src="images/about-profilepic.png" alt="Ashley Siu" title="Ashley Siu">
        </div>
      </div>
    </section>

    <section class="form-response">
      <h2>Your message has been sent!</h2>
      <p>Thank you for your note. Ashley will be in touch with you shortly.</p>
    </section>
  </main>

  <footer>
    <div class="footer-icons">
      <a href="https://twitter.com/ash_siu" target="_blank"><img class="twitter" src="images/twitter.png" alt="Twitter" title="Twitter" /></a>
      <a href="https://www.linkedin.com/in/ashleysiu/" target="_blank"><img class="linkedin" src="images/linkedin.png" alt="LinkedIn" title="LinkedIn" /></a>
      <a href="https://www.instagram.com/ash_siu/" target="_blank"><img class="instagram" src="images/instagram.png" alt="Instagram" title="Instagram" /></a>
      <a href="mailto:ashley.c.siu@gmail.com"><img class="mail" src="images/email.png" alt="Mail" title="Mail" /></a>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="js/hamburger.js"></script>
</body>
