<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Input PHP Practise</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Orbitron:wght@400;500;600;700;900&family=Poppins:ital@0;1&display=swap');
		* {
			padding: 0;
			margin: 0;
			box-sizing: border-box;
		}
		body {
			width: 100%;
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.container {
			min-width: 300px;
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			background: linear-gradient(to right, rgb(127,247, 103), rgb(1,202,102));
		}
		.heading {
			color: white;
			font-family: 'Poppins', sans-serif;
		}
		textarea {
			min-width: 250px;
			width: 250px;
			height: 250px;
			padding: 10px;
			color: black;
			background: #fff;
			outline: none;
			border: none;
		}
		textarea:focus {
			border: none;
			outline: none;
		}
		.btn {
			display: flex;
			z-index: 1;
			flex-wrap: wrap;

		}
		button {
			padding: 10px;
			margin: 5px;
			outline: none;
			border: none;
			position: relative;
			color: black;
			background: transparent;
			cursor: pointer;
		}

		button:after{
			content: '';
			border-radius: 5px;
			position: absolute;
			top: 15px;
			left: 15px;
			width: 0%;
			height: 10%;
			/*background: linear-gradient(to right, rgb(57,247, 103), rgb(1,202,102));*/
			z-index: -1;
			transition: all 0.3s;
		}

		button:hover:after {
			width: 100%;
			height: 100%;
			top: 0px;
			left: 0px;
			background: linear-gradient(to right, rgb(57,247, 103), rgb(1,202,102));
		}
		button:hover{
			transition: all 0.3s;
			color: white;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1 class="heading">PHP Form Practical</h1>
		<div class="input-form">
			<textarea></textarea>
		</div>
		<div class="btn">
			<button>Submit</button>
			<button>Uppercase</button>
			<button>Lowercase</button>
			<button>Reverse</button>
		</div>
	</div>
</body>
</html>