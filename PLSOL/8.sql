-- This is package specification


CREATE OR REPLACE PACKAGE my_residence 

AS 

    procedure advisor_detail (advID in student_advisor.advisor_id%type,afname out student_advisor.adv_fname%type,alname out student_advisor.adv_lname%type);

END my_residence;

-- this is package body

CREATE OR REPLACE PACKAGE body my_residence 

AS 

    procedure advisor_detail (advID in student_advisor.advisor_id%type,afname out student_advisor.adv_fname%type,alname out student_advisor.adv_lname%type)
        as

        begin
        select adv_fname, adv_lname into afname, alname from student_advisor where advisor_id = advID;
        DBMS_OUTPUT.PUT_LINE('Advisor ID = ' || advID);
        end advisor_detail;

END my_residence;

-- Code To run this
DECLARE
AFNAME  student_advisor.adv_fname%type;
alname  student_advisor.adv_lname%type;
begin
  
   my_residence.advisor_detail(1001, afname, alname);


end;