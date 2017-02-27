
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
                                <th>Waktu</th>
                                <th>Ruang</th>
                                <th>Kelas</th>
                                <th>Mapel</th>
                                <th>Pengajar</th>
                                <th>Tahun Ajaran</th>
                                <th>semester</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($index = 0; $index < count($kelas[$kelasarray[$index2]][$hariarray[$index1]]); $index = $index + 2) {
                                ?>
                                <tr class='<?= ($index % 2 == 0) ? 'dark' : 'light' ?>'>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->waktu ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Ruang ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Kelas ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Mapel ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Pengajar ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->tahun_ajaran ?></td>
                                    <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->semester ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }
            }
        }
        ?>

</div>
