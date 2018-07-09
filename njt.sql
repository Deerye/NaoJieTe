create database njt charset=utf8;
use njt;
create table ntj_user(uid INT PRIMARY KEY AUTO_INCREMENT,
                uname VARCHAR(16),
                upwd VARCHAR(16));
insert into ntj_user values(null,'nini','666'),
                        (null,'dingding','123'),
                        (null,'mary','555');