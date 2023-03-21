-- DELIMITER $$
-- CREATE TRIGGER test_up
-- AFTER UPDATE
-- ON departments
-- FOR EACH ROW
-- 
-- BEGIN
-- 	UPDATE titles
-- 	SET title = 'trigger'
-- 	WHERE emp_no = '10001';
-- END $$
-- 
-- DELIMITER ;

SHOW TRIGGER;

DROP TRIGGER;