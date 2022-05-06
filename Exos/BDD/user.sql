DROP DATABASE IF EXISTS Login;

CREATE DATABASE Login;

USE Login;

CREATE TABLE user (
	user_id		INT PRIMARY KEY AUTO_INCREMENT,
    user_name		VARCHAR(255),
    user_lastname		VARCHAR(255),
	user_email		VARCHAR(255),
	user_password		VARCHAR(60)
);

INSERT INTO user (user_id, user_name, user_lastname, user_email, user_password) VALUES
(1, 'ad', 'min', 'admin@admin.com', 'admin');
