<?php
	$donation_title = get_sub_field('texte_don');
	$first_amount = get_sub_field('premier_montant');
	$second_amount = get_sub_field('deuxieme_montant');
	$third_amount = get_sub_field('troisieme_montant');
	$fourth_amount = get_sub_field('quatrieme_montant');
?>

<section class="donationFormMin">

	<div class="donationFormMin__container">
		<h3 class="donationFormMin__title"><?php echo $donation_title; ?></h3>
		<ul class="donationFormMin__amounts">
			<li class="donationFormMin__amount"><?php echo $first_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $second_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $third_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $fourth_amount; ?>€</li>
		</ul>
	</div>

</section>
