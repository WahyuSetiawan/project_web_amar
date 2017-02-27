<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!-- ####################################################################################################### -->
        <div class="wrapper col1" style="padding-top: 50px">
            <div id="header">
                <div id="logo">
                    <h1><a href="<?= \Yii::$app->homeUrl ?>">SMPN 1 TARUB</a></h1>
                    <p>Sekolah Menengah Pertama</p>
                </div>
                <div id="topnav">
                    <?= $this->render('_menudropdown') ?>
                    <div style="clear:both"></div>
                </div>
                <br class="clear" />
            </div>
        </div>
        <?= $content ?>
        <div class="fl_right">
            <h2>Login</h2>
            <?php
            echo $this->render('_login');
            $prestasi = \frontend\models\PostingModel::find()->where(['kategori' => 'posting'])->orderBy('id_posting')->limit(5)->all();
            $infosekolah = \frontend\models\PostingModel::find()->where(['kategori' => 'info_sekolah'])->orderBy('id_posting')->limit(5)->all();
            ?>
            <h2>Prestasi</h2>
            <?= $this->render('_prestasi') ?>
            <h2>Info Sekolah</h2> 
            <?= $this->render('_infosekolah', ['infosekolah' => $infosekolah]) ?>
        </div>
        <br class="clear" />
    </div>
    <br class="clear" />
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col5">
    <div id="copyright">
        <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">WWW.SMPTarub.com</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <br class="clear" />
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<script type="text/javascript">
    $(function () {
        $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
            timeout: 5000,
            fx: 'fade',
            pager: '#fs_pagination',
            pause: 1,
            pauseOnPagerHover: 0
        });
    });

    // Copyright 2006-2007 javascript-array.com

    var timeout = 500;
    var closetimer = 0;
    var ddmenuitem = 0;

// open hidden layer
    function mopen(id)
    {
        // cancel close timer
        mcancelclosetime();

        // close old layer
        if (ddmenuitem)
            ddmenuitem.style.visibility = 'hidden';

        // get new layer and show it
        ddmenuitem = document.getElementById(id);
        ddmenuitem.style.visibility = 'visible';

    }
// close showed layer
    function mclose()
    {
        if (ddmenuitem)
            ddmenuitem.style.visibility = 'hidden';
    }

// go close timer
    function mclosetime()
    {
        closetimer = window.setTimeout(mclose, timeout);
    }

// cancel close timer
    function mcancelclosetime()
    {
        if (closetimer)
        {
            window.clearTimeout(closetimer);
            closetimer = null;
        }
    }

// close layer when click-out
    document.onclick = mclose;
</script>
