/*select count(i_cliente_cliente) as Qtde, i_tipo_cliente from cliente group by i_tipo_cliente;*/

select v.d_data_venda, count(v.i_venda_venda) as 'Qtde vendas do dia'
	from venda v
    group by d_data_venda;