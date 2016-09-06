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
		<div class="imgcabecalho" style="background-color: rgba(0, 0, 0, 0.03); color: rgba(189, 185, 185, 0.95);width: 1368px;">
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
					<div  id="mensagemlog" style=" position: absolute; right: inherit; ">
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

		<div class="" style="width: 100%; background-color: rgba(0, 0, 0, 0.03); margin-top: 30px; position: absolute;z-index: 1;">
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


<div id="menucentral" style="height: 1670px;">

<div id="título" style=" margin-top: 62px; ">
        <h3>Infrações Mais Cometidas</h3>
        <hr style=" margin-top: 9px; border-bottom: 0.5px; "/>
        <hr />
        </div>


<div id="conteudo"> <!-- INÍCIO CONTEÚDO -->


<br />

<div id="scrollbar">
<div class="small-12 medium-12 large-8 columns news single" style=" height: 1670px; ">
    		    <div class="row collapse head">
	    	<div class="small-12 columns date">
		    	<p><small>Publicado em 17 de agosto, 2015 as 09h36.</small></p>
		    </div>
	    	<div class="small-12 columns headline">
            	<h2>Portal faz levantamento sobre as infrações mais cometidas no Brasil</h2>            	<p><em></em></p>
            </div>
	    	<div class="small-6 columns author">
	    			    	<p><small>Por Mariana Czerwonka.</small></p>
		                </div>
	    	<div class="small-6 columns text-right">
	    		<div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><div class="sd-content"><ul><li class="share-facebook"><a rel="nofollow" data-shared="sharing-facebook-30341" class="share-facebook sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/?share=facebook&amp;nb=1" target="_blank" title="Clique para compartilhar no Facebook"><span>Facebook</span></a></li><li class="share-twitter"><a rel="nofollow" data-shared="sharing-twitter-30341" class="share-twitter sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/?share=twitter&amp;nb=1" target="_blank" title="Clique para compartilhar no Twitter"><span>Twitter</span></a></li><li><a href="#" class="sharing-anchor sd-button share-more"><span>Mais</span></a></li><li class="share-end"></li></ul><div class="sharing-hidden"><div class="inner" style="display: none;"><ul><li class="share-google-plus-1"><a rel="nofollow" data-shared="sharing-google-30341" class="share-google-plus-1 sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/?share=google-plus-1&amp;nb=1" target="_blank" title="Compartilhe no Google+"><span>Google</span></a></li><li class="share-linkedin"><a rel="nofollow" data-shared="sharing-linkedin-30341" class="share-linkedin sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/?share=linkedin&amp;nb=1" target="_blank" title="Clique para compartilhar no LinkedIn"><span>LinkedIn</span></a></li><li class="share-end"></li><li class="share-email share-service-visible"><a rel="nofollow" data-shared="" class="share-email sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/?share=email&amp;nb=1" target="_blank" title="Clique para enviar por email a um amigo"><span>Email</span></a></li><li class="share-print"><a rel="nofollow" data-shared="" class="share-print sd-button share-icon" href="http://portaldotransito.com.br/noticias/portal-faz-levantamento-sobre-as-infracoes-mais-cometidas-no-brasil/#print" target="_blank" title="Clique para imprimir"><span>Imprimir</span></a></li><li class="share-end"></li><li class="share-end"></li></ul></div></div></div></div></div>            </div>
        </div>
       
        <p><em><a href="http://portaldotransito.com.br/editor/wp-content/uploads/2015/08/limite-de-velocidade.jpg"></a>Saiba quais são as campeãs no ranking e veja como evitá-las </em></p>
