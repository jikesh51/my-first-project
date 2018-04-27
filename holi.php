<!DOCTYPE html>
<html>
<head>
	<title>Happy Holi</title>
	<style type="text/css">
		#design{
			position: absolute;
			top:450px;
			left:570px; 
			color: white;
			animation: anim 5s infinite;
		}
		@keyframes anim{
			0%{color: #F00;}
			25%{color: #FF0; transform: scale(1.9);}
			50%{color: #FF0080; transform: scale(0.8);}
			75%{color: #8000FF; transform: scale(1.7);}
			100%{color: #F00; transform: scale(1);}
		}
	</style>
</head>
<body background="happy-holi-wishes-and-holi-wishes-2017-with-quotes-images-messages-collection-1024x551.jpg" style="background-size: 1366px 760px;">
	<h1 id="design">From... <?php echo $_GET['name']; ?></h1>
	<canvas id="canvas"></canvas>
<script type="text/javascript" src="effect.js"></script>
</body>
</html>