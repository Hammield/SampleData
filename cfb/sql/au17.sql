select i_cliente_cliente, s_nome_cliente, day(d_nasc_cliente)
as 'Dia Aniversário' from cliente
where month(d_nasc_cliente) = month(curdate());

select * from cliente;