DECLARE

stdid student.std_id%TYPE; -- variable for std_id
fname student.std_fname%TYPE; -- variable for student first_name
lname student.std_lname%TYPE; -- variable for student last_name




-- Declaring cursors below
CURSOR c1 IS SELECT std_id, std_fname, std_lname FROM student
WHERE place_num LIKE 'F%';
CURSOR c2 is SELECT std_id, std_fname, std_lname FROM student
WHERE place_num LIKE 'H%';



BEGIN
-- Cursor 1
OPEN c1;
DBMS_OUTPUT.PUT_LINE( '---------- Students living in Flats -----------------' );
LOOP
FETCH c1 INTO stdid, fname, lname;
EXIT WHEN c1%NOTFOUND;
DBMS_OUTPUT.PUT_LINE(RPAD(stdid, 25, ' ')  || RPAD(fname, 25, ' ') || RPAD(lname, 25, ' '));
END LOOP;
DBMS_OUTPUT.PUT_LINE('Rows fetched = ' || c1%ROWCOUNT );
CLOSE c1;



-- Cursor 2
OPEN c2;
DBMS_OUTPUT.PUT_LINE( '---------- Students living in halls -----------------' );
LOOP
FETCH c2 INTO stdid, fname, lname;
EXIT WHEN c2%NOTFOUND;
DBMS_OUTPUT.PUT_LINE(RPAD(stdid, 25, ' ') || RPAD(fname, 25, ' ') || RPAD(lname, 25, ' '));
END LOOP;

DBMS_OUTPUT.PUT_LINE('Rows fetched = ' || c2%ROWCOUNT );
CLOSE c2;
END;