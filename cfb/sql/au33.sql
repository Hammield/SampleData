select 'Cliente' as Tabela,i_cliente_cliente, s_nome_cliente from cliente
union
select 'Cliente aux',i_cliente_cliente,s_nome_cliente from cliente_aux