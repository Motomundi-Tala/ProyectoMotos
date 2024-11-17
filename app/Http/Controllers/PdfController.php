<?php

namespace App\Http\Controllers;

use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function index()
    {
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', 'B', 50);
        $this->fpdf->Ln(10);
        // Logo

        $this->fpdf->Image('imagenes/logo.png', 10, 8, 30); // Ajusta la posición y el tamaño según sea necesario
       // <img src="{{ asset('imagenes/logo.png') }}" alt="Logo" class="logo">

        // Encabezado
        $this->fpdf->Cell(0, 8, "MotoMundi", 0, 1, 'C');
        $this->fpdf->Ln(10);
        $this->fpdf->SetFont('Arial', '', 10);
        $this->fpdf->Cell(0, 5, 'Tala, Jal ' . date('d/m/Y'), 0, 1, 'i');

        // Título principal
        $this->fpdf->SetFont('Arial', 'B', 14);
        $this->fpdf->Cell(0, 8, 'CARTA FACTURA', 0, 1, 'C');

        // Contenido de la carta
        $this->fpdf->SetFont('Arial', '', 10);
        $text = "Por medio de la presente hacemos constar que se vendió una motocicleta nueva sin rodar. Las especificaciones del vehículo y los datos del cliente se describen a continuación:";
        $this->fpdf->MultiCell(0, 5, utf8_decode($text));
        $this->fpdf->Ln(10);
        // Tabla de Datos del Cliente
        $this->fpdf->SetX(15);  // Ajustar la posición horizontal a la derecha
        $this->fpdf->SetFont('Arial', 'B', 10);
        $this->fpdf->Cell(180, 6, 'Datos del Cliente', 1, 1, 'C');
        $this->fpdf->SetFont('Arial', '', 9);
        $this->addRow('NOMBRE', 'Nombre del cliente');
        $this->addRow('CALLE', 'Calle del cliente');
        $this->addRow('COLONIA', 'Colonia', 'NO.', 'Cliente->Numero');
        $this->addRow('RFC', 'RFC del cliente');
        $this->addRow('CIUDAD', 'Ciudad', 'C.P.', 'Cliente->Codigo_Postal');
        $this->addRow('E-MAIL', 'Email del cliente', 'TEL', 'Cliente->Telefono');
        $this->addRow('MÉTODO DE PAGO', 'Metodo_Pago', 'USO CFDI', 'Cliente->Uso_CFDI');
        $this->addRow('FORMA DE PAGO', 'Forma_Pago', 'RÉGIMEN FISCAL', 'Cliente->Regimen_Fiscal');

        // Tabla de Datos del Vehículo
        $this->fpdf->SetX(15);  // Ajustar la posición horizontal a la derecha
        $this->fpdf->SetFont('Arial', 'B', 10);
        $this->fpdf->Cell(180, 6, 'Datos del Vehículo', 1, 1, 'C');
        $this->fpdf->SetFont('Arial', '', 9);

        // Fila con dos columnas: etiqueta y dato


        $this->addRow1('VEHÍCULO', 'Tipo de Vehículo');
        $this->addRow1('MARCA', 'Marca del Vehículo');
        $this->addRow1('AÑO', 'Año');
        $this->addRow1('MODELO', 'Modelo');
        $this->addRow1('COLOR', 'Color');
        $this->addRow1('SERIE', 'Serie');
        $this->addRow1('MOTOR', 'Motor');
        $this->fpdf->Ln(10);
     
        // Justificación de texto final
        $text = "Extendemos la presente con el fin de que el comprador de la unidad mencionada pueda realizar gestiones referentes a este vehículo. Tramite de placas, acreditación de la propiedad y traslado a destino. Sin que tal circunstancia implique a su favor otros derechos que los mencionados por la ley, no pudiendo por lo mismo hacer acto de dicha motocicleta hasta entrega de factura original. Esta operación ha quedado legalizada por medio de un contrato de compraventa. Por ello, el articulo al que se refiera esta carta factura, es propiedad de la persona mencionada. Así mismo el cliente hace constar que dicho vehículo se entrega en óptimo estado funcional tanto mecánico, como de carrocería, sin faltantes de piezas o plásticos. Se entrega llave original con duplicado, kit de herramientas y póliza de garantía";
        $this->fpdf->MultiCell(0, 5, utf8_decode($text));

        $this->fpdf->Ln(10);
        // Footer
        $this->fpdf->SetTextColor(0, 51, 155);
        $this->fpdf->SetFont('Arial', 'I', 10);
        $footerText = "DISTRIBUIDOR AUTORIZADO\nBAJAJ TALA\nAV.SOLIDARIDAD #174 IN.1-2-3 PLAZA AQUA\nTEL: 33 1942 1942\nMOTO-MUNDI\nRFC: CARE741204G94\nCARRETERA INTERNACIONAL #541 A. CENTRO.\nTEQUILA, JALISCO. MEXICO. C.P. 46400\nTEL: 37 47 42 46 63";
        $this->fpdf->MultiCell(0, 4, utf8_decode($footerText), 0, 'C');

        $this->fpdf->Output();
        exit;
    }


    private function addRow1($label, $data)
    {
        $this->fpdf->SetX(15);  // Ajustar la posición horizontal a la derecha
        $this->fpdf->Cell(30, 5, utf8_decode($label), 1); // Primera columna: etiqueta
        $this->fpdf->Cell(150, 5, utf8_decode($data), 1);  // Segunda columna: dato
        $this->fpdf->Ln(); // Salto de línea para la siguiente fila
    }




    private function addRow($label1, $data1, $label2 = '', $data2 = '')
    {
        $this->fpdf->SetX(15);  // Ajustar la posición horizontal a la derecha
        $this->fpdf->Cell(30, 5, utf8_decode($label1), 1);
        $this->fpdf->Cell(60, 5, utf8_decode($data1), 1);
        if ($label2) {
            $this->fpdf->Cell(30, 5, utf8_decode($label2), 1);
            $this->fpdf->Cell(60, 5, utf8_decode($data2), 1);
        } else {
            $this->fpdf->Cell(90, 5, '', 1);
        }
        $this->fpdf->Ln();
    }
}
