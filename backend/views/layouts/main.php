<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\bootstrap\Nav;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">

    <script src="js/jquery.min.js.transferir"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/css/theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    <script src="js/script.js"></script>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    
   <div id="wrapper" class="toggled">
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand no-contrast">
                    <a href="index.php">
                        <img id="splitview_logo" src="Imagens/logo.png" style="width:150px;height:auto;padding-top:25px;padding-bottom:25px;">
                    </a>
                </li>

                <li class="no-contrast mobile-only" style="padding-top:15px;padding-bottom:15px;">
                    <div>
                        <div style="width:50%;float:left;padding-right:10px;padding-left:5px;">
                            <img src="Imagens/avatar.png" type="button" data-toggle="modal" data-target="#myModal" style="width: 55px;">
                        </div>
                    </div>
                </li>

                <li class="active">
                    <a href="index.php"><span class="fa fa-gamepad nav-icon" aria-hidden="true"></span> Dashboard</a>
                </li>
                <li>
                    <a href="index.php?r=homegaleria/index"><span class="fa fa-home nav-icon" aria-hidden="true"></span> Home</a>
                </li>
                <li>
                    <a href="index.php?r=promocaogaleria/index"><span class="fa fa-shopping-cart nav-icon" aria-hidden="true"></span> Promoção</a>
                </li>
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-newspaper-o nav-icon" aria-hidden="true"></span>Frut&Pão<span class="caret"></span></a>
                    <ul class="dropdown-menu" style="background: #122b40">
                      <li><a href="#" style="color: white">xxxxxxxxx</a></li>
                      <li><a href="#" style="color: white">xxxxxxxxx</a></li>
                      <li><a href="#" style="color: white">xxxxxxxxx</a></li>
                      <li><a href="#" style="color: white">xxxxxxxxx</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="index.php?r=contacto/index"><span class="fa fa-pencil nav-icon" aria-hidden="true"></span> Contact</a>
                </li>
            </ul>

            <div class="sidebar-footer">
                <footer>
                    <br><br class="hidden-xs">
                    <div class="terms">
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                    <div class="text-center social-wrapper">
                        <a href="https://www.face book.com" target="_blank"><i class="social-icon fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://twitter.com" target="_blank"><i class="social-icon social-icon-margin-left fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com" target="_blank"><i class="social-icon fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com" target="_blank"><i class="social-icon fa fa-youtube" aria-hidden="true"></i></a>
                        <br>
                        <small>Powered by @ iMedia 2018</small>
                    </div>
                </footer>
            </div>
        </nav>

    <div id="page-content-wrapper">
        <header class="header">
            <button type="button" class="hamburger is-open" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <div class="signup-header-login-wrapper non-mobile-only">
                <a href="#" class="show_hide"><img src="Imagens/avatar.png" style="width: 55px;"></a><br />
                <div class="slidingDiv">
                    <ul>
                        <li><a href="index.php?r=usuario/index">Meus Dados</a></li>
                        <li><a href="#">Setting</a></li>
                        <?php 
                         if (Yii::$app->user->isGuest) {
                            $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                        } else {
                            $menuItems[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>';
                             }
                            echo Nav::widget([
                                'options' => ['class' => 'navbar-nav navbar-right'],
                                'items' => $menuItems,
                            ]); ?>
                    </ul>
                </div>
            </div>
        </header>
    </div>

    <div class="col-md-12">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

</div>

    <script>
        $(document).ready(function () {
            var trigger = $('.hamburger');
            var isClosed = false;

            var infobar = $('.infobar');

            var isMobile = window.matchMedia("only screen and (max-width: 800px)");

            if (isMobile.matches) {
                // Force sidebar to closed state
                isClosed = true;
                trigger.removeClass('is-open');
                infobar.removeClass('is-open');
                trigger.addClass('is-closed');
                $('#wrapper').toggleClass('toggled');
                //hamburger_cross();
            }

            trigger.click(function () {
                hamburger_cross();
            });

            function hamburger_cross() {
                if (isClosed == true) {
                    trigger.removeClass('is-closed');
                    trigger.addClass('is-open');
                    infobar.addClass('is-open');
                    isClosed = false;
                } else {
                    trigger.removeClass('is-open');
                    trigger.addClass('is-closed');
                    infobar.removeClass('is-open');
                    isClosed = true;
                }
            }

            $('[data-toggle="offcanvas"]').click(function () {
                $('#wrapper').toggleClass('toggled');
            });



        });
    </script>
    <script type="text/javascript">

        $(document).ready(function(){

            $(".slidingDiv").hide();
            $(".show_hide").show();

            $('.show_hide').click(function(){
                $(".slidingDiv").slideToggle();
            });

        });

    </script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
