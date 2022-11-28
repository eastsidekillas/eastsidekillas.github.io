<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>EASTSIDEKILLAS</title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
		<style>
			body {
				background-color: #000000;
				margin: 0;
				padding: 0;
				overflow: hidden;
			}

			* {
            	margin: 0;
            	padding: 0;

				font-family: monospace;
				color: white;
				text-shadow: 2px 2px #000;
			}

			.center {
				position: fixed;
				top: 50%;
				left: 50%;

				transform: translate(-50%, -50%);
				color: white;
				text-shadow: 2px 2px #000;
        	}
			
			.info {
				z-index: 999999;
				color: white;
			}

			.begin {
				cursor: pointer;
			}

			#overlay {
				position: fixed;
				z-index: 9999;
				background-color: #000;

				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
        	}

			#swarm {
				display: block;
			}

			.marquee {
				width: 450px;
				line-height: 50px;
				color: white;
				white-space: nowrap;
				overflow: hidden;
				box-sizing: border-box;
			}
			
			.marquee p {
				display: inline-block;
				padding-left: 100%;
				animation: marquee 15s linear infinite;
			}

			@keyframes marquee {
				0%   { transform: translate(0, 0); }
				100% { transform: translate(-100%, 0); }
			}
		</style>
	</head>
	
	<body style="padding: 0; margin: 0;">
		<canvas id="swarm" width="1920" height="880"></canvas>

   <div style="border-width: thin; width: 100%; position: absolute; top: 0px; left: 0px; text-align: right;">
   </div>

		<div id="overlay" onclick="music.play();"><span class="center info begin" id="status_text">click me</span></div>                                                                  
    <div class="main center">
        <div style="font-size: 40px;" class="logo-blur logo-bass"><span class="logo-neon">EASTSIDEKILLAS</span></div>             

		<div class="center" id="data" style="opacity: 1.08347; margin-top: 120px; text-align: center; display: block;">
			<a href="https://imgur.com/a/mOFKtlb"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">крутая пикча</font></font></a>
			<a href="https://vk.com/eastsidekillas"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VK </font></font></a>
			<a href="httpst.me/eastsidekillas"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telegram</font></font></a>
			<br> <br> <pre>social links</pre>
			<br> <br> <pre> </pre>
		</div>
		<div class="center" id="shoutout_marquee" style="opacity: 1.08347; margin-top: 155px; display: block;">
			<div class="marquee">
				<p>FUTXRE CULTXRE - FEEL THE PRESSURE UNTIL THE END</p>
			</div>
		</div>
		<audio id="music" src="core/mp3/Daydream.mp3" autoplay="" loop="" onplaying="setTimeout(()=&gt;{window.overlay.remove();render();start_text();},3500);" style="display: none;"></audio>
		<script src="core/js/page.js"></script>
		<script src="core/js/title.js"></script>
	
</div></body></html>