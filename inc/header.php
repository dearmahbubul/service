<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo getCurrentPage();?> :: Moderna</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://bootstraptaste.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />


<!-- Theme skin -->
<link href="skins/default.css" rel="stylesheet" />

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php
                    global $con;
                    $query = "SELECT websiteLogo FROM tbl_description WHERE value='logo'";
                        $logoResult = mysqli_query($con,$query);
                        $result = mysqli_fetch_array($logoResult);
                    ?>`
                    <a class="navbar-brand" href="index.php"><img src="Admin/uploads/<?=$result['websiteLogo'];?>" alt="" style="height: 60px;width: 200px;"></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                       <?php

                            $query = "SELECT * FROM tbl_menu where menuStatus='2' ORDER BY menuPosition ASC";
                            $result = mysqli_query($con,$query)->fetch_all(MYSQLI_ASSOC);
                            if($result){
                                foreach($result as $menu){
                         ?>
                        <li><a href="<?=$menu['menuUrl'];?>"><?=$menu['menuName'];?></a></li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="typography.php">Typography</a></li>
                                <li><a href="components.php">Components</a></li>
								<li><a href="pricingbox.php">Pricing box</a></li>
                            </ul>
                        </li>-->
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->