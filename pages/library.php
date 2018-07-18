<?php include "../connection.php"; ?>
<?php
$title = "Библиотеки";
$a = '';
$b = '';
$c = '';
$d = 'class="current"';
?>
<?php include "../header.php"; ?>
        <div class=" col-md-12 content">
            <h2>Список библиотек:</h2>
            <p>
            <table class="table">
                <tr>
                    <th>Название Библиотеки</th>
                    <th>Количество книг</th>
                </tr>

                    <?php

                    $sql = "SELECT * FROM library";
                    $result = $pdo->query($sql);
                    foreach($result as $row) {
                        echo "<tr>";

                        for ($j = 1; $j < 3; ++$j){
                            echo "<td>$row[$j]</td>";

                        }

                        echo  "</tr>";
                    }

                    ?>
            </table>
            <div class="esc"></div>
            <h2>Добавить навую библиотеку в базу данных: </h2>

            <table class="table">
                <tr>
                    <th>Название Библиотеки</th>
                </tr>
                <tr>
                    <td><input type="text" class="text"></td>
                </tr>

            </table>
            </p>
        </div>
        <!--   <div class="col-md-3 left-sidebar"></div> -->
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php include "../reconnection.php"; ?>