insert into shift values(1, 'A'),(2, 'B'),(3, 'C');

insert into active values(1, 'active'), (2, 'not active');

insert into cottage values('AD', 'Administration'), ('CH', 'Cedar Hill'), ('CL', 'Clothing'), ('DW', 'Dogwood'), ('FW', 'Fernwood'), ('FG', 'Forest Glen');
insert into cottage values('JN', 'Janitorial'), ('MG', 'Magnolia'), ('MP', 'Maple Point'), ('OG', 'Oak Grove'), ('SS', 'Sunshine'), ('SC', 'Swaying Cypress');
insert into cottage values('UL', 'Unlisted'), ('WW', 'Weeping Willows'), ('WP', 'Whispering Pines'), ('WN', 'Woodlea North'), ('WS', 'Woodlea South');

insert into job_titles values('ASST-DIR', 'Assistant Director'), ('ATT', 'Active Treatment Technician'), ('ATT-T', 'ATT Trainee'), ('Beautician', 'Beautician');
insert into job_titles values('CLO', 'Clothing'), ('CON', 'Contractual'), ('DCAS', 'Direct Care Alternate Supervisor'), ('DCS', 'Direct Care Supervisor');
insert into job_titles values('DCW', 'Direct Care Worker'), ('DCW_PT', 'Part-time Direct Care Worker'), ('DCW-ADV', 'Direct Care Worker Advanced'), ('DCW-PT', 'Direct Care Worker: Part-time');
insert into job_titles values('DCW-T', 'Direct Care Worker-Trainee'), ('DIR', 'Director'), ('JAN', 'Janitorial'), ('OTH', 'Other'), ('PC', 'Program Coordinator');
insert into job_titles values('PM', 'People Mover'), ('SEC', 'Secretary'), ('SS', 'Shift Supervisor');

insert into pin_titles values(1, 'Pin 1'), (2, 'Pin 2'), (3, 'Pin 3'), (4,'Pin 4'), (5, 'Pin 5'), (6, 'Pin 6'), (7, 'Pin 7');

insert into training values(1, 'ATT Training'), (2, 'Judevine'), (3, 'Other'), (4, 'Position Upgrade'), (5, 'Staff Training'), (6, 'Supervisor Training');

insert into discipline values(1, 'Attendance'), (2, 'Disciplinary'), (3, 'Dock'), (4, 'Reprimand'), (5, 'Tardiness');

insert into offense values(1, 'Unexcused Absence'), (2, 'Group 1'), (3, 'No Call/No Report'), (4, 'Patterns'), (5, 'Other'), (6, 'Inservice'), (7, 'Conference');
insert into offense values(8, 'Administrative Leave'), (9, 'Termination'), (10, 'Pre-Suspension'), (11, 'Suspension'), (12, 'Memo-before base payroll');
insert into offense values(13, 'Memo-after base payroll'), (14, 'Administrative Leave'), (15, 'Conference-before base payroll'), (16, 'Conference-after base payroll');
insert into offense values(17, 'Group 1-before base payroll'), (18, 'Group 1-after base payroll'), (19, 'Group 2-before base payroll'), (20, 'Group 2-after base payroll');
insert into offense values(21, 'Refer to Personnel'), (22, 'Group 2'), (23, 'Group 3');

insert into offense_and_discipline values(1,1,1), (2,2,1), (3,3,1), (4,4,2), (5,5,2), (6,6,2), (7,7,2), (8,8,2), (9,9,2), (10,10,2), (11,11,2);
insert into offense_and_discipline values(12,12,3), (13,13,3), (14,14,3), (15,15,3), (16,16,3), (17,17,3), (18,18,3), (19,19,3), (20,20,3), (21,21,3);
insert into offense_and_discipline values(22,2,4), (23,22,4), (24,23,4), (25,2,5), (26,22,5), (27,23,5);

insert into employee values(007, 'James', 'Bond', '04/12/08', 'PM', 'MP', 1, 1, 1);
insert into employee values(087, 'Tobias', 'Funke', '04/08/08', 'DCW-T', 'WW', 2, 2, 5);
insert into employee values(098, 'Tony', 'Stark', '12/12/17', 'ATT', 'MG', 3, 1, 6);
insert into employee values(18, 'John', 'Smith', '12/12/17', 'ATT', 'DW', 2, 1, 4);
insert into employee values(134, 'George', 'Washington', '12/12/17', 'DCW_PT', 'DW', 1, 1, 1);
insert into employee values(99, 'Jerry', 'Seinfeld', '12/18/06', 'SEC', 'WN', 3, 1, 2);
insert into employee values(555, 'Steve', 'Zissou', '02/19/10', 'DIR', 'SC', 1, 1, 2);
insert into employee values(48, 'Buddy', 'Rich', '03/1/15', 'SS', 'CH', 3, 2, 4);
insert into employee values(2, 'Marlon', 'Brando', '05/13/17', 'CLO', 'CH', 3, 2, 6);
insert into employee values(156, 'Alfred', 'Hitchcock', '11/12/15', 'ATT', 'WP', 2, 1, 3);
insert into employee values(143, 'Mike', 'Tyson', '12/03/10', 'SEC', 'WS', 3, 1, 4);



-- insert into employee_offense_and_discipline values(007, 16, 'dock pay for employee', '2008-04-02', '2008-04-03');
-- insert into employee_offense_and_discipline values(087, 26, 'group 2 for employee', '2008-12-01', '2008-12-05');
-- insert into employee_offense_and_discipline values(098, 6, 'inservice for employee', '2016-11-14', '2017-11-14');
-- insert into employee_offense_and_discipline values(007, 5, 'blah blah', '2005-03-15', '2005-03-15');

-- insert into employee_offense_and_discipline values(2, 18, 'dock pay', '2017-03-19', '2017-03-19');
-- insert into employee_offense_and_discipline values(007, 18, ' ', '2017-05-10', '2017-05-10');
insert into employee_offense_and_discipline (employee_idnum, offense_and_discipline_idnum, offense_notes, from_date_employee, to_date_employee ) values (007, 16, 'dock pay for employee', '2008-04-02', '2008-04-03');
insert into employee_offense_and_discipline (employee_idnum, offense_and_discipline_idnum, offense_notes, from_date_employee, to_date_employee ) values (087, 26, 'group 2 for employee', '2008-12-01', '2008-12-05');
insert into employee_offense_and_discipline (employee_idnum, offense_and_discipline_idnum, offense_notes, from_date_employee, to_date_employee ) values (098, 6, 'inservice for employee', '2016-11-14', '2017-11-14');




-- insert into employee_training values(007, 1, 'blah blah blah blah', '2015-06-05', '2015-06-15');
-- insert into employee_training values(098, 1, 'blah blah blah', '2017-06-05', '2017-06-20');
-- insert into employee_training values(007, 4, 'whatevs whatevs', '2017-07-21', '2017-07-22');
-- insert into employee_training values(087, 5, 'good job', '2015-06-05', '2015-06-15');

insert into employee_training (employee_idnum, training_idnum, training_notes, from_date_training, to_date_training ) values (007, 1, 'blah blah blah blah', '2015-06-05', '2015-06-15');
insert into employee_training (employee_idnum, training_idnum, training_notes, from_date_training, to_date_training ) values (007, 4, 'whatevs whatevs', '2017-07-21', '2017-07-22');
insert into employee_training (employee_idnum, training_idnum, training_notes, from_date_training, to_date_training ) values (098, 1, 'blah blah blah', '2017-06-05', '2017-06-20');