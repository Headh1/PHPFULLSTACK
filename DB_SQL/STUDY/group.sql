SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;

SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no
HAVING avg_s>=30000 and avg_s<=50000
ORDER BY avg_s desc;

SELECT CONCAT(last_name,' ',first_name) AS fullname
FROM employees;

