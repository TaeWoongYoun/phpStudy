<?php $conn = mysqli_connect('localhost', 'root', '', 'bk_user')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read page</title>
    <link rel="stylesheet" href="crud.css">
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
                    if (isset($_GET['id']) && ($_GET['id'] == 'admin' || $_GET['id'] == 'manager')) {
                        echo "
                            <li><a href='create.php'>도서 입력</a></li>
                            <li><a href='read.php'>도서 조회</a></li>
                            <li><a href='update.php'>도서 수정</a></li>
                            <li><a href='delete.php'>도서 삭제</a></li>
                        ";
                    } elseif (isset($_GET['id']) && !empty($_GET['id'])) {
                        $id = htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');
                        echo "
                            <li><a href='introduce.php?id={$id}'>소개</a></li>
                            <li><a href='story.php?id={$id}'>이야기</a></li>
                            <li><a href='schedule.php?id={$id}'>쇼핑몰 일정</a></li>
                            <li><a href='check.php?id={$id}'>도서 조회</a></li>
                        ";
                    } else {}
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
        <table class="calender">
            <tr>
                <th style="color: red;">일</th>
                <th>월</th>
                <th>화</th>
                <th>수</th>
                <th>목</th>
                <th>금</th>
                <th style="color: blue;">토</th>
            </tr>
            <tr>
                <td style="color: grey;">31</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td style="color: blue;">6</td>
            </tr>
            <tr>
                <td style="color: red;">7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
                <td style="color: blue;">13</td>
            </tr>
            <tr>
                <td style="color: red;">14</td>
                <td>15</td>
                <td>16</td>
                <td>17</td>
                <td>18</td>
                <td>19</td>
                <td style="color: blue;">20</td>
            </tr>
            <tr>
                <td style="color: red;">21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td style="color: blue;">27</td>
            </tr>
            <tr>
                <td style="color: red;">28</td>
                <td>29</td>
                <td>30</td>
                <td>31</td>
                <td style="color: grey;">1</td>
                <td style="color: grey;">2</td>
                <td style="color: grey;">3</td>
            </tr>
        </table>
    </div>

    <footer>
        <p class="copy">ⓒBookMarket</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>