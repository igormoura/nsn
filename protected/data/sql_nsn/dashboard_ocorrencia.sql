--- MENOR MAIOR 72 HORAS GERAL
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
where DataOcorrencia >= '2013-09-01' and DataOcorrencia < '2013-10-01'

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




// Testes

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