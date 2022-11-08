-- Answer 7




CREATE OR REPLACE FUNCTION student_full_name(stdID student.std_id%type)

RETURN VARCHAR2
IS

fname student.std_fname%TYPE;

lname student.std_lname%TYPE;

BEGIN

SELECT std_fname, std_lname INTO fname, lname FROM student

WHERE student.std_id = stdID;

RETURN ('Student: ' || stdID || ' - ' || UPPER(fname) || ' ' || UPPER(lname) );

END STUDENT_FULL_NAME;



-- anonymous block for function

DECLARE

stdID student.std_id%type := 288002;

BEGIN

DBMS_OUTPUT.PUT_LINE(student_full_name(stdID));

END;