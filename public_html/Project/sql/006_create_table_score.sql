CREATE TABLE IF NOT EXISTS `Scores`  #newone
(
    `id`        int auto_increment not null,
    `user_id`   int,
    `score`     int DEFAULT 0,
    `created`   timestamp default current_timestamp,
    `modified`  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)