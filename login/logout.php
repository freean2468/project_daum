<?
    session_start();
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_type"]);
    unset($_SESSION["user_nickname"]);
    unset($_SESSION["user_date"]);

    echo("
        <script>
            alert('로그아웃 되었습니다.');
            location.href = 'http://{$_SERVER['HTTP_HOST']}/project_daum/index.php';
        </script>
    ");

?>