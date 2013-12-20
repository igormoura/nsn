
------------------------------------------------ [ DASHBOARD PREDIAL FIBRA ]  --------------------------------------------


----------------- [ SELECT ALL CONDOMINIOS ]  ----------------

select Condominio from [SNETD].[dbo].PredialCondoView group by Condominio order by Condominio

--------------------- [ SELECT GRÁFICOS ]  -------------------
SELECT Condominio,CodigoEstadoContr, 
Count(*) QtAtivos, 
sum(isnull(Valor,0)) ValorAtivo, 
(Select count(*) 
from [SNETD].[dbo].[PredialCondoView] dc1 
where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'C' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)) as qtCanc, 
isnull((Select sum(Valor) vrCanc 
from [SNETD].[dbo].[PredialCondoView] dc1 
where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'C' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)),0) as vrCanc, 
(Select count (*)
from [SNETD].[dbo].[PredialCondoView] dc1 
where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'S' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)) as qtSusp, 
isnull((Select sum(Valor) vrSusp 
from [SNETD].[dbo].[PredialCondoView] dc1 
where dc1.Condominio = dc.Condominio and CodigoEstadoContr = 'S' and month(dc1.Vencimento) = month(dc.Vencimento) and year(dc1.Vencimento) = year(dc.Vencimento)),0) as vrSusp, 
month(Vencimento) me_, 
year(Vencimento) an_,(cast(month(Vencimento) as varchar(50))+'-'+cast(year(Vencimento) as varchar(50))) mean 
FROM [SNETD].[dbo].[PredialCondoView] [dc]
WHERE Condominio = 'Belvedere Park' and CodigoEstadoContr = 'A' and Vencimento >= '2013-10-01 00:00:00' and Vencimento < dateadd(month,1,'2013-12-17 23:59:59') 
GROUP BY Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento),cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar)
ORDER BY [an_], [me_]

--------------------- [ SELECT GRID ]  -------------------
SELECT year(Vencimento) ano, Condominio,CodigoEstadoContr,Count(*) Quant, sum(Valor) Valor,month(Vencimento) mes,year(Vencimento) ano 
FROM [SNETD].[dbo].[PredialCondoView] [dc]
WHERE Vencimento >= '2013-10-01 00:00:00' and Vencimento < dateadd(month,1,'2013-12-17 23:59:59') and Condominio = 'Belvedere Park' 
GROUP BY Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento)
ORDER BY [mes], [ano], [Condominio]


Select year(Vencimento) ano, Condominio,CodigoEstadoContr,Count(*) Quant, sum(Valor) Valor,month(Vencimento) mes,year(Vencimento) ano 
from [SNETD].[dbo].PredialCondoView 
where Vencimento >= '2013-10-01 00:00:00' and Vencimento < dateadd(month,1,'2013-12-17 23:59:59') 
and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '11-2013' and Condominio = 'Belvedere Park' 
Group by Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento) 
Order by mes,ano,Condominio








--------------- Select dos totais -------------------------------
Select Count(*) Quant, sum(Valor) Valor 
from [SNETD].[dbo].PredialCondoView where Vencimento >= '2013-11-01' and Vencimento < dateadd(month,1,'2013-12-01')  and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '11-2013'and Condominio = 'Del Paseo'


------------- Select Geral --------------------------------------
Select cl.NomeCliente, CONVERT(VARCHAR(24),DataCancContr,103) DataCanc,CONVERT(VARCHAR(24),Vencimento,103) Venc, NoContrato,Valor,Seq,DescrTipo,NomeCondo + ' | ' + cl.Endereco NomeCond,cast(CodigoEstadoContr as varchar(10)) Estado
from [SNETD].[dbo].PredialCondoView pc 
inner join [SNETD].Ralsecrel.Cliente cl on cl.NoCliente = pc.NoContrato 
inner join [SNETD].[dbo].ListServicosView l on pc.TipoCobrAdic = l.TipoCobrAdic 
where Vencimento > '2013-12-14' and Vencimento < '2014-12-17' 
and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '11-2013' and Condominio = 'Del Paseo' and CodigoEstadoContr = 'A'

SELECT cl.NomeCliente, CONVERT(VARCHAR(24),DataCancContr,103) DataCanc,CONVERT(VARCHAR(24),Vencimento,103) Venc, NoContrato,Valor,Seq,DescrTipo,NomeCondo + ' | ' + cl.Endereco NomeCond,cast(CodigoEstadoContr as varchar(10)) Estado
FROM [SNETD].[dbo].[PredialCondoView] [pc]
JOIN [SNETD].[Ralsecrel].[Cliente] [cl] ON cl.NoCliente = pc.NoContrato
JOIN [SNETD].[dbo].[ListServicosView] [l] ON pc.TipoCobrAdic = l.TipoCobrAdic 
WHERE Vencimento > '2013-12-14' and Vencimento < '2013-12-17' 
and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '11-2013' and Condominio = 'Del Paseo' and CodigoEstadoContr = 'A'



--- TESTE RELACIONA ---




Select year(Vencimento) ano, Condominio,CodigoEstadoContr,Count(*) Quant, sum(Valor) Valor,month(Vencimento) mes,year(Vencimento) ano 
from [SNETD].[dbo].PredialCondoView 
where Vencimento >= '2013-10-01 00:00:00' and Vencimento < dateadd(month,1,'2013-12-17 23:59:59') 
and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '11-2013' and Condominio = 'Belvedere Park' 
Group by Condominio,CodigoEstadoContr,month(Vencimento),year(Vencimento) 
Order by mes,ano,Condominio


SELECT cl.NomeCliente, CONVERT(VARCHAR(24),DataCancContr,103) DataCanc,CONVERT(VARCHAR(24),Vencimento,103) Venc, NoContrato,Valor,Seq,DescrTipo,NomeCondo + ' | ' + cl.Endereco NomeCond,cast(CodigoEstadoContr as varchar(10)) Estado 
FROM [SNETD].[dbo].[PredialCondoView] [pc]
JOIN [SNETD].[Ralsecrel].[Cliente] [cl] ON cl.NoCliente = pc.NoContrato 
JOIN [SNETD].[dbo].[ListServicosView] [l] ON pc.TipoCobrAdic = l.TipoCobrAdic 
where Vencimento >= '2013-10-01 00:00:00' and Vencimento < dateadd(month,1,'2013-12-17 23:59:59') 
and cast(month(Vencimento) as varchar)+'-'+cast(year(Vencimento) as varchar) = '12-2013' 
and Condominio = 'Belvedere Park' and CodigoEstadoContr = 'A'

