USE [SNETD]
GO

/****** Object:  View [dbo].[dashboardServicosCanceladosView]    Script Date: 11/22/2013 09:56:56 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO



-- Quanto aos cancelamentos, 
-- gerar gráfico de barra e/ou pizza de cancelamentos 
-- por grupo de serviço.

CREATE View [dbo].[dashboardServicosCanceladosView] as
Select StatusServico,NoContrato,NomeCliente,TipoCobrAdic,Seq,CodigoEstadoContr,dtCanc,
			(Select max(dt1.VlCobrAdic)
			from DuplicDet_Tipocontr_All dt1
			where dt1.NoContrato = can.NoContrato
			  and dt1.Seq = can.seq
			  and dt1.TipoCobrAdic = can.TipoCobrAdic
			  and (dt1.DataCancContr = can.dtCanc 
			    or dt1.DataVencDup = can.dtCanc)) Valor,
		CodigoMotivoCanc,
	    DescrMotivo,
	    CdGrupoServ,NmGrupoServ
from (
Select Case when CodigoEstadoContr = 'C' Then 'Cancelado'
			when ddt.ServicoTipoCobr = 'S' and cba.NoContrato is null then 'Cancelado'
					else 'Ativo' end StatusServico,
	   ddt.NoContrato,
	   cli.NomeCliente,
	   ddt.TipoCobrAdic,
	   ddt.Seq,
	   --ddt.VlCobrAdic,
	   CodigoEstadoContr,
	   mca.CodigoMotivoCanc,
	   mca.DescrMotivo,
	   max(isnull(DataCancContr,ddt.DataVencDup)) dtCanc,
	   g.CdGrupoServ,g.NmGrupoServ
from DuplicDet_Tipocontr_All ddt
	inner join Ralsecrel.Cliente cli on cli.NoCliente = ddt.NoContrato
	inner join ListServicosView l on ddt.TipoCobrAdic = l.TipoCobrAdic
    inner join GrupoServico g on g.CdGrupoServ = l.GrupoServ
	left join RALSecrel.CobrAdic cba on cba.seq = ddt.seq and cba.NoContrato = ddt.NoContrato
	left join RALSecrel.MotivoCancelamento mca on mca.CodigoMotivoCanc = ddt.CodigoMotivoCanc
where ddt.TipoCobrAdic <> 'DISCPONT' 
--  and ddt.DataEmisDup >= '2013-01-01'
  and (CodigoEstadoContr = 'C' 
   or (ddt.ServicoTipoCobr = 'S' and cba.NoContrato is null))
Group By Case when CodigoEstadoContr = 'C' Then 'Cancelado'
			when ddt.ServicoTipoCobr = 'S' and cba.NoContrato is null then 'Cancelado'
					else 'Ativo' end,
		 ddt.NoContrato,
		 cli.NomeCliente,
	     ddt.TipoCobrAdic,
	     ddt.Seq,
		 CodigoEstadoContr,
		 mca.CodigoMotivoCanc,
		 mca.DescrMotivo,
		 g.CdGrupoServ,
		 g.NmGrupoServ 
		 ) as can



GO


