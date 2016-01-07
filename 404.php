<?php 
require('paths.php');
require(CONFIG.'bootstrap.php');
$section = "404";

$container_main = "container";
$nav_container = "navbar-default";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_SESSION['contestName']; ?> Organized By <?php echo $_SESSION['contestHost']." &gt; Error 404: File Not Found"; ?></title>
        
    <!-- Load Bootstrap and jQuery -->
    <!-- Homepage URLs: http://www.getbootsrap.com and https://jquery.com -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>bootstrap/css/dropdowns-enhancement.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $theme; ?>" />
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Load BCOE&M Custom JS -->
    <script type="text/javascript" src="<?php echo $base_url; ?>js_includes/bcoem_custom.js"></script>
        
  	</head>
	<body>    
    <!-- MAIN NAV -->
	<div class="container hidden-print">
		<?php include (SECTIONS.'nav.sec.php'); ?>
	</div><!-- container -->   
    <!-- ./MAIN NAV -->
    
    <!-- ALERTS -->
    <div class="container bcoem-warning-container">
    	<div class="alert alert-danger"><strong>Sorry, the page you were looking for was not found.</strong> Don't worry, we still want you around!</div>
        <div class="alert alert-info"><strong>If you are a top-level admin and are seeing this error page, your server may not be able to accommodate search engine safe (SEF) URLs.</strong> If you are a top-level administrator of the site, <a class="alert-link" href="<?php echo $base_url."index.php?section=login"; ?>">log in</a> now and adjust your site preferences.</div>
    </div><!-- ./container --> 
    <!-- ./ALERTS -->
    
    <!-- Public Pages (Fixed Layout with Sidebar) -->
    <div class="container"> 
    	<div class="row">
    		<div class="col col-lg-9 col-md-8 col-sm-12 col-xs-12">
            <div class="page-header">
        		<h1>404 Error</h1>
        	</div> 
        	<p class="lead">Please use the main navigation above to get where you want to go.</p>
            <p class="lead"><small>If the links above aren't working, please <a href="<?php echo $base_url."index.php?section=contact"; ?>">contact a site representative</a>!</small></p>
            <p>Cheers!<br>&ndash; The <?php echo $_SESSION['contestName']; ?> Site Server</p>
            </div><!-- ./left column -->
            <div class="sidebar col col-lg-3 col-md-4 col-sm-12 col-xs-12">
            	<?php include (SECTIONS.'sidebar.sec.php'); ?>         
            </div><!-- ./sidebar -->
        </div><!-- ./row -->
    	<!-- ./Public Pages -->
    </div><!-- ./container -->
    <!-- ./Public Pages -->
    
    <!-- Mods Bottom -->
    <div class="container"> 
    
    </div>
    <!-- ./Mods Bottom -->
    
    <!-- Footer -->
    <footer class="footer hidden-xs hidden-sm hidden-md">
    	<nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="container text-center">
                <p class="navbar-text col-md-12 col-sm-12 col-xs-12 text-muted small"><?php include (SECTIONS.'footer.sec.php'); ?></p>
            </div>
    	</nav>
    </footer><!-- ./footer --> 
	<!-- ./ Footer -->
</body>
</html>