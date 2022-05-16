-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema testew2o
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema testew2o
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `testew2o` DEFAULT CHARACTER SET utf8 ;
USE `testew2o` ;

-- -----------------------------------------------------
-- Table `testew2o`.`empresa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testew2o`.`empresa` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `razaosocial` VARCHAR(255) NOT NULL,
  `cnpj` VARCHAR(18) NOT NULL,
  `fone` VARCHAR(18) NOT NULL,
  `email` VARCHAR(100) NULL,
  `endereco` VARCHAR(150) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `testew2o`.`colaboradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `testew2o`.`colaboradores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `fone` VARCHAR(18) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `data` DATE NULL,
  `empresa_id` INT NOT NULL,
  PRIMARY KEY (`id`, `empresa_id`),
  INDEX `fk_colaboradores_empresa_idx` (`empresa_id` ASC) VISIBLE,
  CONSTRAINT `fk_colaboradores_empresa`
    FOREIGN KEY (`empresa_id`)
    REFERENCES `testew2o`.`empresa` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
