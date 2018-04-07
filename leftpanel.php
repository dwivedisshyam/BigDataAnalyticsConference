<br>	<br>

<div class="jumbotron" style="height: 100px; margin-bottom: 10px; padding-top:5px; padding-left: 15px;">
			<h6 style="color:black; text-decoration:underline;">The Sixth International Conference</h6>
			<h6 style="color:black;">Dec 18<sup>th</sup> - 21<sup>st</sup>, 2018</h6>
		</div>

	<div id="announcements" style="height:205px;">
				<div align="center" id="right_title"><h5><font color=#33aa33><b>Organizing Institute</b></font></h5></div>
				<div align="center" style="vertical-align:middle; padding-top:5px;"><a href="https://www.nitw.ac.in/main/" target="_blank"><img src="images/nitw_logo.jpg"></a></div>
			</div>
			<br/>

	<div id="announcements" >
				<div align="center" id="right_title"><h5><font color=#33aa33><b>Partner Institutions/<br>Organizations</b></font></h5></div>
		
		<div align="center" style="vertical-align:middle; padding-top:5px;">
			<a href="http://www.du.ac.in/du/index.php?page=computer-science" target="_blank" align="center">
				<img src="images/du.png" width="100" height="100">
			</a>
			<br/>
			<a href="http://dsac.iiit.ac.in/" target="_blank" align="center">
				<img src="images/iiith.png" width="100" height="100">
			</a>
			<br/>
			<a href="http://scis.uohyd.ac.in/" target="_blank" align="center">
				<img src="images/UOH.jpg" width="100" height="100">
			</a>
			<br/>
			<a href="http://www.u-aizu.ac.jp/en/" target="_blank" align="center">
				<img src="images/Aizu.png" width="100" height="100">
			</a>
			<br/>
			<a href="http://www.csi-sig-bda.org/" target="_blank" align="center">
				<img src="images/csi-sig-bda.png" width="150" height="100">
			</a>
			<br/>
			<br>
			<a href="http://www.cse.iitd.ernet.in/" target="_blank" align="center">
				<img src="images/iitd.png" width="100" height="100">
			</a>
			<br/>
			<a href="https://www.iiitd.ac.in/" target="_blank" align="center">
				<img src="images/iiitd.png" width="100" height="100">
			</a>
			<br/>
			<a href="https://www.iiitb.ac.in/" target="_blank" align="center">
				<img src="images/iiitb.jpg" width="100" height="100">
			</a>
		</div>
			</div>



			
			
			
		<!--	<div id="announcements" style="height:290px;">
				<div align="center" id="right_title"><h4><font color=#33aa33><b>Sponsors</b></font></h4></div>
				<div align="center" style="vertical-align:middle; padding-left:15px;" align="center">
					<a href="http://www.tcs.com/research/" target="_blank"><img src="images/tcslogo_20_aug.jpg" width="200px"></a>
										
				</div>
				<div align="center" style="vertical-align:middle; padding-left:15px;" align="center">
					<a href="http://www.springer.com/gp/" target="_blank"><img src="images/springers.png" width="170px"></a>
				</div>
			</div>
			
			<div style="clear:both; height:15px;">&nbsp;</div>
			<div id="announcements" style="height:185px;">
				<div align="center" id="right_title"><h4><font color=#33aa33><b>Publisher</b></font></h4></div>
				
				<div align="center" style="vertical-align:middle; padding-top:20px; padding-left: 15px;"><a href="http://www.springer.com/gp/" target="_blank"><img src="images/springers.png" width="170px"></a></div>
			</div>
			<div style="clear:both; height:15px;">&nbsp;</div>
			<div id="announcements" style="height:180px;">
				<div align="center" id="right_title"><h6>Cluster Maps for the Site</h6></div>
				<div align="center" style="vertical-align:middle; padding-left:15px; padding-top:20px;"><div id="clustrmaps-widget"></div><script type="text/javascript">var _clustrmaps = {'url' : 'http://www.bda2018.nitw.ac.in', 'user' : 1162410, 'server' : '3', 'id' : 'clustrmaps-widget', 'version' : 1, 'date' : '2015-03-23', 'lang' : 'en', 'corners' : 'square' };(function (){ var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'http://www3.clustrmaps.com/counter/map.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);})();</script><noscript><a href="http://www3.clustrmaps.com/user/73e11bcaa"><img src="http://www3.clustrmaps.com/stats/maps-no_clusters/www.bda2015.nitw.ac.in-thumb.jpg" alt="Locations of visitors to this page" /></a></noscript></div>
			</div> -->





<script type="text/javascript">
$(document).ready(function(){
/*
$("[id^=menu1li_]").click(function(){
		var IdArr = this.id.split("_");
		$("[id^=menu2ul_]").slideUp("slow");
		$("#menu2ul_"+IdArr[1]).slideDown("slow");
	});*/
	
	var pageName = "<?php echo $_SERVER['SCRIPT_NAME'];?>";
	pageName = pageName.replace(".php", "");
	var pageNameArr = pageName.split("/");
	var pageNameArrLen = pageNameArr.length;
	var activeLi = pageNameArr[pageNameArrLen - 1];
	$("[id^=menu2_]").removeClass("active");
	$("#menu2_"+activeLi).addClass("active");
	
	
	
});
</script>