<ul>
    <?php
    for ($index = 0; $index < count($infosekolah); $index++) {
        ?>
        <li style="height: 100px">
            <div class="imgholder"><a href="#"><img src="images/demo/80x80.gif" alt="" /></a></div>
            <p><strong><a href="#"><?php echo $infosekolah[$index]->judul_posting ?></a></strong></p>
            <p><?php echo $infosekolah[$index]->isi_posting ?></p>
        </li>

    <?php } ?>
</ul>