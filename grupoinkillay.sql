USE [master]
GO
/****** Object:  Database [grupoinkillay]    Script Date: 4/12/2023 16:55:21 ******/
CREATE DATABASE [grupoinkillay]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'grupoinkillay', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\grupoinkillay.mdf' , SIZE = 73728KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'grupoinkillay_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\grupoinkillay_log.ldf' , SIZE = 335872KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
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
EXEC sys.sp_db_vardecimal_storage_format N'grupoinkillay', N'ON'
GO
ALTER DATABASE [grupoinkillay] SET QUERY_STORE = ON
GO
ALTER DATABASE [grupoinkillay] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [grupoinkillay]
GO
/****** Object:  User [alexander]    Script Date: 4/12/2023 16:55:21 ******/
CREATE USER [alexander] FOR LOGIN [alexander] WITH DEFAULT_SCHEMA=[dbo]
GO
ALTER ROLE [db_owner] ADD MEMBER [alexander]
GO
ALTER ROLE [db_accessadmin] ADD MEMBER [alexander]
GO
ALTER ROLE [db_securityadmin] ADD MEMBER [alexander]
GO
ALTER ROLE [db_ddladmin] ADD MEMBER [alexander]
GO
ALTER ROLE [db_backupoperator] ADD MEMBER [alexander]
GO
ALTER ROLE [db_datareader] ADD MEMBER [alexander]
GO
ALTER ROLE [db_datawriter] ADD MEMBER [alexander]
GO
/****** Object:  Table [dbo].[HistorialCambios]    Script Date: 4/12/2023 16:55:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[HistorialCambios](
	[IdHistorialCambio] [int] IDENTITY(1,1) NOT NULL,
	[Tabla] [varchar](200) NULL,
	[CompaniaCodigo] [char](11) NULL,
	[IdRegistro] [int] NULL,
	[Accion] [char](1) NULL,
	[Campo] [varchar](200) NULL,
	[ValorInicial] [text] NULL,
	[ValorFinal] [text] NULL,
	[Usuario] [varchar](20) NULL,
	[FechaCreacion] [datetime] NULL,
PRIMARY KEY CLUSTERED 
(
	[IdHistorialCambio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[LibroMast]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[LibroMast](
	[IdLibro] [int] IDENTITY(1,1) NOT NULL,
	[LibroNombre] [varchar](50) NULL,
	[ImportaArchivo] [char](1) NULL,
	[ValidaTicket] [char](1) NULL,
	[Comentarios] [text] NULL,
	[Estado] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[IdLibro] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[MaestroEstado]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[MaestroEstado](
	[Tabla] [varchar](200) NULL,
	[IdEstado] [int] IDENTITY(1,1) NOT NULL,
	[EstadoNombre] [char](18) NULL,
	[Comentarios] [text] NULL,
	[Estado] [char](2) NULL,
PRIMARY KEY CLUSTERED 
(
	[IdEstado] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroCompras_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroCompras_EMPRESA](
	[ID_RegCompEmpresa] [int] IDENTITY(1,1) NOT NULL,
	[ID_Ticket] [int] NOT NULL,
	[FechaEmision] [datetime] NULL,
	[FechaVencimiento] [datetime] NULL,
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
 CONSTRAINT [PK__SIRE_Reg__838B7BFF6E835073] PRIMARY KEY CLUSTERED 
(
	[ID_RegCompEmpresa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroCompras_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroCompras_SUNAT](
	[ID_RegCompSunat] [int] IDENTITY(1,1) NOT NULL,
	[ID_Ticket] [int] NULL,
	[FechaEmision] [datetime] NULL,
	[FechaVencimiento] [datetime] NULL,
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
 CONSTRAINT [PK_SIRE_RegistroCompras_SUNAT] PRIMARY KEY CLUSTERED 
(
	[ID_RegCompSunat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroVentas_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroVentas_EMPRESA](
	[ID_RegVentEmpresa] [int] IDENTITY(1,1) NOT NULL,
	[ID_Ticket] [int] NULL,
	[FechaEmision] [date] NULL,
	[FechaVencimiento] [datetime] NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [int] NULL,
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
	[CarSunat] [varchar](100) NULL,
 CONSTRAINT [PK__SIRE_Reg__19B58FDAE9FC4AF7] PRIMARY KEY CLUSTERED 
(
	[ID_RegVentEmpresa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_RegistroVentas_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_RegistroVentas_SUNAT](
	[ID_RegVentSunat] [int] IDENTITY(1,1) NOT NULL,
	[ID_Ticket] [int] NULL,
	[FechaEmision] [datetime] NULL,
	[FechaVencimiento] [datetime] NULL,
	[TipoDocumento] [varchar](2) NULL,
	[SerieDcoumento] [varchar](20) NULL,
	[NumeroDocumento] [varchar](20) NULL,
	[Ticket] [int] NULL,
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
	[CarSunat] [varchar](100) NULL,
 CONSTRAINT [PK__SIRE_Reg__832033693022B9BF] PRIMARY KEY CLUSTERED 
(
	[ID_RegVentSunat] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[SIRE_Ticket]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[SIRE_Ticket](
	[ID_Ticket] [int] IDENTITY(1,1) NOT NULL,
	[CompaniaCodigo] [char](11) NOT NULL,
	[Periodo] [char](6) NOT NULL,
	[NumTicket] [varchar](15) NOT NULL,
	[FechaProceso] [datetime] NULL,
	[NumeroRegistrosSUNAT] [int] NULL,
	[NumeroRegistrosEmpresa] [int] NULL,
	[NombreArchivoSUNAT] [varchar](200) NULL,
	[NombreArchivoEmpresa] [varchar](200) NULL,
	[Correlativo] [int] NULL,
	[Estado] [char](1) NULL,
	[IdLibroSUNAT] [int] NULL,
	[IdLibroEmpresa] [int] NULL,
 CONSTRAINT [PK__SIRE_Tic__79F5DC08FDC93228] PRIMARY KEY CLUSTERED 
(
	[ID_Ticket] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_empresa]    Script Date: 4/12/2023 16:55:22 ******/
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
	[CorreoElectronico] [varchar](50) NULL,
	[Estado] [varchar](50) NOT NULL,
 CONSTRAINT [PK__tb_empre__F0E5F0A0794285E8] PRIMARY KEY CLUSTERED 
