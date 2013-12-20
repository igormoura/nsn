

--- CONSULTAS DASHBOARDS VENDAS !!!


–-- GRÁFICOS TOTAL TIPO DE ALUNOS [ ANTIGOS - NOVOS ]
SELECT Convertido_qtServ_Cli_Antigo, Convertido_VrServ_Cli_Antigo, Convertido_qtServ_Cli_Novo, Convertido_VrServ_Cli_Novo 
FROM [SNETD].[dbo].dashboardGeralVendas_Func ('2013-09-01','2013-09-26')


--– GRÁFICOS GRUPO SERVIÇO
SELECT NmGrupoServ, Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo  valor
FROM [dashboardGrupoServVendas_Func] ('2013-01-01','2013-09-26')
where Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 


--- GRÁFICOS SERVICOS
SELECT NmServico, Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo  valor
FROM [dashboardServicoVendas_Func] ('2013-01-01','2013-09-26',NULL)
where Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0


--- GRÁFICOS CLIENTES
Select NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and  Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0


--- GRÁFICOS TIPO ALUNOS
SELECT [Convertido_VrServ_Cli_Antigo], [Convertido_VrServ_Cli_Novo]
FROM dashboardGeralVendas_CursoTurma_Func ('2013-11-01 00:00:00','2013-12-02 23:59:59')

-- RELATÓRIO TIPO ALUNOS
Select NoCLiente Contrato,NomeProspect,Cliente,DtVend,Valor, NomeTreinamento
from dashboardVendas_CursoTurma_View

--- TODOS VALORES
Select NoProspect,NoContrato,Cliente,Valor,DtIndic,DtVend,NomeProspect,Endereco,Bairro,FoneResidencia,FoneComercial,*
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and Convertido_VrServ_Cli_Novo > 0


--- GRÁFICO CURSOS TURMAS
SELECT NomeTreinamento, (Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo) as Valor 
FROM dashboardCursoTurmaVendas_Func('2013-10-01 00:00:00','2013-12-02 23:59:59')
WHERE Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0 
ORDER BY [Valor] DESC


--- CONSULTA PARA LISTAR O RELATÓRIO
Select NoCLiente Contrato,NomeProspect,Cliente,NmGrupoServ,NmServico,DtVend,Valor, *
from dashboardVendas_1_View
where DtIndic >= '2013-01-01' and dtIndic < dateadd(day,1,'2013-09-26') and  Convertido_VrServ_Cli_Antigo + Convertido_VrServ_Cli_Novo > 0







