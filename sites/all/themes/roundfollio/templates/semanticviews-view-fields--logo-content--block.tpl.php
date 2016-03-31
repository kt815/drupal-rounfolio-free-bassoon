<?php foreach ($fields as $id => $field): ?>
<?php 
if($id=='field_logo_image'){
$img=$field->content;
}
if($id=='field_logo_link'){
$link=$field->content;
}

?>
<?php endforeach; ?>

<a href="<?=$link?>"><img src="<?=$img?>" /></a>	