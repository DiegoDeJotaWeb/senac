select * from fornecedores;
start transaction;
update fornecedores set ativo = 1 where codigo = 2;
commit;
rollback;


