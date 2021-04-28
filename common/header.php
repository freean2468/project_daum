<!-- 세션값 -->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/session.php"; ?>

<div class="common-container">
    <span>
        <a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_daum/index.php">
            우리의 다음 아티스트
        </a>
    </span>
    <span>
        검색창
    </span>
    <span>

        <?php 
            if(!$user_id){
        ?>
            <a href="http://<?=$_SERVER['HTTP_HOST'];?>/project_daum/login/login.php">로그인</a>
            <a href="http://<?=$_SERVER['HTTP_HOST'];?>/project_daum/register/register.php">회원 가입</a>
        <?php 
            } else{
        ?>
            <a href="http://<?=$_SERVER['HTTP_HOST'];?>/project_daum/login/logout.php">로그아웃</a>
            <!-- <a href="http://<?=$_SERVER['HTTP_HOST'];?>/project_daum/register/user_modify_form.php">정보 수정</a> -->
            <!-- <a href="http://<?=$_SERVER['HTTP_HOST'];?>/project_daum/register/register_delete">회원 탈퇴</a> -->
            <a href="#">정보 수정</a>
            <a href="#">회원 탈퇴</a>
        <?
            }
        ?>

    </span>
</div>