(
	[DocumentoFiscal] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tb_usuario]    Script Date: 4/12/2023 16:55:22 ******/
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
/****** Object:  Table [dbo].[tb_usuario_empresa]    Script Date: 4/12/2023 16:55:22 ******/
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
SET IDENTITY_INSERT [dbo].[LibroMast] ON 

INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (1, N'Registro Compras Propuesto', N'S', N'S', NULL, 1)
INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (2, N'Registro Compras Empresa', N'S', N'N', NULL, 1)
INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (3, N'Registro Ventas Propuesto', N'S', N'S', NULL, 1)
INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (4, N'Registro Ventas Empresa', N'S', N'N', NULL, 1)
INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (5, N'Anexo 8 - Agregar CP', N'N', N'S', NULL, 0)
INSERT [dbo].[LibroMast] ([IdLibro], [LibroNombre], [ImportaArchivo], [ValidaTicket], [Comentarios], [Estado]) VALUES (6, N'Anexo 8 - Excluir e Incluir', N'N', N'S', NULL, 0)
SET IDENTITY_INSERT [dbo].[LibroMast] OFF
GO
INSERT [dbo].[tb_empresa] ([RazonSocial], [DocumentoFiscal], [Ciudad], [Direccion], [Telefono], [CorreoElectronico], [Estado]) VALUES (N'ARQUISAM S.A.C.', N'20603565178', N'HUACHO', N'CAL. LIBERTAD NRO. S/N SEC. DE AMAY LIMA HUAURA HUACHO', N'', N'', N'ACTIVO')
INSERT [dbo].[tb_empresa] ([RazonSocial], [DocumentoFiscal], [Ciudad], [Direccion], [Telefono], [CorreoElectronico], [Estado]) VALUES (N'DAREMA TECHNOLOGY S.A.C.', N'20611362871', N'HUAURA', N'AV. LOS LIBERTADORES NRO. 124 LIMA HUAURA HUAURA', N'2321177', N'', N'ACTIVO')
INSERT [dbo].[tb_empresa] ([RazonSocial], [DocumentoFiscal], [Ciudad], [Direccion], [Telefono], [CorreoElectronico], [Estado]) VALUES (N'KALUZA SOLUCIONES INTEGRALES S.A.C.', N'20611657251', N'LA LIBERTAD', N'CAL. 20 NRO. 20 LIMA LIMA COMAS', N'987123000', N'', N'ACTIVO')
GO
SET IDENTITY_INSERT [dbo].[tb_usuario] ON 

