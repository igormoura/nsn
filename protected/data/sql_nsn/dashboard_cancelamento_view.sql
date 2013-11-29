– OBSERVAÇÃO: consulta está LENTA.
– Registros 
Select *
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'

– Por Grupo de Servico
Select CdGrupoServ,NmGrupoServ,sum(Valor) Valor
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'
group by CdGrupoServ,NmGrupoServ
Order by Valor desc
	
– Por Motivo de Cancelamento
Select isnull(DescrMotivo,'Não Cadastrado') MotivoCanc,sum(Valor) Valor
from dashboardServicosCanceladosView
Where dtCanc >= '2013-01-01' and dtcanc < '2013-10-12'
group by isnull(DescrMotivo,'Não Cadastrado')
Order by Valor desc



--- TESTE
SELECT top 10 isnull(DescrMotivo,'NÃ£o Cadastrado')
MotivoCanc,sum(Valor) Valor
FROM [dashboardServicosCanceladosView]
WHERE dtCanc >= '2013-10-01' and dtcanc < '2013-10-02'
GROUP BY isnull(DescrMotivo,'NÃ£o Cadastrado')
ORDER BY [Valor] DESC