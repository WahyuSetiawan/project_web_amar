<h1>Daftar Siswa Orang Tua SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <table>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Action</th>
        </tr>

        <?php
        for ($index = 0; $index < count($siswa); $index++) {
            ?>
            <tr> 
                <td><?= $index + 1 ?></td>
                <td><?= $siswa[$index]->nis ?></td>
                <td><?= $siswa[$index]->nama_siswa ?></td>
                <td><?= $siswa[$index]->siswa_kelas[0]->kelas ?></td>
                <td><button onclick="location.href = ''">Lihat Nilai</button></td>
            </tr>
            
            <?php
        }
        ?>


    </table>

</div>