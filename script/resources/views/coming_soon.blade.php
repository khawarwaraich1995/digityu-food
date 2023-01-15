<html>
    <head>
        <style>
            /* Dark theme colors */

/* Primary theme colors */
body[data-theme='light_theme'] {
  --white: #fff;
  --bg-color: #F8F8F8;
  --color: #333;
  --secondary-color: #ff7f57;
  --icon-bg-color: #333;   
  --icon-color: #333;
}

body {
  background: var(--bg-color);
  color: var(--color);
  text-align: center;
}

body[data-theme='dark_theme'] {
  --white: #fff;
  --bg-color: #000;
  --color: #fff;
  --secondary-color: #ff7f57;
  --icon-bg-color: #333;   
  --icon-color: #fff;
}

@keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

@-webkit-keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

.wrapper {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  animation: fadeIn 1000ms ease;
  -webkit-animation: fadeIn 1000ms ease;
  
}

h1 {
  font-size: 64px;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 0;
  line-height: 1;
  font-weight: 700;
}

.dot {
  color: var(--secondary-color);
}

p {
  text-align: center;
  margin: 18px;
  font-family: 'Muli', sans-serif;
  font-weight: normal;
}

.icons {
  text-align: center;
}

.icons i {
  color: var(--white);
  background: var(--icon-bg-color);
  height: 15px;
  width: 15px;
  padding: 13px;
  margin: 0 10px;
  border-radius: 50px;
  border: 2px solid transparent;
  transition: all 200ms ease;
  text-decoration: none;
  position: relative;
}

.icons i:hover, .icons i:active {
  color: var(--icon-color);
  background: none;
  border-color: var(--icon-bg-color);
  cursor: pointer !important;
  transform: scale(1.2);
  -webkit-transform: scale(1.2);
  text-decoration: none;
}
        </style>
    </head>
    <body data-theme="dark_theme">
  <div class="wrapper">
  <h1>Coming soon<span class="dot">.</span></h1>
  <p>We are building our website.</p>
  <!--<div class="icons">-->
  <!--  <a href=""><i class="fa fa-twitter"></i></a>-->
  <!--  <a href=""><i class="fa fa-youtube-play"></i></a>-->
  <!--  <a href=""><i class="fa fa-paper-plane"></i></a>-->
  <!--</div>-->
</body>
</html>
