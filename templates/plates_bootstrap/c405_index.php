<!DOCTYPE html>
<html lang="en">

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body id="body">
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<main class="site-content" role="main">
    <section class="main-section-padding">
        <div class="container">
            <div class="row">
                <div class="shape-1">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-orange.557de308.svg">
                </div>
                <div class="shape-2">
                    <img style="max-width: 100%;" src="<?=$view['urlbaseaddr']?>/img/slider/shape-blue.png">
                </div>
                <div class="sec-title text-center white">
                    <h1 style="color: #fff; font-weight: bold; text-shadow: 1px 1px 10px rgba(255, 255, 255, 0.4);">405</h1>
                    <h2 style="font-weight: bold; text-shadow: 1px 1px 10px rgba(255, 255, 255, 0.4);">Method Not Allowed</h2>
                    <p class="pt-2" style="color: rgba(255,255,255,0.7);">Sorry, but this method is not allowed on this page!</p>
                    <p class="pt-4" style="color: rgba(255,255,255,0.7);">Allowed method(s):</p>
                    <?php foreach($view['vars'] as $key => $value): ?>
                        <div style="color: rgba(255,255,255,0.7);" class="row justify-content-center"><?=$value ?></div>
                    <?php endforeach; ?>
                    <p class="pt-5" style="color: rgba(255,255,255,0.7);">Let's go back <a class="dark-link" href="<?=$view['urlbaseaddr'] ?>index">HOME</a>!</p>
                </div>
            </div>
        </div>
    </section>
</main> <!-- /content --><body>
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<div class="container-footer">
    <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>
</div>

<?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
<?php endif ?>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=$view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
