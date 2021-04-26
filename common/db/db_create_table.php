<?php 
    // connect 가져오기
    include_once $_SERVER['DOCUMENT_ROOT']."/project_daum/common/db/db_conn.php";

    function create_table($con, $table_name)
    {
        $isExistsTable = false;

        $getTablesQuery = "show tables from daum_db;";

        $result = mysqli_query($con, $getTablesQuery) or die('error : ' .mysqli_error($con));

        while($row = mysqli_fetch_row($result)){

            // 매개로 넘어온 table_name이 결과값이 존재한다면
            if($row[0] === $table_name){
                $isExistsTable = true;
                break;
            }
        }   // end of while

        // 해당 테이블이 존재하지 않다면
        if($isExistsTable === false){

            switch($table_name){
                case 'member_table': 
                    $query = "CREATE TABLE if not exists `member_table`(
                        `id` varchar(16) not null unique,
                        `password` varchar(32) not null unique,
                        `type` varchar(6) not null default 'common',
                        `nickname` varchar(16) not null unique,
                        `date` date not null,
                        constraint `pk_member_id` primary key(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
                    break;
                case 'artist_table': 
                    $query = "CREATE TABLE if not exists `artist_table`(
                        `id` varchar(16) not null unique,
                        `picture` varchar(128) not null,
                        `description` varchar(128) null,
                        `liked` int not null default 0,
                        `date` date not null,
                        constraint `fk_artist_id` foreign key(`id`) references `member_table`(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
                    break;
                case 'board_table': 
                    $query = "CREATE TABLE if not exists `board_table`(
                        `id` int not null auto_increment,
                        `varchar` varchar(32) not null,
                        `contents` varchar(256) null,
                        `view` int not null default 0,
                        `date` date not null,
                        constraint `fk_board_id` primary key(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
                    break;
                case 'schedule_table': 
                    $query = "CREATE TABLE if not exists `schedule_table`(
                        `id` varchar(16) not null unique,
                        `reserved_date` date not null,
                        `title` varchar(32) not null,
                        `contents` varchar(256) null,
                        `registered_date` date not null,
                        constraint `pk_schedule_id` foreign key(`id`) references `member_table`(`id`)
                    ) ENGINE = InnoDB DEFAULT CHARSET = utf8;";
                    break;
                default:
                    echo "<script>alert('해당 테이블명이 없습니다.')</script>";
                    break;
            }   // end of switch

            if(mysqli_query($con, $query)){
                echo "<script>alert('{$table_name} 테이블이 생성되었습니다.')</script>";
            }else{
                echo "<script>alert('{$table_name} 테이블 생성 실패')</script>";
            }

        }   // end of if
            
    }   // end of create_table


?>