-- DELIMITER $$
-- CREATE PROCEDURE test_pro(
-- IN in_no INT
-- )
-- BEGIN 
-- 	SELECT *
-- 	FROM employees
-- 	LIMIT in_no;
-- END $$
-- 
-- DELIMITER;

-- CALL test_pro(10);

-- DROP PROCEDURE test_pro;

-- DELIMITER $$
-- 
-- 	CREATE FUNCTION fc_SUM(num INT)
-- 		RETURNS INT
-- 	BEGIN
-- 		RETURN num+num+num;
-- 	END $$
-- 
-- 	DELIMITER ;

-- SELECT fc_sum(235);

-- DROP FUNCTION fc_SUM;