/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  Asus
 * Created: Apr 16, 2022
 */

create database bookmarks;
use bookmarks;
create table user (
username varchar(16) not null primary key,
passwd char(40) not null,
email varchar(100) not null
);
create table bookmark (
username varchar(16) not null,
bm_URL varchar(255) not null,
index (username),
index (bm_URL),
primary key(username, bm_URL)
);
grant select, insert, update, delete
on bookmarks.*
to bm_user@localhost identified by 'password';