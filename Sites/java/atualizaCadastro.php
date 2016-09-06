<?php 
require_once "protecao.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta charset="UTF-8" name="viewport"
	content="width=device-width, initial-scale=1.0">
	<!-- Para sinalizar aos navegadores que o site se adaptarÃƒÂ¡ a qualquer modelo -->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

	<title>Sistema WEB</title> <!-- css -->
	<!-- <link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap.css" />
	            <link rel="stylesheet" type="text/css" href="bibliotecas/bootstrap/css/bootstrap-responsive.css"  /> -->

	<!-- Úlima versão CSS compilada e minificada -->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
		integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
		crossorigin="anonymous">
		<link href="bibliotecas/tipTip.css" type="text/css" rel="stylesheet"
			media="screen" />
		<link href="estilo.css" type="text/css" rel="stylesheet" />
		<link href="menu.css" type="text/css" rel="stylesheet" />

		<style type=text/css>
p {
	text-align: justify;
}
</style>

</head>

<body style="width: 100%;">
	<div id="container">
		<!-- INÍCIO CONTAINER -->

<div id="fixo">
		<div class="imgcabecalho" style="background-color: rgba(0, 0, 0, 0.03); color: rgba(189, 185, 185, 0.95);">
			<font><font><center>IMAGEM COM MÁSCARA</center></font></font>
		</div>

		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO DA NAVBAR  /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<div class="navbar navbar-inverse"
			style="margin-bottom: 0px; border-top-width: 0px;width: 100%;position: absolute;z-index: 1;">
			<div class="container-fluid" style="height: 30px;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed"
						data-toggle="collapse" data-target="#bs-example-navbar-collapse-9"
						aria-expanded="false">
						<span class="sr-only"><font><font>navegação de alternância</font></font></span><span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<div style="margin-top: 2px; margin-left: 0%;font-size: large;"><font><font style=" color: white;">O melhor 	conteúdo da internet</font></font></div>
				</div>
				
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
					<div  id="mensagemlog" style=" position: absolute; right: inherit;">
								<ul class="nav navbar-nav">
								<li style=" color: white; margin-top: 10px; "><?php  echo"$logado, você está logado!" ?></li>
            					<li><a href="logout.php">logout</a></li>
        					</ul>
       					</div>
				</div>
				
			</div>
		</div>
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  FIM DA NAVBAR  /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO DA NAVBAR AZUL  /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<div class=""
			style="width: 100%; height: 0.3%; background-color: #E3E9EE; margin-top: 28px; position: absolute; z-index: 1;"></div>
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  FIM DA NAVBAR AZUL  /////////////////////////////////////////////////////////////////////////////////////////////////  -->

		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO  LINKs REDE SOCIAIS  //////////////////////////////////////////////////////////////////////////  -->
		<div>
			<div class="addthis_sharing_toolbox"></div>
		</div>
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  FIM  LINKs REDE SOCIAIS  //////////////////////////////////////////////////////////////////////////  -->

		<div class=""
			style="width: 100%; background-color: rgba(0, 0, 0, 0.03); margin-top: 30px; position: absolute;z-index: 1;">
			<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-9">
				<ul class="nav navbar-nav"
					style="position: relative; float: none; margin: 0px auto; display: block; width: 1000px;">
					
					<li class="active"><a href="logado.php"><font><font>HOME</font></font></a></li>
					<li><a href="ctbLog.php"><font><font>Código de Trânsito (CTB)</font></font></a></li>
					<li><a href="infracoesLog.php"><font><font>Infrações Mais Cometidas</font></font></a></li>
					<li><a href="minhasPeticoesLog.php"><font><font>Minhas Petições</font></font></a></li>
					<li><a href="modelosPeticoesLog.php"><font><font>Modelos de Petições</font></font></a></li>
					<li><a href="atualizaCadastro.php"><font><font>Atualizar Meu Cadastro</font></font></a></li>
					
					</ul>
			</div>
			
		</div>
				
