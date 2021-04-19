<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Jorisvandijk.com</title>
	<style>	
		@font-face {
			font-family: 'font';
			src:url('font.woff2') format('woff2'),
				url('font.woff') format('woff'),
				url('font.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
		}
		#bg {
			position:fixed;
			top:-50%; 
			left:-50%; 
			width:200%; 
			height:200%;
		}
		#bg img {
			position:absolute; 
			top:0; 
			left:0; 
			right:0; 
			bottom:0; 
			margin:auto; 
			min-width:50%;
			min-height:50%;
		}
		h1 {
			left: 0;
			line-height: 200px;
			margin-top: -100px;
			position: absolute;
			text-align: center;
			top: 50%;
			width: 100%;
			z-index: 9999;
			color: #fff;
			font-size: 8vw;
			font-family: 'font';
		}
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			margin-bottom: 10px;
			width: 100%;
			color: white;
			text-align: center;
			z-index: 9999;
			font-family: 'font';
			font-size: 1.4vw;
		}
		.copyleft {
			display:inline-block;
			transform: rotate(180deg);
		}
	</style>
</head>
<body>
	<h1>Jorisvandijk.com</h1>
	<div class="footer">
		<span class="copyleft">&copy;</span> 1997 - <?php echo date("Y");?>
	  </div>
	<div id="bg">
		<img src="bg.jpg">
	</div>
</body>
</html>