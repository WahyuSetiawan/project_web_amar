<?php
if (Yii::$app->user->isGuest) {
    $form = yii\widgets\ActiveForm::begin(['action' => '?r=site/login'])
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

    $url = "http://localhost/Project/amar_project/smpn1tarub_advanced/frontend/web/images/" . \Yii::$app->user->identity->level_user . '/' . \Yii::$app->user->identity->username . '.jpg';
    ?>
    <ul>
        <li>
            <table>
                <tr>
                    <td><img style="width: 200px;height: 250px" src="<?php
                        if (getImage($url)) {
                            echo $url;
                        } else {
                            echo 'icon/Basic/PNG/128x128/024.png';
                        }
                        ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap :  <?php echo Yii::$app->user->identity->nama_lengkap ?></td>
                </tr>
            </table>
        </li>
        <li style="text-align: left">
            <button type="submit" name="login-button" onclick="document.location.href = 'http://localhost/Project/amar_project/smpn1tarub_advanced/frontend/web/index.php?r=site/keluar'"

                    >Logout</button>
        </li>
    </ul>
    <?php
}

function getImage($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    $is404 = curl_getinfo($ch, CURLINFO_HTTP_CODE) == 404;
    curl_close($ch);

    return !$is404;
}
?>