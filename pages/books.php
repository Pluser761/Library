<?php include "../connection.php"; ?>
<?php
$title = "Книги";
$a = '';
$b = '';
$c = 'class="current"';
$d = '';
?>
<?php include "../header.php"; ?>
        <div class=" col-md-12 content">
            <h2>Список книг:</h2>
            <p>
            <table class="table">
                <tr>
                    <th>Название Книг</th>
                    <th>Количество страниц</th>
                    <th>Год выпуска</th>
                    <th>Издательство</th>
                </tr>

                <?php
                    $sql = "SELECT * FROM books";
                    $result = $pdo->query($sql);
                foreach($result as $row) {
                    echo "<tr>";

                        for ($j = 1; $j < 5; ++$j){
                            echo "<td>$row[$j]</td>";

                        }

                    echo  "</tr>";
                }

                ?>
<?php
//                    $rows = mysqli_num_rows($result);
//                for($i = 1; $i <= $rows; ++$i)
//                {
//                    $row = mysqli_fetch_row($result);
//                    $page = $i*10;
//
//                }

              ?>
            </table>
            </p>
            <div class="esc"></div>
            <h2>Добавить навую книгу в базу данных: </h2>

                <table class="table">
                    <tr>
                        <th>Название Книг</th>
                        <th>Количество страниц</th>
                        <th>Год выпуска</th>
                        <th>Издательство</th>
                    </tr>
                    <tr>
                        <td><input type="text" class="text"></td>
                        <td><input type="number" class="text"></td>
                        <td><input type="number" class="text"></td>
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