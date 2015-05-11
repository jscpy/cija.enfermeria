<?php 
require '../../fpdf17/fpdf.php';
class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
		//Fuente
		$this->SetFont('Arial','',12);
		
		//Fecha de Inventario
		$fecha_inicio = $_POST['fecha_inicio'];
		$fecha_final  = $_POST['fecha_final'];
	    
	    //Rutas de imagenes
	    $ruta_logo = '../../static/images/logo_cij.png';
	    $ruta_info = '../../static/images/info.png';
	    
	    // Logo
	    $this->Image($ruta_logo,20,8,0,35);   
	    // Movernos a la derecha
	    $this->Cell(100);
	    
	    //Informacion
	    $this->Image($ruta_info,65,8,0,30);
		
		//Salto de linea
	    $this->Ln(40);
	    
	    //Encabezados
	   
	    //$this->Cell(50);
	    $this->Cell(0,0,'Fecha inicio: '.$fecha_inicio.'                 '.'Fecha final: '.$fecha_final,0,1,'C');
	    
	    // Salto de línea
	    $this->Ln(10);
	}

	function tabla($header, $resultado, $rows, $fecha_inicio, $fecha_final) {

	    // Anchuras de las columnas
	    $w = array(9,45,55,35,20,25,25,18,15,15);
	    
	    // Cabeceras
	    for($i=0;$i<count($header);$i++) 
	    {
	        $this->Cell($w[$i],7,$header[$i],1,0,'C');
	    }
	    $this->Ln();

		// Datos
		while ($row = $resultado->fetch_object() ) {

		$fecha_ingreso = $row->ingreso;
		
		//Fechas del medicamento
		$fecha_ingreso = str_replace("/","-", $fecha_ingreso);
		
		//Fecha del formulario
		$fecha_inicio = str_replace("/","-", $fecha_inicio);
		$fecha_final  = str_replace("/","-", $fecha_final);
		
		//Tiempo del Medicamento
		$ingreso = strtotime($fecha_ingreso);
		
		//Tiempo del Inventario
		$inicio  = strtotime($fecha_inicio);
		$final   = strtotime($fecha_final);

			if ($ingreso >= $inicio && $ingreso <= $final) 
			{
		        $this->Cell($w[0],6,$row->id_medicina,'LR');
		        $this->Cell($w[1],6,$row->concepto,'LR');
		        $this->Cell($w[2],6,$row->presentacion,'LR');
		        $this->Cell($w[3],6,$row->unidad_medida,'LR');
		        $this->Cell($w[4],6,$row->lote,'LR');
		        $this->Cell($w[5],6,$row->ingreso,'LR');
		        $this->Cell($w[6],6,$row->caducidad,'LR');
		        $this->Cell($w[7],6,$row->cantidad,'LR');
		        $this->Cell($w[8],6,$row->salida,'LR');
		        $this->Cell($w[9],6,$row->total,'LR');

		        $this->Ln();
		    }
		}
		
		// Línea de cierre
		$this->Cell(array_sum($w),0,'','T');

		include '../conexion.php';
		$sql_1         = "SELECT nombre_completo FROM usuario WHERE pdf = 1 AND privilegios = 'alto' ";
		$resultado_1   = $conexion->query($sql_1);
		$administrador = $resultado_1->fetch_object();
		
		$sql_2       = "SELECT nombre_completo FROM usuario WHERE pdf = 1 AND privilegios = 'bajo' ";
		$resultado_2 = $conexion->query($sql_2);
		$enfermera   = $resultado_2->fetch_object();

		$directora = 'Lic. Ethel Correa Cabrera';

	    //Texto
	    $this->SetY(-30);
	    $this->SetFont('Arial','',12);
	    //lineas
	    $this->Line(20,180,90,180);
	    $this->Line(110,180,180,180);
	    $this->Line(200,180,270,180);
	    //Firmas
	    $this->Cell(90,0,$administrador->nombre_completo,0,1,'C');
	    $this->Cell(270,0,$enfermera->nombre_completo,0,1,'C');
	    $this->Cell(450,0,$directora,0,1,'C');
}

	// Pie de página
	function Footer()
	{
	    //Paginas totales
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
}

$fecha_inicio = $_POST['fecha_inicio'];
$fecha_final  = $_POST['fecha_final'];

include '../conexion.php';

$sql = "SELECT id_medicina,concepto,presentacion,unidad_medida,lote,caducidad,ingreso,cantidad,salida,total 
			FROM medicina,movimiento 
			WHERE medicina.id_medicina = movimiento.medicamento
			ORDER BY id_medicina";

$resultado = $conexion->query($sql);
$rows      = mysqli_num_rows($resultado);

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','Letter');
$header = array('#', 'Concepto','Presentacion','Unidad de Medida','Lote','Ingreso','Caducidad','Cantidad','Salida','Total');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->tabla($header,$resultado,$rows,$fecha_inicio,$fecha_final);
$pdf->Output();
?>