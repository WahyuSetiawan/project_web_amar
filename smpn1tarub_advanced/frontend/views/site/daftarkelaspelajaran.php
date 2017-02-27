
<h1>Elearning SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <?php
    if (count($kelas) != 0) {
        for ($index1 = 0; $index1 < count($kelas); $index1++) {
            ?>

            <h3><a href="?r=site/jadwalpelajaran&kelas=<?= $kelas[$index1]->Kelas ?>"><?= $kelas[$index1]->Kelas ?></a></h3>

            <?php
        }
    }
    ?>

</div>