INSERT [dbo].[tb_usuario] ([ID], [ApellidoPaterno], [ApellidoMaterno], [Nombres], [Cargo], [CorreoElectronico], [Telefono], [NumeroCelular], [FechaRegistro], [FechaInicio], [FechaFinal], [ImporteContrato], [Usuario], [Password], [Foto], [Estado], [Token]) VALUES (1, N'Bonatti', N'Pajuelo', N'Diego', N'Administrador', N'bonatti@gmail.com', N'2321177', N'987456321', CAST(N'2023-02-02T00:00:00.000' AS DateTime), CAST(N'2023-02-02T00:00:00.000' AS DateTime), CAST(N'2023-04-05T00:00:00.000' AS DateTime), CAST(1500.000000 AS Decimal(18, 6)), N'diego', N'123', N'avatar.png', N'1', NULL)
SET IDENTITY_INSERT [dbo].[tb_usuario] OFF
GO
SET IDENTITY_INSERT [dbo].[tb_usuario_empresa] ON 

INSERT [dbo].[tb_usuario_empresa] ([ID], [Usuario], [Empresa]) VALUES (1, 1, N'20611362871')
SET IDENTITY_INSERT [dbo].[tb_usuario_empresa] OFF
GO
ALTER TABLE [dbo].[tb_empresa] ADD  CONSTRAINT [DF__tb_empres__Telef__46E78A0C]  DEFAULT (NULL) FOR [Telefono]
GO
ALTER TABLE [dbo].[tb_usuario] ADD  DEFAULT (NULL) FOR [Telefono]
GO
ALTER TABLE [dbo].[tb_usuario] ADD  DEFAULT (NULL) FOR [Token]
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_EMPRESA]  WITH CHECK ADD  CONSTRAINT [FK__SIRE_Regi__ID_Ti__49C3F6B7] FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_EMPRESA] CHECK CONSTRAINT [FK__SIRE_Regi__ID_Ti__49C3F6B7]
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_SUNAT]  WITH CHECK ADD  CONSTRAINT [FK_SIRE_RegistroCompras_SUNAT_SIRE_Ticket] FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_RegistroCompras_SUNAT] CHECK CONSTRAINT [FK_SIRE_RegistroCompras_SUNAT_SIRE_Ticket]
GO
ALTER TABLE [dbo].[SIRE_RegistroVentas_EMPRESA]  WITH CHECK ADD  CONSTRAINT [FK__SIRE_Regi__ID_Ti__09746778] FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_RegistroVentas_EMPRESA] CHECK CONSTRAINT [FK__SIRE_Regi__ID_Ti__09746778]
GO
ALTER TABLE [dbo].[SIRE_RegistroVentas_SUNAT]  WITH CHECK ADD  CONSTRAINT [FK__SIRE_Regi__ID_Ti__0697FACD] FOREIGN KEY([ID_Ticket])
REFERENCES [dbo].[SIRE_Ticket] ([ID_Ticket])
GO
ALTER TABLE [dbo].[SIRE_RegistroVentas_SUNAT] CHECK CONSTRAINT [FK__SIRE_Regi__ID_Ti__0697FACD]
GO
ALTER TABLE [dbo].[SIRE_Ticket]  WITH CHECK ADD  CONSTRAINT [FK_SIRE_Ticket_LibroMast] FOREIGN KEY([IdLibroSUNAT])
REFERENCES [dbo].[LibroMast] ([IdLibro])
GO
ALTER TABLE [dbo].[SIRE_Ticket] CHECK CONSTRAINT [FK_SIRE_Ticket_LibroMast]
GO
ALTER TABLE [dbo].[SIRE_Ticket]  WITH CHECK ADD  CONSTRAINT [FK_SIRE_Ticket_LibroMast1] FOREIGN KEY([IdLibroEmpresa])
REFERENCES [dbo].[LibroMast] ([IdLibro])
GO
ALTER TABLE [dbo].[SIRE_Ticket] CHECK CONSTRAINT [FK_SIRE_Ticket_LibroMast1]
GO
ALTER TABLE [dbo].[tb_usuario_empresa]  WITH CHECK ADD  CONSTRAINT [FK__tb_usuari__Empre__4CA06362] FOREIGN KEY([Empresa])
REFERENCES [dbo].[tb_empresa] ([DocumentoFiscal])
GO
ALTER TABLE [dbo].[tb_usuario_empresa] CHECK CONSTRAINT [FK__tb_usuari__Empre__4CA06362]
GO
ALTER TABLE [dbo].[tb_usuario_empresa]  WITH CHECK ADD FOREIGN KEY([Usuario])
REFERENCES [dbo].[tb_usuario] ([ID])
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_ActualizarCompras_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_ActualizarCompras_EMPRESA]
@ruta_archivo varchar(255),
@name_table varchar(100),
@id_ticket int
AS
BEGIN
  -- Verificar si la tabla temporal ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';
  EXEC sp_executesql @create_table_sql;

  -- Construir la instrucción BULK INSERT e insertar datos en la tabla temporal
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
  EXEC sp_executesql @sql;

  --agrego un nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;

	 --ACTUALIZO EL ID DE LA TABLA
	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;

  -- Actualizar tabla maestra de compras SUNAT por ID_TICKET
 --ELIMINARE LOS DATOS CON EL ID DENTRO DE LA TABLA  
	DECLARE @sql_where_table NVARCHAR(MAX);
	SET @sql_where_table = N'DELETE FROM [dbo].[SIRE_RegistroCompras_EMPRESA] WHERE ID_Ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_where_table;
	-- INSERTAMOS LOS NUEVOS VALORES CON EL MISMO ID_TICKET
	DECLARE @captura_temporal NVARCHAR(MAX);
	SET @captura_temporal = N'
	  INSERT INTO SIRE_RegistroCompras_EMPRESA (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat)
	   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat
	FROM ' + @name_table;

	EXEC sp_executesql @captura_temporal;
  -- Eliminar tabla temporal creada
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END
END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_ActualizarCompras_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_ActualizarCompras_SUNAT]
@ruta_archivo varchar(255),
@name_table varchar(100),
@id_ticket int
AS
BEGIN
  -- Verificar si la tabla temporal ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';
  EXEC sp_executesql @create_table_sql;

  -- Construir la instrucción BULK INSERT e insertar datos en la tabla temporal
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
  EXEC sp_executesql @sql;

  --agrego un nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;

	 --ACTUALIZO EL ID DE LA TABLA
	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;

  -- Actualizar tabla maestra de compras SUNAT por ID_TICKET
 --ELIMINARE LOS DATOS CON EL ID DENTRO DE LA TABLA  
	DECLARE @sql_where_table NVARCHAR(MAX);
	SET @sql_where_table = N'DELETE FROM [dbo].[SIRE_RegistroCompras_SUNAT] WHERE ID_Ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_where_table;
	-- INSERTAMOS LOS NUEVOS VALORES CON EL MISMO ID_TICKET
	DECLARE @captura_temporal NVARCHAR(MAX);
	SET @captura_temporal = N'
	  INSERT INTO SIRE_RegistroCompras_SUNAT (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat)
	   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat
	FROM ' + @name_table;

	EXEC sp_executesql @captura_temporal;
  -- Eliminar tabla temporal creada
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END
END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_ActualizarVentas_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_ActualizarVentas_EMPRESA]
@ruta_archivo varchar(255),
@name_table varchar(100),
@id_ticket int
AS
BEGIN
  -- Verificar si la tabla temporal ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';
  EXEC sp_executesql @create_table_sql;

  -- Construir la instrucción BULK INSERT e insertar datos en la tabla temporal
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
  EXEC sp_executesql @sql;

  --agrego un nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;

	 --ACTUALIZO EL ID DE LA TABLA
	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;

  -- Actualizar tabla maestra de compras SUNAT por ID_TICKET
 --ELIMINARE LOS DATOS CON EL ID DENTRO DE LA TABLA  
	DECLARE @sql_where_table NVARCHAR(MAX);
	SET @sql_where_table = N'DELETE FROM [dbo].[SIRE_RegistroVentas_EMPRESA] WHERE ID_Ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_where_table;
	-- INSERTAMOS LOS NUEVOS VALORES CON EL MISMO ID_TICKET
	DECLARE @captura_temporal NVARCHAR(MAX);
	SET @captura_temporal = N'
	  INSERT INTO SIRE_RegistroVentas_EMPRESA (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat)
	   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat
	FROM ' + @name_table;

	EXEC sp_executesql @captura_temporal;
  -- Eliminar tabla temporal creada
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END
END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_ActualizarVentas_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_ActualizarVentas_SUNAT]
@ruta_archivo varchar(255),
@name_table varchar(100),
@id_ticket int
AS
BEGIN
  -- Verificar si la tabla temporal ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 

  -- Crear la tabla temporal
  DECLARE @create_table_sql NVARCHAR(MAX);
  SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';
  EXEC sp_executesql @create_table_sql;

  -- Construir la instrucción BULK INSERT e insertar datos en la tabla temporal
  DECLARE @sql NVARCHAR(MAX);
  SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
  EXEC sp_executesql @sql;

  --agrego un nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;

	 --ACTUALIZO EL ID DE LA TABLA
	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;

  -- Actualizar tabla maestra de compras SUNAT por ID_TICKET
 --ELIMINARE LOS DATOS CON EL ID DENTRO DE LA TABLA  
	DECLARE @sql_where_table NVARCHAR(MAX);
	SET @sql_where_table = N'DELETE FROM [dbo].[SIRE_RegistroVentas_SUNAT] WHERE ID_Ticket = ' +CAST(@id_ticket  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_where_table;
	-- INSERTAMOS LOS NUEVOS VALORES CON EL MISMO ID_TICKET
	DECLARE @captura_temporal NVARCHAR(MAX);
	SET @captura_temporal = N'
	  INSERT INTO SIRE_RegistroVentas_SUNAT (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat)
	   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
	   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
	   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
	   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
	   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
	   CarSunat
	FROM ' + @name_table;

	EXEC sp_executesql @captura_temporal;
  -- Eliminar tabla temporal creada
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END
END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_RegistroCompras_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_RegistroCompras_EMPRESA]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 
 

  -- Crear la tabla temporal
	DECLARE @create_table_sql NVARCHAR(MAX);
	SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';

