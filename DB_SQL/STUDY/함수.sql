-- SELECT CONCAT('아직도','목요일이라니.');

-- SELECT CONCAT(last_name, ' ' ,first_name)
-- FROM employees
-- WHERE emp_no=500000;

-- SELECT CONCAT_ws('/','a','b','c');

-- SELECT FORMAT (123456,2);

-- SELECT LEFT('abcdefg', 3);
-- SELECT right('abcdefg', 3);

-- SELECT UPPER('abc');
-- SELECT lowER('ABC');

-- SELECT LPAD('abcd',6 , 'e');
-- SELECT rPAD('abcd',6 , 'e');

-- SELECT TRIM('    abc d       ');
-- SELECT TRIM(LEADING 'abc' FROM 'abcdef');
-- SELECT TRIM(trailing 'abc' FROM 'abcdefghijabc');

-- SELECT SUBSTRING('abcdefg',2,4);

-- SELECT SUBSTRING_INDEX('ab.cd.ef.gh','.',2);

-- SELECT CEILING(1.1);
-- SELECT floor(1.2);
-- SELECT round(1.6);
-- SELECT TRUNCATE(1.123,2);

-- SELECT NOW();
-- SELECT DATE(NOW());
-- SELECT ADDDATE(NOW(),INTERVAL 1 DAY);
-- SELECT subDATE(NOW(),INTERVAL 1 DAY);
-- SELECT ADDTIME(NOW(),'-1:1:1');

SELECT emp_no , RANK() OVER(ORDER BY salary ASC) r ,salary
FROM salaries LIMIT 5;


