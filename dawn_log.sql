CREATE TABLE `iis6` (
	`log_id` int(255) NOT NULL AUTO_INCREMENT,
	`log_date` int(255) NOT NULL,
	`server_ip` varchar(255) NOT NULL,
	`req_method` varchar(255) NOT NULL,
	`req_uri`  varchar(255) NOT NULL,
	`client_ip`  varchar(255) NOT NULL,
        `user_agent`  varchar(255) NOT NULL,
	`resp_code`  varchar(255) NOT NULL,
	PRIMARY KEY (`log_id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into mssql_seclog (event_time,user_host,argument) values ('2014-03-31 10:21:16','root','select @@version')

insert into mssql_seclog (EndTime,DatabaseUserName,TextData) values ('2014-03-31 10:21:16','sa','select * from sysobjects')


insert into mssql_seclog (EndTime,DatabaseUserName,TextData) values ('2014-03-31 10:21:16','dbo','Select IS_MEMBER("db_owner")')
insert into mssql_seclog (EndTime,DatabaseUserName,TextData) values ('2014-04-01 02:11:18','dbo','select db_name()')


insert into win_log(date,time,user,ip) values('2014-04-25','10:41','smallbusiness\guest','192.168.77.111');

insert into win_log(date,time,user,ip) values('2014-04-25','14:12','smallbusiness\\adwin','192.168.77.118');

CREATE TABLE `mssql_seclog` (
	`log_id` int(255) NOT NULL AUTO_INCREMENT,
	`EndTime`  varchar(255) NOT NULL,
	`DatabaseUserName`  varchar(255) NOT NULL,
        `TextData`  varchar(255) NOT NULL,
	PRIMARY KEY (`log_id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `win_log` (
	`log_id` int(255) NOT NULL AUTO_INCREMENT,
	`date`  varchar(255) NOT NULL,
	`time`  varchar(255) NOT NULL,
        `user`  varchar(255) NOT NULL,
	`ip`  varchar(255) NOT NULL,
	PRIMARY KEY (`log_id`)
       ) ENGINE=InnoDB DEFAULT CHARSET=utf8;







