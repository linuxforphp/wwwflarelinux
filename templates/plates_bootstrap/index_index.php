<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body id="body">
<?=$this->section('navbar', $this->fetch('navbar_index', ['view' => $view]))?>

<main class="site-content" role="main">

    <!--
    Jumbotron
    ==================================== -->
    <section id="home-jumbotron">
        <div class="jumbotron jumbotron-fluid jumbotron-padding bg-img bg-img-1">
            <div class="container">
                <div class="jumbotron-content float-left">
                    <div id="jumbo-img">
                        <img src="<?=$view['urlbaseaddr']?>/img/brandname-4-light-2.png"/>
                    </div>
                    <div class="shape-1">
                        <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-orange.557de308.svg">
                    </div>
                    <div class="shape-2">
                        <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-blue.png">
                    </div>
                    <div class="h1" style="color: #fff;">
                        <span style="color: #fff; opacity: .3; text-transform: uppercase;" class="lead">An LFPHP project</span><br />
                        Flare Linux<br />
                        <span style="color: #fff; opacity: .7;" class="lead">A custom-built GNU/Linux stack to run Flare server nodes</span>
                    </div><br />
                    <button id="try-now" type="button" class="btn btn-red btn-effect" style="z-index: 9997;" >Try Now</button>
                </div>
            </div>
        </div>
    </section>
    <!--
    End Home Jumbotron
    ==================================== -->

    <!-- About section -->
    <section id="about" class="main-section-padding">
        <div class="overlay">
            <div class="container">
                <div class="shape-3">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-orange.557de308.svg">
                </div>
                <div class="shape-4">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-blue.png">
                </div>
                <div class="shape-5">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-orange.557de308.svg">
                </div>
                <div class="shape-6">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-blue.png">
                </div>
                <div class="row card" style="padding-top: 1px; padding-bottom: 20px;">
                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2>About Flare Linux</h2>
                    </div>
                    <div class="owl-carousel owl-theme wow animated fadeInUp">
                        <div class="item testimonial-item text-center">
                            <img src="<?=$view['urlbaseaddr'] ?>img/Logo-Corporate-Light.svg" alt="About Flare linux">
                            <div class="clearfix">
                                <span style="font-size: 25px;">Linux for PHP (LFPHP)</span>
                                <p style="font-size: 19px; color: rgba(255,255,255,0.7);">Flare linux is built on Linux for PHP, a cutting-edge, lightweight version of Linux with all the software needed to easily compile and/or use any version of PHP.
                                    <br />
                                    <br />
                                    Please visit our website: <a class="dark-link" href="https://linuxforphp.net" target="_blank">linuxforphp.net</a>.
                                </p>
                            </div>
                        </div>
                        <div class="item testimonial-item text-center">
                            <img src="<?=$view['urlbaseaddr'] ?>img/FLR-dark.svg" alt="About XRPL">
                            <div class="clearfix">
                                <span style="font-size: 25px;">Flare Networks</span>
                                <p style="font-size: 19px; color: rgba(255,255,255,0.7);">Unleashing Value.<br />
                                    Around 65% of the value of Blockchain Tokens is inaccessible to decentralised applications.<br />
                                    That changes now.<br /><br />
                                    Please visit the <a class="dark-link" href="https://flare.xyz" target="_blank">Flare website</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About section -->

    <section id="howto" class="main-section-padding" style="padding-bottom: 0;">
        <div class="container">
            <div class="row card" style="padding-top: 1px; padding-bottom: 20px;">
                <div class="row">
                    <div class="sec-title text-center white wow animated fadeInDown animated">
                        <div class="sec-title text-center white wow animated fadeInDown">
                            <h2 style="font-weight: bold !important;">Run a Flare node on your computer now!</h2>
                        </div>
                        <div class="row" style="margin-right: 15px; margin-left: 15px;">
                            <div class="col-md-6">
                                <h3 class="wow animated fadeInDown pink">Requirements:</h3>
                                <ul class="text-md howtoflarelinux">
                                    <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">Docker is installed on your computer: <a class="dark-link" href="https://docs.docker.com/install/" target="_blank">INSTALL DOCKER</a>,</li>
                                    <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">An additional 16 GB of RAM for each Node you wish to run on your computer,</li>
                                    <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">An additional 500 GB of storage (HDD or SSD),</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                            <h3 class="wow animated fadeInDown blue">Follow these steps:</h3>
                                <ul class="text-md howtoflarelinux">
                                    <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">Open a Bash or a ZSH terminal (Mac or Linux), or a Powershell CLI (Windows),</li>
                                    <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">Enter the following command in the terminal, and wait for the server to finish bootstrapping:</li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <pre><code class="pre-code-custom">docker run -dit --restart=always -e FLARE_BIND_ADDRESS=0.0.0.0 -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.2.0-1.11.0 flare --flare-coston2</code></pre>
                    </div>
                    <div class="col-sm-2">
                        <span title="Copy" data-toggle="tooltip" style="display: block; position: relative; top: 50%; transform: translateY(40%);">
                            <button id="myDockerCommand1Button" class="copy-button"><i class="fa-regular fa-copy"></i></button>
                        </span>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <hr>
                        <p>
                            You could also run the server in interactive mode by removing the 'd' option, like so:<br><br>
                            <span class="command-styling">docker run -it [...]</span><br><br><br>
                            <span class="small">You can find the Flare Network code repository at: <a class="dark-link" href="https://github.com/flare-foundation/go-flare" target="_blank">https://github.com/flare-foundation/go-flare</a></span>
                        </p>
                        <hr>
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="sec-title text-center">
                        <h3 class="wow animated fadeInDown blue">Start testing the <i style="text-decoration: underline #ed658c; font-style: normal;">Flare</i> API:</h3>
                        <ul class="text-md howtoflarelinux">
                            <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">Use <a class="dark-link" href="https://www.postman.com/" target="_blank">Postman</a> to start querying your server's API.</li>
                            <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">Make sure the "C" chain is bootstrapped (/home/flareuser/.flare/logs/C.log), before making other queries!</li>
                            <li class="wow animated fadeInDown" style="visibility: visible; animation-name: ;">To stop the Flare server, please enter the following command (or press <span class="command-styling">Ctrl+C</span>):</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <pre><code class="pre-code-custom">docker rm -f my_flare_server</code></pre>
                    </div>
                    <div class="col-sm-2">
                        <span title="Copy" data-toggle="tooltip">
                            <button id="myDockerCommand2Button" class="copy-button"><i class="fa-regular fa-copy"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social section -->
    <section id="social" class="main-section-padding">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2 style="font-weight: bold !important; font-size: 36px;">FOLLOW US</h2>
                        <p id="footer-call-to-action" style="margin: auto; color: rgba(255,255,255,0.7);">Stay up to date with the latest information about Flare Linux!</p>
                    </div>

                    <ul class="social-button">
                        <li class="wow animated zoomIn animated"><a href="https://facebook.com/asclinux" target="_blank"><i class="fa fa-brands fa-facebook-square fa-2x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://x.com/linuxforphp" target="_blank"><i class="fa fa-brands fa-x-twitter fa-2x"></i></a></li>
                        <li class="wow animated zoomIn animated" data-wow-delay="0.6s"><a href="https://instagram.com/linuxforphp" target="_blank"><i class="fa fa-brands fa-instagram fa-2x"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- end Social section -->

</main> <!-- /content -->

<div class="container-footer">
    <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>
</div>

<?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
<?php endif ?>

<script>
    document.getElementById("try-now").addEventListener('click', function () {
        document.getElementById("howto").scrollIntoView({
            behavior: 'smooth', // Optional: for smooth scrolling animation
            block: 'start'      // Optional: align the element to the top of the viewport
        });
    });
    document.getElementById("try-now").addEventListener('touchstart', function () {
        document.getElementById("howto").scrollIntoView({
            behavior: 'smooth', // Optional: for smooth scrolling animation
            block: 'start'      // Optional: align the element to the top of the viewport
        });
    });
</script>

<script src="<?=$view['urlbaseaddr'] ?>js/copyclip.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=$view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
