<?php  
	http_response_code(520);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>520 Unknown error</title>
</head>
<style>
	* { 
		padding: 0px;
		margin: 0px;
		box-sizing: border-box;
	}

	body {
		background: rgb(20,20,20);
	}
	.mainPage {
		position: fixed;
	    width: 100%;
	    height: 100%;
	}

	.errorPageMSG {
	    color: white;
	    font-size: 20px;
	    position: absolute;
	    top: 45%;
	    left: 50%;
		width: 100%;
	    transform: translate(-50%, -50%);
	    font-family: 'Maven Pro', sans-serif;
	    user-select: none;
	    opacity: 0.8;
	}
</style>
<body class="mainPage">
	<main>
		<center><h3 class="errorPageMSG"><strong>Unknown error, please contact the service administrator.<br></strong></h3></center>
	</main>
</body>
</html>
