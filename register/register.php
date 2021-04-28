<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/head.php"; ?>
    <!-- <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_daum/schedule/register.css?after=1"> -->
    <script defer src="./js/register.js"></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/header.php"; ?>
    </header>

    <main>
        
        <table style="margin: 0 auto;">
            <form name="register_form" method="post" action="./register_insert.php">
                <tr>
                    <td>
                        <input type="text" name="id" placeholder="아이디 입력">
                        <input type="button" value="ID중복확인" onclick="check_id()">
                        <!-- <form name="check_id_form" method="post" action="./exists_id.php"> -->
                            <!-- <input type="button" id="isExistsId" name="isExistsId" value="ID 중복" onclick="is_duplication_Id()"> -->
                            <!-- <input type="hidden" name="isExistsId" value="<script>document.register_form.id.value;</script>"> -->
                            <!-- <input type="submit" value="ID 중복확인"> -->
                        <!-- </form> -->
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass" placeholder="비밀번호 입력">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="pass_confirm" placeholder="비밀번호 확인">
                    </td>
                </tr>
                <tr>
                    <td>
                        Artist?<input type="radio" name="artist_or_fan" value="artist">
                        <span> | </span>
                        fan?<input type="radio" name="artist_or_fan" value="fan">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="nickname" placeholder="닉네임">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="button" value="회원가입" onclick='check_input()'>
                        <input type="button" value="초기화" onclick='reset_form()'>
                    </td>
                </tr>
            </table>
        </form>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/footer.php"; ?>
    </footer>

</body>

</html>