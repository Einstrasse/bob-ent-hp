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