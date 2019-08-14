/*Create Ambike cement DB*/
create database ambike;
use ambike;

/*Create Area table*/
create table area(
sno integer(4) primary key,
state varchar(60) not null,
city varchar(60) not null
);

/*Insert into Area table*/
insert into area values(1,"Rajasthan","Sriganganar");
insert into area values(2,"Punjab","Bhatinda");
insert into area values(3,"Rajasthan","Bikaner");
insert into area values(4,"Rajasthan","Ajmer");
insert into area values(5,"Rajasthan","Jaipur");

/*Create Career table*/
create table career(
sno integer(5) primary key,
name varchar(100) not null,
fname varchar(100) not null,
mobile varchar(11) not null,
phone1 varchar(6) not null,
phone2 varchar(8) not null,
mail varchar(200) not null,
addr varchar(255) not null,
post varchar(100) not null,
state varchar(60) not null,
city varchar(60) not null,
salary varchar(20) not null,
job varchar(100) not null,
photo varchar(255) not null,
resume varchar(255) not null
);

/*Insert into Career table*/
/* no need */

/*Create Contact table*/
create table contact(
sno integer(4) primary key,
name varchar(100) not null,
phone varchar(11) not null,
mail varchar(255) not null,
query varchar(1000) not null
);
/*Insert into Contact table*/
insert into contact values(1,'Yatin',8861871254,'goyalyatin20@gmail.com','What is the price of cement');

/*Create Dealer table*/
create table dealer(
sno integer(4) primary key,
radio varchar(100) not null,
name varchar(100) not null,
fname varchar(100) not null,
state varchar(60) not null,
city varchar(60) not null,
space varchar(100) not null,
invest varchar(100) not null,
exp varchar(100) not null,
addr varchar(255) not null,
mobile varchar(11) not null,
phone1 varchar(6) not null,
phone2 varchar(8) not null,
mail varchar(200) not null
);
/*Insert into Dealer table*/
insert into dealer values(1,'Sub Dealer','Yatin','Ambike','Rajasthan','Sriganganagar','2000','1000','Ambuja cement','abc xyz','0154','2463816','yatin.minku@hmail.com');

/*Create Updates table*/
create table updates(
sno integer(3) primary key,
updates varchar(255) not null
);

/*Insert into Updates table*/
insert into updates values(1,'Ambike cement provides dealer offer 20% off');
insert into updates values(1,'All ambike dealers meeting to be held next week');
insert into updates values(1,'Cement organisation of India is organising meeting for all dealers and distributers on 25th this month');
insert into updates values(1,'Cement Price for this week is Rs.50 per kg');

/*Create Admin table*/
create table admin(
id integer(3) primary key,
username varchar(60) not null,
passcode varchar(60) not null
);

/*Insert into Admin table*/
insert into admin values(1,'yatin','yatin');
insert into admin values(2,'ygoyal','yatin');
insert into admin values(3,'yatin20','yatin');