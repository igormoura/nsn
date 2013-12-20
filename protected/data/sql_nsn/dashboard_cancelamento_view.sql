� OBSERVA��O: consulta est� LENTA.
�--- Registros 
Select *
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'

�-- GR�FICO GRUPO DE SERVI�O
SELECT top 10CdGrupoServ,NmGrupoServ,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-03' and dtcanc < '2013-12-06' 
GROUP BY [CdGrupoServ], [NmGrupoServ]
ORDER BY [Valor] DESC

--- RELATORIO GRUPO DE SERVI�O
SELECT [NoContrato], [NomeCliente], [Seq], [dtCanc], [Valor], [DescrMotivo], [NmGrupoServ]
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-03' and dtcanc < '2013-12-06'

�-- GR�FICO POR MOTIVO DE CANCELAMENTO
SELECT top 10 isnull(DescrMotivo,'N�o Cadastrado') MotivoCanc,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-01-01' and dtcanc < '2013-01-03' 
GROUP BY isnull(DescrMotivo,'N�o Cadastrado')
ORDER BY [Valor] DESC

--- RELAT�RIO MOTIVO DE CANCELAMENTO
SELECT [NoContrato], [NomeCliente], [Seq], [dtCanc], [Valor], [DescrMotivo], [NmGrupoServ]
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-03' and dtcanc < '2013-12-06'


--- TESTE
SELECT top 10 isnull(DescrMotivo,'Não Cadastrado')
MotivoCanc,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-10-01' and dtcanc < '2013-10-02'
GROUP BY isnull(DescrMotivo,'Não Cadastrado')
ORDER BY [Valor] DESC

Select CdGrupoServ,NmGrupoServ,sum(Valor) Valor
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'
group by CdGrupoServ,NmGrupoServ
Order by Valor desc
	
Select *,isnull(DescrMotivo,'N�o Cadastrado') MotivoCanc,sum(Valor) Valor
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'
group by isnull(DescrMotivo,'N�o Cadastrado')
Order by Valor desc



 SELECT top 10 isnull(DescrMotivo,'N�o Cadastrado') MotivoCanc,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-01-01' and dtcanc < '2013-01-03' 
GROUP BY isnull(DescrMotivo,'N�o Cadastrado')
ORDER BY [Valor] DESC



SELECT top 10CdGrupoServ,NmGrupoServ,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-02' and dtcanc < '2013-12-05' 
GROUP BY [CdGrupoServ], [NmGrupoServ]
ORDER BY [Valor] DESC




--- NOVAS CONSULTAS CANCELAMENTOS

------------------------------- [ GRUPO SERVI�O ] ----------------------------------
--- GR�FICOS GRUPO DE SERVI�O
SELECT top 10Case when sum(Valor) > 0 then NmGrupoServ else NmGrupoServ+' (Negativo)' end NmGrupoServ,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-11-01 00:00:00' and dtCanc < dateadd(day,1,'2013-12-19 23:59:59')
GROUP BY [NmGrupoServ]
ORDER BY sum(Valor) desc

--- RELAT�RIOS 
SELECT TipoCobrAdic servico,nmservico,count(*) qtTotal,sum(Valor) vrTotal
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-11-01 00:00:00' and dtCanc < dateadd(day,1,'2013-12-19 23:59:59') and NmGrupoServ = 'Manutencao de software'
GROUP BY [TipoCobrAdic], [Nmservico]
ORDER BY [vrTotal] DESC

--- LISTA RELATORIO
SELECT DISTINCT Seq NoProspect,NoContrato,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor, getDate() data
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-11-01 00:00:00' and dtCanc < dateadd(day,1,'2013-12-19 23:59:59') and TipoCobrAdic = 'MANSOFT '



--------------------------- [ MOTIVO CANCELAMENTO] ----------------------------
--- GR�FICOS MOTIVO CANCELAMENTO
SELECT top 10Case when sum(Valor) > 0 then DescrMotivo else DescrMotivo+' (Negativo)' end DescrMotivo,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-06' and dtCanc < dateadd(day,1,'2013-12-09')
GROUP BY [DescrMotivo]
ORDER BY sum(Valor) desc

Select Case when sum(Valor) > 0 then DescrMotivo else DescrMotivo+' (Negativo)' end DescrMotivo,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal 
from [SNETD].[dbo].dashboardServicosCanceladosView Where dtCanc >= '2013-12-06' and dtcanc < dateadd(day,1,'2013-12-09') 
group by DescrMotivo Order by sum(Valor) desc

--- RELAT�RIOS 
SELECT TipoCobrAdic servico,nmservico,count(*) qtTotal,sum(Valor) vrTotal
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-06' and dtCanc < dateadd(day,1,'2013-12-09') and DescrMotivo = 'Outro Provedor'
GROUP BY [TipoCobrAdic], [Nmservico]
ORDER BY [vrTotal] DESC

Select TipoCobrAdic servico,NmServico,count(*) qtTotal,sum(Valor) vrTotal 
from [SNETD].[dbo].dashboardServicosCanceladosView 
Where dtCanc >= '2013-12-06' and dtcanc < dateadd(day,1,'2013-12-09') and DescrMotivo = 'Manuten��o de software' 
group by TipoCobrAdic,NmServico Order by vrTotal desc

--- LISTA RELATORIO
SELECT Seq NoProspect,NoContrato,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-11-01 00:00:00' and dtCanc < dateadd(day,1,'2013-11-05 23:59:59') and DescrMotivo = 'Temporario' and TipoCobrAdic = ''








--- MOTIVO CANCELAMENTO
Select Case when sum(Valor) > 0 then isnull(DescrMotivo,'Sem Motivo') else isnull(DescrMotivo,'Sem Motivo')+' (Negativo)' end DescrMotivo,Case when sum(Valor) > 0 then sum(Valor) else sum(Valor)*-1 end vrTotal, count(*) qtTotal
from [SNETD].[dbo].dashboardServicosCanceladosView
Where dtCanc >= '2013-11-5' and dtcanc < dateadd(day,1,'2013-12-5')
group by isnull(DescrMotivo,'Sem Motivo') Order by sum(Valor) desc


--- RELAT�RIOS 
SELECT TipoCobrAdic servico,nmservico,count(*) qtTotal,sum(Valor) vrTotal
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-03' and dtCanc < dateadd(day,1,'2013-12-06') and DescrMotivo = 'Empresa Fechou'
GROUP BY [TipoCobrAdic], [Nmservico]
ORDER BY [vrTotal] DESC

--- LISTA RELATORIO
SELECT Seq NoProspect,NoContrato,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-03' and dtCanc < dateadd(day,1,'2013-12-06') and TipoCobrAdic = 'PREF10'


SELECT Seq NoProspect,NoContrato,TipoCobrAdic servico,NomeCliente NomeProspect,DescrMotivo Observacao,CONVERT(VARCHAR(24),dtCanc,103) DtVend,nmServico,valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-12-08' and dtCanc < dateadd(day,1,'2013-12-11') and DescrMotivo = 'Proc de Cancelamento' and TipoCobrAdic = 'PRE0011'
