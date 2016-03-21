<?php if ( $pageTitle == 'Home' ) {
	$jumboHeaderImageURL = 'assets/img/bg/18.jpg';
	$jumboHeaderTagline = 'Something for HOME page';
}
elseif ( $pageTitle == 'About' ) {
	$jumboHeaderImageURL = 'assets/img/comcentia-img/about-bkgd.jpg';
	$jumboHeaderTagline = 'Something for About page';
    $leadText = "We Specializes in rapid development of mission-critical web applications on-time and on-budget. Our custom application development is tailored to the needs of your supply chain, organization, department, and at times a team.";
}
elseif ($pageTitle == 'Services') {
	$jumboHeaderImageURL = 'assets/img/comcentia-img/code-bkgd.jpg';
	$jumboHeaderTagline = 'Something for SERVICES page';
    $leadText = "We Specializes in rapid development of mission-critical web applications on-time and on-budget. Our custom application development is tailored to the needs of your supply chain, organization, department, and at times a team.";
}
elseif ($pageTitle == 'Careers') {
	$jumboHeaderImageURL = 'assets/img/bg/11.jpg';
	$jumboHeaderTagline = 'Something for CAREERS page';
    $leadText = "We Specializes in rapid development of mission-critical web applications on-time and on-budget. Our custom application development is tailored to the needs of your supply chain, organization, department, and at times a team.";
} else {
	$jumboHeaderImageURL = 'assets/img/comcentia-img/code-bkgd.jpg';
	$jumboHeaderTagline = 'Supporting Text';
    $leadText = "We Specializes in rapid development of mission-critical web applications on-time and on-budget. Our custom application development is tailored to the needs of your supply chain, organization, department, and at times a team.";
} ?>

<!-- page title image area -->
<div class="page-title-jumbotron" style="background:url('<?php echo $jumboHeaderImageURL; ?>'); background-size:cover;">
    <div class="gradient"> 
    	<div class="container">
    	    <div class="row">
    	    	<div class="col-xs-12 col-title-tagline">
                    <div class="animated fadeInRight">
    			        <h1><?php echo $pageTitle; ?></h1>
    			        <h3><?php echo $jumboHeaderTagline; ?></h3>
                    </div>
    	    	</div>		    	
    	    </div>
        </div><!--/end container-->
    </div>
</div>

<!-- <div class="container">
    <div class="intro-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <ul class="pull-right breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="#"><?php echo $pageTitle; ?></a></li>
                    </ul>
                </div>
                <p class="lead"><?php echo $leadText; ?></p>
            </div>
        </div>  
    </div>
</div>
 -->







