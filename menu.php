  
  <?php
	if(getCurrentFileName() == "request.php" || getCurrentFileName() == "profile.php"){
		
		$mshow = 'style="display:none;"';
		
	}else{
		
		$mshow = "";
		
	}
  ?>
  <section data-bs-version="5.1" class="menu menu1 cid-ukAyloSczi" once="menu" id="menu1-0">

    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                        <img src="assets/images/logo-96x63.png" alt="" onclick="parent.location='./'" style="height: 3rem;">
                    
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="./">DPA</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div  class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
				<li <?php echo $mshow ;?> class="nav-item"><a class="nav-link link text-black display-4" href="#features15-6">Features</a></li>
				<li <?php echo $mshow ;?> class="nav-item"><a class="nav-link link text-black display-4" href="#features13-2">Why us?</a></li>
				<li <?php echo $mshow ;?> class="nav-item"><a class="nav-link link text-black display-4" href="#features2-i">Modules</a></li>
				<li <?php echo $mshow ;?> class="nav-item"><a class="nav-link link text-black display-4" href="#testimonials2-b">Testimonial</a></li>
				<li <?php echo $mshow ;?> class="nav-item"><a class="nav-link link text-black display-4" href="profile">Meet our CEO</a></li>
				</ul>
                
                <div <?php echo $mshow ;?> class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="request?token=<?php echo sha1(uniqid());?>">Request Demo</a></div>
            </div>
        </div>
    </nav>
</section>