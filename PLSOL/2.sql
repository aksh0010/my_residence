/*Write a PL/SQL code to declare variables of anchored type belonging to type of at least one
or two columns of your database. Your code should also read data from the keyboard and
include appropriate executable section instructions to print some values. */

--Question 2: Phase 2
DECLARE 
    f_name student.std_fname%TYPE; -- this an anchored 
    s_id student.std_id%TYPE;
    cEnrolled student.course_enrolled%TYPE;
BEGIN 
    dbms_output.put_line('Please enter an id in the student database');
    s_id := &s_id; --this will take input from user
    SELECT std_id, std_fname into s_id, f_name From student WHERE std_id = s_id;
    DBMS_OUTPUT.PUT_LINE('User name is ' || f_name || ' From selected id: ' || s_id);
END;

