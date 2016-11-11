<?php get_header(); ?>

<section class="homeHeader">
    
    <div class="homeHeader__content">
		<h1 class="homeHeader__title">L'homme invisible</h1>
		<h3 class="homeHeader__subtitle">Pour une République transparente</h3>

		<a href="#" class="homeHeader__button">
			<span>Voter</span>
		</a>

	</div>

</section>

<form class="newsletterForm">
	
	<h3 class="newsletterForm__title">Restez informé des actualités</h3>
	
	<div class="newsletterForm__fields">
		<input type="text" placeholder="Prénom">
		<input type="mail" placeholder="Email">

		<input type="submit" value="INSCRIPTION">
	</div>

</form>

<section class="homeBlog">
    
    <div class="homeBlog__container">
		
		<article class="homeBlog__article">
			<img class="homeBlog__articleImage" src="<?php echo home_url( 'wp-content/themes/presidential_theme/img/article-homeBlog.png' ); ?>" alt="">
			<h5 class="homeBlog__articleTitle">Lorem Ipsum</h5>
			<div class="homeBlog__articleDescription">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe dolorem quisquam animi officiis ipsam. Obcaecati ipsum fugit necessitatibus ex, aliquam doloremque vel, temporibus sunt, blanditiis ullam maiores repudiandae officiis! Dignissimos.
			</div>
		</article>
		<article class="homeBlog__article">
			<img class="homeBlog__articleImage" src="<?php echo home_url( 'wp-content/themes/presidential_theme/img/article-homeBlog.png' ); ?>" alt="">
			<h5 class="homeBlog__articleTitle">Lorem Ipsum</h5>
			<div class="homeBlog__articleDescription">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, similique. A nobis, enim aspernatur quis ullam nostrum doloribus, ad atque porro eveniet ratione perferendis accusamus expedita nemo nulla iste at!
			</div>
		</article>
		<article class="homeBlog__article">
			<img class="homeBlog__articleImage" src="<?php echo home_url( 'wp-content/themes/presidential_theme/img/article-homeBlog.png' ); ?>" alt="">
			<h5 class="homeBlog__articleTitle">Lorem Ipsum</h5>
			<div class="homeBlog__articleDescription">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam dolorum impedit sit sapiente iure quod, velit ducimus ea amet voluptate, explicabo harum corporis illum rerum, voluptatum cumque assumenda officiis, nisi.
			</div>
		</article>
		<article class="homeBlog__article">
			<img class="homeBlog__articleImage" src="<?php echo home_url( 'wp-content/themes/presidential_theme/img/article-homeBlog.png' ); ?>" alt="">
			<h5 class="homeBlog__articleTitle">Lorem Ipsum</h5>
			<div class="homeBlog__articleDescription">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio expedita ipsam voluptatem accusamus corporis enim similique, sed unde quaerat voluptatibus, natus mollitia non id debitis, dolore necessitatibus consequuntur molestias. Iure.
			</div>
		</article>
		<article class="homeBlog__article">
			<img class="homeBlog__articleImage" src="<?php echo home_url( 'wp-content/themes/presidential_theme/img/article-homeBlog.png' ); ?>" alt="">
			<h5 class="homeBlog__articleTitle">Lorem Ipsum</h5>
			<div class="homeBlog__articleDescription">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit fugiat optio consectetur alias, numquam doloribus porro ullam in repellendus consequuntur minima doloremque, illo nobis hic incidunt fugit totam minus debitis.
			</div>
		</article>

	</div>

</section>

<?php get_footer(); ?>