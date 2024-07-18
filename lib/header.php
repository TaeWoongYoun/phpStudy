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
                        $id = htmlspecialchars($_GET['id'], ENT_QUOTES, 'UTF-8');
                        echo "
                            <li><a href='create.php?id={$id}'>도서 입력</a></li>
                            <li><a href='read.php?id={$id}'>도서 조회</a></li>
                            <li><a href='update.php?id={$id}'>도서 수정</a></li>
                            <li><a href='delete.php?id={$id}'>도서 삭제</a></li>
                        ";
                    } elseif (isset($_GET['id'])) {
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