<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="page-top" class="index">

<?php $this->beginBody() ?>

<div class="wrap">

    <header>
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="alinhamenu">
                <div class="navbar-header page-scroll">
                    <a class="navbar-brand page-scroll" href="#page-top"><img src="imagens/logo.png"/> </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <br>
                <hr style="color: #FFFFFF; margin-top: 70px; ">

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: -20px;">
                    <ul class="nav navbar-nav">
                        <li class="hidden">
                            <a href="#page-top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services" style="color: #FFFFFF">Services</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio" style="color: #FFFFFF">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about" style="color: #FFFFFF">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#team" style="color: #FFFFFF">Team</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact"style="color: #FFFFFF">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->

            <!-- /.container-fluid -->

            <div class="intro-text">

                <div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell Me More</a>
            </div>
        </div>
    </header>


<!-- Header -->


<div class="container">
    <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    ]) ?>
    <?= $content ?>
</div>

</div>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
