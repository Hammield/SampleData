DELIMITER $$
CREATE PROCEDURE idade(IN idCliente int, OUT idade int,OUT res varchar(20))
BEGIN

	DECLARE dt datetime;
    
   SET dt = (select d_nasc_cliente from cliente where i_cliente_cliente = idCliente);
    
    SET idade = year(now()) -  year(dt);
    
    IF(idade>=18)THEN
		SET res = 'Maior';
	ELSE
		SET res = 'Menor';
	END IF;
    
END $$
DELIMITER ;

CALL idade(1,@idadecliente,@resultado);
select @idadecliente,@resultado;