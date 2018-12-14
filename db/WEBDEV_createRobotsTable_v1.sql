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
