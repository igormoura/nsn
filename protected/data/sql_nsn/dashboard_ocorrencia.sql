--- MENOR MAIOR 72 HORAS GERAL TIPO PROBLEMA
Select top 10 dsProblema,sum(Case when HorasFinalizadas <= 72 then 1
					Else 0 end) Menor72Horas,
				  sum(Case when HorasFinalizadas > 72 then 1
					Else 0 end) Maior72Horas,
				Count(*) Total
from dashboardOcorrenciasView
where DataOcorrencia >= '2013-11-01' and DataOcorrencia < '2013-11-10' 
Group by dsProblema
ORDER BY total DESC


--- MENOR MAIOR TOTAL
SELECT top 10sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
	sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas, 
	Count(*) Total
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-01' and DataOcorrencia < '2013-11-10'
ORDER BY [Total] DESC

Select sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
	sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas
from dashboardOcorrenciasView
where DataOcorrencia >= '2013-11-01' and DataOcorrencia < '2013-11-10'


--- DASHBOARD OCORRENCIAS TUDO 
Select *
from dashboardOcorrenciasView
where DataOcorrencia >= '2013-09-01' and DataOcorrencia < '2013-10-01' and Corporativo != ''

--- DASHBOARD OCORRENCIAS SERVIÇOS
--- CONSULTA DE GERAÇÃO DO GRÁFICO
SELECT nmServico,sum(Case when HorasFinalizadas <= 72 then 1
	Else 0 end) Menor72Horas,
		sum(Case when HorasFinalizadas > 72 then 1
	Else 0 end) Maior72Horas,
Count(*) Total
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-01' and DataOcorrencia < '2013-11-10'
GROUP BY [nmServico]

--- CONSULTA PARA LISTAR O RELATÓRIO
SELECT NoOcorrencia, NoContrato, Nomecliente, minFinalizadas
FROM [dashboardOcorrenciasView] d
 inner join RALSecrel.Cliente c On c.NoCliente = d.NoContrato
WHERE nmServico = 'Predial' and HorasFinalizadas <= 72 and DataOcorrencia  >= '2013-11-23' and DataOcorrencia < '2013-11-26'
ORDER BY minFinalizadas DESC

--- TESTES
SELECT [NoOcorrencia], [NoContrato], [Nomecliente], [minFinalizadas]
FROM [dashboardOcorrenciasView] [d]
JOIN [RALSecrel].[Cliente] [c] ON d.NoContrato = c.NoCliente
WHERE nmServico = 'Predial ' and HorasFinalizadas < 72 and DataOcorrencia >= '2013-11-11 00:00:00' and DataOcorrencia < '2013-11-27 23:59:59'
ORDER BY [minFinalizadas] DESC



--- DASHBOARD OCORRENCIAS PROBLEMA
SELECT  dsProblema,sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
	sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas,
	Count(*) Total
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-09' and DataOcorrencia < '2013-11-10'
GROUP BY [dsProblema]


--- CONSULTA PARA LISTAR O RELATÓRIO
SELECT NoOcorrencia, NoContrato, Nomecliente, minFinalizadas
FROM [dashboardOcorrenciasView] d
 inner join RALSecrel.Cliente c On c.NoCliente = d.NoContrato
WHERE dsProblema = 'Verificação de site' and HorasFinalizadas <= 72 and DataOcorrencia  >= '2013-11-23' and DataOcorrencia < '2013-11-26'
ORDER BY minFinalizadas DESC


--- DASHBOARD OCORRENCIAS SETOR
SELECT  ds_setor,sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
	sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas,
	Count(*) Total
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-09' and DataOcorrencia < '2013-11-10'
GROUP BY ds_setor

--- RELATORIO SETOR

Select ds_Setor,convert(decimal(11,2),(100.00*(count(*) - count(DataOcorrenciaF)))/count(*)) Abertas,convert(decimal(11,2),count(DataOcorrenciaF)*100.00/count(*)) Fechadas, count(*) qtTotal 
from dbo.dashboardOcorrenciasView 
where DataOcorrencia >= '2013-11-5' and DataOcorrencia < dateadd(day,1,'2013-12-5') 
Group By ds_Setor 
Order by qtTotal desc


SELECT top 10 sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-01 00:00:00' and DataOcorrencia < '2013-12-31 23:59:59' and Corporativo = 'S' 
ORDER BY Count(*) desc


SELECT top 10 nmServico , sum(Case when HorasFinalizadas <= 72 then 1
Else 0 end) Menor72Horas,
sum(Case when HorasFinalizadas > 72 then 1
Else 0 end) Maior72Horas,
Count(*) Total
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-11-01 00:00:00' and DataOcorrencia < '2013-12-31 23:59:59' and Corporativo = 'S'
GROUP BY [nmServico]
ORDER BY [Total] DESC


------------ TESTE -----------------


SELECT [NoOcorrencia], [NoContrato], [Nomecliente], [minFinalizadas]
FROM [dashboardOcorrenciasView] [d]
JOIN [RALSecrel].[Cliente] [c] ON d.NoContrato = c.NoCliente
WHERE nmServico = 'Predial ' and DataOcorrencia >= '2013-11-02' and DataOcorrencia < '2013-12-05' and Corporativo = ''
ORDER BY [minFinalizadas] DESC

SELECT [NoOcorrencia], [NoContrato], [Nomecliente], [minFinalizadas]
FROM [dashboardOcorrenciasView] [d]
JOIN [RALSecrel].[Cliente] [c] ON d.NoContrato = c.NoCliente
WHERE ds_Setor = 'Administrativo ' and DataOcorrencia >= '2013-12-02' and DataOcorrencia < '2013-12-05' and (Corporativo = '' or '' = '')
ORDER BY [minFinalizadas] DESC


SELECT ds_Setor,convert(decimal(11,2),(100.00*(count(*) - count(DataOcorrenciaF)))/count(*)) Abertas,convert(decimal(11,2),count(DataOcorrenciaF)*100.00/count(*)) Fechadas, count(*) qtTotal 
FROM [dashboardOcorrenciasView]
WHERE DataOcorrencia >= '2013-12-02' and DataOcorrencia < dateadd(day,1,'2013-12-05') and (Corporativo = '' or '' = '')
GROUP BY [ds_Setor]
ORDER BY [qtTotal] DESC

SELECT TOP 10 * FROM [RALSecrel].[Cliente] [t] ORDER BY C DESC

SELECT TOP 10 * FROM [RALSecrel].[Cliente] [t] ORDER BY NoCliente desc