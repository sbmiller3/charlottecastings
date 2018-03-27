<?php
  $title="my site";
  $description="this is it";
  $style="./css/style2.css";
  
  require("./inc/dtype_head_remains_open.php");
 ?>


</head>
<body>
<div class="page-container">
<nav id="nav_topline">
	<span> <?php echo $title; ?></span>
	<ul>
		<li>w</li>
		<li>x</li>
		<li>y</li>
		<li>z</li>
	</ul>
  <form  >
  <input type="text" />
  <input type="submit"  value="Search this site"  />
  </form>
</nav>
<header>
  <h1><?php echo $title; ?></h1>
  <h3><?php echo $description; ?></h3>
</header>
  
  
 
</div> <!-- /.page-container -->
   
<main>
<aside>sidebar</aside>
<section>
<article>content</article>
</section>
</main>  
 
<div class="page-container"> 
  <footer>
  footer
  </footer>  
</div> <!-- /.page-container -->
  
</body>
</html>
