<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>

<style>

	body{
		text-align: center;
		background-image:url('bg.png');
		font-size:30px;
		color:black;
		color:rgba(0,0,0,0.7);
		margin-top:40px;
		font-family: 'Droid Sans', sans-serif;
	}

	h1{
		font-size:40px;
		margin-top:0px;
	}

	small{
		font-size:12px;
	}

	a{
		color:rgba(0,0,0,0.7);
	}

</style>

<body>

	<img src='lego.png' />

	<br/>

	<h1><?= $_SERVER['HTTP_HOST']); ?></h1>

	<p>Welcome, this site is under construction. Check back soon!</p>
	<p><small><a href='http://twitter.com/codechap'>@codeChap</a></small></p>

	<?= substr(phpversion(), 0, 3); ?>

</body>