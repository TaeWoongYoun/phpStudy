<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>소개</title>
    <link rel="stylesheet" href="crud.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <?php 
        require('./lib/header.php')
    ?>
    
    <div class="content">
        <h4 style="text-align: center;">우리 BookMarket은 최고의 도서 품질을 자랑하며 <br>최신 도서를 모두 보유하고 있습니다.</h4>
    </div>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>