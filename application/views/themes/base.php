<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Planet Game, La technologie pour tous</title>
	<meta charset="UTF-8">
	<meta name="description" content="Planet Game Madagascar spécialisé en jeux vidéo et multimédia,
		vente et répation de console de jeux vidéo, smartphone, appareil photo, accessoires et autres pérophériques.">
	<meta name="keywords" content="Planet Game, Antananarivo, Antananarive, Madagascar, Jeux vidéos, Multimédia,
		Playstation, Xbox, Nintendo, Smartphone, Tablette, Appareil Photo, Stockage, Maintenance, Réparation">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/icons/favicon.png')?>"/>
	<!--===============================================================================================-->

	<!-- Chargement des CSS -->
	<?php
	foreach ($css as $file) {
		echo "\n\t\t";
		?>
		<link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	}
	echo "\n\t";
	?>
	<script>
		var base_url = '<?php echo base_url(); ?>';
	</script>
</head>
<body class="animsition">
<!-- header -->
<?php echo $this->load->get_section('header'); ?>
<!-- header -->

<!-- Contenu de la page -->
<?php echo $output; ?>
<!-- Contenu de la page -->

<!-- footer -->
<?php echo $this->load->get_section('footer'); ?>
<!-- footer -->

<!-- Chargement des JS -->
<script>
	$(".js-select2").each(function(){
		$(this).select2({
			minimumResultsForSearch: 20,
			dropdownParent: $(this).next('.dropDownSelect2')
		});
	})
</script>

<?php
foreach ($js as $file) {
	echo "\n\t\t";
	?>
	<script src="<?php echo $file; ?>"></script><?php
}
echo "\n\t";
?>

<script>
	$('.gallery-lb').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			},
			mainClass: 'mfp-fade'
		});
	});

	$('.js-addwish-b2').on('click', function(e){
		e.preventDefault();
	});

	$('.js-addwish-b2').each(function(){
		var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-b2');
			$(this).off('click');
		});
	});

	$('.js-addwish-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");

			$(this).addClass('js-addedwish-detail');
			$(this).off('click');
		});
	});

	$('.js-addcart-detail').each(function(){
		var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.js-pscroll').each(function(){
		$(this).css('position','relative');
		$(this).css('overflow','hidden');
		var ps = new PerfectScrollbar(this, {
			wheelSpeed: 1,
			scrollingThreshold: 1000,
			wheelPropagation: false,
		});

		$(window).on('resize', function(){
			ps.update();
		})
	});
</script>

</body>
</html>
