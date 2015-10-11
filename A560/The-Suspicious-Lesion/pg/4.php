<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Nice! Type III collagen (reticulin) fibers form the delicate web of loose reticular connective tissue 
found in the stroma of bone marrow, lymph nodes, and the spleen. These branching reticulin fibers form a 
network creating a spacious mesh for many cells to reside.</p>

<figure>
	<img src="<?php echo BASE_URL; ?>assets/img/collagen.png" class="img-responsive" alt="collagen">
	<figcaption></figcaption>
</figure>

<p class="bold margin-top-lg">The stain that visualizes reticular fibers is known as  ____________________.</p>
<div>
	<input type="text" class="check-input" data-ansindex="36">
	<i class="input icon ion-ios-checkmark"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="margin-top-lg">Identify cells embedded in this reticulin meshwork of the lymph node and indicate
 their functional significance to the body. (<span class="italic">List as many as you can, I came up with 6 different cell types</span>).</p>
<div>
	<textarea class="check-input" data-hintindex="39"></textarea>
	<i class="input icon ion-alert-circled"></i>
	<div class="hint"><i class="icon ion-ios-close"></i></div>
</div>

<p class="bold margin-top-lg">Lymph from breast tissue drains into the:</p>
<div class="row margin-top clearfix">
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/sup_cervical" class="btn btn-default">Superficial Cervical Lymph Nodes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/axillary" class="btn btn-default">Axillary Lymph Nodes</a>
	</div>
	<div class="list-item col-sm-4">
		<a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/inguinal" class="btn btn-default">Inguinal Lymph Nodes</a>
	</div>
</div>


<?php include(ROOT_PATH . "/templates/footer.php"); ?>