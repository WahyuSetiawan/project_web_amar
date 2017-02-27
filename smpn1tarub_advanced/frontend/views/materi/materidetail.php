
<h1>Elearning SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Materi</th>
                <th>Mapel</th>
                <th>Tahun Ajaran</th>
                <th>Deskripsi</th>
                <th>Download</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //var_dump($materiresult);
            for ($index = 0; $index < count($materiresult); $index++) {
                ?>
                <tr class='<?= ($index % 2 == 0) ? 'dark' : 'light' ?>'>
                    <td><?php echo $index + 1 ?></td>
                    <td><?= $materiresult[$index]->judul_materi ?></td>
                    <td><?= $materiresult[$index]->mapel ?></td>
                    <td><?= $materiresult[$index]->tahun_ajaran ?></td>
                    <td><?= $materiresult[$index]->deskripsi ?></td>
                    <td><button onclick="location.href = 'http://localhost/Project/amar_project/smpn1tarub_advanced/frontend/web/<?= $materiresult[$index]->locationfile ?>'">Download</button></td>
                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>

</div>