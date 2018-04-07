<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/4.0/examples/carousel/ -->
<html lang="en">
  <head> <?php include('head_content.php'); ?> </head>
  <body>

    <!-- Navigation Tabs Header file -->
    <?php include('nav_header.php'); ?> 

    <main role="main">

      <!-- Image slider (carousel) -->
      <?php include('carousel.php'); ?>

	<div id="main_container">
			
			<!-- Left panel starts here-->
			<div id="leftpanel" style="width: 15%; margin-top: 30px;">
			<?php include("leftpanel.php");?>
			</div>	
		
          <div class="col-lg-12 contentBox" style="width: 85%; float:right; text-align:justify;" id="description">
			  <h3><b>About BDA </b></h3>
            Recently, data generation at the scale of terabytes, petabytes and exabytes have become commonplace in many scientific and commercial domains. Streaming data, social media content, electronic medical records, astronomy surveys, genomic and proteomic studies and similar areas generate data at a scale that is becoming increasingly difficult to manage using traditional database technologies. Big Data is an umbrella term used for such massive collections of data. Besides volume, analytics has to face challenges like heterogeneity, timeliness, and complexity, velocity and privacy issues. The other challenge is to fuse data sources - of same type or multi-modal and perform joint analytics on the integrated data. The scale of such data poses significant challenges for analytics, going beyond what can be supported by conventional data, storage and retrieval models.
            <br/><br/>
            The Sixth International Conference on Big Data Analytics (BDA 2018) is set in this backdrop. It provides an international forum for researchers and industry practitioners to share their original research results, practical experiences and thoughts on big data from different perspectives including storage models, data access, computing paradigms, analytics, information sharing and privacy, redesigning mining algorithms, open issues, and future research trends.
            <br/><br/>
            The first BDA conference was successfully held in New Delhi, India, in December 2012 as a part of collaboration between the University of Delhi, India and the University of Aizu, Japan. The enthusiastic response to this event prompted the decision to make the BDA conference as an annual event. The sixth international conference on Big Data Analytics (BDA 2018) will be held in Warangal, Telangana, India during December 18-21 2018. The conference is hosted by NIT Warangal, India.
            <br/><br>
          Information about past BDA conferences:-
            <ul>
         
	  <li> <a href="https://bda2017.iiit.ac.in/" target="_blank">BDA 2017: </a>BDA-2017 held in IIIT Hyderabad in December, 2017.</li>
          <li><a href="https://www.nitw.ac.in/bda-2015/" target="_blank">BDA 2015:</a>BDA-2015 held in NIT Warangal in December, 2015.</li>          
 	  <li> <a href="http://bda2014.iiitd.edu.in/" target="_blank">BDA 2014: </a>BDA-2014 held in Delhi in December, 2014.</li>
          <li> <a href="https://sites.google.com/site/bdaconf2013" target="_blank">BDA 2013: </a>The enthusiastic response to this event prompted the decision to make the BDA conference as an annual event. BDA-2013 held in the city of Mysore, India in December 2013.</li>
	  <li> <a href="http://web-ext.u-aizu.ac.jp/labs/is-ds/BDA2012/#.U20I-vm4XMQ" target="_blank">BDA 2012: </a> The first BDA conference was successfully held in Delhi, India, in December 2012.</li>              

            </ul>
          </div>
       
      <!-- 
		<div class="row" id='sponsorPane'>
          <div class="col-md-4">
		              <img class="sponsorLogo" src="images/Kdnuggets-Logo.jpg" />
		              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
		              <p><a target="_blank" class="btn btn-secondary" href="https://www.kdnuggets.com" role="button">Visit Website »</a></p>
          </div>
          <div class="col-md-4">
            <img class="sponsorLogo" src="images/springer_logo.jpg">
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a target="_blank" class="btn btn-secondary" href="https://www.springer.com" role="button">Visit Website »</a></p>
          </div>
           <div class="col-md-4">
            <img class="sponsorLogo" src="images/TCS-Logo.jpg" >
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
            <p><a target="_blank" class="btn btn-secondary" href="https://www.tcs.com" role="button">Visit Website »</a></p>
          </div>
        </div>


        

        <hr class="featurette-divider">

        
          <div class="col-md-7">
            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16141f20cdf%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16141f20cdf%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16141f20ce3%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16141f20ce3%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500" style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16141f20ce4%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16141f20ce4%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.125%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>

        <hr class="featurette-divider"> 

      </div>
		-->
		  </div>
<br style="clear:both;"/>
      <?php include('footer.php'); ?>
	
	  </main>
	</body>
</html>