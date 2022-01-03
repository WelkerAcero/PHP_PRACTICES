<?php

class BalanceContableTest extends PHPUnit_Framework_TestCase {
    
    # Métodos
    public function setUp() {
        $this->importe_bruto = 100;
        $this->alicuota_iva = 21;
        // importar la clase a ser testeada
    /* require_once('/contabilidad/models/balance_contable.php'); */
    }

    public function tearDown() {
        $this->importe_bruto = 0;
        $this->alicuota_iva = 0;
    }

    public function test_calcular_iva() {
        
    }

    # Arrange (preparar)
    public function setUp() {

        // importar la clase a ser testeada
        require_once('/contabilidad/models/balance_contable.php');
        // setear propiedades comunes
        $this->importe_bruto = 100;
        $this->alicuota_iva = 21;

    }

    public function tearDown() {
        $this->importe_bruto = 0;
        $this->alicuota_iva = 0;
    }

    public function test_calcular_iva() {
        # Act (actuar)
        // Instanciar al objeto que será probado
        $this->coverage = new BalanceContable();
        // modificar las propiedades del objeto
        $this->coverage->importe_bruto = $this->importe_bruto;
        $this->coverage->alicuota_iva = $this->alicuota_iva;
        // invocar al método que se está testeando
        $result = $this->coverage->calcular_iva();
        # Assert (afirmar)
        // sentencias

        # Assert (afirmar)
        $this->assertEquals(121, $result);
    }


}