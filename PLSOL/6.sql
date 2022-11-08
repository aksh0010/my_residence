-- Answer 6

create or replace procedure advisor_detail
(advID in student_advisor.advisor_id%type,
afname out student_advisor.adv_fname%type,
alname out student_advisor.adv_lname%type)
as

begin
select adv_fname, adv_lname into afname, alname from student_advisor where advisor_id = advID;
DBMS_OUTPUT.PUT_LINE('Advisor ID = ' || advID);
end;


DECLARE
AFNAME  student_advisor.adv_fname%type;
alname  student_advisor.adv_lname%type;
-- anonymous block to call procedure
begin
advisor_detail(1001, afname, alname);
end;