

INSERT INTO room VALUES('H10', 201, 400);

INSERT INTO room VALUES('H11', 322, 300);
INSERT INTO room VALUES('F12', 1, 600);
INSERT INTO room VALUES('F14', 392, 500);

INSERT INTO student_advisor VALUES(1001, 'Sally', 'Muller', 'Professor', 'ComputerScience', 2267833984, 27);

INSERT INTO student_advisor VALUES(1002, 'Mandy', 'Mullins', 'Dean', 'Science', 5197233334, 1);

INSERT INTO student_advisor VALUES(1003, 'Andrew', 'Victor', 'Advisor', 'Learning', 5127323637, 18);

INSERT INTO residence_hall VALUES('Schmoly Hall', '234 Meep Lane', 2234533323, 'John doe', 'H10');

INSERT INTO residence_hall VALUES('Squanch Hall', '1234 witchet st', 2262347289, 'Jerry Benson', 'H11');

INSERT INTO student_flat VALUES(20, '200 sandwich st', 2, 'F12');

INSERT INTO student (std_id, std_fname, std_lname, street, city, postal_code, DOB, gender, student_category, nationality, current_status, course_enrolled, advisor_id, place_num)  
VALUES(288001, 'Richard', 'Smith', '200SandwichSt', 'Windsor', 'N8X345', DATE '1998-03-24', 'MALE','Undergraduate' ,'Canadian', 'Placed', 'Biology', 1001, 'H10');

INSERT INTO student VALUES(288002,'Sammy', 'Hummel', '436 orchrd lane', 'Windsor', 'N8X 439', DATE '1999-02-09', 'Female','Undergraduate', 'American', 'ADHD' , 'No Comments' ,'Placed', 'Computer Science', 1002, 'H11');

INSERT INTO student VALUES(288003,'Evan', 'Mandell', 'Meep town', 'Windsor', 'N8X 345',DATE '2001-09-22', 'MALE','Masters', 'Canadian', 'None stated' , 'No Comments', 'Waiting', 'Physics', 1003, 'F12');

INSERT INTO student VALUES(288004,'Eddie', 'Mandell', 'Meep town', 'Windsor', 'N8X 345',DATE '2001-09-22', 'MALE','PHD', 'Canadian', 'None state' , 'No Comments', 'Waiting', 'Engineering', 1003, 'F14');

INSERT INTO  leases VALUES(101, 2,DATE '2022-09-01',DATE '2023-05-05', 'H10', 288001);

INSERT INTO  leases VALUES(102, 1,DATE '2022-09-01',DATE '2022-12-20', 'H11', 288002);

INSERT INTO  leases VALUES(103, 2,DATE '2022-09-01',DATE '2023-05-05', 'F12', 288003);

INSERT INTO  leases VALUES(104, 2,DATE '2022-09-01',DATE '2023-05-05', 'F14', 288004);

INSERT INTO py_invoices VALUES(501, DATE '2023-05-05', 'Credit');

INSERT INTO py_invoices VALUES(502, NULL , 'NONE');

INSERT INTO py_invoices VALUES(503, DATE '2023-05-05', 'Credit');

INSERT INTO py_invoices VALUES(504, NULL, 'NONE');

INSERT INTO  invoices VALUES( 1234, 600, 501, 103, 288003, 'F12');

INSERT INTO  invoices VALUES( 1235, 600, 502, 104, 288004, 'F14');

INSERT INTO  invoices VALUES( 1236, 400, 503, 101, 288001, 'H10');

INSERT INTO  invoices VALUES( 1237, 300, 504, 102, 288002, 'H11');

INSERT INTO hostel_staff VALUES(1, 'Jerry', 'Benson', DATE '1978-12-24', 'MALE', 'Hall Manager', 'Hostel Office',  '200 matchet lane', 'N8Z 324', 'windsor', 'F12');

INSERT INTO hostel_staff VALUES(2, 'jennifer', 'Smith', DATE '1983-1-04', 'Female', 'Cleaner', 'Hall',  '123 Lane', 'N8N 123', 'windsor', 'H10');

INSERT INTO hostel_staff VALUES(3, 'Andrew', 'Lee', DATE '1998-2-22', 'MALE', 'Cleaner', 'Hall',  'Meep town street', 'N8Y 303', 'windsor', 'H11');

INSERT INTO flat_inspections VALUES(30001, 'Jerry', DATE '2022-11-13', 'NO', 'Pots and pans were left everywhere', 'F12', 20, 1);
