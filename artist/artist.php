<!DOCTYPE html>
<html lang="en">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/head.php"; ?>
    <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_daum/artist/artist.css?after=3">
    <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/project_daum/artist/artist.js" defer></script>
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/header.php"; ?>
    </header>

    <main>
        <div class="common-container">
            <div>
                <!-- 아티스트 소개란 = 소개란 + 공백 -->
                <div class="artist-introduction-box">
                    <!-- 공백 -->
                    <div class="space-introduction"></div>

                    <div class="artist-introduction">
                        <h3>세훈 (오세훈, SEHUN) 가수</h3>
                        28세 (만 27세) 양자리 개띠 <br>
                        1994년 4월 12일 <br>
                        소속 그룹: EXO, 세훈&찬열 <br>
                        소속사: SM엔터테인먼트 <br>
                        사이트: 인스타그램, V LIVE <br>
                    </div>
                </div>

                <!-- 아티스트 스케줄 = 스케줄 + 공백 -->
                <div class="artist-schedule-box">
                    <div class="artist-schedule">
                        <h3>schedule</h3>
                        (설계를 위해 임의로 지어낸 일정입니다.) <br>
                        2021-04-07 지금 헤어지는 중입니다. 출연 확정 <br>
                        2021-04-08 엑소 데뷔 9주년 <br>
                        2021-04-12 세훈 생일 <br>
                        2021-04-15 V LIVE 생방송 <br>
                        2021-04-18 더블유 5월호 촬영 <br>
                        2021-04-20 범인은 바로 너 촬영 <br>
                    </div>

                    <!-- 공백 -->
                    <div class="space-schedule"></div>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/project_daum/common/footer.php"; ?>
    </footer>

</body>

</html>