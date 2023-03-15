-- UPDATE departments
-- SET dept_name='1000'
-- WHERE dept_no = 'd001';

SELECT *
FROM departments;

ROLLBACK;

UPDATE departments
SET dept_name='1000'
WHERE dept_no = 'd001' OR dept_no='d002';

update employees
SET first_name = '진아' , last_name = '김' ,  birth_date= '1994-08-04'
WHERE emp_no=500000
;

SELECT *
FROM employees
WHERE emp_no = 500000;