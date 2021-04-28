<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/head.php"; ?>
    
    <!-- <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_daum/schedule/login.css?after=1"> -->
    
    <script defer src="./js/login.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/header.php"; ?>
    </header>

    <main>
        <div class="common-container">
                <table style="margin: 0 auto;">
                    <form action="./login_request.php" method="post" name= "login_form">
                    <tr>
                        <td>
                            <input type="text" name="id" placeholder="아이디 입력">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="pass" placeholder="비밀번호 입력">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="로그인" onclick='check_login()'>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/footer.php"; ?>
    </footer>

</body>

</html>