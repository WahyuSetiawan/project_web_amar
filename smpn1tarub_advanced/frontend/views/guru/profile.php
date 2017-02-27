<h1>Data Guru SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <div>
        <table>
            <tbody>
                <tr>
                    <td rowspan="4" style="width: 150px;text-align: center">
                        <img style="width: 150px;height: 200px" src="images/2/<?= \Yii::$app->request->get('id') ?>.jpg">
                    </td>
                    <td style="width: 100px">Alamat</td>
                    <td>: <?= $guru->alamat ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <?= $guru->email ?></td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td>: <?= $guru->telepon ?></td>
                </tr>
                <tr>
                    <td>Personal Blog</td>
                    <td>: <?= $guru->personal_blog ?></td>
                </tr>
                <tr>
                    <td style="text-align: center"><?= $guru->nama_guru ?></td>
                    <td>Sinopsi</td>
                    <td>: <?= $guru->sinopsis ?></td>
                </tr>
                <?php
                if (isset($tampil)) {
                    if ($tampil) {
                        ?>
                        <tr>
                            <td colspan="3" style="text-align: center">
                                <button onclick="document.location.href = '?r=guru/profileguru&id=<?= \Yii::$app->request->get('id') ?>'">Edit Profile</button>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div style="float: top">
        <h4>Riwayat mengajar di SMP Negeri 1 Tarub</h4>
        <table>
            <thead>
                <tr>
                    <th>Tahun Akademik</th>
                    <th>Mata Pelajaran</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <thead>
                <?php
                for ($index = 0; $index < count($mapel); $index++) {
                    ?>
                    <tr>
                        <td></td>
                        <td><?= $mapel[$index]->kode_mapel ?></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </thead>
        </table>
    </div>
</div>