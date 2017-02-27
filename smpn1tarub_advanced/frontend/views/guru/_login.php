<?php
if (Yii::$app->user->isGuest) {
    $form = yii\widgets\ActiveForm::begin(['action' => 'http://localhost/Project/amar_project/smpn1tarub_advanced/frontend/web/index.php?r=site/login'])
    ?>
    <ul>
        <li>
            Username <input type="text" name="LoginForm[username]">
        </li>
        <li>
            Password <input type="password" name="LoginForm[password]">
        </li>
        <li style="text-align: left">
            <button type="submit" name="login-button">Login</button>
        </li>
    </ul>
    <?php
    yii\widgets\ActiveForm::end();
} else {
    ?>
    <ul>
        <li>
            <table>
                <tr>
                    <td><img style="width: 200px;height: 250px" src="images/<?= \Yii::$app->user->identity->level_user ?>/<?= \Yii::$app->user->identity->username ?>.jpg"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap :  <?php echo Yii::$app->user->identity->nama_lengkap ?></td>
                </tr>
            </table>
        </li>
        <li style="text-align: left">
            <button type="submit" name="login-button" onclick="document.location.href = 'http://localhost/Project/amar_project/smpn1tarub_advanced/frontend/web/index.php?r=site/keluar'">Logout</button>
        </li>
    </ul>
<?php } ?>