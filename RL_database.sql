--crating tables

create table shift(
shift_idnum integer not null primary key,
shift_letter varchar(1)
);

create table active(
active_idnum integer not null primary key,
active varchar(50)
);

create table cottage(
cottage_idnum varchar(50) not null primary key,
cottage_name varchar(50)
);

create table job_titles(
job_idnum varchar(50) not null primary key,
job_title varchar(50)
);

create table pin_titles(
pin_idnum integer not null primary key,
pin_titles varchar(50)
);

create table training(
training_idnum integer not null primary key,
training_title varchar(50)
);





create table discipline(
discipline_idnum integer not null primary key,
discipline_type varchar(50)
);

create table offense(
offense_idnum integer not null primary key,
offense_type varchar(50)
);

create table offense_and_discipline(
offense_and_discipline_idnum integer not null primary key,
offense_idnum integer,
discipline_idnum integer
-- constraint primary key (offense_idnum, discipline_idnum)
);
alter table offense_and_discipline add constraint fk1_offense_idnum foreign key fk1_offense_idnum (offense_idnum)
references offense(offense_idnum);
alter table offense_and_discipline add constraint fk2_discipline_idnum foreign key fk2_discipline_idnum (discipline_idnum)
references discipline(discipline_idnum);







create table employee(
employee_idnum integer not null primary key,
employee_fname varchar(50),
employee_lname varchar(50),
employee_datehired date,
job_idnum varchar(50),
cottage_idnum varchar(50),
shift_idnum integer,
active_idnum integer,
-- training_idnum integer,
pin_idnum integer
-- constraint primary key (job_idnum, cottage_idnum, shift_idnum, active_idnum, training_idnum, pin_idnum)
);
alter table employee add constraint fk3_job_idnum foreign key fk3_job_idnum (job_idnum)
references job_titles(job_idnum);
alter table employee add constraint fk4_cottage_idnum foreign key fk4_cottage_idnum (cottage_idnum)
references cottage(cottage_idnum);
alter table employee add constraint fk5_shift_idnum foreign key fk5_shift_idnum (shift_idnum)
references shift(shift_idnum);
alter table employee add constraint fk6_active_idnum foreign key fk6_active_idnum (active_idnum)
references active(active_idnum);
-- alter table employee add constraint fk7_training_idnum foreign key fk7_training_idnum (training_idnum)
-- references training(training_idnum);
alter table employee add constraint fk10_pin_idnum foreign key fk10_pin_idnum (pin_idnum)
references pin_titles(pin_idnum);



create table employee_offense_and_discipline(
OD_idnum integer not null auto_increment primary key,
employee_idnum integer,
offense_and_discipline_idnum integer,
offense_notes varchar (400),
from_date_employee date,
to_date_employee date
-- constraint primary key (employee_idnum, offense_and_discipline_idnum)
);
alter table employee_offense_and_discipline add constraint fk8_employee_idnum foreign key fk8_employee_idnum (employee_idnum) 
references employee(employee_idnum);
alter table employee_offense_and_discipline add constraint fk9_offense_and_discipline_idnum  foreign key fk9_offense_and_discipline_idnum  (offense_and_discipline_idnum )
references offense_and_discipline(offense_and_discipline_idnum);



create table employee_training(
T_idnum integer not null auto_increment primary key,
employee_idnum integer,
training_idnum integer,
training_notes varchar(400),
from_date_training date,
to_date_training date
-- constraint primary key (employee_idnum, training_idnum)
);
alter table employee_training add constraint fk11_employee_idnum foreign key fk11_employee_idnum (employee_idnum)
references employee(employee_idnum);
alter table employee_training add constraint fk12_training_idnum foreign key fk12_training_idnum (training_idnum)
references training(training_idnum);



create table login (
	id integer not null auto_increment primary key,
	username VARCHAR(50) not null,
	hashed_password VARCHAR(255) not null,
	permission integer
);
