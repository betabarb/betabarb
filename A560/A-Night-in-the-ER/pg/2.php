<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<div class="img-split row clearfix">
	<div class="list-item col-sm-6">
		<p>Correct! The spleen is located in the upper left abdominal quadrant (left hypochondriac region) in the peritoneal cavity. Notice the <span class="purple bold">white pulp</span> of lymphoid nodules with pale staining germinal centers surrounded by a darker staining marginal zone. The white pulp is surrounded by <span class="red bold">red pulp</span>, the blood-filled stroma of fine reticulin fibers and cells. A thin capsule and the blood-filled stroma contribute to this organ being easily ruptured by abdominal injuries.</p>
	</div>
	<div class="list-item col-sm-6">
		<figure>
			<img src="<?php echo BASE_URL; ?>assets/img/UR.png" class="img-responsive" alt="">
			<figcaption></figcaption>
		</figure>
	</div>
</div>

<h3>Histology Scavenger Hunt!</h3>
<p>Take a screenshot of <a target="_blank" href="http://medsci.indiana.edu/junqueira/virtual/73_bl_5.html">Slide 73, Spleen, Kornhauser’s Quad</a>, and find the following: <span class="bold">capsule</span>, <span class="bold">central arteriole</span>, <span class="bold">germinal center</span>, <span class="bold">marginal zone</span>, and <span class="bold">red pulp</span>.</p>

<p class="margin-top-lg">A few medical residents you are shadowing came from Harvard and they are extremely confused as to the function of the spleen (<span class="italic">watch <a class="popup-video" href="https://www.youtube.com/watch?v=aEi_4Cyx4Uw">"What Does the Spleen Do? ft. Harvard Medical School"</a> for homework if you haven’t seen it already!</span>).</p>

<p class="bold margin-top-lg">Kindly explain to them 3 functions of this majestic organ.</p>

<div class="row clearfix">
	<div class="list-item col-sm-4">
		<label>1.) <textarea class="check-input" data-hintindex="26"></textarea>
		<i class="input icon ion-alert-circled"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>2.) <textarea class="check-input" data-hintindex="27"></textarea>
		<i class="input icon ion-alert-circled"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-4">
		<label>3.) <textarea class="check-input" data-hintindex="28"></textarea>
		<i class="input icon ion-alert-circled"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>

<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/3">Continue on to contemplate white pulp.</a>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>