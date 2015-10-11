<?php

require_once("../../templates/config.php");

$pageTitle = "A Night in the E.R.";

include(ROOT_PATH . "/A-Night-in-the-ER/index.php"); 

?>

<p>Yes! Cells immediately surrounding the central artery, known as PALS, are largely CD4+ T-cells, although smaller numbers of CD8+ T-cells may also be present.</p>
<div class="img-split row medium clearfix">
	<div class="list-item col-sm-6">
		<p>While waiting for your patient to return from the OR, another case awaits you in the emergency room. A 7-year-old girl presents with a 3-day history of fever and sore throat. Her medical chart indicates she has allergies and repeated tonsillitis. Looking into the girl’s mouth reveals extremely swollen palatine tonsils covered with white exudate.</p>
	</div>
	<div class="list-item col-sm-6">
		<figure>
			<img src="<?php echo BASE_URL; ?>assets/img/teeth.jpg" class="img-responsive">
			<figcaption><a target="_blank" href="//i.ytimg.com/vi/MPz1RAg9tVU/maxresdefault.jpg">https://i.ytimg.com/vi/MPz1RAg9tVU/maxresdefault.jpg</a></figcaption>
		</figure>
	</div>
</div>

<p>Quickly review your tonsil histology by labeling the slide below, and then <a href="<?php echo BASE_URL; ?>A-Night-in-the-ER/pg/8.php">go talk with the patient’s father.</a></p>
<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/NER-Palatine-Tonsil.png" class="img-responsive">
	<figcaption>Source: <a target="_blank" href="//histology-world.com/photoalbum/displayimage.php?album=60&pid=1607#top_display_media">http://histology-world.com/photoalbum/displayimage.php?album=60&pid=1607#top_display_media</a></figcaption>
</figure>
<div class="row clearfix">
	<div class="list-item col-sm-3">
		<label>A.) <input type="text" class="check-input" data-ansindex="28" data-hintindex="56">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>B.) <input type="text" class="check-input" data-ansindex="2" data-hintindex="57">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>C.) <input type="text" class="check-input" data-ansindex="30" data-hintindex="58">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
	<div class="list-item col-sm-3">
		<label>D.) <input type="text" class="check-input" data-ansindex="31" data-hintindex="59">
		<i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
		<div class="hint"><i class="icon ion-ios-close"></i></div>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>