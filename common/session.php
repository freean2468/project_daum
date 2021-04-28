<?php
    session_start();

    // 세션값 셋팅
    if(isset($_SESSION["user_id"])) {$user_id = $_SESSION["user_id"];
        // echo("$user_id");
    }
    else $user_id = "";
    if(isset($_SESSION["user_type"])) {$user_type =$_SESSION["user_type"];
        // echo("$user_type");
    }
    else $user_type = "";
    if(isset($_SESSION["user_nickname"])) {$user_nickname = $_SESSION["user_nickname"];
        // echo("$user_nickname");
    }
    else $user_nickname = "";
    if(isset($_SESSION["user_date"])) {$user_date = $_SESSION["user_date"];
        // echo("$user_date");
    }
    else $user_date = "";


    // NAVER LOGIN
    define('NAVER_CLIENT_ID', 'nxUB7OJ1tVz_uGQPYbEl');
    define('NAVER_CALLBACK_URL', 'http://localhost/project_daum/naver_login_callback.php');
    
    // 네이버 로그인 접근토큰 요청
    $_SESSION['naver_state'] = md5(microtime() . mt_rand());
    $naver_login_api_url = "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=".NAVER_CLIENT_ID."&redirect_uri=".urlencode(NAVER_CALLBACK_URL)."&state=".$_SESSION['naver_state'];
?>