/*Write a PL/SQL code that uses nested conditional statement(s) to implement appropriate
actions printing some output*/ 
-- QUESTION 3 Phase 2
DECLARE 
    f_name student.std_fname%TYPE; -- this an anchored 
    s_id student.std_id%TYPE;
    s_gender student.gender%TYPE;
    s_cat student.student_category%TYPE;
BEGIN 
    dbms_output.put_line('If the person with selected name is in a masters and is a Male print there id');
    Select std_id, gender, student_category INTO s_id, s_gender, s_cat FROM student where std_fname = 'Richard';
    dbms_output.put_line(s_gender);
    
    if s_gender = 'MALE' THEN
        dbms_output.put_line('The student is Male');
        if s_cat = 'Masters' THEN
            dbms_output.put_line('Good the student is in ther masters');
            dbms_output.put_line('the students id is' || s_id);
        else
            dbms_output.put_line('The student is not in there masters');
        end if;
    else
       dbms_output.put_line('The student is not male ');
    end if;
END;