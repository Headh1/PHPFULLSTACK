SELECT *
FROM employees
WHERE WHERE emp_no= 10001 AND emp_no=10005;

SELECT *
FROM employees
WHERE  emp_no=10001 or emp_no=10005;

SELECT emp_no
FROM employees
WHERE emp_no BETWEEN 10001 and 10005;

SELECT emp_no ,salary
FROM salaries
WHERE salary BETWEEN 60000 AND 60050
;

SELECT *
FROM employees
WHERE emp_no IN(10001,10005);

SELECT *
FROM employees
WHERE first_name LIKE('m%');

SELECT emp_no,title
FROM titles
WHERE title LIKE('%engineer%');