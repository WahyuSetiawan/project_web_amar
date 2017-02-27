        <h1>Guru SMPN 1 TARUB</h1>
        <br class="clear">
        <div class="fl_left">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Guru</th>
                        <th>No</th>
                        <th>Nama Guru</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($index = 0; $index < count($guru); $index = $index + 2) {
                        ?>
                        <tr <?php
                        if ($index / 2 % 2 == 0) {
                            echo "class='dark'";
                        } else {
                            echo "class='light'";
                        }
                        ?>>
                            <td><?php echo $index + 1 ?></td>
                            <td><a href="?r=guru/profile&id=<?= $guru[$index]->nuptk?>"><?php echo $guru[$index]->nama_guru . "<br>"; ?></a></td>
                            <td><?php echo $index + 2 ?></td>
                            <?php
                            if ($index + 1 < count($guru)) {
                                $temp = $guru[$index + 1];
                            } else {
                                $temp = '';
                            }
                            ?>
                            <td><a href="?r=guru/profile&id=<?= ($temp == '') ? '' : $temp->nuptk ?>   "><?= ($temp == '') ? '' : $temp->nama_guru ?>                                </a>                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>