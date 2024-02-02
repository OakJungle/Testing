create database resume;

use resume;

create table details(name varchar(40),
job_profile varchar(40),
phone bigint,
email varchar(30) primary key,
address varchar(70));

create table skills(email varchar(30),
skill varchar(20),
FOREIGN KEY (email) REFERENCES details(email) ON DELETE CASCADE);

create table languages(email varchar(30),
language varchar(20),
FOREIGN KEY (email) REFERENCES details(email) ON DELETE CASCADE);

create table achivements(email varchar(30),
achivement varchar(20),
FOREIGN KEY (email) REFERENCES details(email) ON DELETE CASCADE);

create table interests(email varchar(30),
interest varchar(20),
FOREIGN KEY (email) REFERENCES details(email) ON DELETE CASCADE);

create table educations(email varchar(30),
institue varchar(20),
pass_year int,
FOREIGN KEY (email) REFERENCES details(email) ON DELETE CASCADE);