EXEC sp_executesql @create_table_sql;


  -- Construir la instrucción BULK INSERT y ejecutarla directamente
	DECLARE @sql NVARCHAR(MAX);
	SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
	EXEC sp_executesql @sql;

	--agregoun nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;
	--end

	--traer id_ticket
	--DECLARE @sql_id_ticket NVARCHAR(MAX);
	--SET @sql_id_ticket =N'SELECT MAX(ID_Ticket) FROM SIRE_Ticket';
	--EXEC sp_executesql @sql_id_ticket;
	DECLARE @sql_id_ticket NVARCHAR(MAX);
	DECLARE @max_id INT;

	SET @sql_id_ticket = N'SELECT @max_id_result = MAX(ID_Ticket) FROM SIRE_Ticket';
	EXEC sp_executesql @sql_id_ticket, N'@max_id_result INT OUTPUT', @max_id OUTPUT;

	
  --ACTUALIZO EL ID DE LA TABLA

	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@max_id  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;


DECLARE @captura_temporal NVARCHAR(MAX);

SET @captura_temporal = N'
  INSERT INTO SIRE_RegistroCompras_EMPRESA (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat)
   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat
  FROM ' + @name_table;

EXEC sp_executesql @captura_temporal;

-- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END 


END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_RegistroCompras_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_RegistroCompras_SUNAT]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 
 

  -- Crear la tabla temporal
	DECLARE @create_table_sql NVARCHAR(MAX);
	SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';

