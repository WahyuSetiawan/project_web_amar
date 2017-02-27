
<h1>Form PPDB Online SMP Negeri 1 Tarub</h1>
<br class="clear">
<div class="fl_left">
    <?php yii\widgets\ActiveForm::begin()?>
    <table width="200" border="1">
        <tbody>
            <tr>
                <td>No Pendaftaran</td>
                <td><input type="text" name="SiswaregisterasiModel[no_registerasi]"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="SiswaregisterasiModel[nama_siswa]"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="SiswaregisterasiModel[jk]">Laki Laki <input type="radio" name="SiswaregisterasiModel[jk]">Perempuan</td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="SiswaregisterasiModel[tempat_lahir]"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="SiswaregisterasiModel[tgl_lahir]"></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td><input type="text" name="SiswaregisterasiModel[alamat]"></td>
            </tr>
            <tr>
                <td>Alamat Rumah Sesuai KK</td>
                <td><input type="text" style="height: 100px; width: 300px"></td>
            </tr>
            <tr>
                <td>Nama Orang Tua / Wali</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Alamat Rumah Sesuai KK</td>
                <td><input type="text" style="height: 100px; width: 300px"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" name="SiswaregisterasiModel[foto]"></td>
            </tr>
            <tr>
                <td colspan="2"><button>Kirim</button></td>
                
            </tr>
        </tbody>
    </table>
    <?php yii\widgets\ActiveForm::end()?>
</div>