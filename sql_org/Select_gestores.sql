select gestor_area, gestor_operacao, uga.username as gestor_area_username, ugo.username as gestor_operacao_username 
from estruturas_gestao eg 
INNER JOIN users as uga on uga.id = eg.gestor_area 
INNER JOIN users as ugo on ugo.id = eg.gestor_operacao 
WHERE data_fim IS NULL GROUP BY gestor_area, gestor_operacao;

/*Select diretor_operacao (superiorId) */
select  diretor_operacao,
		us.username,
        diretor_operacao
from estruturas_gestao 
inner join users as us on us.id = diretor_operacao 
where data_fim is null group by diretor_operacao;

/*Select Gestor_operacao com o Id do Diretor Operacao(superiorId) */
select  gestor_operacao,
		us.username ,
        diretor_operacao
from estruturas_gestao 
inner join users as us on us.id = gestor_operacao 
where data_fim is null group by gestor_operacao;

/*Select Gestor_operacao com o Id do Diretor Operacao(superiorId) */
select  gestor_area,
		us.username ,
        gestor_operacao
from estruturas_gestao 
inner join users as us on us.id = gestor_area 
where data_fim is null group by gestor_area;

/*Gestor 3*/
select  gestor_3,
		us.username ,
        gestor_area
from estruturas_gestao 
inner join users as us on us.id = gestor_3 
where data_fim is null group by gestor_3;

/*Gestor 2*/
select  gestor_2 as id,
		us.username as name ,
        gestor_3 superiorId
from estruturas_gestao 
inner join users as us on us.id = gestor_2 
where data_fim is null group by gestor_2;

/*Gestor Direto*/
select  gestor_direto,
		us.username ,
        gestor_2
from estruturas_gestao 
inner join users as us on us.id = gestor_direto 
where data_fim is null group by gestor_direto;

