<?php include('./inc/header.php') ?>
<body>
  
  <?php include('./inc/navbar.php') ?>
  <!-- END nav -->
  
  <!-- Contact Section -->

  <?php 

$source = $_GET['patricial'];

switch ($source) {
    case 'contact':
        include('./inc/contact.php') ;
        break;
    case 'about':
        include('./inc/about.php') ;
        break;
    case 'news':
        include('./inc/news.php') ;
        break;
    case 'gallery':
        include('./inc/gallery.php') ;
        break;
    
    default:
        $link =  $_SERVER['HTTP_HOST'];
        header("Location: $link") ;
        break;
}
    
?>
	<?php include('./inc/footer.php'); ?>
    
  </body>
</html>