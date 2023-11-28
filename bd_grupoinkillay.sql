USE [master]
GO
/****** Object:  Database [grupoinkillay]    Script Date: 27/11/2023 20:09:24 ******/
CREATE DATABASE [grupoinkillay]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'grupoinkillay', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\grupoinkillay.mdf' , SIZE = 73728KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'grupoinkillay_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.SQLEXPRESS\MSSQL\DATA\grupoinkillay_log.ldf' , SIZE = 139264KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [grupoinkillay] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [grupoinkillay].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [grupoinkillay] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [grupoinkillay] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [grupoinkillay] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [grupoinkillay] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [grupoinkillay] SET ARITHABORT OFF 
GO
ALTER DATABASE [grupoinkillay] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [grupoinkillay] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [grupoinkillay] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [grupoinkillay] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [grupoinkillay] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [grupoinkillay] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [grupoinkillay] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [grupoinkillay] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [grupoinkillay] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [grupoinkillay] SET  DISABLE_BROKER 
GO
ALTER DATABASE [grupoinkillay] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [grupoinkillay] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [grupoinkillay] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [grupoinkillay] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [grupoinkillay] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [grupoinkillay] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [grupoinkillay] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [grupoinkillay] SET RECOVERY FULL 
GO
ALTER DATABASE [grupoinkillay] SET  MULTI_USER 
GO
ALTER DATABASE [grupoinkillay] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [grupoinkillay] SET DB_CHAINING OFF 
GO
ALTER DATABASE [grupoinkillay] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [grupoinkillay] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [grupoinkillay] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [grupoinkillay] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
ALTER DATABASE [grupoinkillay] SET QUERY_STORE = ON
GO
ALTER DATABASE [grupoinkillay] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [grupoinkillay]
GO
/****** Object:  User [esire]    Script Date: 27/11/2023 20:09:25 ******/
CREATE USER [esire] FOR LOGIN [esire] WITH DEFAULT_SCHEMA=[dbo]
GO
/****** Object:  Table [dbo].[SIRE_RegistroCompras_EMPRESA]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroCompras_EMPRESA](
	[ID_Ticket] [int] NOT NULL,
	[ID_RegCompEmpresa] [int] IDENTITY(1,1) NOT NULL,
	[FechaEmision] [datetime] NULL,
	[FechaVencimiento] [numeric](18, 6) NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [varchar](50) NULL,
	[TipDocIdentidad] [varchar](5) NULL,
	[NroDocIdentidad] [varchar](20) NULL,
	[RazonSocial] [varchar](500) NULL,
	[MontoExportacion] [numeric](18, 6) NULL,
	[BaseImponibleGravado] [numeric](18, 6) NULL,
	[BaseImponibleDsct] [numeric](18, 6) NULL,
	[BaseIgvIpm] [numeric](18, 6) NULL,
	[DsctoIgvIpm] [numeric](18, 6) NULL,
	[MontoExonerado] [numeric](18, 6) NULL,
	[MontoInafecto] [numeric](18, 6) NULL,
	[MontoISC] [numeric](18, 6) NULL,
	[BaseImponibleIvap] [numeric](18, 6) NULL,
	[MontoIvap] [numeric](18, 6) NULL,
	[MontoICBPER] [numeric](18, 6) NULL,
	[MontoOtrostributos] [numeric](18, 6) NULL,
	[MontoTotal] [numeric](18, 6) NULL,
	[Moneda] [varchar](10) NULL,
	[TipoCambio] [numeric](18, 6) NULL,
	[FecEmisionDocModificado] [datetime] NULL,
	[TipoDocModificado] [varchar](2) NULL,
	[SerieDocModificado] [varchar](20) NULL,
	[NumeroDocModificado] [varchar](20) NULL,
	[ProyectoOperadosAtribucion] [varchar](100) NULL,
	[TipodeNota] [varchar](20) NULL,
	[EstadoComprobante] [varchar](100) NULL,
	[ValorFOBEmbarcado] [varchar](100) NULL,
	[ValorOperacionGratuito] [varchar](100) NULL,
	[TipoOperacion] [varchar](100) NULL,
	[DamCP] [varchar](100) NULL,
	[CLU] [varchar](100) NULL,
	[CarSunat] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_RegCompEmpresa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroCompras_SUNAT]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroCompras_SUNAT](
	[ID_Ticket] [int] NOT NULL,
	[ID_RegCompSunat] [int] NOT NULL,
	[FechaEmision] [datetime] NULL,
	[FechaVencimiento] [numeric](18, 6) NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [varchar](50) NULL,
	[TipDocIdentidad] [varchar](5) NULL,
	[NroDocIdentidad] [varchar](20) NULL,
	[RazonSocial] [varchar](500) NULL,
	[MontoExportacion] [numeric](18, 6) NULL,
	[BaseImponibleGravado] [numeric](18, 6) NULL,
	[BaseImponibleDsct] [numeric](18, 6) NULL,
	[BaseIgvIpm] [numeric](18, 6) NULL,
	[DsctoIgvIpm] [numeric](18, 6) NULL,
	[MontoExonerado] [numeric](18, 6) NULL,
	[MontoInafecto] [numeric](18, 6) NULL,
	[MontoISC] [numeric](18, 6) NULL,
	[BaseImponibleIvap] [numeric](18, 6) NULL,
	[MontoIvap] [numeric](18, 6) NULL,
	[MontoICBPER] [numeric](18, 6) NULL,
	[MontoOtrostributos] [numeric](18, 6) NULL,
	[MontoTotal] [numeric](18, 6) NULL,
	[Moneda] [numeric](18, 6) NULL,
	[TipoCambio] [numeric](18, 6) NULL,
	[FecEmisionDocModificado] [datetime] NULL,
	[TipoDocModificado] [varchar](2) NULL,
	[SerieDocModificado] [varchar](20) NULL,
	[NumeroDocModificado] [varchar](20) NULL,
	[ProyectoOperadosAtribucion] [varchar](100) NULL,
	[TipodeNota] [varchar](20) NULL,
	[EstadoComprobante] [varchar](100) NULL,
	[ValorFOBEmbarcado] [varchar](100) NULL,
	[ValorOperacionGratuito] [varchar](100) NULL,
	[TipoOperacion] [varchar](100) NULL,
	[DamCP] [varchar](100) NULL,
	[CLU] [varchar](100) NULL,
	[CarSunat] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_RegCompSunat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroTemporalCompras_EMPRESA_20611362871]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroTemporalCompras_EMPRESA_20611362871](
	[FechaEmision] [date] NULL,
	[FechaVencimiento] [numeric](18, 6) NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [varchar](50) NULL,
	[TipDocIdentidad] [varchar](5) NULL,
	[NroDocIdentidad] [varchar](20) NULL,
	[RazonSocial] [varchar](500) NULL,
	[MontoExportacion] [numeric](18, 6) NULL,
	[BaseImponibleGravado] [numeric](18, 6) NULL,
	[BaseImponibleDsct] [numeric](18, 6) NULL,
	[BaseIgvIpm] [numeric](18, 6) NULL,
	[DsctoIgvIpm] [numeric](18, 6) NULL,
	[MontoExonerado] [numeric](18, 6) NULL,
	[MontoInafecto] [numeric](18, 6) NULL,
	[MontoISC] [numeric](18, 6) NULL,
	[BaseImponibleIvap] [numeric](18, 6) NULL,
	[MontoIvap] [numeric](18, 6) NULL,
	[MontoICBPER] [numeric](18, 6) NULL,
	[MontoOtrostributos] [numeric](18, 6) NULL,
	[MontoTotal] [numeric](18, 6) NULL,
	[Moneda] [varchar](10) NULL,
	[TipoCambio] [numeric](18, 6) NULL,
	[FecEmisionDocModificado] [date] NULL,
	[TipoDocModificado] [varchar](2) NULL,
	[SerieDocModificado] [varchar](20) NULL,
	[NumeroDocModificado] [varchar](20) NULL,
	[ProyectoOperadosAtribucion] [varchar](100) NULL,
	[TipodeNota] [varchar](20) NULL,
	[EstadoComprobante] [varchar](100) NULL,
	[ValorFOBEmbarcado] [varchar](100) NULL,
	[ValorOperacionGratuito] [varchar](100) NULL,
	[TipoOperacion] [varchar](100) NULL,
	[DamCP] [varchar](100) NULL,
	[CLU] [varchar](100) NULL,
	[CarSunat] [varchar](100) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroTemporalCompras_SUNAT_20611362871]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroTemporalCompras_SUNAT_20611362871](
	[FechaEmision] [date] NULL,
	[FechaVencimiento] [numeric](18, 6) NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [varchar](50) NULL,
	[TipDocIdentidad] [varchar](5) NULL,
	[NroDocIdentidad] [varchar](20) NULL,
	[RazonSocial] [varchar](500) NULL,
	[MontoExportacion] [numeric](18, 6) NULL,
	[BaseImponibleGravado] [numeric](18, 6) NULL,
	[BaseImponibleDsct] [numeric](18, 6) NULL,
	[BaseIgvIpm] [numeric](18, 6) NULL,
	[DsctoIgvIpm] [numeric](18, 6) NULL,
	[MontoExonerado] [numeric](18, 6) NULL,
	[MontoInafecto] [numeric](18, 6) NULL,
	[MontoISC] [numeric](18, 6) NULL,
	[BaseImponibleIvap] [numeric](18, 6) NULL,
	[MontoIvap] [numeric](18, 6) NULL,
	[MontoICBPER] [numeric](18, 6) NULL,
	[MontoOtrostributos] [numeric](18, 6) NULL,
	[MontoTotal] [numeric](18, 6) NULL,
	[Moneda] [varchar](10) NULL,
	[TipoCambio] [numeric](18, 6) NULL,
	[FecEmisionDocModificado] [date] NULL,
	[TipoDocModificado] [varchar](2) NULL,
	[SerieDocModificado] [varchar](20) NULL,
	[NumeroDocModificado] [varchar](20) NULL,
	[ProyectoOperadosAtribucion] [varchar](100) NULL,
	[TipodeNota] [varchar](20) NULL,
	[EstadoComprobante] [varchar](100) NULL,
	[ValorFOBEmbarcado] [varchar](100) NULL,
	[ValorOperacionGratuito] [varchar](100) NULL,
	[TipoOperacion] [varchar](100) NULL,
	[DamCP] [varchar](100) NULL,
	[CLU] [varchar](100) NULL,
	[CarSunat] [varchar](100) NULL
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_Ticket]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_Ticket](
	[ID_Ticket] [int] IDENTITY(1,1) NOT NULL,
	[CompaniaCodigo] [char](11) NOT NULL,
	[Periodo] [char](6) NOT NULL,
	[NumTicket] [varchar](15) NOT NULL,
	[Secuencia] [int] NULL,
	[TipoProceso] [char](2) NULL,
	[FechaProceso] [datetime] NULL,
	[NumeroRegistros] [int] NULL,
	[NombreArchivo] [varchar](200) NULL,
	[Correlativo] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[ID_Ticket] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_empresa]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_empresa](
	[RazonSocial] [varchar](250) NOT NULL,
	[DocumentoFiscal] [char](11) NOT NULL,
	[Ciudad] [varchar](250) NOT NULL,
	[Direccion] [varchar](250) NOT NULL,
	[Telefono] [varchar](30) NULL,
	[CorreoElectronico] [varchar](50) NOT NULL,
	[Clave] [varchar](50) NOT NULL,
	[Estado] [char](1) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[DocumentoFiscal] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_usuario]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_usuario](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[ApellidoPaterno] [varchar](150) NOT NULL,
	[ApellidoMaterno] [varchar](150) NOT NULL,
	[Nombres] [varchar](100) NOT NULL,
	[Cargo] [varchar](250) NOT NULL,
	[CorreoElectronico] [varchar](50) NOT NULL,
	[Telefono] [varchar](50) NULL,
	[NumeroCelular] [char](9) NOT NULL,
	[FechaRegistro] [datetime] NOT NULL,
	[FechaInicio] [datetime] NOT NULL,
	[FechaFinal] [datetime] NOT NULL,
	[ImporteContrato] [decimal](18, 6) NOT NULL,
	[Usuario] [varchar](50) NOT NULL,
	[Password] [varchar](50) NOT NULL,
	[Foto] [varchar](255) NOT NULL,
	[Estado] [char](1) NOT NULL,
	[Token] [varchar](255) NULL,
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_usuario_empresa]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tb_usuario_empresa](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[Usuario] [int] NOT NULL,
	[Empresa] [char](11) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[tb_empresa] ADD  DEFAULT (NULL) FOR [Telefono]
GO
ALTER TABLE [dbo].[tb_usuario] ADD  DEFAULT (NULL) FOR [Telefono]
GO
ALTER TABLE [dbo].[tb_usuario] ADD  DEFAULT (NULL) FOR [Token]
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_EMPRESA]  WITH CHECK ADD FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_SUNAT]  WITH CHECK ADD FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_Ticket]  WITH CHECK ADD FOREIGN KEY([CompaniaCodigo])
REFERENCES [dbo].[tb_empresa] ([DocumentoFiscal])
GO
ALTER TABLE [dbo].[tb_usuario_empresa]  WITH CHECK ADD FOREIGN KEY([Empresa])
REFERENCES [dbo].[tb_empresa] ([DocumentoFiscal])
GO
ALTER TABLE [dbo].[tb_usuario_empresa]  WITH CHECK ADD FOREIGN KEY([Usuario])
REFERENCES [dbo].[tb_usuario] ([ID])
GO
/****** Object:  StoredProcedure [dbo].[Sire_SP_RegistroCompras_EMPRESA]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE PROCEDURE [dbo].[Sire_SP_RegistroCompras_EMPRESA]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + QUOTENAME(@name_table);
    EXEC sp_executesql @drop_sql;
  END

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + QUOTENAME(@name_table) + '(
      [FechaEmision] [date] NULL,
		[FechaVencimiento] [numeric](18, 6) NULL,
		[TipoDocumento] [varchar](2) NULL,
		[SerieDcoumento] [varchar](20) NULL,
		[NumeroDocumento] [varchar](20) NULL,
		[Ticket] [varchar](50) NULL,
		[TipDocIdentidad] [varchar](5) NULL,
		[NroDocIdentidad] [varchar](20) NULL,
		[RazonSocial] [varchar](500) NULL,
		[MontoExportacion] [numeric](18, 6) NULL,
		[BaseImponibleGravado] [numeric](18, 6) NULL,
		[BaseImponibleDsct] [numeric](18, 6) NULL,
		[BaseIgvIpm] [numeric](18, 6) NULL,
		[DsctoIgvIpm] [numeric](18, 6) NULL,
		[MontoExonerado] [numeric](18, 6) NULL,
		[MontoInafecto] [numeric](18, 6) NULL,
		[MontoISC] [numeric](18, 6) NULL,
		[BaseImponibleIvap] [numeric](18, 6) NULL,
		[MontoIvap] [numeric](18, 6) NULL,
		[MontoICBPER] [numeric](18, 6) NULL,
		[MontoOtrostributos] [numeric](18, 6) NULL,
		[MontoTotal] [numeric](18, 6) NULL,
		[Moneda] [varchar](10) NULL,
		[TipoCambio] [numeric](18, 6) NULL,
		[FecEmisionDocModificado] [date] NULL,
		[TipoDocModificado] [varchar](2) NULL,
		[SerieDocModificado] [varchar](20) NULL,
		[NumeroDocModificado] [varchar](20) NULL,
		[ProyectoOperadosAtribucion] [varchar](100) NULL,
		[TipodeNota] [varchar](20) NULL,
		[EstadoComprobante] [varchar](100) NULL,
		[ValorFOBEmbarcado] [varchar](100) NULL,
		[ValorOperacionGratuito] [varchar](100) NULL,
		[TipoOperacion] [varchar](100) NULL,
		[DamCP] [varchar](100) NULL,
		[CLU] [varchar](100) NULL,
		[CarSunat] [varchar](100) NULL
    )';

  EXEC sp_executesql @create_table_sql;

  
	  -- Construir la instrucción BULK INSERT y ejecutarla directamente
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + QUOTENAME(@name_table) + ' FROM ''' + @ruta_archivo + ''' WITH (FIELDTERMINATOR=''|'', ROWTERMINATOR=''\n'', FIRSTROW=2)';
  EXEC sp_executesql @sql;

END;
GO
/****** Object:  StoredProcedure [dbo].[Sire_SP_RegistroCompras_SUNAT]    Script Date: 27/11/2023 20:09:25 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[Sire_SP_RegistroCompras_SUNAT]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + QUOTENAME(@name_table);
    EXEC sp_executesql @drop_sql;
  END

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + QUOTENAME(@name_table) + '(
      [FechaEmision] [date] NULL,
		[FechaVencimiento] [numeric](18, 6) NULL,
		[TipoDocumento] [varchar](2) NULL,
		[SerieDcoumento] [varchar](20) NULL,
		[NumeroDocumento] [varchar](20) NULL,
		[Ticket] [varchar](50) NULL,
		[TipDocIdentidad] [varchar](5) NULL,
		[NroDocIdentidad] [varchar](20) NULL,
		[RazonSocial] [varchar](500) NULL,
		[MontoExportacion] [numeric](18, 6) NULL,
		[BaseImponibleGravado] [numeric](18, 6) NULL,
		[BaseImponibleDsct] [numeric](18, 6) NULL,
		[BaseIgvIpm] [numeric](18, 6) NULL,
		[DsctoIgvIpm] [numeric](18, 6) NULL,
		[MontoExonerado] [numeric](18, 6) NULL,
		[MontoInafecto] [numeric](18, 6) NULL,
		[MontoISC] [numeric](18, 6) NULL,
		[BaseImponibleIvap] [numeric](18, 6) NULL,
		[MontoIvap] [numeric](18, 6) NULL,
		[MontoICBPER] [numeric](18, 6) NULL,
		[MontoOtrostributos] [numeric](18, 6) NULL,
		[MontoTotal] [numeric](18, 6) NULL,
		[Moneda] [varchar](10) NULL,
		[TipoCambio] [numeric](18, 6) NULL,
		[FecEmisionDocModificado] [date] NULL,
		[TipoDocModificado] [varchar](2) NULL,
		[SerieDocModificado] [varchar](20) NULL,
		[NumeroDocModificado] [varchar](20) NULL,
		[ProyectoOperadosAtribucion] [varchar](100) NULL,
		[TipodeNota] [varchar](20) NULL,
		[EstadoComprobante] [varchar](100) NULL,
		[ValorFOBEmbarcado] [varchar](100) NULL,
		[ValorOperacionGratuito] [varchar](100) NULL,
		[TipoOperacion] [varchar](100) NULL,
		[DamCP] [varchar](100) NULL,
		[CLU] [varchar](100) NULL,
		[CarSunat] [varchar](100) NULL
    )';

  EXEC sp_executesql @create_table_sql;

  
	  -- Construir la instrucción BULK INSERT y ejecutarla directamente
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + QUOTENAME(@name_table) + ' FROM ''' + @ruta_archivo + ''' WITH (FIELDTERMINATOR=''|'', ROWTERMINATOR=''\n'', FIRSTROW=2)';
  EXEC sp_executesql @sql;
  
  --insertar tickets


END;
GO
USE [master]
GO
ALTER DATABASE [grupoinkillay] SET  READ_WRITE 
GO
