<?php
	echo 'oooo';
	$donation_title = get_sub_field('texte_don');
	$first_amount = get_sub_field('premier_montant');
	$second_amount = get_sub_field('deuxieme_montant');
	$third_amount = get_sub_field('troisième_montant');
	$fourth_amount = get_sub_field('quatrieme_montant');
?>

<section class="donationFormMin">

	<div class="donationFormMin__container">
		<h3 class="donationFormMin__title"><?php echo $donation_title; ?></h3>
		<ul class="donationFormMin__amounts">
      <form action="/your-server-side-code" method="POST">
        <script
          src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="pk_test_nYVHsex9YtLnndKBp6HmxyAN"
          data-amount="2000"
          data-name="Wino Technologies SAS"
          data-description="2 widgets"
          data-image="https://s3.amazonaws.com/stripe-uploads/acct_18f3GOLrz9UfSkFimerchant-icon-1472593676866-Wino_Application.png"
          data-locale="auto"
          data-zip-code="true"
          data-currency="eur">
        </script>
      </form>
			<li class="donationFormMin__amount"><?php echo $first_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $second_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $third_amount; ?>€</li>
			<li class="donationFormMin__amount"><?php echo $fourth_amount; ?>€</li>
		</ul>
	</div>

</section>
