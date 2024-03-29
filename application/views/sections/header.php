<header>
	<!-- Header desktop -->
	<div class="container-menu-desktop">
		<!-- Topbar -->
		<div class="top-bar">
			<div class="content-topbar flex-sb-m h-full container">
				<div class="left-top-bar">
					Livraison gratuite pour les commandes plus de 500 000 MGA
				</div>

				<div class="right-top-bar flex-w h-full">
					<a href="#" class="flex-c-m trans-04 p-lr-25">
						Contact
					</a>

                    <?php
                    $logged = $this->session->userdata('logged');
                    if($logged): ?>
                        <a href='#' class='flex-c-m trans-04 p-lr-25'>Mon compte</a>
                        <a href="<?= base_url(); ?>User/logOut" class="flex-c-m p-lr-10 trans-04">Se déconnecter</a>
                    <?php else:
                        echo "<a href='#login' class='flex-c-m trans-04 p-lr-25 js-show-modal-search' id='login' data-toggle='modal' data-target='#modal-login' data-backdrop='static' data-keyboard='false'>Connexion</a>";
                    endif; ?>
				</div>
			</div>
		</div>

		<?php
		$current_uri = base_url( uri_string());
		if ($current_uri === 'http://localhost/planetgame/' || $current_uri === 'http://localhost/planetgame/home') {
			echo "<div class='wrap-menu-desktop'>";
		} else {
			echo "<div class='wrap-menu-desktop how-shadow1'>";
		}
		?>
			<nav class="limiter-menu-desktop container">

				<!-- Logo desktop -->
				<a href="<?php echo base_url(); ?>" class="logo">
					<img src="<?= base_url('assets/images/icons/logo-01.png')?>" alt="IMG-LOGO">
				</a>
				<!-- Menu desktop -->
				<div class="menu-desktop">
					<ul class="main-menu">
						<li class="active-menu">
							<a href="<?php echo base_url(); ?>">Accueil</a>
						</li>

						<li>
							<a href="<?php echo base_url('shop'); ?>">Boutique</a>
						</li>

					</ul>
				</div>

				<!-- Icon header -->
				<div class="wrap-icon-header flex-w flex-r-m">
					<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
						<i class="zmdi zmdi-shopping-cart"></i>
					</div>

					<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
						<i class="zmdi zmdi-favorite-outline"></i>
					</a>
				</div>
			</nav>
		</div>
	</div>

	<!-- Header Mobile -->
	<div class="wrap-header-mobile">
		<!-- Logo moblie -->
		<div class="logo-mobile">
			<a href="index.html"><img src="<?= base_url('assets/images/icons/logo-01.png')?>" alt="IMG-LOGO"></a>
		</div>

		<!-- Icon header -->
		<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
				<i class="zmdi zmdi-shopping-cart"></i>
			</div>

			<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
				<i class="zmdi zmdi-favorite-outline"></i>
			</a>
		</div>

		<!-- Button show menu -->
		<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
		</div>
	</div>


	<!-- Menu Mobile -->
	<div class="menu-mobile">
		<ul class="topbar-mobile">
			<li>
				<div class="left-top-bar">
                    Livraison gratuite pour les commandes standard de plus de 200000 Ariary .
				</div>
			</li>

			<li>
				<div class="right-top-bar flex-w h-full">
                    <a href="#" class="flex-c-m p-lr-10 trans-04">
                        Contact
                    </a>

                    <?php
                    $logged = $this->session->userdata('logged');
                    if($logged) { ?>
                    <a href='#' class='flex-c-m p-lr-10 trans-04'>Mon compte</a>
                    <a href="<?= base_url(); ?>User/logOut" class="flex-c-m p-lr-10 trans-04">Se déconnecter</a>
                    <?php } else{
                        echo "<a href='#login' class='flex-c-m p-lr-10 trans-04 js-show-modal-search' id='login' data-toggle='modal' data-target='#modal-login' data-backdrop='static' data-keyboard='false'>Connexion</a>";
                    } ?>
				</div>
			</li>
		</ul>

		<ul class="main-menu-m">
			<li>
				<a href="<?php echo base_url(); ?>">Accueil</a>
			</li>

			<li>
				<a href="<?php echo base_url('shop'); ?>">Boutique</a>
			</li>

			<li>
				<a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
			</li>

			<li>
				<a href="blog.html">Blog</a>
			</li>

			<li>
				<a href="about.html">About</a>
			</li>

			<li>
				<a href="contact.html">Contact</a>
			</li>
		</ul>
	</div>
</header>

<!-- Cart -->
<div class="wrap-header-cart js-panel-cart">
	<div class="s-full js-hide-cart"></div>

	<div class="header-cart flex-col-l p-l-65 p-r-25">
		<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>

		<div class="header-cart-content flex-w js-pscroll">
			<ul class="header-cart-wrapitem w-full">
				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="<?= base_url('assets/images/item-cart-01.jpg')?>" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							White Shirt Pleat
						</a>

						<span class="header-cart-item-info">
								1 x $19.00
							</span>
					</div>
				</li>

				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="<?= base_url('assets/images/item-cart-02.jpg')?>" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							Converse All Star
						</a>

						<span class="header-cart-item-info">
								1 x $39.00
							</span>
					</div>
				</li>

				<li class="header-cart-item flex-w flex-t m-b-12">
					<div class="header-cart-item-img">
						<img src="<?= base_url('assets/images/item-cart-03.jpg')?>" alt="IMG">
					</div>

					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							Nixon Porter Leather
						</a>

						<span class="header-cart-item-info">
								1 x $17.00
							</span>
					</div>
				</li>
			</ul>

			<div class="w-full">
				<div class="header-cart-total w-full p-tb-40">
					Total: $75.00
				</div>

				<div class="header-cart-buttons flex-w w-full">
					<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
						View Cart
					</a>

					<a href="shoping-cart.html" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
						Check Out
					</a>
				</div>
			</div>
		</div>
	</div>
</div>