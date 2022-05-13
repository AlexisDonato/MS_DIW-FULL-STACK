DROP DATABASE IF EXISTS Login;

CREATE DATABASE Login;

USE Login;

CREATE TABLE user (
	user_email		VARCHAR(255) PRIMARY KEY,
    user_name		VARCHAR(255),
    user_lastname		VARCHAR(255),
	user_password		VARCHAR(60)
);

INSERT INTO user (user_email, user_name, user_lastname, user_password) VALUES
('admin@admin.com', 'ad', 'min', 'admin');
