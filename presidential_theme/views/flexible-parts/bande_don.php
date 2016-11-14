<?php
	echo 'oooo';
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
			<li class=""><?php echo $first_amount; ?></li>
			<li class=""><?php echo $second_amount; ?></li>
			<li class=""><?php echo $third_amount; ?></li>
			<li class=""><?php echo $fourth_amount; ?></li>
			<li class="custom"><input type="number" class="custom_price" name="" value=""><a class="ok_button">OK</a></li>
      <form action="/" method="POST">
        <script
          class="custom_form_script"
          src="https://checkout.stripe.com/checkout.js"
          class="stripe-button"
          data-amount="2000">
        </script>
      </form>
		</ul>
	</div>

</section>

<script type="text/javascript">
  var custom_form_script = document.querySelector('.custom_form_script');

  var toto = custom_form_script.getAttribute('data-amount');
  console.log(toto);

  custom_price.addEventListener('input', function () {
    custom_form_script.setAttribute('data-amount', custom_price.value);
    console.log('attribue :' + toto);
    console.log('input :' + custom_price.value);
  });
</script>
