-- SELECT emp.emp_no,demp.dept_no, emp.first_name
-- FROM employees emp
-- 	INNER JOIN dept_emp demp
-- 		ON emp.emp_no=demp.emp_no
-- LIMIT 10;

-- INSERT INTO departments(dept_no,dept_name)
-- VALUES('d010','test');
-- 
-- COMMIT;

-- SELECT dept.dept_no , dept.dept_name , dm.emp_no
-- FROM departments dept
-- 	OUTER JOIN dept_manager dm 
-- 		ON dept.dept_no=dm.dept_no;

-- ALTER TABLE employees add COLUMN sup_no INT(11);

-- SELECT emp1.emp_no
-- FROM employees emp1
-- 	INNER JOIN employees emp2
-- 	 ON emp1. = emp2.emp_no
-- where emp1.emp_no = 10001;
-- 
-- SELECT * FROM employees WHERE emp_no = 10001
-- union
-- SELECT * FROM employees WHERE emp_no = 10005;