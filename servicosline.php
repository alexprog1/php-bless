<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Pseudo data attribute CSS manipulations to create a dynamic feed. </title>
  <script src="https://use.fontawesome.com/c334c419c0.js"></script>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="./src/css/style.css">

</head>
<body>
<!-- 
<header class="banner">
	<h1>NEWS FEED</h1>
</header>
-->
<ol class="activity-feed">
	<li class="feed-item" data-content="&#xf00c;" data-time="3 hours ago" data-color="green">
		<section>
			<input type="checkbox" id="expand_1" name="expand_1" />
			<label for="expand_1">
				<b>Pintura tanque</b> partex <b>PTX22.</b>
			</label>
			<main class="content">
				<blockquote>Foi realizado a pintura do tanque partex, utulizado barios produtos como eletrodos, tintas especiais.</blockquote>
				<blockquote>Material Utilizado: Tinta Azul para aço 2LT</blockquote>
			</main>
		</section>
	</li>
	<li class="feed-item" data-content="&#xf27b;" data-time="3 hours ago" data-color="blue">
		<section>
			<input type="checkbox" id="expand_2" name="expand_2" />
			<label for="expand_2">
				<b>Aliquam</b> non diam <b>consectetur.</b>
			</label>
			<main class="content">
				<p>Duis iaculis commodo condimentum. Donec quis felis libero. Nunc feugiat nisi ut ullamcorper congue.</p>
				<p>Ut tempus egestas mauris et scelerisque. Sed tincidunt ante ligula, eget pharetra mi pretium eget. Fusce tincidunt, elit blandit semper sollicitudin, sapien lectus lobortis quam, ac bibendum lectus risus quis lectus.</p>
			</main>
		</section>
	</li>
	<li class="feed-item" data-content="&#xf004;" data-time="3 hours ago" data-color="red">
		<section>
			<input type="checkbox" id="expand_3" name="expand_3" />
			<label for="expand_3">
				<b>Nullam</b> mollis massa ut <b>egestas viverra.</b>
			</label>
			<main class="content">
				<img src="http://i0.kym-cdn.com/photos/images/facebook/000/232/114/e39.png">
			</main>
		</section>
	</li>
	<li class="feed-item" data-content="&#xf00c;" data-time="3 hours ago" data-color="green">
		<section>
			<label for="expand_4">
				<b>Etiam feugiat</b> dolor nec molestie <b>posuere.</b>
				<br>
				Donec quis felis libero.
				<b>Etiam feugiat</b> dolor nec molestie <b>posuere.</b>
				<br>
				Donec quis felis libero.
				<b>Etiam feugiat</b> dolor nec molestie <b>posuere.</b>
				<br>
				Donec quis felis libero.
			</label>
		</section>
	</li>
	<li class="feed-item" data-content="&#xf0e7;" data-time="3 hours ago" data-color="yellow">
		<section>
			<input type="checkbox" id="expand_5" name="expand_5" />
			<label for="expand_5">
				<b>Pellentesque accumsan</b> ligula a tincidunt <b>venenatis.</b>
			</label>
			<main class="content">
				<h1>BOOM!</h1>
			</main>
		</section>
	</li>
</ol>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
