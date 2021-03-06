<?php 
if (!isset($page_title)){$page_title="admin_homepage";}
?>

<!doctype html>

<html lang="en">
  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ORC- <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo url_for("css/mine.css"); ?>"/>
     <link rel="stylesheet" media="all" href="<?php echo url_for("css/bootstrap.min.css"); ?>" />
      </head>

  <body>
    <!-- The header stars here -->
    <header id="header" id="home">
        <div class="header-top bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <a href="tel:+234 080 3064 5528">+234 090 370 962 90</a>&nbsp&nbsp&nbsp
                        <a href="tel:+234 080 3064 5528">+234 080 3064 5528</a> &nbsp&nbsp&nbsp
                        <a href="mailto:rexsteroxy22@gmail.com">rexsteroxy22@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- The header ends here -->
     
        <!-- The jumbo stars here -->
    <div class="jumbotron text-center">
	<div class="container">
		<h1>Online Result Checker(ORC). <span class="glyphicon glyphicon-thumbs-up"></span></h1>
		<h2><p class="">An Application  For Any University System!!.</p></h2>


	</div>
</div>
<div class="container-fluid">
		<div class="row "> 
		<?php $time=$_SESSION['last_admin_login'] ?? '00.00'; ?>
     <?php if(isset( $_SESSION['email'])){ ?>
        <div class="col-md-5 col-lg-5 col-sm-6">
                <a href="index.php" class=" btn btn-dangr"><im src="img/logo.jp" width="40"></a>
        </div>
		<div class="col-md-6 col-lg-6 col-sm-6">
           <ul class="pagination">
             <li class="page-item mx-sm-2">
                <a href="<?php echo url_for('/admin/index.php'); ?>" class="page-link btn btn-outline-danger text-dark">Menu</a>
             </li>
             <li class="page-item mx-sm-2">
                <h6 class="page-link"><?php echo $_SESSION['level'] ?? '' ;?></h6>
             </li>
             <li class="page-item mx-sm-2">
                <h6  class="page-link">Login_Time -><?php echo date('h:i A' ,$time) ?? '' ;?></h6>
             </li>
             <li class="page-item mx-sm-2">
                <a href="<?php echo url_for('/admin/admin_logout.php');?>" class="text-danger">Logout</a>
             </li>
             <?php } ?>

           </ul>
           </div>
           
        </div>
		</div>
	</div>
    

    <?php echo display_session_message();?>
