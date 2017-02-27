<h1>Elearning SMPN 1 TARUB</h1>
<br class="clear">
<div class="fl_left">
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
            for ($index = 0; $index < count($elearning); $index = $index + 2) {
                ?>
                <tr <?php
                if ($index / 2 % 2 == 0) {
                    echo "class='dark'";
                } else {
                    echo "class='light'";
                }
                ?>>
                    <td><?php echo $index + 1 ?></td>
                    <td><a href=""></a></td>
                    <td></td>
                    <td><a href=""></a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>
