<?php foreach ($fields as $id => $field): ?>
<?php 
if($id=='body'){$body=$field->content;}
if($id=='field_about_image'){$img=$field->content;}
if($id=='field_social_link'){$links=$field->content;}
?>
<?php endforeach; ?>


            <div id="about-col1">
            <div id="about-photo">
            	<span class="about-img-shadow"></span>
            	<?=$img?>
            </div>

            	<ul>
                    <?= $links ?>
                </ul>
            </div>
            <div id="about-col2">
<?=$body?>
            </div>