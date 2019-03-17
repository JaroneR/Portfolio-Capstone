/* make sure tables are empty */

DELETE FROM Dependent_T;
DELETE FROM SalariedEmployee_T;
DELETE FROM ConsultantEmployee_T;
DELETE FROM SkillTask_T;
DELETE FROM Project_T;
DELETE FROM Department_T;
DELETE FROM Employee_T;


/* Load all tables but JobTitle, JobArchive, Client, ClientProject, Vendor, Equipment and Shipment */

INSERT INTO Employee_T VALUES (123498864, 'Bill Joe', '72 Apple Cres', 'Tester', '01/23/1988', 'C#,JavaScript, SQL', 'Runs testers', 'Salaried', 323543834, 2);
INSERT INTO Employee_T VALUES (123400664, 'Wayne Doe', '35 BatCove Lane', 'Project Management', '09/25/1988', 'Java, JavaScript, SQL', 'Manages project', 'Salaried', 143565894, 1);
INSERT INTO Employee_T VALUES (100406366, 'Clara Ray', '36 Bruce Beer Drive', 'Team Leader', '01/23/1980', 'VB.net, C#,C++, SQL', 'Leader of a group', 'Salaried', 532143909, 4);
INSERT INTO Employee_T VALUES (923146001, 'Jimmy Lin', '32 Brisdale Avenue', 'Programmer', '11/11/1992', 'SQL, Java, C#, C++', 'Programs software', 'Consultant', 567231643, 0);
INSERT INTO Employee_T VALUES (911000183, 'Nathaniel Regas', '1 Kimberly Cresent', 'Programmer', '12/05/1993', 'SQL, Java, C#, C++, CCNA', 'Programs software', 'Consultant', 507122443, 0);
INSERT INTO Employee_T VALUES (911027081, 'Ivan Yaganov', '45 Sahara Trail', 'User Training', '08/09/1991', 'SQL, C#, Java', 'Trainer/helper', 'Salaried', 507141443, 1);
INSERT INTO Employee_T VALUES (267032121, 'Dennis Winnes', '23 Ball Rise', 'Project Management', '04/12/1989', 'SQL, VB.net, Java, C#', 'Manages project', 'Salaried', 223112345, 3);
INSERT INTO Employee_T VALUES (882999160, 'Simon Ginawits', '67 Treetop Road', 'GUI developer', '09/03/1993', 'Java, C#, Python', 'Develops GUI', 'Consultant', 534791003, 0);
INSERT INTO Employee_T VALUES (456801325, 'James Rond', '12 Tardis Avenue', 'Designer', '07/20/1991', 'SQL, C#, Java, C++', 'Constructs skeleton of software', 'Consultant', 534791003, 0);
INSERT INTO Employee_T VALUES (651320103, 'Barbra Gordan', '100 Gotham Lane', 'System Anaylsis', '04/16/1992', 'VB.net, SQL, CCNA', 'Anaylizes systems', 'Consultant', 534791003, 0);


INSERT INTO Department_T VALUES ('RESOURCE002', 6479008943, '4-30', 123400664);
INSERT INTO Department_T VALUES ('LABZE000', 647993-9212, '4-12', 123498864);
INSERT INTO Department_T VALUES ('LABZE231', 6472341234, '4-15', 267032121);
INSERT INTO Department_T VALUES ('RESTORATION912', 4168870823, '4-01', 911027081);
INSERT INTO Department_T VALUES ('SENZATBU0012', 4163425672, '4-20', 100406366);


INSERT INTO Project_T VALUES (123456789, 'Phone Apps', 10000.00 , 'Computer, Phone', 'Test app', '10/18/2017');
INSERT INTO Project_T VALUES (342354643, 'Computer Software', 15000.00, 'Computer, Server', 'Coder', '03/20/2018');
INSERT INTO Project_T VALUES (232143564, 'Graphical Engine', 100000.00, 'Computer, Server', 'Visual designer', '11/25/2019');
INSERT INTO Project_T VALUES (656432343, 'Security Software', 20000.00, 'Computer, Software', 'Software analysis', '07/02/2018');
INSERT INTO Project_T VALUES (700085734, 'Cloud System', 25000.00, 'Computer, Server, Database', 'Leads Team', '08/30/2018');

INSERT INTO SkillTask_T VALUES (123456789, 123498864, 90);
INSERT INTO SkillTask_T VALUES (342354643, 123400664, 60);
INSERT INTO SkillTask_T VALUES (232143564, 100406366, 50);
INSERT INTO SkillTask_T VALUES (656432343, 923146001, 70);
INSERT INTO SkillTask_T VALUES (700085734, 911000183, 65);


INSERT INTO ConsultantEmployee_T VALUES (923146001, 23.50, '03/20/2018');
INSERT INTO ConsultantEmployee_T VALUES (911000183, 23.50, '03/20/2018');
INSERT INTO ConsultantEmployee_T VALUES (882999160, 24.75, '11/25/2019');
INSERT INTO ConsultantEmployee_T VALUES (456801325, 25.00, '11/25/2019');
INSERT INTO ConsultantEmployee_T VALUES (651320103, 24.25, '07/02/2018');


INSERT INTO SalariedEmployee_T VALUES (123400664, 60000.00, 'Dental, Eyesight', 15000.00);
INSERT INTO SalariedEmployee_T VALUES (123498864, 34000.00, 'Dental', 4000.00);
INSERT INTO SalariedEmployee_T VALUES (911027081, 36000.00, 'Eyesight', 6000.00);
INSERT INTO SalariedEmployee_T VALUES (267032121, 60000.00, 'Dental', 15000.00);
INSERT INTO SalariedEmployee_T VALUES (100406366, 50000.00, 'Dental, Eyesight', 10000.00);


INSERT INTO Dependent_T VALUES (093445829, 'Bob Joe', '72 Apple Cres', '04/20/2000', 'Son', 'Dental');
INSERT INTO Dependent_T VALUES (834827070, 'Sam Doe', '35 BatCove Lane', '06/11/1999' ,'Daughter', 'Dental, Eyesight');
INSERT INTO Dependent_T VALUES (989003424, 'Jim Ray', '36 Bruce Beer Drive', '01/19/2000', 'Son', 'Dental, Eyesight');
INSERT INTO Dependent_T VALUES (879887424, 'Kathy Yaganov', '45 Sahara Trail', '11/14/2001','Daughter', 'Eyesight');
INSERT INTO Dependent_T VALUES (097977343, 'Jeorge Winnes', '23 Ball Rise', '08/20/1999', 'Son', 'Dental');

/* Save all changes to table rows */
COMMIT;

/* Run basic queries over every table to verify data */

SELECT * FROM Dependent_T;
SELECT * FROM SalariedEmployee_T;
SELECT * FROM ConsultantEmployee_T;
SELECT * FROM SkillTask_T;
SELECT * FROM Project_T;
SELECT * FROM Department_T;
SELECT * FROM Employee_T;