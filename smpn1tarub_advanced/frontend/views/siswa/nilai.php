<h1>Elearning SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <?php
    if (count($kelas) != 0) {
        $kelasarray = array_keys($kelas);
        for ($index2 = 0; $index2 < count($kelas); $index2++) {
            ?>
            <h2><?= $kelasarray[$index2] ?></h3>
                <?php
                $hariarray = array_keys($kelas[$kelasarray[$index2]]);

                for ($index1 = 0; $index1 < count($hariarray); $index1++) {
                    ?>

                    <h3><?= $hariarray[$index1] ?></h3>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Mapel</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jumlah = 0;
                            $total = 0;
                            for ($index = 0; $index < count($kelas[$kelasarray[$index2]][$hariarray[$index1]]); $index++) {
                                ?>
                                <tr class='<?= ($index%2 == 0) ? 'dark' : 'light' ?>'>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->id ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->mapel ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->nilai_akhir ?></td>
                                    <?php
                                    $jumlah++;
                                    $total = $total + $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->nilai_akhir;
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <td colspan="2">Rata rata</td>
                                <td><?php echo $total / $jumlah ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                }
            }
        }
        ?>

</div>