CREATE TABLE `gamerounds` (
	`gameround_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`created` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	`language` CHAR(2) NULL,
	`bot` BOOLEAN NOT NULL,
	PRIMARY KEY (`gameround_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
