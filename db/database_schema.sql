CREATE TABLE Robots
(
	Robot_ID			char(10)		not null	PRIMARY KEY,
	RobotName			varchar(100)	not null,
	RobotDescription	varchar(50)		not null,
	RobotCost			decimal			not	null,
	RobotImage		    varchar(250)	null
);

CREATE TABLE Subscription
(
	Subscription_Email		varchar(100)	not null PRIMARY KEY,
	Subscription_Name		varchar(100)	not null
);

CREATE TABLE User
(
	user_ID			    integer		    not null	PRIMARY KEY AUTOINCREMENT,
	user_name		    varchar(100)	not null,
	user_password	    varchar(255)	not null,
	user_password_hash	varchar(255)	not null,
	user_email		    varchar(100)	not null
);
