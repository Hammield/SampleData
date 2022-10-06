/*
SQL Server
Select top 5 * from cliente;
*/

/*
Oracle
select * from cliente where rownum < 5;

*/

select * from cliente limit5;

select c.s_nome_cliente, v.i_venda_venda, v.d_data_venda, v.f_valor_venda
 from venda v
 inner join cliente c on c.i_cliente_cliente = v.i_cliente_cliente
 order by f_valor_venda desc limit 3;