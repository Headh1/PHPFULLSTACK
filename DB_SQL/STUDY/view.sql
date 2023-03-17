-- CREATE VIEW TEST_VIEW
-- AS
-- 	SELECT emp.emp_no , concat(emp.last_name,' ' ,emp.first_name) , ti.title
-- 	FROM employees emp 
-- 	INNER JOIN titles ti
-- 		ON emp.emp_no = ti.emp_no
-- ;

-- SELECT *FROM TEST_VIEW WHERE ;

-- CREATE or replace VIEW TEST_VIEW
-- AS
-- 	SELECT emp.emp_no , concat(emp.last_name,' ' ,emp.first_name) , ti.title
-- 	FROM employees emp 
-- 	INNER JOIN titles ti
-- 		ON emp.emp_no = ti.emp_no
-- ;

-- DROP VIEW TEST_VIEW;

-- CREATE VIEW test
-- AS
-- 	SELECT emp.emp_no , CONCAT(emp.last_name,' ',emp.first_name) AS fullname, dep.dept_name
-- 	FROM employees emp
--  		INNER JOIN dept_emp de ON emp.emp_no= de.emp_no
--  		INNER JOIN departments dep ON dep.dept_no = de.dept_no
--  		WHERE de.to_date = DATE(99990101) 
-- 		 order by emp.emp_no asc;
 		
-- SELECT * FROM test;
