DECLARE
aname exception;
s student.street%type;
id_temp student.std_id%type;
student_name student.std_fname%type;
begin
    
    DBMS_OUTPUT.PUT_LINE('Hello');
    id_temp := 288003;
    select street ,std_fname  into s, student_name  from student where std_id = id_temp;

    if (student_name = 'Sammy') then
        DBMS_OUTPUT.PUT_LINE('Hi Sammy');
    else
        raise aname;
    end if;

    exception
      when aname then
        DBMS_OUTPUT.PUT_LINE('Student name is '|| student_name || ' instead of Sammy');

      when no_data_found then
        DBMS_OUTPUT.PUT_LINE('No such data found for value of student ID : ' || id_temp);  
end;