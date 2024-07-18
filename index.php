<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Market</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <?php 
        require('./lib/header.php')
    ?>
    
    <div class="content">
        <div class="textBox">
            <h1>도서 쇼핑몰에 오신 것을 환영합니다.</h1>
            <h5>Book Market</h5>
        </div>
    </div>

    <section>
        <div class="textBox2">
            <h3><?php
                if (isset($_GET['id'])) {
                    $id = mysqli_real_escape_string($conn, $_GET['id']);
                    $sql = "SELECT * FROM user WHERE id = '$id'";
                    $result = mysqli_query($conn, $sql);
                    if ($row = mysqli_fetch_assoc($result)) {
                        echo "{$row['name']}님 환영합니다.";
                    }
                } else {
                    echo "Welcome to BookMarket page";
                }
            ?></h3>
            <p>현재 접속 시간 : <?= date("H:i:s") ?></p>
        </div>
    </section>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <div class="login_form">
        <h3>로그인</h3>
        <form action="login.php" method="post">
            <p><input type="text" name="userid" id="userid" placeholder="아이디"></p>
            <p><input type="password" name="userpw" id="userpw" placeholder="비밀번호"></p>
            <p><input type="submit" value="로그인" class="login_submit"><input type="reset" value="취소" class="login_reset"></p>
        </form>
    </div>

    <div class="join_form">
        <h3>회원가입</h3>
        <form action="join.php" method="post">
            <p><input type="text" name="id" placeholder="아이디" id="input_id"> <button class="id_check">중복 확인</button></p>
            <p><input type="text" name="name" placeholder="이름" class="input_name"></p>
            <p><input type="password" name="password" placeholder="비밀번호" class="input_pw"></p>
            <p><input type="password" placeholder="비밀번호 확인" class="input_pw_ck"></p>
            <p><input type="submit" value="회원가입" class="join_submit"> <input type="reset" value="취소" id="reset"></p>
        </form>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>