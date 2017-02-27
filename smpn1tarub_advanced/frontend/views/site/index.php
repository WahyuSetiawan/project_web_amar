<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper col2">
    <div id="featured_slide">
        <?php
        for ($index = 0; $index < count($posting); $index++) {
            ?>
            <div class="featured_box"><a href="#"><img src="images/demo/450x300.gif" alt="" /></a>
                <div class="floater">
                    <h2><?php echo ($index + 1) . " " . $posting[$index]->judul_posting ?></h2>
                    <p><?php echo $posting[$index]->isi_posting ?></p>
                    <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
    <div id="homecontent">
        <div class="fl_left">
            <div class="column3">
                <ul>
                    <li class="left">
                        <h2>Selamat Datang</h2>
                        <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                        <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
                        <p class="readmorecolomn3"><a href="#">Continue Reading &raquo;</a></p>
                    </li>
                    <li class="middle">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                        <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
                        <p class="readmorecolomn3"><a href="#">Continue Reading &raquo;</a></p>
                    </li>
                    <li class="right">
                        <h2>Prestasi Sekolah</h2>
                        <p>Nullamlacus dui ipsum conseqlo borttis non euisque morbipen a sdapibulum orna.</p>
                        <p>Urnau ltrices quis curabitur pha sellent esque congue magnisve stib ulum quismodo nulla et feugiat. Adipisciniap ellentum leo ut consequam.</p>
                        <p class="readmorecolomn3"><a href="#">Continue Reading &raquo;</a></p>
                    </li>
                </ul>
                <br class="clear" />
            </div>
            <div class="column2">
                <h2>Berita Terkini</h2>
                <img class="imgl" src="images/demo/imgl.gif" alt="" />
                <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
                <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
                <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
                <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagittislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
            </div>
        </div>