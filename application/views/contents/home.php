<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
            <?php
            $img_url = url_images();
            foreach ($slides as $slide):
            ?>
			<div class="item-slick1" style="background-image: url(<?= $img_url.$slide->image;?>)">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									<?= $slide->alt;?>
								</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW SEASON
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
            <?php endforeach; ?>
		</div>
	</div>
</section>


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
	<div class="container">
		<div class="row">
            <?php
            foreach ($categoriesImg as $img):
                ?>
                <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
                    <!-- Block1 -->
                    <div class="block1 wrap-pic-w">
                        <img src="<?= IMG_URL.$img->image; ?>" alt="IMG-BANNER">

                        <a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                            <div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									<?= $img->alt; ?>
								</span>

                                <span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
                            </div>

                            <div class="block1-txt-child2 p-b-4 trans-05">
                                <div class="block1-link stext-101 cl0 trans-09">
                                    Shop Now
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php
            endforeach;
            ?>

			<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
				<!-- Block1 -->
				<div class="block1 wrap-pic-w">
					<img src="<?= base_url('assets/images/banner-03.jpg');?>" alt="IMG-BANNER">

					<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

							<span class="block1-info stext-102 trans-04">
									New Trend
								</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Shop Now
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Product -->
<section class="bg0 p-t-23 p-b-140">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				<!--Product Overview-->
                APERÇU DE NOS PRODUITS
			</h3>
		</div>

		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					Nos matériels
				</button>

                <?php
                foreach($categories as $category):
                ?>
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?= $category ?>">
					<?= $category ?>
				</button>
                <?php
                endforeach;
                ?>
			</div>
		</div>

		<div class="row isotope-grid">
            <?php
            foreach ($products as $product):
            ?>
			<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?= $product->categorie; ?>">
				<!-- Block2 -->
				<div class="block2">
					<div class="block2-pic hov-img0" style="padding: 15px;">
						<img src="<?= IMG_PRODUCT_URL . $product->image ;?>" alt="IMG-PRODUCT" width="300" height="270">

						<a href="#" data-name="<?= $product->name;?>" data-description="<?= $product->description; ?>" data-price="<?= $product->price; ?>"
                           data-image="<?= IMG_PRODUCT_URL . $product->image;?>" data-stock="<?= $product->stock;?>" data-id="<?= $product->productId;?>"
                           class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 show-qv">
							Aperçu rapide
						</a>
					</div>

					<div class="block2-txt flex-w flex-t p-t-14">
						<div class="block2-txt-child1 flex-col-l ">
							<a href="<?= base_url();?>product/<?= $product->productId ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                <?= strtoupper($product->name); ?>
							</a>

							<span class="stext-105 cl3">
								<?= number_format($product->price, '0', '', ' '); ?> MGA
                            </span>
						</div>

						<div class="block2-txt-child2 flex-r p-t-3">
							<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
								<img class="icon-heart1 dis-block trans-04" src="<?= base_url('assets/images/icons/icon-heart-01.png');?>" alt="ICON">
								<img class="icon-heart2 dis-block trans-04 ab-t-l" src="<?= base_url('assets/images/icons/icon-heart-02.png');?>" alt="ICON">
							</a>
						</div>
					</div>
				</div>
			</div>
            <?php
            endforeach;
            ?>
		</div>

		<!-- Load more -->
		<div class="flex-c-m flex-w w-full p-t-45">
			<a href="<?php echo base_url('shop'); ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
				Voir d'avantage
			</a>
		</div>
	</div>
</section>

<?php
$this->load->view("modals/modal_login");
?>
