drop schema if exists `daum_db`;
create schema `daum_db`;

use `daum_db`;

drop table if exists `artist_table`;
drop table if exists `member_table`;
drop table if exists `board_table`;
drop table if exists `schedule_table`;

CREATE TABLE if not exists `member_table`(
	`id` varchar(16) not null unique,
    `password` varchar(32) not null unique,
    `type` varchar(6) not null default 'common',
	`nickname` varchar(16) not null unique,
    `date` date not null,
	constraint `pk_member_id` primary key(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE if not exists `artist_table`(
	`id` varchar(16) not null unique,
    `picture` varchar(128) not null,
    `description` varchar(128) null,
	`liked` int not null default 0,
    `date` date not null,
	constraint `fk_artist_id` foreign key(`id`) references `member_table`(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE if not exists `board_table`(
	`id` int not null auto_increment,
    `varchar` varchar(32) not null,
    `contents` varchar(256) null,
	`view` int not null default 0,
    `date` date not null,
	constraint `fk_board_id` primary key(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;

CREATE TABLE if not exists `schedule_table`(
	`id` varchar(16) not null unique,
    `reserved_date` date not null,
    `title` varchar(32) not null,
    `contents` varchar(256) null,
	`registered_date` date not null,
	constraint `pk_schedule_id` foreign key(`id`) references `member_table`(`id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;