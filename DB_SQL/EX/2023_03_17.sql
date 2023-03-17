-- empollyees , titles ,salaries, 노란색 pk 빨간건 외래키

-- CREATE TABLE employees(
-- 	 emp_no INT(11)
-- 	,birth_date DATE
-- 	,first_name VARCHAR(14)
-- 	,last_name VARCHAR(16)
-- 	,gender ENUM('F','M')
-- 	,hire_date DATE
-- 	,CONSTRAINT Pk_test_emp_no PRIMARY KEY(emp_no)
-- );

-- CREATE TABLE salaries(
-- 	emp_no INT(11) NOT NULL
-- 	,salary INT(11)
-- 	,from_date DATE
-- 	,to_date DATE
-- 	,PRIMARY KEY(from_date,emp_no)
-- 	,FOREIGN KEY(emp_no) REFERENCES employees(emp_no)
-- );

-- CREATE TABLE titles(
-- 	emp_no INT(11) 
-- 	,title VARCHAR(50)
-- 	,from_date DATE
-- 	,to_date DATE
-- 	,PRIMARY KEY(emp_no,title,from_date)
-- 	,FOREIGN KEY(emp_no) REFERENCES employees(emp_no)
-- );

-- CREATE INDEX emp_no on titles (emp_no);

-- CREATE TABLE departments(
-- 	dept_no char(4) 
-- 	,dept_name VARCHAR(40) 
-- 	,PRIMARY KEY(dept_no)
-- );

-- CREATE INDEX dept_name on departments (dept_name);

-- CREATE TABLE dept_emp(
-- 	emp_no INT(11) 
-- 	,dept_no char(4)
-- 	,from_date DATE
-- 	,to_date DATE
-- 	,PRIMARY KEY(emp_no,title,from_date)
-- 	,FOREIGN KEY(emp_no) REFERENCES employees(emp_no)
-- );


-- CREATE INDEX dept_name on departments (dept_name);

-- CREATE TABLE dept_manager(
-- 	dept_no char(4)
-- 	,emp_no INT(11)
-- 	,from_date DATE
-- 	,to_date DATE
-- 	,PRIMARY KEY(emp_no,title,from_date)
-- 	,FOREIGN KEY(emp_no) REFERENCES employees(emp_no)
-- );