<p>Infração de trânsito é qualquer desobediência às leis e normas contidas no Código de Trânsito Brasileiro, resoluções, portarias e decretos regulamentadores. As infrações são classificadas de acordo com a gravidade, em função do risco a que expõe os usuários do trânsito. “Mesmo que o cidadão seja contra a norma, é seu dever respeitá-la e procurar outros meios de defender a sua opinião. Cometer infrações de trânsito é uma atitude que pode levar a graves acidentes”, explica Celso Alves Mariano, especialista em trânsito e diretor do Portal.</p>
<p>O Portal do Trânsito fez um levantamento com dados dos principais órgãos fiscalizadores do País e mostra as três infrações mais cometidas pelos brasileiros.</p>
<p><strong> Excesso de velocidade </strong></p>
<p>Ultrapassar os limites de velocidade é uma das maiores causas de acidentes no trânsito é a infração mais cometida em todo Brasil. “Ao considerar a importância da fiscalização de velocidade como instrumento para redução de acidentes e de sua gravidade, o CONTRAN normatiza meios de fiscalização e destaca a necessidade de padronização dos procedimentos referente à fiscalização eletrônica da velocidade. Por conta dessa intensa fiscalização com radares fixos, as infrações são multadas com mais facilidade do que as demais infrações realizadas pelos condutores, que geralmente são multadas com a fiscalização direta dos agentes de trânsito”, explica Maria Cristina Hoffmann, coordenadora de Qualificação do Fator Humano no Trânsito do Denatran (Departamento Nacional de Trânsito).</p>
<p>Para a coordenadora, a fiscalização intensiva se justifica pela gravidade da infração. “Velocidade excessiva eleva a probabilidade de o motorista perder o controle do veículo, além de aumentar o tempo de distância após uma freada, diminuindo assim a capacidade de antecipação do condutor em situações perigosas”, diz.</p>
<p><strong>Enquadramento legal</strong></p>
<p>Segundo o artigo 218 do CTB – Código de Trânsito Brasileiro, dirigir acima da velocidade máxima permitida pode ser enquadrado em três situações:</p>
<p>• Acima do limite de velocidade em até 20% é infração média, com acréscimo de 4 pontos no prontuário do condutor e multa de R$85,13.</p>
<p>• Acima do limite de velocidade entre 20% e 50% é infração grave, com acréscimo de 5 pontos no prontuário do condutor e multa de R$127,69.</p>
<p>• Acima do limite de velocidade em mais de 50% é infração gravíssima agravada, com acréscimo de 7 pontos no prontuário do condutor, multa de R$574,62, suspensão do direito de dirigir e recolhimento da CNH – Carteira Nacional de Habilitação.</p>
<p>Neste último caso, o condutor terá que entregar a CNH, cumprir o prazo de suspensão determinado e fazer curso de reciclagem para voltar a dirigir.</p>
<p><strong>Como evitar</strong></p>
<p>A dica é simples, basta respeitar as placas de sinalização que indicam a velocidade permitida na via. “A velocidade máxima permitida nem sempre é uma velocidade segura. O bom senso manda que a velocidade do veículo seja compatível com todos os elementos do trânsito, principalmente às condições adversas”, orienta Mariano.</p>
<p><strong>Ultrapassagens irregulares </strong></p>
<p>Ultrapassagens mal feitas, aliadas ao excesso de velocidade, patrocinam os acidentes mais graves. E mesmo sabendo dos riscos, essa á segunda infração mais cometida no Brasil. “Essa manobra é a que apresenta o maior número de variáveis a serem levadas em conta pelo condutor. Qualquer variável, quando avaliada erroneamente, pode levar a um acidente”, diz Mariano.</p>
<p>Recentemente houve uma mudança de legislação que aumentou a punição para quem comete essa infração.</p>
<p><strong>Enquadramento legal</strong></p>
<p>Segundo o artigo 203 do CTB é infração gravíssima ultrapassar:</p>
<p>• pela contramão em curvas, aclives, declives, faixas de pedestres, pontes, viadutos, túneis e locais proibidos pela sinalização;</p>
<p>• em sinais luminosos, porteiras e cruzamentos;</p>
<p>• onde houver faixa contínua, dupla ou simples, amarela, dividindo o fluxo;</p>
<p>• pelo acostamento, em cruzamentos e passagens de nível.</p>
<p>Em qualquer uma dessas situações a infração é gravíssima, com acréscimo de 7 pontos na CNH e multa de R$ 957,70.</p>
<p><strong>Como evitar</strong></p>
<p>Novamente, respeitar a sinalização é fundamental para evitar essa infração. O motorista só deve realizar uma ultrapassagem em local permitido e em plenas condições de segurança e visibilidade.</p>
<p><strong>Dirigir usando o celular</strong></p>
<p>A atividade de dirigir com segurança exige muita atenção, o tempo todo. Qualquer distração ao volante pode provocar um acidente, e os motivos para desviar a atenção são muitos: conversar, procurar objetos, mexer em equipamentos, olhar para propagandas, paisagens, sonolência, e muitos outros. Mas atualmente o campeão em termos de desviar a atenção do condutor é o telefone celular. Apesar de não ser uma infração fácil de ser flagrada, ela já é a terceira mais cometida no Brasil.</p>
<p><strong>Enquadramento legal</strong></p>
<p>Segundo o artigo 252 inciso VI do CTB – Código de Trânsito Brasileiro, dirigir usando o celular é infração média, com acréscimo de 4 pontos no prontuário do condutor e multa de R$ 85,13.</p>
<p><strong>Como evitar</strong></p>
<p>Tirar os olhos do trânsito por apenas 2 ou 3 segundos é o suficiente para bater no carro da frente, mudar de pista, colidir com um objeto imóvel ou atropelar alguém. Em apenas 5 segundos, a 80 km/h o veículo percorre mais de 100 metros. Utilizar o modo viva-voz também não é completamente seguro. Pesquisas comprovam que conversar ao telefone rouba a atenção necessária para dirigir com segurança.</p>
<p>O correto é, antes de dirigir, colocar o celular no modo silencioso, e não olhar para o celular, nem que seja “só para ver quem está chamando”, e retornar as ligações depois de parar. Se estiver aguardando uma ligação importante, procure primeiramente um local seguro para parar e depois atender.</p>
<p>Hoje existem aplicativos que auxiliam o condutor nessa tarefa. “O Ministério das Cidades e o Denatran disponibilizam o aplicativo para telefones celulares com o objetivo de auxiliar na segurança do trânsito. O “Mãos no Volante” é uma ferramenta freeware disponível para smartphones que evita o atendimento indevido de ligações e informa os remetentes com mensagens automáticas”, explica a coordenadora do Denatran.</p>
<p>Evitar cometer infrações é um ato que deve ser mais praticado pelos condutores brasileiros. “Destacamos a preocupação com a educação do usuário, e necessidade de desenvolver programas de educação e treinamento abrangentes e inclusivos, com o objetivo de aprimorar o comportamento de todos os usuários e aumentar a conscientização sobre princípios, valores, conhecimentos e habilidades que diminuam comportamentos de risco”, conclui Maria Cristina.</p>

        
      
        <div class="row collapse foot">
	    	<div class="small-6 medium-6 large-6 columns topic">
	    		<p>No tópico: <a class="hat" title="Ver mais sobre Legislação..." href="http://portaldotransito.com.br/topicos/legislacao/">Legislação</a></p>
            </div>
            <div class="small-6 medium-6 large-6 columns text-right tags">
	    		<p>Tags: <a href="http://portaldotransito.com.br/tags/desobediencia-as-leis/" rel="tag">desobediência às leis</a>, <a href="http://portaldotransito.com.br/tags/infracoes-de-transito/" rel="tag">infrações de trânsito</a>, <a href="http://portaldotransito.com.br/tags/infracoes-mais-cometidas/" rel="tag">infrações mais cometidas</a>.</p>            </div>
      	 </div>
  	</div>
</div>
</div> <!-- FIM CONTEÚDO -->
</div><!-- FIM MENUCENTRAL -->
<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  FIM -  MENU CENTRAL /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div id="botaoazul"><ul class="nav nav-pills"><li role="presentation" class="active"><a href="#NOME">Voltar ao Topo</a></li></ul></div>



</div> <!-- FIM CONTAINER -->
   

   
<script src="js/jquery.min.js"></script>
<script src='cep.js' type='text/javascript'></script>
<script src="bibliotecas/jquery-ui.min.js" type="text/javascript"></script>
<script src="bibliotecas/jquery.tipTip.minified.js" type="text/javascript"></script>
<script src="bibliotecas/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 	integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- LIinks de Redes Sociais -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50b8e6e25ef55808"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

	
<!-- 	http://matheuspiscioneri.com.br/blog/preenchimento-automatico-do-endereco-a-partir-do-cep/ -->
<!-- http://www.republicavirtual.com.br/cep/ -->




	</body>
</html>
