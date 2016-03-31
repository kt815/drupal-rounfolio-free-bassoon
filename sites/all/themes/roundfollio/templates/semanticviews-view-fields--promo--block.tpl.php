<?php foreach ($fields as $id => $field): ?>
<?php 
if($id=='nid'){$nid=$field->content;}
if($id=='field_image'){$img=$field->content;}
if($id=='field_promo_text'){$text=$field->content;}
?>
<?php endforeach; ?>

<?=$img?>
<div id="htmlcaption<?=$nid?>" class="nivo-html-caption"><?=$text?></div>