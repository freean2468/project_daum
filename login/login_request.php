<?
    include_once $_SERVER['DOCUMENT_ROOT'] ."/project_daum/common/db/db_conn.php";

    $id = input_set($_POST["id"]);
    $pass = input_set($_POST["pass"]);

    $sql="select * from member_table where id = '$id' && password ='$pass'";
    $result = mysqli_query($con, $sql);

    $num_row = mysqli_num_rows($result);

    // select문으로 가져온 값이 하나도 없다면
    if(!$num_row){
        echo("
            <script>
                alert('등록되지 않은 아이디와 비밀번호 입니다.');
                //history.go(-1);
            </script>
        ");
    }else{
        $row = mysqli_fetch_array($result);

        session_start();
        $_SESSION["user_id"] = $row["id"];
        $_SESSION["user_type"] = $row["type"];
        $_SESSION["user_nickname"] = $row["nickname"];
        $_SESSION["user_date"] = $row["date"];

        mysqli_close($con);
        unset($id);
        unset($pass);
        unset($sql);
        unset($result);
        unset($num_row);
        
        echo("
            <script>
                alert('로그인 되었습니다.');
                location.href = 'http://{$_SERVER["HTTP_HOST"]}/project_daum/index.php';
            </script>
        ");
    }
?>