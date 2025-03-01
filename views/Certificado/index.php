<!DOCTYPE html>
<html lang="es" class="pos-relative">

<head>
	<?php require_once("../html/MainHead.php"); ?>
	
	<title>Certificado</title>
</head>

<body class="pos-relative">

	<div class="ht-100v d-flex align-items-center justify-content-center">
		<div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
			<h1 class="tx-100 tx-xs-140 tx-normal tx-inverse tx-roboto mg-b-0">

				<canvas id="canvas" height="650px" width="900px" class="img-fluid" alt="Imagen de Certificado"></canvas>

				<!-- <img src="../../public/certificado.png" class="img-fluid" alt="Imagen de Certificado"> -->			
			</h1>
			
			<br>

			<p class="tx-16 mg-b-30" id="cur_descrip">
				
			</p>

			<div class="form-layout-footer">
              <button class="btn btn-outline-indigo"><i class="fa fa-send mg-r-10"></i>PNG</button>
              <button class="btn btn-outline-danger"><i class="fa fa-send mg-r-10"></i>PDF</button>
            </div><!-- form-layout-footer -->

		</div>
	</div><!-- ht-100v -->

	<?php require_once("../html/MainJs.php") ;?>
	<script type="text/javascript" src="certificado.js"></script>
</body>

</html>