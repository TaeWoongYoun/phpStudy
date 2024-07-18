<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서 수정 작업</title>
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        require('./lib/header.php')
    ?>

    <?php
        $id = isset($_GET['id']) ? $_GET['id'] : null;

        if ($id) {
            $sql = "SELECT * FROM book WHERE id = $id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);
        }
    ?>
    <div class="content">
        <table>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
            </tr>
            <form action="update_process" method="post">
                <tr class="updateTR">
                    <input type="hidden" name="id" value="<?= $row['id']?>">
                    <td style='width: 50px;'><?= $row['id']?></td>
                    <td style='width: 250px;'><input type="text" name="title" value="<?=  $row['title']?>"></td>
                    <td style='width: 250px;'><input type="text" name="name" value="<?=  $row['date']?>"></td>
                    <td style='width: 250px;'><input type="text" name="date" value="<?=  $row['name']?>"></td>
                    <td><input type="submit" value="수정" class="update_submit"></td>
                </tr>
            </form>
        </table>
    </div>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>