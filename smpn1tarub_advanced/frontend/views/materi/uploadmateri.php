<h1>Materi Pelajaran</h1>
<br class="clear">
<div>
    <form method="get" id="search" action="">
        <input type="hidden" name="r" value="materi/uploadmateri">
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
</div>
<div class="fl_left">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Materi</th>
                <th>Tahun Ajaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($materi as $value) {
                ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $value->judul_materi ?></td>
                    <td><?= $value->tahun_ajaran ?></td>
                    <td><a href="?r=materi/changeprivate&id=<?= $value->id_materi ?>">private</a> | <a href="?r=materi/changepublic&id=<?= $value->id_materi ?>">Publish</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php $form = yii\widgets\ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <table>
        <tr>
            <td colspan="2"> <h1>Unggah Materi Pelajaran</h1></td>
        </tr>
        <tr>
            <td>Mata Pelajaran </td>
            <td>
                <select name="MateriModel[mapel]">
                    <?php foreach ($mapel as $value) { ?>
                        <option value="<?= $value->kode_mapel ?>"><?= $value->mapel ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Judul Materi</td>
            <td><input type="text" name="MateriModel[judul_materi]"></input></td>
        </tr>
        <tr>
            <td>deskripsi</td>
            <td><input type="text" name="MateriModel[deskripsi]"></input></td>
        </tr>

        <tr>
            <td>file</td>
            <td><?= $form->field($model, 'file')->fileInput() ?>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="radio" value="Private" id="private" name="MateriModel[status]"> Private
                <input type="radio" value="Publish" id="Publish" name="MateriModel[status]"> Publish
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Upload"></td>
        </tr>
    </table>
    <?php yii\widgets\ActiveForm::end() ?>
</div>