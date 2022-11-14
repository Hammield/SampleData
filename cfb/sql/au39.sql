DELIMITER $$
CREATE PROCEDURE basico(IN teguinha varchar(50))
BEGIN

	DECLARE x int;
	SET x = 15;
    
    SELECT x,teguinha;
    
END $$
DELIMITER ;

CALL basico("AWOOOOOOOL");