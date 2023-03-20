-- SHOW INDEX FROM employees;

CREATE INDEX idx_emp_ln ON employees(last_name);

-- DROP INDEX idx_emp_ln ON employees;
-- 
SELECT * FROM employees
WHERE last_name LIKE('s%');