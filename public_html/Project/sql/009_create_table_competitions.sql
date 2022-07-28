CREATE TABLE IF NOT EXISTS `Competitions`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` varchar(240) NOT NULL,
    `duration` INT default 3,
    `expires` TIMESTAMP DEFAULT (DATE_ADD(CURRENT_TIMESTAMP, INTERVAL duration DAY)),
    `current_reward` INT  DEFAULT (`starting_reward`),
    `starting_reward` INT DEFAULT 1,
    `join_fee` INT DEFAULT 1,
    `current_participants` INT DEFAULT 0,
    `min_participants` INT DEFAULT 3,
    `paid_out` TINYINT(1) DEFAULT 0,
    `did_calc` TINYINT(1) DEFAULT 0,
    `min_score` INT DEFAULT 1,
    `first_place_per` INT DEFAULT 50,
    `second_place_per` INT DEFAULT 30,
    `third_place_per` INT DEFAULT 20,
    `cost_to_create` INT DEFAULT 1,
    `created_by` INT,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY(`created_by`) REFERENCES `Users`(`id`),
    check (`first_place_per` + `second_place_per` + `third_place_per` = 100),
    check (`min_score` >= 1),
    check (`starting_reward` >= 1),
    check (`current_reward` >= `starting_reward`),
    check (`min_participants` >= 3),
    check (`current_participants` >= 0),
    check(`join_fee` >= 1)
)