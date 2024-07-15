<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <div class="btn-group logo">
            <button type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                </svg>
            </button>
            <button type="button">Home</button>
        </div>
        <div class="btn-group form-btn">
            <button class="login">Login</button>
            <div class="line"></div>
            <button class="join">Join</button>
        </div>
    </header>

    <div class="content">
        <div class="textBox">
            <h1>도서 쇼핑몰에 오신 것을 환영합니다.</h1>
            <h5>Book Maarket</h5>
        </div>
    </div>

    <section>
        <div class="textBox2">
            <h3>Welcome to my Book Market</h3>
            <p>현재 접속 시간 : <?= date("H:i:s") ?></p>
        </div>
    </section>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <div class="join_form">
        <h3>회원가입</h3>
        <form action="join.php" method="post">
            <p><input type="text" name="id" placeholder="아이디"> <input type="text" name="name" placeholder="이름"></p>
            <p><input type="password" name="password" placeholder="비밀번호"></p>
            <p><input type="password" placeholder="비밀번호 확인"></p>
            <p><input type="submit" value="회원가입"> <input type="reset" value="취소" id="reset"></p>
        </form>
    </div>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

