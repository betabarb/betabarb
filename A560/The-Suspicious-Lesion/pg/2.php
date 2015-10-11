<?php

require_once("../../templates/config.php");

include(ROOT_PATH . "/The-Suspicious-Lesion/index.php"); 

?>

<p>Correct! Lymph nodes have a distinct stroma of an outer cortex and inner medulla.</p>

<figure>
  <img id="big" src="<?php echo BASE_URL; ?>assets/img/TSL-LN-Labeled.png" class="img-responsive" alt="">
  <figcaption></figcaption>
</figure>

<div class="row margin-top clearfix">
  <div class="list-item col-sm-3">
    <label>A.) <input type="text" class="check-input" data-ansindex="9" data-hintindex="2"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
    <div class="hint"><i class="icon ion-ios-close"></i></div>
  </div>
  <div class="list-item col-sm-3">
    <label>B.) <input type="text" class="check-input" data-ansindex="8" data-hintindex="54"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
    <div class="hint"><i class="icon ion-ios-close"></i></div>
  </div>
  <div class="list-item col-sm-3">
    <label>C.) <input type="text" class="check-input" data-ansindex="4" data-hintindex="3"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
    <div class="hint"><i class="icon ion-ios-close"></i></div>
  </div>
  <div class="list-item col-sm-3">
    <label>D.) <input type="text" class="check-input" data-ansindex="7" data-hintindex="4"><i class="icon ion-ios-help-empty input"></i><i class="icon ion-ios-checkmark input"></i></label>
    <div class="hint"><i class="icon ion-ios-close"></i></div>
  </div>
</div>

<p class="bold margin-top-lg">Lymph nodes are considered   _______________   lymphoid organs.</p>
<div class="row margin-top-lg clearfix">
  <div class="list-item col-sm-4">
    <a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/primary.php" class="btn btn-default">Primary</a>
  </div>
  <div class="list-item col-sm-4">
    <a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/secondary.php" class="btn btn-default">Secondary</a>
  </div>
  <div class="list-item col-sm-4">
    <a href="<?php echo BASE_URL; ?>The-Suspicious-Lesion/ans/tertiary.php" class="btn btn-default">Tertiary</a>
  </div>
</div>

<?php include(ROOT_PATH . "/templates/footer.php"); ?>