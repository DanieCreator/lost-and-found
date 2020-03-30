CREATE TABLE users(
    `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `name` VARCHAR(256) NOT NULL,
    `email` VARCHAR(256) NOT NULL UNIQUE,
    `role` ENUM('Admin', 'Officer', 'Default') NOT NULL DEFAULT 'Default',
    `email_verified_at` TIMESTAMP,
    `password` VARCHAR(256) NOT NULL,
    `remember_token` VARCHAR(100),
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
    `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);