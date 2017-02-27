
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
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Mapel</th>
                                        <th>Ruang</th>
                                        <th>Kelas</th>
                                        <th>tahun_ajaran</th>
                                        <th>semester</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    for ($index = 0; $index < count($kelas[$kelasarray[$index2]][$hariarray[$index1]]); $index = $index + 2) {
                                        ?>
                                        <tr class='dark'>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->No ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Tanggal ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Jam ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Mapel ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Ruang ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->Kelas ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->tahun_ajaran ?></td>
                                            <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index]->semester ?></td>
                                        </tr>
                                        <?php if (isset($kelas[$kelasarray[$index1]][$index + 2])) {
                                            ?>
                                            <tr class='light'>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->No ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->Tanggal ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->Jam ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->Mapel ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->Ruang ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->Kelas ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->tahun_ajaran ?></td>
                                                <td><?= $kelas[$kelasarray[$index2]][$hariarray[$index1]][$index + 1]->semester ?></td>
                                            </tr>
                                            <?php
                                        }
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

