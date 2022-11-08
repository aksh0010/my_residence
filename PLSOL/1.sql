/*1. Write a PL/SQL code that declares variables of types VARCHAR2, CHAR, NUMBER, DATE,
BOOLEAN and uses suitable executable section instructions to implement some actions and
print some output.  */

--Question 1: Phase 2
DECLARE 
    studentFirstName VARCHAR2(25);
    studentLastName VARCHAR2(25);
    studentGender CHAR(6);
    studentDOB DATE;
    studentID NUMBER;
BEGIN 
    studentLastName := 'Hummel';
    Select std_fname, gender, DOB, std_id, std_lName INTO studentFirstName , studentGender, studentDOB, studentID, studentLastName 
    FROM student where std_lname = studentLastName;
    DBMS_OUTPUT.PUT_LINE('Student FirstName: '||studentFirstName);
    DBMS_OUTPUT.PUT_LINE('Student gender: '||studentGender);
    DBMS_OUTPUT.PUT_LINE('Student DOB: '||studentDOB);
    DBMS_OUTPUT.PUT_LINE('Student ID: '|| studentID);
    DBMS_OUTPUT.PUT_LINE('Of last name: ' || studentLastName );
END;

