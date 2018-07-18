<?php include "../connection.php"; ?>
<?php
$title = "Книга";
$a = '';
$b = '';
$c = 'class="current"';
$d = '';
?>
<?php include "../header.php"; ?>
<div class=" col-md-12 content">
    <h2>Информация о книге:</h2>

        <div class="head_block_info"> </div>
            <div class="block_info col-md-12">
                <?php
                $book = "SELECT * FROM books";
                $result = $pdo->query($book);
                ?>



                Название книги:
               <br> Список авторов:
               <br> Список библиотек:
               <br> Отзывы:

    </div>
</div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
