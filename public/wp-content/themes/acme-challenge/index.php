<?php get_header(); ?>

<section class="hero" style="background-image: url(src/images/hero-bg.jpg)">
	<div class="container">
		<div class="d-flex align-content-center">
			<div class="hero__content">
				<h1 class="hero__title">Gallery</h1>
			</div>
		</div>
	</div>
</section>

<section class="main-content my-5">
	<div class="container">
		<div class="component-search d-flex justify-content-end mb-5">
			<form action="" class="form-inline" method="POST">
				<label for="" class="mr-2 d-none d-md-inline-block">Search for #</label>
				<div class="input-group">
					<input type="text" class="form-control form-control-lg d-block d-md-inline-block" name="search" />
					<div class="input-group-append">
						<button class="btn btn-default" type="button">
							<img src="src/images/search.svg" alt="" />
						</button>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/700x700" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/49.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Sam Jerremy</h3>
								<div class="component-card__tag">#dayAtThebeach</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/702x702" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/43.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Mads Schmidt</h3>
								<div class="component-card__tag">#BigAssMountain</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/704x704" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/45.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Chandler Smith</h3>
								<div class="component-card__tag">#catchASun</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/700x700" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/48.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Sam Jerremy</h3>
								<div class="component-card__tag">#dayAtThebeach</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/702x702" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/55.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Mads Schmidt</h3>
								<div class="component-card__tag">#BigAssMountain</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 mb-5">
				<div class="component-card">
					<a href="" class="component-card__link">
						<img src="https://source.unsplash.com/random/704x704" alt="" class="component-card__image" />
					</a>
					<div class="component-card__data">
						<div class="component-card__content d-flex">
							<img src="https://randomuser.me/api/portraits/men/46.jpg" alt="User" class="component-card__avatar rounded-circle" />
							<div class="component-card__description">
								<h3 class="component-card__username">Chandler Smith</h3>
								<div class="component-card__tag">#catchASun</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="load-more text-center my-5">
			<a href="" class="btn btn-text">Load More</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>