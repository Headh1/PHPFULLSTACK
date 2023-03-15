INSERT INTO employees(emp_no, birth_date, first_name, last_name, gender, hire_date)
VALUES
(500002, DATE(19940804), '진아', '김', 'F', NOW()),(500003, DATE(19961223), '수빈', '노', 'F', NOW());

INSERT INTO salaries(emp_no, salary, from_date, to_date)
VALUES
(500002,200000,NOW(),'99990909'),(500003,200000,NOW(),'99990909');

INSERT INTO titles(emp_no,title,from_date,to_date)
VALUES
(500002,'Senior Engineer',NOW(),'99990909'),(500003,'Senior Engineer',NOW(),'99990909');

INSERT INTO dept_emp(emp_no,dept_no,from_date,to_date)
VALUES
(500002,'d009',NOW(),'99990909'),(500003,'d009',NOW(),'99990909');

DELETE FROM employees
WHERE emp_no=500003;

INSERT INTO dept_manager(dept_no,emp_no,from_date,to_date)
VALUES('d009',500002,NOW(),date(99990909));

UPDATE dept_manager
SET to_date=NOW()
WHERE emp_no=111939
;

SELECT emp_no, first_name
FROM employees
WHERE emp_no=(
	SELECT emp_no 
	FROM salaries 
	WHERE salary = (
		SELECT MAX(salary)
		FROM salaries));
		
SELECT emp_no, first_name
FROM employees
WHERE emp_no=(
	SELECT emp_no 
	FROM salaries 
	WHERE salary = (
		SELECT min(salary)
		FROM salaries));

SELECT AVG(salary)
FROM salaries;

UPDATE titles
SET title='CEO'
WHERE emp_no=500002;

SELECT emp_no , AVG(salary)
FROM salaries
WHERE emp_no=499975;