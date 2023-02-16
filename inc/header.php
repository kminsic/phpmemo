<p style='text-align:right'>
    <?php
    if (isset($_SESSION) === false) {
        session_start();
    }

    if (isset($_SESSION['member_id']) === false){
    ?>
        <div class="regist-button">
            <a href="/regist.php">회원가입</a>
            <a href="/login.php">로그인</a>
        </div>
    <?php
    } else {
        ?>
        <div class="logout-button">
            <a href="/logout.php">로그아웃</a>
        </div>
        <?php
    }
    ?>
</p>