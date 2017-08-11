CREATE DATABASE bob_ent DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE bob_ent;
CREATE TABLE site_user (
	`user_id` VARCHAR(200) NOT NULL,
	`password` VARCHAR(255) NOT NULL,
	`username` VARCHAR(255),
	PRIMARY KEY(`user_id`)
);

INSERT INTO site_user (`user_id`, `password`, `username`)
VALUES('admin', PASSWORD('bobgilgil'), '관리자');


CREATE TABLE freeboard_item (
	`item_no` INT NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(255) NOT NULL,
	`hit` INT DEFAULT 0,
	`update_date` Datetime,
	`writer_id` VARCHAR(255) NOT NULL,
	`contents` TEXT,
	PRIMARY KEY(`item_no`)
);

CREATE TABLE file_data (
	`file_no` INT NOT NULL AUTO_INCREMENT,
	`file_name` VARCHAR(255) NOT NULL,
	`saved_path` VARCHAR(255) NOT NULL,
	`file_ext` VARCHAR(32) DEFAULT "",
	`upload_date` Datetime,
	`uploader_id` VARCHAR(255) NOT NULL,
	`title` VARCHAR(255),
	PRIMARY KEY(`file_no`)
);
