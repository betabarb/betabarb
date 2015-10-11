<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<ul class="clearfix margin-top-lg patient-stats">
	<li class="clearfix">
		<span>Heart Rate</span> <span>104 bpm (tachycardia = increased heart rate; normal = 60-100 bpm)</span>
	</li>
	<li class="clearfix">
		<span>Blood Pressure</span> <span>84/52 mm Hg (=hypotensive; normal is 120/80)</span>
	</li>
	<li class="clearfix">
		<span>Respiratory Rate</span> <span>18 breaths per minute (normal is 12-24)</span>
	</li>
	<li class="clearfix">
		<span>Body Temperature</span> <span>98.3 degrees Fahrenheit (normal is 98.6)</span>
	</li>
</ul>

<p>The patient appears hemodynamically unstable (low blood pressure and/or a high heart rate). While the patient is rushed to the OR for exploratory abdominal surgery, you begin to recall the specifics of splenic function, realizing that the massive blood loss was due to the spleen’s unique form of blood circulation.</p>

<p class="bold margin-top-lg">What is red pulp and what is its function?</p>
<textarea class="check-input" data-hintindex="30"></textarea>
<i class="input icon ion-alert-circled"></i>
<div class="hint"><i class="icon ion-ios-close"></i></div>

<p class="bold margin-top-lg">Which of the following is the correct order of blood flow in <span class="italic underline">open circulation</span> through the spleen?</p>

<ol>
	<li class="margin-top">Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; ensheathed capillary &rarr; splenic sinus &rarr; red pulp vein &rarr; trabecular vein &rarr; splenic vein</li>
	<li class="margin-top">Splenic artery &rarr; penicillar arteriole &rarr; central arteriole &rarr; ensheathed capillary &rarr; splenic sinus &rarr; splenic cord &rarr; red pulp vein &rarr; trabecular veins &rarr; splenic vein</li>
	<li class="margin-top">Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; ensheathed capillary &rarr; splenic cord &rarr; splenic sinus &rarr; red pulp vein &rarr; trabecular vein &rarr; splenic vein</li>
	<li class="margin-top">Splenic artery &rarr; trabecular artery &rarr; central arteriole &rarr; penicillar arteriole &rarr; ensheathed capillary &rarr; splenic sinus &rarr; splenic cord &rarr; red pulp vein &rarr; trabecular vein &rarr; splenic vein</li>
</ol>

<div class="row clearfix margin-top">
	<div class="list-item col-sm-3">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow1" class="btn btn-default">Number 1</a>
	</div>
	<div class="list-item col-sm-3">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow2" class="btn btn-default">Number 2</a>
	</div>
	<div class="list-item col-sm-3">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow3" class="btn btn-default">Number 3</a>
	</div>
	<div class="list-item col-sm-3">
		<a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/ans/flow4" class="btn btn-default">Number 4</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>