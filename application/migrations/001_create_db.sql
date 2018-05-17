CREATE TABLE `users` (
	`id`	INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
	`mail`	TEXT NOT NULL UNIQUE,
	`pass`	TEXT NOT NULL
);

CREATE TABLE `rights` (
	`user_id`	INTEGER NOT NULL UNIQUE,
	`level`	INTEGER,
	PRIMARY KEY(`user_id`)
);

INSERT INTO `users`(`mail`,`pass`) VALUES ('admin@bbm.com','admin');
INSERT INTO `rights`(`user_id`,`level`) VALUES (1,2);

INSERT INTO `users`(`mail`,`pass`) VALUES ('j@w.com','ptcmba51');
INSERT INTO `rights`(`user_id`,`level`) VALUES (2,1);