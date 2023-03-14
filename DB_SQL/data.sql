SELECT *
FROM titles
WHERE emp_no=10009
AND to_date >= NOW();

SELECT * ,NOW()
FROM titles
WHERE emp_no=10009
AND to_date >= NOW()
;

SELECT *
FROM employees
WHERE emp_no in (
	SELECT emp_no
	FROM titles
	WHERE title = 'Senior Engineer'
	and to_date >= NOW()
);