SELECT *
FROM dept_manager
WHERE dept_no=(
	SELECT dept_no 
	FROM dept_manager
	WHERE emp_no = 110114
);

SELECT *
FROM dept_manager
WHERE emp_no IN (
	SELECT emp_no 
	FROM dept_manager
	WHERE demp_no = 'd009'
);

SELECT *
FROM dept_manager
WHERE dept_no = any (
	SELECT emp_no 
	FROM dept_manager
	WHERE dept_no = 'd009'
);

SELECT *
FROM dept_manager
WHERE dept_no = all (
	SELECT dept_no
	FROM dept_manager
	WHERE dept_no = '110114'
);

SELECT emp_no,first_name,last_name,gender
FROM employees
WHERE emp_no in (
					SELECT emp_no
					FROM salaries
					group by emp_no HAVING AVG(salary)>=70000
);


