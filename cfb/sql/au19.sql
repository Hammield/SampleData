select
	v.i_venda_venda,
    c.s_nome_cliente,
    c.s_cpf_cliente,
    v.d_data_venda,
    v.f_valor_venda
from venda v
	inner join cliente c on v.i_cliente_cliente = c.i_cliente_cliente;