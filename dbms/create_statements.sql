DROP TABLE STUDENT;
DROP TABLE STUDENT_ADVISOR;
DROP TABLE RESIDENCE_HALL ;
DROP TABLE STUDENT_FLAT;
DROP TABLE ROOM;
DROP TABLE LEASES;
DROP TABLE INVOICES ;
DROP TABLE PY_INVOICES;
DROP TABLE FLAT_INSPECTIONS;
DROP TABLE HOSTEL_STAFF;



CREATE TABLE STUDENT ( 
    std_id INTEGER (9)  PRIMARY KEY, 
    std_fname VARCHAR(30) NOT NULL, 
    std_lname VARCHAR(30) NOT NULL, 
    street VARCHAR(40) NOT NULL, 
    city VARCHAR(20) NOT NULL, 
    postal_code VARCHAR(7) NOT NULL, 
    DOB DATE NOT NULL, 
    gender VARCHAR(6) NOT NULL, 
    STUDENT_category varchar(15) NOT NULL, 
    nationality VARCHAR(20) NOT NULL, 
    special_needs VARCHAR(40) DEFAULT 'None stated', 
    comments VARCHAR(100) DEFAULT 'No additional comments', 
    current_status VARCHAR(10) NOT NULL, 
    course_enrolled VARCHAR(40) NOT NULL, 
    ADVISOR_id INTEGER (9)  NOT NULL, 
    place_num VARCHAR(5) NOT NULL 
);

CREATE TABLE STUDENT_ADVISOR ( 
    ADVISOR_id INTEGER (9)  PRIMARY KEY, 
    adv_fname VARCHAR(30) NOT NULL, 
    adv_lname VARCHAR(30) NOT NULL, 
    position VARCHAR(20) NOT NULL, 
    dept_name VARCHAR(20) NOT NULL, 
    tele_num INTEGER (10)  NOT NULL, 
    ROOM_num INTEGER (3)  NOT NULL 
);

CREATE TABLE RESIDENCE_HALL ( 
    hall_name VARCHAR(20) PRIMARY KEY, 
    hall_addr VARCHAR(40) NOT NULL, 
    hall_tele_num INTEGER (10)  NOT NULL, 
    hallmanager VARCHAR(40) NOT NULL, 
    place_num VARCHAR(5)   NOT NULL
);

CREATE TABLE STUDENT_FLAT ( 
    flat_num INTEGER (3)  PRIMARY KEY, 
    flat_addr VARCHAR(40) NOT NULL, 
    single_beds_available INTEGER (3)  NOT NULL, 
   place_num VARCHAR(5)  NOT NULL
);

CREATE TABLE ROOM ( 
    place_num VARCHAR(5)   PRIMARY KEY,
    -- place_num INTEGER (5)  PRIMARY KEY, 
    ROOM_num INTEGER (3)  NOT NULL, 
    monthly_rent DECIMAL (6,2)  NOT NULL 
);

CREATE TABLE LEASES ( 
    lease_num INTEGER (9)  PRIMARY KEY, 
    rental_term INTEGER    NOT NULL, 
    move_in DATE NOT NULL, 
    move_out DATE NOT NULL, 
    place_num VARCHAR(5)  NOT NULL,
    std_id INTEGER (9)  NOT NULL 
);

CREATE TABLE INVOICES ( 
    invoice_num INTEGER (9)  PRIMARY KEY NOT NULL, 
    payment_due DECIMAL (6, 2), 
    payment_id INTEGER (9)  NOT NULL, 
    lease_num INTEGER (9)  NOT NULL, 
    std_id INTEGER (9)  NOT NULL, 
   place_num VARCHAR(5)   NOT NULL
);

CREATE TABLE PY_INVOICES ( 
    payment_id INTEGER (9)  PRIMARY KEY NOT NULL, 
    payment_date DATE, 
    payment_method VARCHAR(10) not NULL 
);

CREATE TABLE FLAT_INSPECTIONS ( 
    inspection_num INTEGER (9)  PRIMARY KEY, 
    inspector_name VARCHAR(60) NOT NULL, 
    inspection_date DATE NOT NULL, 
    satisfactory VARCHAR(100) NOT NULL, 
    comments VARCHAR(100) DEFAULT 'No comments', 
    place_num VARCHAR(5)  NOT NULL,
    flat_num INTEGER (3)  NOT NULL, 
    staff_num INTEGER (9)  NOT NULL 
);

CREATE TABLE HOSTEL_STAFF ( 
    staff_num INTEGER (9)  PRIMARY KEY, 
    staff_fname VARCHAR(30) NOT NULL, 
    staff_lname VARCHAR(30) NOT NULL, 
    dob DATE NOT NULL, 
    gender VARCHAR(6) NOT NULL, 
    position VARCHAR(20) NOT NULL, 
    loc VARCHAR(20) NOT NULL, 
    street VARCHAR(20) NOT NULL, 
    postalcode VARCHAR(7) NOT NULL, 
    city VARCHAR(20) NOT NULL, 
     place_num VARCHAR(5)   NOT NULL
);
