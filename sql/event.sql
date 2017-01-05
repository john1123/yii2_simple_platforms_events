CREATE TABLE `event` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`p_id` INT(11) NOT NULL DEFAULT '0',
	`start_date` TIMESTAMP NULL DEFAULT NULL,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`image` VARCHAR(50) NULL DEFAULT NULL,
	`description` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id`),
	INDEX `p_id` (`p_id`),
	CONSTRAINT `event_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `platform` (`id`)
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB;

