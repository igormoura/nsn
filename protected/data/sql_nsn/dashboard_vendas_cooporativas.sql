Declare @dataInicio date set @dataInicio = '2013-09-01'
Declare @dataFim date set @dataFim = '2013-10-01'


– Lista dos Registros
Select * from dashboardGeralVendasCorporativo_Func ('2013-10-01','2013-10-03')
– Resumo Por Grupo de Serviço
Select * from dashboardVendasCorporativo_Resumo_Func ('2013-10-01','2013-10-03')