</div> <!--  fim da div menu -->
</div><!-- FIM do cabeçalho -->

		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO DA DIV MENU  DIREITA /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<div id="menuright">

			<div class="bs-example" data-example-id="simple-thumbnails"
				style="width: 185px;">
				<div class="row"
					style="width: 187px; z-index: 1; padding-top: 25px; height: 796px;">
					<div class="col-xs-6 col-md-3" style="height: 180px; width: 201px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzQzMzIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3NDMzMiI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br /> <br /> <br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNmYxNTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA2ZjE1NSI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzQyMDIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3NDIwMiI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzI2YWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3MjZhZSI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
				</div>
			</div>

		</div>
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  FIM DA DIV MENU DIREITA /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO DA DIV MENU ESQUERDA /////////////////////////////////////////////////////////////////////////////////////////////////  -->
		<div id="menuleft">

			<div class="bs-example" data-example-id="simple-thumbnails"
				style="width: 196px;">
				<div class="row"
					style="width: 200px; z-index: 1; padding-top: 25px; height: 796px;">
					<div class="col-xs-6 col-md-3" style="height: 180px; width: 201px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzQzMzIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3NDMzMiI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br /> <br /> <br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNmYxNTUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA2ZjE1NSI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzQyMDIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3NDIwMiI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
					<br />
					<div class="col-xs-6 col-md-3"
						style="height: 180px; width: 201px; margin-top: 34px;">
						<a href="#" class="thumbnail"> <img data-src="holder.js/100%x180"
							alt="100%x180"
							src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTU1MDcwNzI2YWUgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTUwNzA3MjZhZSI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiPjwvcmVjdD48Zz48dGV4dCB4PSI2MSIgeT0iOTQuNSI+MTcxeDE4MDwvdGV4dD48L2c+PC9nPjwvc3ZnPg=="
							data-holder-rendered="true"
							style="height: 180px; width: 100%; display: block;"></a>
					</div>
				</div>
			</div>

		</div>
		<!-- ////////////////////////////////////////////////////////////////////////////////////////////////  FIM DA DIV MENU ESQUERDA /////////////////////////////////////////////////////////////////////////////////////////////////  -->
</div><!--  FIM DO ID FIXO -->

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  INÍCIO -  MENU CENTRAL /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div id="menucentral" style=" height: 1670px; ">

<div id="título" style=" margin-top: 62px; ">
        <h3>Atualizar Cadastro</h3>
        <hr style=" margin-top: 9px; border-bottom: 0.5px; "/>
        <hr />
        </div>

<div id="conteudo"> <!-- INÍCIO CONTEÚDO -->
<br />
 
 
 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////    INÍCIO TELA FORMULÁRIO   /////////////////////////////////////////////////////////////////////////// -->