EXEC sp_executesql @create_table_sql;


  -- Construir la instrucción BULK INSERT y ejecutarla directamente
	DECLARE @sql NVARCHAR(MAX);
	SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
	EXEC sp_executesql @sql;

	--agregoun nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;
	--end

	--traer id_ticket
	--DECLARE @sql_id_ticket NVARCHAR(MAX);
	--SET @sql_id_ticket =N'SELECT MAX(ID_Ticket) FROM SIRE_Ticket';
	--EXEC sp_executesql @sql_id_ticket;
	DECLARE @sql_id_ticket NVARCHAR(MAX);
	DECLARE @max_id INT;

	SET @sql_id_ticket = N'SELECT @max_id_result = MAX(ID_Ticket) FROM SIRE_Ticket';
	EXEC sp_executesql @sql_id_ticket, N'@max_id_result INT OUTPUT', @max_id OUTPUT;

	
  --ACTUALIZO EL ID DE LA TABLA

	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@max_id  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;


DECLARE @captura_temporal NVARCHAR(MAX);

SET @captura_temporal = N'
  INSERT INTO SIRE_RegistroCompras_SUNAT (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat)
   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat
  FROM ' + @name_table;

EXEC sp_executesql @captura_temporal;

-- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END 


END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_RegistroVentas_EMPRESA]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_RegistroVentas_EMPRESA]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 
 

  -- Crear la tabla temporal
	DECLARE @create_table_sql NVARCHAR(MAX);
	SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';

