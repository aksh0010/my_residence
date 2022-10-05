
ALTER TABLE student ADD FOREIGN KEY(advisor_id) REFERENCES student_advisor(advisor_id);

ALTER TABLE student ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE residence_hall ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE student_flat ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE leases ADD FOREIGN KEY(std_id) REFERENCES student(std_id);

ALTER TABLE leases ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE invoices ADD FOREIGN KEY(std_id) REFERENCES student(std_id);

ALTER TABLE invoices ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE invoices ADD FOREIGN KEY(lease_num) REFERENCES leases(lease_num);

ALTER TABLE invoices ADD FOREIGN KEY(payment_id) REFERENCES py_invoices(payment_id);

ALTER TABLE flat_inspections ADD FOREIGN KEY(place_num) REFERENCES room(place_num);

ALTER TABLE flat_inspections ADD FOREIGN KEY(staff_num) REFERENCES hostel_staff(staff_num);

ALTER TABLE flat_inspections ADD FOREIGN KEY(flat_num) REFERENCES student_flat(flat_num);

ALTER TABLE hostel_staff ADD FOREIGN KEY(place_num) REFERENCES room(place_num);