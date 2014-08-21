CREATE TABLE `session_handler_table` (
      `id` varchar(255) NOT NULL,
      `data` mediumtext NOT NULL,
      `timestamp` int(255) NOT NULL,
      PRIMARY KEY (`id`),
      UNIQUE KEY `id` (`id`,`timestamp`),
      KEY `timestamp` (`timestamp`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `sys_user` (
      `id` bigint(20) NOT NULL AUTO_INCREMENT,
      `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `type` tinyint(1) DEFAULT '0' COMMENT '用户类型，0普通用户，1管理员',
      `lastlogindt` datetime DEFAULT NULL COMMENT '最后登入时间',
      `lastloginip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '最后登入IP',
       PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `back_login` (
      `id` bigint(20) NOT NULL AUTO_INCREMENT,
      `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
      `lastlogin_times` varchar(255) NOT NULL,
      `lastlogin_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '最后登入IP',
       PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


insert into back_login(username,lastlogin_times,lastlogin_ip) values ('hehe','1400063367','10.8.22.1');



