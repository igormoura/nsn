

--- CONSULTAS DASHBOARDS VENDAS !!!


�-- GR�FICOS TOTAL TIPO DE ALUNOS [ ANTIGOS - NOVOS ]
SELECT Convertido_qtServ_Cli_Antigo, Convertido_VrServ_Cli_Antigo, Convertido_qtServ_Cli_Novo, Convertido_VrServ_Cli_Novo 
FROM [SNETD].[dbo].dashboardGeralVendas_Func ('2013-09-01','2013-09-26')


--� GR�FICOS GRUPO SERVI�O
SELECT NmGrupoServ, Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo  valor
FROM [dashboardGrupoServVendas_Func] ('2013-01-01','2013-09-26')
where Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 


--- GR�FICOS SERVICOS
SELECT NmServico, Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo  valor
FROM [dashboardServicoVendas_Func] ('2013-01-01','2013-09-26',NULL)
where Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0


--- GR�FICOS CLIENTES
Select NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and  Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0


--- TODOS VALORES
Select NoProspect,NoContrato,Cliente,Valor,DtIndic,DtVend,NomeProspect,Endereco,Bairro,FoneResidencia,FoneComercial,*
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and Convertido_VrServ_Cli_Novo > 0


--- CONSULTA PARA LISTAR O RELAT�RIO
Select NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and  Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0







