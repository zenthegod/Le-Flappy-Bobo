<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Le Flappy Bobo</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      * {
  margin: 0;
  padding: 0;
  outline: none;
  border: 0;
  font-family: segoe ui, helvetica neue, helvetica, arial, sans-serif;
  font-weight: 200;
  -webkit-font-smoothing: antialiased;
  user-select: none;
}

body {
  font-size: 14px;
}

p {
  font-size: 90%;
  line-height: 25px;
}

/* Wrapper */
.wrapper {
  width: 350px;
  margin: 20px auto;
}

/* Window */
.window {
	height: 450px;
	background: url('http://s7.postimg.org/it6qazi17/bobo.png');
	position: relative;
	overflow: hidden;
  margin-bottom: 10px;
}

/* Score */
.score {
  position: absolute;
  width: 100%;
  display: block;
  text-align: center;
  font-size: 250%;
  padding-top: 20px;
  color: #fff;
  font-weight: 700;
  text-shadow: 2px 2px 0 #000;
  z-index: 4;
}

/* Bird */
.bird {
	height: 33px;
	width: 30px;
	background: url('http://s7.postimg.org/fkxnk76dj/amey.png');
	position: absolute;
	bottom: 50%;
	left: 130px;
	z-index: 3;
 
  transition: transform 0.3s;
}

@keyframes birdFlap {  
  0% {background-position: 0 84px;}
  100% {background-position: 0 0;}
}

/* Pipes */
.pipe {
	width: 60px;
	height: 100%;
	position: absolute;
	right: -60px;
	z-index: 2;
}

.pipe.hidden {
  display: none;
}

.pipe .topHalf {
	background: url('http://s23.postimg.org/5inqguo7r/joshusd.png') bottom;
	position: absolute;
	top: 0;
	width: 100%;
}

.pipe .bottomHalf {
	background: url('http://s23.postimg.org/576a437rr/josh.png') top;
	position: absolute;
	bottom: 0;
	width: 100%;
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="wrapper">
  <p><marquee>Le Flappy Bobo</marquee><p>
  <div class="window">
    <p class="score">0</p>
	  <div class="bird"></div>
    
    <div class="pipe hidden"></div>
    <div class="pipe hidden"></div>
  </div>
  
  <p><center>Click/Press space to begin. Refresh to restart.</p>
  <p><center>~~</p>
  <p><center>Achieve dankness by getting the amey over the englerino in the land of bubusheeao.</p>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
