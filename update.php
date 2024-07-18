<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>도서 수정</title>
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php 
        require('./lib/header.php')
    ?>
    
    <div class="content">
        <table>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Date</th>
            </tr>
            <?php
                $sql = "SELECT * FROM book";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)){
                    echo "
                    <tr>
                        <td style='width: 50px;'>{$row['id']}</td>
                        <td style='width: 250px;'>{$row['title']}</td>
                        <td style='width: 250px;'>{$row['name']}</td>
                        <td style='width: 250px;'>{$row['date']}</td>
                        <td><a href='update_form.php?id={$row['id']}'><input type='submit' value='수정' class='update_submit'></a></td>
                    </tr>";
                }
            ?>
        </table>
    </div>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>