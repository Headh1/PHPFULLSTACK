-- Create database grademanagement;
-- ALTER DATABASE grademanagement CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

Create table STUDENT(
	st_id INT(12)
	,st_name VARCHAR(30) NOT NULL
	,birth_date DATE NOT NULL
	,addr VARCHAR(100) NOT NULL
	,phone CHAR(11) NOT NULL
	,gender ENUM('F','M') NOT NULL
	,ad_date DATE NOT NULL
	,gr_date DATE
	,st_status ENUM('재학','휴학','졸업','재적') NOT NULL
	,CONSTRAINT pk_stud_id PRIMARY KEY(st_id)
);
 
CREATE TABLE GRADE(
	lec_no INT(10)
	,st_id INT(10)
	,g_score VARCHAR(5) NOT NULL
	,g_rank INT(5) NOT NULL
	,comp_date DATE NOT NULL
	,PRIMARY KEY(lec_no,st_id)
	,FOREIGN KEY(lec_no) REFERENCES LECTURE(lec_no)
	,FOREIGN KEY(st_id) REFERENCES STUDENT(st_id)
);
	
CREATE TABLE LECTURE(
	lec_no INT(10)
	,book_no INT(10)
	,pro_no INT(12)
	,lec_name VARCHAR(20) NOT NULL
	,limit_no INT(10) NOT NULL
	,lec_sem ENUM('1학기','2학기','계절학기') NOT NULL
	,lec_room VARCHAR(10) NOT NULL
	,lec_star DATETIME NOT NULL
	,lec_end DATETIME NOT NULL
	,requried VARCHAR(10) NOT NULL
	,PRIMARY KEY(lec_no,book_no,pro_no)
	,FOREIGN KEY(book_no) REFERENCES BOOK(book_no)
);

CREATE TABLE BOOK(
	book_no INT(10)
	,book_name VARCHAR(30) NOT NULL
	,CONSTRAINT pk_book_bn PRIMARY KEY(book_no)
);

-- CREATE TABLE PROFESSOR(
-- 	pro_no INT(12)
-- 	,pro_name VARCHAR(30) NOT NULL
-- 	,birth_date DATE NOT NULL
-- 	,deg_no INT(12) NOT NULL
-- 	,email VARCHAR(30) NOT NULL
-- 	,p_position VARCHAR(10) NOT NULL
-- 	,lab_no VARCHAR(10) NOT NULL
-- 	,gender ENUM('F','M') NOT NULL
-- 	,dia DATE NOT NULL
-- 	,CONSTRAINT pk_pro_pn PRIMARY KEY(pro_no)
-- );


-- INSERT INTO student(st_id ,st_name ,birth_date ,addr ,phone ,gender
-- ,ad_date ,gr_date ,st_status)
-- VALUES (1 ,'김진아' ,DATE(19940804) ,'대구' ,'010-0000-0000' ,'F'
-- ,DATE(20130302) ,DATE(20180218) ,'졸업')