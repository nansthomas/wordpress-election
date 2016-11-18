<?php
	$project_headline = get_sub_field('titre_projet');
	$project_description_1 = get_sub_field('description_projet_1');
	$project_description_2 = get_sub_field('description_projet_2');
	$project_button_text = get_sub_field('texte_bouton_projet');
	$project_button_link = get_sub_field('lien_bouton_projet');
?>

<section class="homeProgram">
	
	<div class="homeProgram__infos">
		<h3 class="homeProgram__title"><?php echo $project_headline; ?></h3>
		<p class="homeProgram__description">
			<?php echo $project_description_1; ?><br><br>
			<?php echo $project_description_2; ?>
		</p>
		<a href="<?php echo $" class="button">
			<span><?php echo $project_button_text; ?></span>
		</a>
	</div>
	<div class="homeProgram__image"></div>

</section>