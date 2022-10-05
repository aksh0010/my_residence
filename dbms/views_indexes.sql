
CREATE VIEW STD_ROOM 
AS
SELECT s.std_id, s.std_fname, r.room_num, r.monthly_rent, r.place_num, h.hall_name
from Student s , room r, residence_hall h 
where s.place_num = r.place_num AND ( r.place_num = h.place_num )
order by place_num;

-- select* from std_room;


CREATE VIEW STD_ROOM2
AS
SELECT s.std_id, s.std_fname, r.room_num, r.monthly_rent, r.place_num, f.flat_num
from Student s , room r, student_flat f 
where s.place_num = r.place_num AND ( r.place_num = f.place_num )
order by place_num;

-- select* from std_room2;


CREATE INDEX ind_1 ON student (std_id,std_fname, std_lname,student_category);
CREATE INDEX ind_2 ON hostel_staff (staff_num,staff_fname, staff_lname);