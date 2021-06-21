<!-- Core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?php foreach($view['js'] as $key => $value): ?>
    <script src="<?php echo $value ?>"></script>
<?php endforeach; ?>

<!-- Essential jQuery Plugins
        ================================================== -->
<!-- Main jQuery -->
<script src="<?=$view['urlbaseaddr'] ?>js/jquery-1.11.1.min.js"></script>
<!-- feather.min.js -->
<script src="<?=$view['urlbaseaddr'] ?>js/feather.min.js"></script>
<!-- Twitter Bootstrap -->
<script src="<?=$view['urlbaseaddr'] ?>js/bootstrap.min.js"></script>
<!-- Single Page Nav -->
<script src="<?=$view['urlbaseaddr'] ?>js/jquery.singlePageNav.min.js"></script>
<!-- jquery.fancybox.pack -->
<script src="<?=$view['urlbaseaddr'] ?>js/jquery.fancybox.pack.js"></script>
<!-- Owl Carousel -->
<script src="<?=$view['urlbaseaddr'] ?>js/owl.carousel.min.js"></script>
<!-- jquery easing -->
<script src="<?=$view['urlbaseaddr'] ?>js/jquery.easing.min.js"></script>
<!-- Fullscreen slider -->
<script src="<?=$view['urlbaseaddr'] ?>js/jquery.slitslider.js"></script>
<script src="<?=$view['urlbaseaddr'] ?>js/jquery.ba-cond.min.js"></script>
<!-- onscroll animation -->
<script src="<?=$view['urlbaseaddr'] ?>js/wow.min.js"></script>
<!-- copyclip functions -->
<script src="<?=$view['urlbaseaddr'] ?>js/copyclip.js"></script>
<!-- Custom functions -->
<script src="<?=$view['urlbaseaddr'] ?>js/main.js"></script>

<script>
    feather.replace()
</script>

<?php foreach($view['jsscripts'] as $key => $value): ?>
    <?php echo $value ?>
<?php endforeach; ?>

<!-- Modernizer Script for old Browsers -->
<script src="<?=$view['urlbaseaddr'] ?>js/modernizr-2.6.2.min.js"></script>
