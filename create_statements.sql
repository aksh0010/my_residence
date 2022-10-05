DROP TABLE student;
DROP TABLE student_advisor;
DROP TABLE residence_hall ;
DROP TABLE student_flat;
DROP TABLE room;
DROP TABLE leases;
DROP TABLE invoices ;
DROP TABLE py_invoices;
DROP TABLE flat_inspections;
DROP TABLE hostel_staff;



CREATE TABLE student ( 
    std_id NUMBER(9) CHECK (std_id > 0) PRIMARY KEY, 
    std_fname VARCHAR(30) NOT NULL, 
    std_lname VARCHAR(30) NOT NULL, 
    street VARCHAR(40) NOT NULL, 
    city VARCHAR(20) NOT NULL, 
    postal_code VARCHAR(7) NOT NULL, 
    DOB DATE NOT NULL, 
    gender VARCHAR(6) NOT NULL, 
    student_category varchar(15) NOT NULL, 
    nationality VARCHAR(20) NOT NULL, 
    special_needs VARCHAR(40) DEFAULT 'None stated', 
    comments VARCHAR(100) DEFAULT 'No additional comments', 
    current_status VARCHAR(10) NOT NULL, 
    course_enrolled VARCHAR(40) NOT NULL, 
    advisor_id NUMBER(9) CHECK (advisor_id > 0) NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL 
);

CREATE TABLE student_advisor ( 
    advisor_id NUMBER(9) CHECK (advisor_id > 0) PRIMARY KEY, 
    adv_fname VARCHAR(30) NOT NULL, 
    adv_lname VARCHAR(30) NOT NULL, 
    position VARCHAR(20) NOT NULL, 
    dept_name VARCHAR(20) NOT NULL, 
    tele_num NUMBER(10) CHECK (tele_num > 999999999) NOT NULL, 
    room_num NUMBER(3) CHECK (room_num > 0) NOT NULL 
);

CREATE TABLE residence_hall ( 
    hall_name VARCHAR(20) PRIMARY KEY, 
    hall_addr VARCHAR(40) NOT NULL, 
    hall_tele_num NUMBER(10) CHECK (hall_tele_num > 999999999) NOT NULL, 
    hallmanager VARCHAR(40) NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL 
);

CREATE TABLE student_flat ( 
    flat_num NUMBER(3) CHECK (flat_num > 0) PRIMARY KEY, 
    flat_addr VARCHAR(40) NOT NULL, 
    single_beds_available NUMBER(3) CHECK (single_beds_available > 0) NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL 
);

CREATE TABLE room ( 
    place_num NUMBER(5) CHECK (place_num > 0) PRIMARY KEY, 
    room_num NUMBER(3) CHECK (room_num > 0) NOT NULL, 
    monthly_rent NUMBER(6, 2) CHECK (monthly_rent > 0) NOT NULL 
);

CREATE TABLE leases ( 
    lease_num NUMBER(9) CHECK (lease_num > 0) PRIMARY KEY, 
    rental_term NUMBER CHECK (rental_term > 0 AND rental_term < 4) NOT NULL, 
    move_in DATE NOT NULL, 
    move_out DATE NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL, 
    std_id NUMBER(9) CHECK (std_id > 0) NOT NULL 
);

CREATE TABLE invoices ( 
    invoice_num NUMBER(9) CHECK (invoice_num > 0) PRIMARY KEY NOT NULL, 
    payment_due NUMBER(6, 2), 
    payment_id NUMBER(9) CHECK (payment_id > 0) NOT NULL, 
    lease_num NUMBER(9) CHECK (lease_num > 0) NOT NULL, 
    std_id NUMBER(9) CHECK (std_id > 0) NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL 
);

CREATE TABLE py_invoices ( 
    payment_id NUMBER(9) CHECK (payment_id > 0) PRIMARY KEY NOT NULL, 
    payment_date DATE, 
    payment_method VARCHAR(10) not NULL 
);

CREATE TABLE flat_inspections ( 
    inspection_num NUMBER(9) CHECK (inspection_num > 0) PRIMARY KEY, 
    inspector_name VARCHAR(60) NOT NULL, 
    inspection_date DATE NOT NULL, 
    satisfactory VARCHAR(100) NOT NULL, 
    comments VARCHAR(100) DEFAULT 'No comments', 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL, 
    flat_num NUMBER(3) CHECK (flat_num > 0) NOT NULL, 
    staff_num NUMBER(9) CHECK (staff_num > 0) NOT NULL 
);

CREATE TABLE hostel_staff ( 
    staff_num NUMBER(9) CHECK (staff_num > 0) PRIMARY KEY, 
    staff_fname VARCHAR(30) NOT NULL, 
    staff_lname VARCHAR(30) NOT NULL, 
    dob DATE NOT NULL, 
    gender VARCHAR(6) NOT NULL, 
    position VARCHAR(20) NOT NULL, 
    loc VARCHAR(20) NOT NULL, 
    street VARCHAR(20) NOT NULL, 
    postalcode VARCHAR(7) NOT NULL, 
    city VARCHAR(20) NOT NULL, 
    place_num NUMBER(5) CHECK (place_num > 0) NOT NULL 
);
