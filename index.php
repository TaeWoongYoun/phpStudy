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
    <header>
        <?php
            if (isset($_GET['id'])){
                echo "<a href='index.php?id={$_GET['id']}'>";
            } else {
                echo "<a href='index.php'>";
            }
        ?>
            <div class="btn-group logo">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                    </svg>
                </button>
                <button type="button">Home</button>
            </div>
        </a>
        <nav>
            <ul>
                <?php
                    if (isset($_GET['id']) && ($_GET['id'] === 'admin' || $_GET['id'] === 'manager')) {
                        echo "
                            <li><a href='create.php'>도서 입력</a></li>
                            <li><a href='read.php'>도서 조회</a></li>
                            <li><a href='update.php'>도서 수정</a></li>
                            <li><a href='delete.php'>도서 삭제</a></li>
                        ";
                    } elseif(isset($_GET['id'])) {
                        echo "
                            <li><a href='introduce.php'>소개</a></li>
                            <li><a href='story.php'>이야기</a></li>
                            <li><a href='schedule.php'>쇼핑몰 일정</a></li>
                            <li><a href='check.php'>도서 조회</a></li>
                        ";
                    } else {
                        echo "";
                    }
                ?>
            </ul>
        </nav>
        <div class="btn-group form-btn">
        <?php
                if (isset($_GET['id'])) {
                    echo "
                    <a href='index.php' style='text-decoration: none; color: inherit;'>
                        <button class='logout'>로그아웃</button>
                    </a>        
                    <div class='line'></div>
                    <button class='message'>알림</button>";
                } else {
                    echo "        
                    <button class='login'>로그인</button>
                    <div class='line'></div>
                    <button class='join'>회원가입</button>";
                }
            ?>
        </div>
    </header>
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