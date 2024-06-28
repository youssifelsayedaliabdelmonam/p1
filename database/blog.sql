create schema if not exists blog;

use blog;



create table if not exists users(
id int primary key auto_increment, 
name varchar(255) not null,
email varchar(255) not null unique,
role enum("user","admin") default "user",
password varchar(255) not null ,
phone varchar(15) unique, 
created_at timestamp default current_timestamp, 
updated_at timestamp default current_timestamp),
photo varchar(255)
;

create table if not exists posts(
id int primary key auto_increment,
title varchar(255) not null,
content text ,
image varchar(255),
user_id int ,
created_at timestamp default current_timestamp, 
updated_at timestamp default current_timestamp,
constraint fk_user_id_users
foreign key (user_id) 
references users(id) 
on update cascade
on delete cascade);

create table if not exists msg(
id int primary key auto_increment,
content text ,
user_id int ,
created_at timestamp default current_timestamp, 
updated_at timestamp default current_timestamp,
constraint fk_user_id_usersmsg
foreign key (user_id) 
references users(id) 
on update cascade
on delete cascade);


create table if not exists comments(
id int primary key auto_increment,
comment varchar(255) not null ,
created_at timestamp default current_timestamp, 
updated_at timestamp default current_timestamp,
post_id int,
user_id int ,

constraint fk_post_id_posts
foreign key (post_id)
references posts(id)
on update cascade
on delete cascade,

constraint fk_user_id_comment_users
foreign key (user_id) 
references users(id) 
on update cascade
on delete cascade);

create table if not exists likes(
id int primary key auto_increment,
likes  varchar(255) default "like" ,
post_id int,
user_id int ,

constraint fk_post_id_posts_l
foreign key (post_id)
references posts(id)
on update cascade
on delete cascade,

constraint fk_user_id_like_users
foreign key (user_id) 
references users(id) 
on update cascade
on delete cascade);
drop table likes ;


-- alter table users 
-- add column role enum("user","admin") default "user" after email;

-- alter table users
-- drop column role ;

--  alter table posts 
--  add column updated_at timestamp default current_timestamp;
 
-- 	alter table users
-- add column photo varchar(255) ;

-- alter table posts
-- drop column likes;


--  alter table users
-- add column password varchar(255) not null after role;

 

