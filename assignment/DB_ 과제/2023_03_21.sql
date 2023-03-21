-- SELECT emp_no , birth_date , CONCAT(last_name , ' ' , first_name) AS fullname , gender
-- FROM employees;

-- SELECT avg(salary)
-- FROM salaries
-- WHERE to_date=DATE(99990101);

-- INSERT INTO employees(birth_date , emp_no , first_name , last_name , gender, hire_date)
-- VALUES (DATE(19940804) , 600000 , 'jina' , 'kim' , 'F', NOW());

-- UPDATE employees
-- SET last_name = 'test' , birth_date= DATE(19900301)
-- WHERE emp_no=600000;

-- SELECT *
-- FROM employees
-- WHERE emp_no=600000;

-- DELETE FROM employees
-- WHERE emp_no=600000;

-- SELECT emp.birth_date , ti.title
-- FROM employees emp
-- INNER JOIN titles ti ON emp.emp_no=ti.emp_no
-- WHERE emp.emp_no = 10001 AND to_date='99990101';

CREATE TABLE test2(
col_no INT(12) PRIMARY KEY
,me_no INT(12) UNIQUE
,id VARCHAR(15) NOT NULL;

-- CREATE INDEX me_no on test(me_no);

-- DROP TABLE test;

