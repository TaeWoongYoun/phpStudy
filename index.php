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

    <div class="member_modal">
        <div class="modal_head">
            <h5>회원관리 테이블</h5>
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-x-square close" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
            </svg>
            <div class="member_content">
                <table class="member_table">
                    <tr>
                        <th style="width: 50px;">ID</th>
                        <th style="width: 150px;">User_ID</th>
                        <th style="width: 200px;">Password</th>
                        <th style="width: 150px;">Name</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1234</td>
                        <td>관리자</td>
                        <td style="width: 75px;"><button>수정</button></td>
                        <td style="width: 75px;"><button>삭제</button></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1234</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1234</td>
                        <td>관리자</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>admin</td>
                        <td>1234</td>
                        <td>관리자</td>
                    </tr>
                </table>
                <!-- <?php
                    $sql = "SELECT * FROM user";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($result)){

                    }
                ?> -->
            </div>
        </div>
    </div>    

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>