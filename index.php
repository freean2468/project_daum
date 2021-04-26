<?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/db/db_index.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/head.php"; ?>
    <?php 
        include_once $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/db/db_create_table.php";

        // 테이블 생성
        create_table($con,'member_table');
        create_table($con,'artist_table');
        create_table($con,'board_table');
        create_table($con,'schedule_table');
        mysqli_close($con);
    ?>
    
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/header.php"; ?>
    </header>

    <main>
        <div class="common-container">
            <span>
                <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/main.php"; ?>
            </span>
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/footer.php"; ?>
    </footer>

</body>

</html>