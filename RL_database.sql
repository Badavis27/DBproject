--crating tables

create table shift(
shift_idnum integer not null primary key,
shift_letter varchar(1)
);

create table active(
active_idnum integer not null primary key,
active varchar(3)
);

create table cottage(
cottage_idnum integer not null primary key,
cottage_name varchar(20)
);

create table job_titles(
job_idnum int auto_increment not null primary key,
job_title varchar(50)
);

create table training(
training_idnum int integer not null primary key,
training_title varchar(50),
training_notes varchar(400),
from_date_training date,
to_date_training date
)


--offense and discipline tables

create table discipline(
discipline_idnum integer not null primary key,
discipline_type varchar(20)
);

create table offense(
offense_idnum integer not null primary key,
offense_type varchar(20)
);

create table offense_and_discipline(
offense_idnum integer,
discipline_idnum integer,
constraint primary key (offense_idnum, discipline_idnum)
);
alter table offense_and_discipline add constraint fk1_offense_idnum foreign key fk1_offense_idnum (offense_idnum)
references offense(offense_idnum);
alter table offense_and_discipline add constraint fk2_discipline_idnum foreign key fk2_discipline_idnum (discipline_idnum)
references discipline(discipline_idnum);



--employee tables

create table employee(
employee_idnum integer not null primary key,
employee_fname varchar(30),
employee_lname varchar(30),
employee_datehired date,
job_idnum integer,
cottage_idnum integer,
shift_idnum integer,
active_idnum integer,
training_idnum integer,
constraint primary key (job_idnum, cottage_idnum, shift_idnum, active_idnum, training_idnum)
);
alter table employee add constraint fk3_job_idnum foreign key fk3_job_idnum (job_idnum)
references job_titles(job_idnum);
alter table employee add constraint fk4_cottage_idnum foreign key fk4_cottage_idnum (cottage_idnum)
references cottage(cottage_idnum);
alter table employee add constraint fk5_shift_idnum foreign key fk5_shift_idnum (shift_idnum)
references shift(shift_idnum);
alter table employee add constraint fk6_active_idnum foreign key fk6_active_idnum (active_idnum)
references active(active_idnum);
alter table employee add constraint fk7_training_idnum foreign key fk7_training_idnum (training_idnum)
references table training(training_idnum);



create table employee_offense(
employee_idnum integer,
offense_idnum integer,
offense_notes varchar (400),
from_date_employee_offense date,
to_date_employee_offense date
constraint primary key (employee_idnum, offense_idnum)
);
alter table employee_offense add constraint fk8_employee_idnum foreign key fk3_employee_idnum (employee_idnum) 
references employee(employee_idnum);
alter table employee_offense add constraint fk9_offense_idnum foreign key fk4_offense_idnum (offense_idnum)
references offense(offense_idnum);

