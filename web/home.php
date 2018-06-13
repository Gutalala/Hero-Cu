

<!DOCTYPE html><html class=''>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/caseycallis/pen/pwEWxo?depth=everything&limit=all&order=popularity&page=12&q=parallax&show_forks=false" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Voltaire" rel="stylesheet">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">a{
	text-decoration:none;
	color:white;
}
h2{
	font-family:"Voltaire";
	text-transform:uppercase;
	margin:0;
}
#scene{
	background-color:#304056;
	position:relative;
	overflow:hidden;
	width:100%;
}
.layer{
	pointer-events: none;
}
.col {
	display: inline-block;
	float: left;
	overflow: hidden;
	position: relative;
	width:12.5%;
	pointer-events: all;
	overflow:initial;
	margin:0 0 30px;
}
.layer.main{
	width:150%;
	position:absolute;
	z-index:1;
	padding:20px;
}
.col a{
	display:block;
	margin:15px;
	overflow:hidden;
	box-shadow: 0px 16px 32px rgba(0, 0, 0, 0.37);
}
.col a .hover {
	position: absolute;
	top: 15px;
	right:15px;
	bottom:-15px;
	left: 15px;
	z-index: 1;
	color: white;
	background: -webkit-linear-gradient(45deg, rgba(0,0,0,0.47) 0%,rgba(0,0,0,0) 100%);
	background: linear-gradient(45deg, rgba(0,0,0,0.47) 0%,rgba(0,0,0,0) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#78000000', endColorstr='#00000000',GradientType=1 );
}
.col a .hover:after{
	content:'';
	position:absolut;
	top:0;
	left:0;
	z-index:1;
	width:100%;
	height:100%;
	display:block;
	background: rgb(235, 116, 152);
	opacity:0;
	-webkit-transition:0.35s ease;
	transition:0.35s ease;
}
.col a .hover:hover:after{
	opacity:0.85;
	-webkit-transition:0.35s ease;
	transition:0.35s ease;
}
.align-bottom {
	position: absolute;
	width: 100%;
	bottom: 0%;
	z-index: 2;
	padding: 15px 20px;
}
.bg-img{
	padding:0px;
	width:100%;
	height:100%;
	top:0;
	left:0;
	background-size:cover;
	background-position:50% 50%;
}

@media only screen and (max-width:1200px){
	.layer .col{
		width:16.666%;
	}
	
}
@media only screen and (max-width:650px){
	.layer .col{
		width:25%;
	}
	
}</style>
</head>

<body>
<!-- 
// Photos provided by Pexels.com: 
High quality and completely free stock photos 
licensed under the Creative Commons Zero (CC0) license. 
-->

<section id="scene" data-pointer-events="true" data-x-origin="0.5" data-y-origin="0.5" data-scalar-y="150.0" data-scalar-x="100.0" data-friction-x="0.05" data-friction-y="0.05">
	<div class="layer main" data-depth="1.0">
		<div class="col">
			<a href="#">
				<div class="hover">
					<div class="pad align-bottom">
						<h2>Project Title</h2>
					</div>
				</div>
				<div class="bg-img" style="background-image:url(http://www.caseycallis.com/codepen/img1.jpg);"></div>
			</a>
		</div>
	</div>
</section>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js'></script>
<script >var makeWinHeight = function(){
	var vh = $(window).height();
	var projects = vh/2;
	$('#scene, .layer.main').height(vh);
	$('#scene .col a, #scene .col').height(projects);
}
$(document).ready(function(){
	makeWinHeight();

});
$(window).resize(function(){
	makeWinHeight();
});

var scene = document.getElementById('scene');
var parallax = new Parallax(scene);
//# sourceURL=pen.js
</script>
</body></html>