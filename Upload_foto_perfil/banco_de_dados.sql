create schema teste_upload;

use teste_upload;

CREATE TABLE `usuarios` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`nome` VARCHAR( 50 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`foto` VARCHAR( 100 ) NOT NULL
) ENGINE = MYISAM ;