<div id="atualizaCadastro">
<form action="">
										<div id="corpoForm">
											<div class="row">
												<div style="position: absolute; width: 37%; float: left">
													<label>Nome completo</label> <input type="nome"
														class="form-control" name="nome" id="nome"
														placeholder="Digite aqui seu NOME" />
												</div>
												<div
													style="position: absolute; left: 52%; width: 20%; float: left;">
													<label>Login</label> <input type="nome"
														class="form-control" name="cpf" id="cpf"
														required=" Por favor, preencha o campo CPF."
														placeholder="Digite seu LOGIN" />
												</div>
												<div style=" width: 33%;float: right;margin-top: -3px;margin-right: -124px;">
													<label>Email</label> <input type="email"
														class="form-control" name="email" id="email"
														placeholder="Digite aqui seu EMAIL" />
												</div>
											</div>
											<br /> <br /> <br /> <br />

											<div class="row">
											<div style="position: absolute; width: 37%; float: left; margin-top: -7%;">
													<label>CPF</label> <input type="nome" class="form-control"
														name="cpf" id="cpf"
														required=" Por favor, preencha o campo CPF."
														placeholder="Digite aqui seu CPF" />
												</div>
												<br /> <br /> <br /> <br />

												<div class="row" style=" margin-top: -4%; ">
													<div
														style="float: left; position: absolute; left: -1.5%; width: 23%;">
														<label>CEP (Somente números):</label><br /> <input
															type="text" class="form-control" name="cep" id="cep"
															placeholder="Digite aqui o CEP" /> <span
															id="resultadoCep"></span>
													</div>

													<div
														style="float: left; position: absolute; left: 30%; width: 33%;">
														<label>Endereço:</label><br /> <input type="text"
															class="form-control" name="rua" id="rua"
															placeholder="Digite aqui o seu ENDEREÇO" />
													</div>

													<div style="position: absolute; left: 75%; width: 7%;">
														<label>Número:</label><br /> <input type="text"
															class="form-control" name="numero" id="numero"
															placeholder="N" />
													</div>
													<div style="float: right; width: 25%;margin-right: -15%">
														<label>Bairro:</label><br /> <input type="text"
															class="form-control" name="bairro" id="bairro"
															placeholder="Digite o BAIRRO onde mora" />
													</div>
												</div>
												<br /> <br /> <br /> <br />

												<div class="row" style=" margin-top: -6%; ">
													

													<div style="float: left; width: 25%;margin-left: 3%;">
														<label>Cidade</label><br /> <input type="text"
															class="form-control" name="cidade" id="cidade"
															placeholder="Digite aqui a CIDADE onde mora" />
													</div>

													<div style="position: absolute; left: 54%; width: 9%;">
														<label>Estado</label><br /> <input type="text"
															class="form-control" name="estado" id="estado"
															placeholder="Ex: SP" />
													</div>
												</div>
												<br /> <br /> <br /> <br />

												<div class="row" style=" margin-top: -6%; ">
													<div
														style="float: left; position: absolute; left: -1.5%; width: 15%;">
														<label>Celular:</label><br /> <input type="text"
															class="form-control" name="celular" id="celular"
															placeholder="Seu CELULAR" />
													</div>

													<div style="float: left; margin-left: 30%;width: 17%;"><label>Celular (Recados):</label><br /> <input type="text"
															class="form-control" name="celularrec" id="celularrec"
															placeholder="Seu CELULAR" />
													</div>

													<div style="position: absolute; left: 65%; width: 17%;">
														<label>Telefone Fixo:</label><br /> <input type="text"
															class="form-control" name="telfixo" id="telfixo"
															placeholder="Digite o TELEFONE" />
													</div>
												</div>
												<br /> <br /> <br /> <br />

												<div class="row">
													<div style="float: left; position: absolute; left: -1.5%; width: 24%;"><label>Número de Registro da CNH:</label><br /> <input
															type="text" class="form-control" name="cnh" id="cnh" placeholder="Digite aqui sua CNH" />
													</div>
													<div style="float: left; position: absolute; left: 39%; width: 26%;"><label>Validade da CNH:</label><br /> <input type="text"
															class="form-control" name="vcnh" id="vcnh" placeholder="Digite aqui a VALIDADE da CNH" />
													</div>
													<div style="position: absolute; left: 80%; width: 24%;"><label>Data da 1ª Habilitação:</label><br /> <input
															type="text" class="form-control" name="habilitacao" id="habilitacao" placeholder="Digite a sua 1ª HABILITAÇÃO" />
													</div>
												</div>
												<br /> <br /> <br /> <br />
												<div class="row" style="text-align: center; margin-right: -159px; margin-top: 13%;">
													<div class="btn-group btn-group-justified" role="group"
														aria-label="Justified button group">
														<button type="submit" class="btn btn-default">Atualizar</button>
													
													</div>
												</div>
											</div>
										</div>

									</form>
								</div>
<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////    FIM TELA FORMULÁRIO   /////////////////////////////////////////////////////////////////////////// -->
 


</div> <!-- FIM CONTEÚDO -->
</div><!-- FIM MENUCENTRAL -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  FIM -  MENU CENTRAL /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	</div> <!-- FIM CONTAINER -->
   
<script src="js/jquery.min.js"></script>
<script src='cep.js' type='text/javascript'></script>
<script src="bibliotecas/jquery-ui.min.js" type="text/javascript"></script>
<script src="bibliotecas/jquery.tipTip.minified.js" type="text/javascript"></script>
<script src="bibliotecas/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- LIinks de Redes Sociais -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b8e6e25ef55808"></script>

	
<!-- 	http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/ -->
<!-- http://www.republicavirtual.com.br/cep/ -->
	
	</body>
</html>