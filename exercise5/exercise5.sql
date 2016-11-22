CREATE DATABASE `dbtuts` ;
CREATE TABLE `dbtuts`.`users` (
`user_id` INT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`first_name` VARCHAR( 25 ) NOT NULL ,
`last_name` VARCHAR( 25 ) NOT NULL ,
`home_add` VARCHAR( 150 ) NOT NULL ,
`cell_num` INT( 11 ) NOT NULL ,
`gender` VARCHAR( 8 ) NOT NULL
) ENGINE = InnoDB;