EXEC sp_executesql @create_table_sql;


  -- Construir la instrucción BULK INSERT y ejecutarla directamente
	DECLARE @sql NVARCHAR(MAX);
	SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
	EXEC sp_executesql @sql;

	--agregoun nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;
	--end

	--traer id_ticket
	--DECLARE @sql_id_ticket NVARCHAR(MAX);
	--SET @sql_id_ticket =N'SELECT MAX(ID_Ticket) FROM SIRE_Ticket';
	--EXEC sp_executesql @sql_id_ticket;
	DECLARE @sql_id_ticket NVARCHAR(MAX);
	DECLARE @max_id INT;

	SET @sql_id_ticket = N'SELECT @max_id_result = MAX(ID_Ticket) FROM SIRE_Ticket';
	EXEC sp_executesql @sql_id_ticket, N'@max_id_result INT OUTPUT', @max_id OUTPUT;

	
  --ACTUALIZO EL ID DE LA TABLA

	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@max_id  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;


DECLARE @captura_temporal NVARCHAR(MAX);

SET @captura_temporal = N'
  INSERT INTO SIRE_RegistroVentas_EMPRESA (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat)
   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat
  FROM ' + @name_table;

EXEC sp_executesql @captura_temporal;

-- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END 


END;
GO
/****** Object:  StoredProcedure [dbo].[SIRE_SP_RegistroVentas_SUNAT]    Script Date: 4/12/2023 16:55:22 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[SIRE_SP_RegistroVentas_SUNAT]
@ruta_archivo varchar(255),
@name_table varchar(100)
AS
BEGIN

  -- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql NVARCHAR(MAX);
    SET @drop_sql = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql;
  END 
 

  -- Crear la tabla temporal
	DECLARE @create_table_sql NVARCHAR(MAX);
	SET @create_table_sql = N'
    CREATE TABLE ' + @name_table + '(
        FechaEmision [datetime] NULL,
        FechaVencimiento [datetime] NULL,
        TipoDocumento [varchar](2) NULL,
        SerieDcoumento [varchar](20) NULL,
        NumeroDocumento [varchar](20) NULL,
        Ticket [varchar](50) NULL,
        TipDocIdentidad [varchar](5) NULL,
        NroDocIdentidad [varchar](20) NULL,
        RazonSocial [varchar](500) NULL,
        MontoExportacion [numeric](18, 6) NULL,
        BaseImponibleGravado [numeric](18, 6) NULL,
        BaseImponibleDsct [numeric](18, 6) NULL,
        BaseIgvIpm [numeric](18, 6) NULL,
        DsctoIgvIpm [numeric](18, 6) NULL,
        MontoExonerado [numeric](18, 6) NULL,
        MontoInafecto [numeric](18, 6) NULL,
        MontoISC [numeric](18, 6) NULL,
        BaseImponibleIvap [numeric](18, 6) NULL,
        MontoIvap [numeric](18, 6) NULL,
        MontoICBPER [numeric](18, 6) NULL,
        MontoOtrostributos [numeric](18, 6) NULL,
        MontoTotal [numeric](18, 6) NULL,
        Moneda [varchar](10) NULL,
        TipoCambio [numeric](18, 6) NULL,
        FecEmisionDocModificado [datetime] NULL,
        TipoDocModificado [varchar](2) NULL,
        SerieDocModificado [varchar](20) NULL,
        NumeroDocModificado [varchar](20) NULL,
        ProyectoOperadosAtribucion [varchar](100) NULL,
        TipodeNota [varchar](20) NULL,
        EstadoComprobante [varchar](100) NULL,
        ValorFOBEmbarcado [varchar](100) NULL,
        ValorOperacionGratuito [varchar](100) NULL,
        TipoOperacion [varchar](100) NULL,
        DamCP [varchar](100) NULL,
        CLU [varchar](100) NULL,
        CarSunat [varchar](100) NULL
    )';

EXEC sp_executesql @create_table_sql;


  -- Construir la instrucción BULK INSERT y ejecutarla directamente
	DECLARE @sql NVARCHAR(MAX);
	SET @sql = N'BULK INSERT ' + @name_table + ' 
            FROM ''' + @ruta_archivo + ''' 
            WITH (
                FIELDTERMINATOR=''|'', 
                ROWTERMINATOR=''\n'', 
                FIRSTROW=2
            )';
	EXEC sp_executesql @sql;

	--agregoun nuevo campo a la tabla temporal
	DECLARE @sql_update_table NVARCHAR(MAX);
	SET @sql_update_table ='ALTER TABLE ' + @name_table+ ' ADD id_ticket INT NULL';
	EXEC sp_executesql @sql_update_table;
	--end

	--traer id_ticket
	--DECLARE @sql_id_ticket NVARCHAR(MAX);
	--SET @sql_id_ticket =N'SELECT MAX(ID_Ticket) FROM SIRE_Ticket';
	--EXEC sp_executesql @sql_id_ticket;
	DECLARE @sql_id_ticket NVARCHAR(MAX);
	DECLARE @max_id INT;

	SET @sql_id_ticket = N'SELECT @max_id_result = MAX(ID_Ticket) FROM SIRE_Ticket';
	EXEC sp_executesql @sql_id_ticket, N'@max_id_result INT OUTPUT', @max_id OUTPUT;

	
  --ACTUALIZO EL ID DE LA TABLA

	DECLARE @sql_update NVARCHAR(MAX);
	SET @sql_update = N'UPDATE ' + @name_table + ' SET id_ticket = ' +CAST(@max_id  AS NVARCHAR(MAX)) ;
	EXEC sp_executesql @sql_update;


DECLARE @captura_temporal NVARCHAR(MAX);

SET @captura_temporal = N'
  INSERT INTO SIRE_RegistroVentas_SUNAT (ID_Ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat)
   SELECT id_ticket,FechaEmision, FechaVencimiento, TipoDocumento, SerieDcoumento, NumeroDocumento,
   Ticket, TipDocIdentidad, NroDocIdentidad, RazonSocial, MontoExportacion, BaseImponibleGravado, BaseImponibleDsct, BaseIgvIpm, 
   DsctoIgvIpm, MontoExonerado, MontoInafecto, MontoISC, BaseImponibleIvap, MontoIvap, MontoICBPER, MontoOtrostributos, MontoTotal, 
   Moneda, TipoCambio, FecEmisionDocModificado, TipoDocModificado, SerieDocModificado, NumeroDocModificado,
   ProyectoOperadosAtribucion, TipodeNota, EstadoComprobante, ValorFOBEmbarcado, ValorOperacionGratuito, TipoOperacion, DamCP, CLU, 
   CarSunat
  FROM ' + @name_table;

EXEC sp_executesql @captura_temporal;

-- Verificar si la tabla ya existe, si es así, eliminarla
  IF OBJECT_ID(@name_table, 'U') IS NOT NULL
  BEGIN
    DECLARE @drop_sql_2 NVARCHAR(MAX);
    SET @drop_sql_2 = N'DROP TABLE ' + @name_table;
    EXEC sp_executesql @drop_sql_2;
  END 


END;
GO
USE [master]
GO
ALTER DATABASE [grupoinkillay] SET  READ_WRITE 
GO
