CREATE TABLE IF NOT EXISTS `Credit_History`
(
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `credit_diff` int,
    `user_id` int,
    reason varchar(15) not null COMMENT 'The type of transaction that occurred',
    details varchar(240) default null COMMENT  'Any extra details to attach to the transaction',
    `created` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`),
    constraint ZeroTransferNotAllowed CHECK(`credit_diff` != 0)
)