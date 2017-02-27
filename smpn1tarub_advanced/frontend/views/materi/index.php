<h1>Elearning SMPN 1 TARUB</h1>
<br class="clear">

<div class="fl_left">
    <?php if (!Yii::$app->user->isGuest) { ?>
        <button onclick="location.href = '?r=materi/uploadmateri'">Tambah Materi</button>
    <?php } ?>
    <form method="get" id="search" action="">
        <input type="hidden" name="r" value="materi">
        Semester
        <select name="semester" >
            <?php foreach ($semester as $mate) { ?>
                <option value="<?= $mate->semester ?>" <?= ($mate->semester == $semestersekarang) ? "selected='on'" : '' ?>><?= $mate->semester ?></option>
            <?php } ?>
        </select>
        Tahun
        <select name="tahun_ajaran" onchange="document.getElementById('search').submit()">
            <?php foreach ($tahunajaran as $mate) { ?>
                <option value="<?= $mate->tahun_ajaran ?>" <?= ($mate->tahun_ajaran == $tahunajaransekarang) ? "selected='on'" : '' ?>><?= $mate->tahun_ajaran ?></option>
            <?php } ?>
        </select>
    </form>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Mata Pelajaran</th>
                <th>Jumlah Materi</th>
                <th>Guru Pengampu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($index = 0; $index < count($materiresult); $index++) {
                ?>
                <tr class='<?= ($index % 2 == 0) ? 'dark' : 'light' ?>'>
                    <td><?php echo $index + 1 ?></td>
                    <td><a href="?r=materi/materidetail&semester=<?= $semestersekarang ?>&tahun_ajaran=<?= $tahunajaransekarang ?>"><?= $materiresult[$index]['mapel'] ?></a></td>
                    <td><?= $materiresult[$index]['jumlah'] ?></td>
                    <td><a href="?r=materi/materidetail&semester=<?= $semestersekarang ?>&tahun_ajaran=<?= $tahunajaransekarang ?>"><?= $materiresult[$index]['nama_guru'] ?></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>