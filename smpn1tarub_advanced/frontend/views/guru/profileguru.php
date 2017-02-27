<h1>Edit Profile Guru SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
    <table>
        <tr>
            <td style="width: 100px">
                <table>
                    <tr>
                        <td style="text-align: center">
                            <img style="width: 150px;height: 200px" src="images/2/<?= \Yii::$app->request->get('id') ?>.jpg">
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center"><?= $guru->nama_guru ?></td>
                    </tr>
                </table>
            </td>
            <td>
                <?php yii\widgets\ActiveForm::begin() ?>
                <table>
                    <tbody>
                        <tr>
                            <td>Nama Guru</td>
                            <td>: 
                                <input type="hidden" name="GuruModel[nuptk]" value="<?= $guru->nuptk ?>">
                                <input  name="GuruModel[nama_guru]"  type="text" value="<?= $guru->nama_guru ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>: <input  name="GuruModel[tempat_lahir]"  type="text" value="<?= $guru->tempat_lahir ?>"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>: <input  name="GuruModel[tgl_lahir]" type="text" value="<?= $guru->tgl_lahir ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: 
                                <select name="GuruModel[jk]">
                                    <option value="Pria" <?= $guru->jk == 'Pria' ? 'selected="true"' : false ?>>Pria</option>
                                    <option value="Wanita" <?= $guru->jk == 'Wanita' ? 'selected="true"' : false ?>>Wanita</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: 
                                <select name="GuruModel[agama]">
                                    <option value="Islam" <?= $guru->agama == 'Islam' ? 'selected="true"' : false ?>>Islam</option>
                                    <option value="Kristen" <?= $guru->agama == 'Kristen' ? 'selected="true"' : false ?>>Kristen</option>
                                    <option value="Katolik" <?= $guru->agama == 'Katolik' ? 'selected="true"' : false ?>>Katolik</option>
                                    <option value="Hindu" <?= $guru->agama == 'Hindu' ? 'selected="true"' : false ?>>Hindu</option>
                                    <option value="Budha" <?= $guru->agama == 'Budha' ? 'selected="true"' : false ?>>Buddha</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>: <input  name="GuruModel[pend_akhir]"  type="text"v value="<?= $guru->pend_akhir ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: <input  name="GuruModel[alamat]"  type="text" value="<?= $guru->alamat ?>"></td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>: <input  name="GuruModel[foto]"  type="text" value="<?= $guru->foto ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: <input  name="GuruModel[email]"  type="text" value="<?= $guru->email ?>"></td>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>: <input name="GuruModel[telepon]"  type="text" value="<?= $guru->telepon ?>"></td>
                        </tr>
                        <tr>
                            <td>Personal Blog</td>
                            <td>: <input  name="GuruModel[personal_blog]"  type="text" value="<?= $guru->personal_blog ?>"></td>
                        </tr>
                        <tr>
                            <td>Sinopsis</td>
                            <td>: <input  name="GuruModel[sinopsis]"  type="text" value="<?= $guru->sinopsis ?>"></td>
                        </tr>
                        <tr style="text-align: center">
                            <td colspan="2"><button type="submit">Simpan</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php yii\widgets\ActiveForm::end() ?>
            </td>
        </tr>
    </table>
</div>