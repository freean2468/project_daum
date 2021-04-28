<?php
    include_once $_SERVER['DOCUMENT_ROOT']."/project_daum/common/db/db_conn.php";

    $id = input_set($_POST["id"]);
    $pass = input_set($_POST["pass"]);
    $nickname = input_set($_POST["nickname"]);
    $artist_or_fan = input_set($_POST["artist_or_fan"]);

    // 넘어온 값 확인
    // echo "<script>alert(`${id} ${pass} ${nickname} ${artist_or_fan}`);</script>";

    $regist_day = date("Y-m-d(H:i)");

    $sql = "insert into member_table(id, password, type, nickname, date) ";
    $sql .= "values('$id', '$pass', '$artist_or_fan', '$nickname', '$regist_day')";

    $insert_result = mysqli_query($con,$sql);
    mysqli_close($con);

    if($insert_result === false){
        alert_back("삽입이 잘못 되었습니다. 다시 입력 요청");
    }else{
        echo "
              <script>
                    alert('회원가입 완료');
                   location.href = 'http://{$_SERVER['HTTP_HOST']}/project_daum/index.php';
              </script>
          ";
          unset($id);
          unset($pass);
          unset($nickname);
          unset($artist_or_fan);

    }


?>