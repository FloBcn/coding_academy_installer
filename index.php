
<!DOCTYPE html>
<html>
<head>
	<title>Welcome <username></title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<!--
		---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
		links to enable bootstrap in the page
		---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<!--
	-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	-->
	<!--
		apply some CSS style directly to the page elements
	-->
	<style type="text/css">
		body {
			color: white;
			height:100vh;
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat ;
			background-image: url('https://media.istockphoto.com/photos/blue-abstract-background-or-texture-picture-id1138395421?k=6&m=1138395421&s=612x612&w=0&h=bJ1SRWujCgg3QWzkGPgaRiArNYohPl7-Wc4p_Fa_cyA=');
		}
		h1 {
			margin-top: 4vw;
			margin-left: 30vw;
			
		}
		nav {
			border-radius: 10px;
			background-color: rgba(150,150,255,0.3);
		}
		.nav-img {
			max-height: 50px;	
		}
		.element {
			border-radius: 10px;
			background-color: rgba(200,200,255,0.2);
		}
		.d-flex {
			vertical-align: baseline;
			margin-top: 10px;
		}

	</style>
</head>
<body>
	
	<div class="container-fluid" >


		<nav class="navbar navbar-light " >
			<div class="row">
				<div class=col-6>
					<img  class="nav-img" src="https://newsroom.ionis-group.com/wp-content/uploads/2018/12/epitech-logo-quadri-baseline-anglais.png" alt="Coding Academy Logo">
				</div>
				<div class=col-6>
					<img class="nav-img" src="https://newsroom.ionis-group.com/wp-content/uploads/2019/09/CODING_ACADEMY_LOGO_CMJN.png" alt="Coding Academy Logo" >
				</div>
			</div>
			<a class="nav-link" href="https://intra.epitech.eu/">Go to the intranet</a>
		</nav>
		<div class="d-flex">
			<div class="">
				<img class="rounded-circle" style="max-width: 10vw;" src="https://ualmtorres.github.io/SeminarioDockerPresentacion/images/ItWorksOnMyMachine.jpg">
			</div>
			<div class="">
				<?php
				echo "<h1>Hello <username></h1> "; 
				?>
			</div>
		</div>
		<div class="container-fluid p-2 mt-2 element" >
			<?php 

			echo "This is a test page, if you see it, it means your Apache http server and PHP are working in your computer.";
			echo "<p>You can edit this file in <b><home>/index.php</b></p>";
			?>
		</div>
		
		<div class="container-fluid p-2 mt-2 element"  >
			<p>This installer was downloaded with Git from Github. For more info, check out these links</p>
			<ul>
				<li>
					<a href="https://git-scm.com/">Git official page</a>
				</li>
				<li>
					<a href="https://github.com/">Github official page</a>
				</li>
			</ul>
		</div>
		<div class="container-fluid p-2 mt-2 element"  >
		<p>If you want to learn how to use your computer from a terminal, you can read about bash in the next links</p>
		<ul>
			<li>
				<a href="https://en.wikipedia.org/wiki/Bash_(Unix_shell)">Wikipedia Bash page</a>
			</li>
			<li>
				<a href="https://cs.lmu.edu/~ray/notes/bash/">Introduction to Bash</a>
			</li>
		</ul>
		</div>
		<div class="container-fluid p-2 mt-2 element"  >
		<p>Technology behind this page:</p>
		<ul>
			<li><a href="https://httpd.apache.org/">Apache http server</a></li>
			<li><a href="https://www.php.net/manual/en/intro-whatis.php">PHP</a></li>
			<li><a href="https://en.wikipedia.org/wiki/HTML">HTML</a></li>
			<li><a href="https://en.wikipedia.org/wiki/CSS">CSS</a></li>
			<li><a href="https://en.wikipedia.org/wiki/JavaScript">JavaScript</a></li>
			<li><a href="https://getbootstrap.com/">Bootstrap framework</a></li>
		</ul>
	</div>
	</div>
	
	

</body>
</html>



