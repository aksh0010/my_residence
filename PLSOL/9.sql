-- Answer 9

create or replace trigger payment_due_exceed
before insert on invoices
for each row
begin
    if :new.payment_due >= 1000 then
        raise_application_error (-20999,'Payment due should be less than 1000 CAD');
    end if;
end;


INSERT INTO  invoices VALUES( 1300, 1200, 555, 111, 101010, 'H11');

INSERT INTO  invoices VALUES( 1234, 1600, 501, 103, 288003, 'F12');