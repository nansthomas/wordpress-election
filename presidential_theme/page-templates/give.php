<?php
	/*
	Template Name: Page donner
	*/
?>

<?php get_header(); ?>

<div class="donationPage__header">
	<h1 class="donationPage__title">Soutenez l'action de l'homme invisible</h1>
</div>

<form action="#" class="donationFormMax">

	<h3 class="donationFormMax__title">Remplissez les informations suivantes</h3>
	
	<div class="donationFormMax__fields">
		<input type="text" placeholder="Prénom">
		<input type="text" placeholder="Nom">
	</div>

	<div class="donationFormMax__fields">
		<input type="text" placeholder="Adresse postale">
	</div>

	<div class="donationFormMax__fields">
		<input type="text" placeholder="Ville">
		<input type="text" placeholder="Code postal">
		<input type="country" placeholder="Pays">
	</div>

	<div class="donationFormMax__fields">
		<input type="email" placeholder="Adresse email">
	</div>

	<div class="donationFormMax__fields">
		<input type="amount" placeholder="Montant de votre donation">
	</div>

	<div class="donationFormMax__fields">
		<input type="submit" value="Valider">
	</div>

</form>

<?php get_footer(); ?>