<!-- preloader -->
<div id="preloader">
    <div style="position: absolute; pointer-events: none; right: -65%; top: 20%; width: 200%; z-index: -1;">
        <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-orange.557de308.svg">
    </div>
    <div style="position: absolute; pointer-events: none; right: -140%; top: -90%; width: 200%; z-index: -1;">
        <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-blue.png">
    </div>
    <div class="loader-box">
        <div class="battery"></div>
    </div>
</div>
<!-- end preloader -->

<!--
Fixed Navigation
==================================== -->
<header id="navigation" class="navbar-inverse animated-header">
    <div class="container">
        <div class="navbar-header">
            <!-- responsive nav button -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- /responsive nav button -->

            <!-- logo -->
            <h1 class="navbar-brand" style="height: 75px !important; padding-bottom: 0; padding-right: 20px;">
                <span>
                    <img class="navbar-brand-img" src="<?=$view['urlbaseaddr']?>img/brandname-4.svg"/>
                    <a class="navbar-brand-text" href="#" onclick="getDocsPageNewTab(1, '<?=$view['urlbaseaddr']?>')">Flare Linux</a>
                </span>
            </h1>
            <!-- /logo -->
        </div>

        <!-- main nav -->
        <div id="navigation-menu">
            <nav id="main-nav" class="collapse navbar-collapse navbar-left" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="#body">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#" onclick="getDocsPageNewTab(1, 'https://flare-linux-documentation.readthedocs.io/en/latest/')">Documentation</a></li>
                </ul>
            </nav>
            <nav id="donate" class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li><a href="#" id="ppDonateButton" class="btn btn-white btn-effect ClassyPaypal-button ClassyPaypal-type-donate ClassyPaypal-style-default ClassyPaypal-transit" data-business="admin@asclinux.net" data-return="" data-cancel_return="" data-item_name="Flare Linux" data-amount="0" data-currency_code="USD" style="margin-right: 25px; height: 56px !important; margin-top: 10px; line-height: 56px !important; opacity: 1; width: 180px;">Donate</a></li>
                </ul>
            </nav>
        </div>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->