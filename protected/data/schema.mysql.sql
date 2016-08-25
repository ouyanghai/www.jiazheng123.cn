CREATE DATABASE IF NOT EXISTS ouyang;
USE ouyang;

CREATE TABLE ou_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL unique,
    password VARCHAR(128) NOT NULL,
    qq VARCHAR(12) NOT NULL DEFAULT 0,
    tel VARCHAR(11) NOT NULL DEFAULT 0,
    level TINYINT(1) NOT NULL DEFAULT 1,
    email VARCHAR(128) NOT NULL,
    created DATETIME NOT NULL,
    updated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00'
);
# password ouyang_blog
INSERT into ou_user(username,password,created,level,email) values('ouyang','45e2663628ae6ba4c4491f79353686c2',now(),3,'1114374850@qq.com');

CREATE TABLE ou_speak(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(128) NOT NULL,
	content TEXT,
	created DATETIME NOT NULL,
	updated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    praise INTEGER NOT NULL DEFAULT 0,
    comment INTEGER NOT NULL DEFAULT 0,
	pic VARCHAR(128) NOT NULL DEFAULT 'default.jpg'
);

CREATE TABLE ou_album(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(64) NOT NULL,
    created DATETIME NOT NULL,
    updated DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
    pic VARCHAR(128) NOT NULL DEFAULT 'default.jpg'
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE ou_albumpic(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    aid INTEGER NOT NULL,
    pic VARCHAR(128) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;