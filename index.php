
  




<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
	<title>Book | Reader</title>
	<script src="pdfjs/pdf.js"></script>
	<script src="pdfjs/pdf.worker.js"></script>
	<script src="viewer.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="viewer.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body id="body">
	<div class='corpo'>
	
		<div class='viewer'>
			<div class='nav'>
				
				<div class="itemMenu tittle">
				    <a href='https://educabiblioteca.com.br'><button style='margin: 0 4px; border: none'><</button></a>
					<img src="img/bookperfil.png" style="width: 50px; margin: 0 1vw 0 0">
					<div class="subItemMenu">
						<div>Pdf</div>
						<?php echo "<input type='hidden' id='gtkja' value=".$pdf.">"; ?>
						<div>
							<label id="paginaAtual"></label><label id="paginaIsTwo"></label>/<label id="numeroPaginas"></label>
						</div>
						
					</div>
				
				</div>
				<div class='itemMenu findBar'>
				        <button class='btn btnNavFind' onclick='proxPageFind()' title="Próxima página de ocorrência"><img src="img/up.png"></button>
				        <div class='indice'>
    				        <label id='numFindPerPage'>0</label>
    				        <label>/</label>
    				        <label id='numFind'>0</label>
				        </div>
				        <button class='btn btnNavFind' onclick='voltarPageFind()' title="Voltar página de ocorrência"><img src="img/down.png"></button>
				        <input type="text" id='find'>
					    <button class='btnFind btn' onclick='findController()'  title="Pesquisar ocorrências de trecho"><img src="img/find.png"></button>
					    
				
				</div>
				<div class="tools btn Flipped">
					<div class="itemMenu">
					    
						<button id='btnAltoContraste' onclick="ativarAltoContraste()" title="Ativar Alto Contraste" class="btn buttonMenu"><img src="img/olho.png"></button>
						<button class="btn buttonMenu" title='Imprimir' onclick="imprimir(<?php echo "'".$pdf."'"; ?>)"><img src="img/print.png"></button>
						<button class="btn buttonMenu" title='Selecionar pagina'>

						<select id="selector" class="btn">					
						</select>
						</button>
						<button onclick="twoPags()" class="btn buttonMenu" title="Ativar duas páginas" id="btnTwoPags"><img src="img/book.png"></button>
					</div>
					<div class="itemMenu">
						

						<button id='btnMoreZoom' onclick="aumentarZoom()" title="Aumentar Zoom" class="btn buttonMenu">+</button>
						<label id="zoom">100%</label>
						<button id='btnLessZoom' onclick="diminuirZoom()" title="Diminuir Zoom" class="btn buttonMenu">-</button>

					</div>
				</div>
			</div>
			<div class="streamer">
				<button class="button btn" onclick="voltarPagina()">
						
					<img src="img/proxright.png">
						
						
				</button>
				
				
			    
				<div class='pdf' id="canvasDiv">
					    <div id='loader'><img src="img/load.gif"></div>
					    <div id='pageOne'>
    						<canvas id="my_canvas"></canvas>
    				
        					<div id="textLayer" class="textLayer"></div>
					
						</div>
						<div id='pageTwo'>
    						<canvas id="my_canvas2"></canvas>
    				
        					<div id="textLayer2" class="textLayer"></div>
					
						</div>

				
				</div>
				
				
				<button class="button btn" onclick="passarPagina()">
						
					<img src="img/proxleft.png">
						
				</button>
			</div>
		</div>
		
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="pdfViewer.js"></script>
</body>
</html>