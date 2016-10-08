<?php

/**
* Class Tprestador_abrasf
*
*Class  Tprestador_abrasf maneja todos los aspectos de prestador_abrasf
*
* @package  SistemaIGA
* @subpackage Prestador_abrasf
* @author   Ivan berthillod <ivan.sys@gmail.com>
* @author   Aquiles Gonzalez <sistemas1@iga-la.net>
* @version  $Revision: 1.1 $
* @access   private
*/
class Tprestador_abrasf extends class_general{

    /**
    * codigo de prestador_abrasf
    * @var codigo int
    * @access protected
    */
    protected $codigo;

    /**
    * nombre_configuracion de prestador_abrasf
    * @var nombre_configuracion varchar
    * @access public
    */
    public $nombre_configuracion;

    /**
    * cod_punto_venta de prestador_abrasf
    * @var cod_punto_venta int
    * @access public
    */
    public $cod_punto_venta;

    /**
    * alicuota de prestador_abrasf
    * @var alicuota decimal
    * @access public
    */
    public $alicuota;

    /**
    * incentivador_cultural de prestador_abrasf
    * @var incentivador_cultural enum
    * @access public
    */
    public $incentivador_cultural;

    /**
    * numero_factura de prestador_abrasf
    * @var numero_factura int
    * @access public
    */
    public $numero_factura;

    /**
    * serie_factura de prestador_abrasf
    * @var serie_factura varchar
    * @access public
    */
    public $serie_factura;

    /**
    * tipo_nota de prestador_abrasf
    * @var tipo_nota enum
    * @access public
    */
    public $tipo_nota;

    /**
    * regimen_especial_tributario de prestador_abrasf
    * @var regimen_especial_tributario enum
    * @access public
    */
    public $regimen_especial_tributario;

    /**
    * valor_pis de prestador_abrasf
    * @var valor_pis decimal
    * @access public
    */
    public $valor_pis;

    /**
    * valor_cofins de prestador_abrasf
    * @var valor_cofins decimal
    * @access public
    */
    public $valor_cofins;

    /**
    * valor_inss de prestador_abrasf
    * @var valor_inss decimal
    * @access public
    */
    public $valor_inss;

    /**
    * valor_ir de prestador_abrasf
    * @var valor_ir decimal
    * @access public
    */
    public $valor_ir;

    /**
    * valor_csll de prestador_abrasf
    * @var valor_csll decimal
    * @access public
    */
    public $valor_csll;

    /**
    * item_lista_servicio de prestador_abrasf
    * @var item_lista_servicio varchar
    * @access public
    */
    public $item_lista_servicio;

    /**
    * codigo_actividad de prestador_abrasf
    * @var codigo_actividad varchar
    * @access public
    */
    public $codigo_actividad;

    /**
    * nombre_servicio de prestador_abrasf
    * @var nombre_servicio varchar
    * @access public
    */
    public $nombre_servicio;

    /**
    * inscripcion_municipal de prestador_abrasf
    * @var inscripcion_municipal varchar
    * @access public
    */
    public $inscripcion_municipal;

    /**
    * porcentaje_facturar de prestador_abrasf
    * @var porcentaje_facturar decimal
    * @access public
    */
    public $porcentaje_facturar;


    /**
    * primaryKey de la tabla
    * @var primaryKey var
    * @access protected
    */
    protected $primaryKey = "codigo";
    /**
    * conexion utilizada por el objeto
    * @var oConnection CI_DB_mysqli_driver
    * @access protected
    */
    protected $oConnection;

    /**
    * nombre de la tabla donde se guardan los objetos
    * @var nombreTabla varchar
    * @access protected
    */
    protected $nombreTabla = 'general.prestador_abrasf';

    /* CONSTRUCTOR */

    /**
     * Constructor de la Clase prestador_abrasf
     *
     * @param CI_DB_mysqli_driver $connection
     * @param integer $codigo (opcional) el codigo del objeto a crear
     */
    function __construct(CI_DB_mysqli_driver $conexion, $codigo = null){
        $this->oConnection = $conexion;
        if ($codigo != null && $codigo != -1){
            $arrConstructor = $this->_constructor($codigo);
            if (count($arrConstructor) > 0){
                $this->codigo = $arrConstructor[0]['codigo'];
                $this->nombre_configuracion = $arrConstructor[0]['nombre_configuracion'];
                $this->cod_punto_venta = $arrConstructor[0]['cod_punto_venta'];
                $this->alicuota = $arrConstructor[0]['alicuota'];
                $this->incentivador_cultural = $arrConstructor[0]['incentivador_cultural'];
                $this->numero_factura = $arrConstructor[0]['numero_factura'];
                $this->serie_factura = $arrConstructor[0]['serie_factura'];
                $this->tipo_nota = $arrConstructor[0]['tipo_nota'];
                $this->regimen_especial_tributario = $arrConstructor[0]['regimen_especial_tributario'];
                $this->valor_pis = $arrConstructor[0]['valor_pis'];
                $this->valor_cofins = $arrConstructor[0]['valor_cofins'];
                $this->valor_inss = $arrConstructor[0]['valor_inss'];
                $this->valor_ir = $arrConstructor[0]['valor_ir'];
                $this->valor_csll = $arrConstructor[0]['valor_csll'];
                $this->item_lista_servicio = $arrConstructor[0]['item_lista_servicio'];
                $this->codigo_actividad = $arrConstructor[0]['codigo_actividad'];
                $this->nombre_servicio = $arrConstructor[0]['nombre_servicio'];
                $this->inscripcion_municipal = $arrConstructor[0]['inscripcion_municipal'];
                $this->porcentaje_facturar = $arrConstructor[0]['porcentaje_facturar'];
            } else {
                $this->codigo = -1;
            }
        } else {
            $this->codigo = -1;
        }
    }

    /* PORTECTED FUNCTIONS */

    /**
    * Devuelve el objeto con todas sus propiedades y valores en formato array
    * 
    * @return array
    */
    protected function _getArrayDeObjeto(){
        $arrTemp = array();
        $arrTemp['nombre_configuracion'] = $this->nombre_configuracion;
        $arrTemp['cod_punto_venta'] = $this->cod_punto_venta;
        $arrTemp['alicuota'] = $this->alicuota;
        $arrTemp['incentivador_cultural'] = $this->incentivador_cultural;
        $arrTemp['numero_factura'] = $this->numero_factura;
        $arrTemp['serie_factura'] = $this->serie_factura;
        $arrTemp['tipo_nota'] = $this->tipo_nota;
        $arrTemp['regimen_especial_tributario'] = $this->regimen_especial_tributario;
        $arrTemp['valor_pis'] = $this->valor_pis;
        $arrTemp['valor_cofins'] = $this->valor_cofins;
        $arrTemp['valor_inss'] = $this->valor_inss;
        $arrTemp['valor_ir'] = $this->valor_ir;
        $arrTemp['valor_csll'] = $this->valor_csll;
        $arrTemp['item_lista_servicio'] = $this->item_lista_servicio;
        $arrTemp['codigo_actividad'] = $this->codigo_actividad;
        $arrTemp['nombre_servicio'] = $this->nombre_servicio;
        $arrTemp['inscripcion_municipal'] = $this->inscripcion_municipal;
        $arrTemp['porcentaje_facturar'] = $this->porcentaje_facturar;
        return $arrTemp;
    }

    /* PUBLIC FUNCTIONS */
    /**
     * Guarda un objeto nuevo de la clase prestador_abrasf o actualiza uno ya existente en la base de datos
     *
     * @return boolean
     */
    public function guardarPrestador_abrasf(){
        return $this->_guardar();
    }

    /**
     * Retorna el codigo del objeto prestador_abrasf
     *
     * @return integer
     */
    public function getCodigoPrestador_abrasf(){
        return $this->_getCodigo();
    }

    /**
     * actualiza los campos de prestador_abrasf según los datos enviados en el array de parametro
     * 
     * @param array $arrCamposValores   un array cuyos indices son las propiedades de prestador_abrasf y los valores son los valores a actualizar
     */
    public function setPrestador_abrasf(array $arrCamposValores){
        $retorno = "";
        if (!isset($arrCamposValores["nombre_configuracion"]))
            $retorno = "nombre_configuracion";
        else if (!isset($arrCamposValores["cod_punto_venta"]))
            $retorno = "cod_punto_venta";
        else if (!isset($arrCamposValores["alicuota"]))
            $retorno = "alicuota";
        else if (!isset($arrCamposValores["incentivador_cultural"]))
            $retorno = "incentivador_cultural";
        else if (!isset($arrCamposValores["numero_factura"]))
            $retorno = "numero_factura";
        else if (!isset($arrCamposValores["serie_factura"]))
            $retorno = "serie_factura";
        else if (!isset($arrCamposValores["tipo_nota"]))
            $retorno = "tipo_nota";
        else if (!isset($arrCamposValores["regimen_especial_tributario"]))
            $retorno = "regimen_especial_tributario";
        else if (!isset($arrCamposValores["valor_pis"]))
            $retorno = "valor_pis";
        else if (!isset($arrCamposValores["valor_cofins"]))
            $retorno = "valor_cofins";
        else if (!isset($arrCamposValores["valor_inss"]))
            $retorno = "valor_inss";
        else if (!isset($arrCamposValores["valor_ir"]))
            $retorno = "valor_ir";
        else if (!isset($arrCamposValores["valor_csll"]))
            $retorno = "valor_csll";
        else if (!isset($arrCamposValores["item_lista_servicio"]))
            $retorno = "item_lista_servicio";
        else if (!isset($arrCamposValores["codigo_actividad"]))
            $retorno = "codigo_actividad";
        else if (!isset($arrCamposValores["nombre_servicio"]))
            $retorno = "nombre_servicio";
        else if (!isset($arrCamposValores["inscripcion_municipal"]))
            $retorno = "inscripcion_municipal";
        else if (!isset($arrCamposValores["porcentaje_facturar"]))
            $retorno = "porcentaje_facturar";
        if ($retorno <> ""){
            die("falta el parametro ".$retorno." en setPrestador_abrasf");
        } else {
            foreach ($this as $key => $value){
                if (isset($arrCamposValores[$key])){
                    $this->$key = $arrCamposValores[$key];
                }
            }
            return true;
        }
    }

    /* STATIC FUNCTIONS */

    /**
    * retorna los campos presentes en la tabla prestador_abrasf en formato array
    * 
    * @param CI_DB_mysqli_driver $connection   La conexion actual
    * @return array
    */
    static function camposPrestador_abrasf(CI_DB_mysqli_driver $conexion){
        return parent::_campos($conexion, "general.prestador_abrasf");
    }

    /**
    * Buscar registros en la tabla prestador_abrasf
    *
    * @param CI_DB_mysqli_driver $connection   parametro de conexion actual.
    * @param array $condiciones    (opcional) un array en formato array(campo => valor) con las restricciones de busqueda
    * @param array $limite    (opcional) un array en formato array(limite inferior, cantidad) con las opciones de limite
    * @param array $limit    (opcional) un array en formato array(array(campo, orden)) que representa el orden de los datos a recuperar
    * @param array $grupo    (opcional) un array en formato array(grupo1, grupo2, ...) para agrupar los resultados
    * @param boolean $contar    (opcional) (default false) Indica si solo debe retornarse la cantidad de registros
    * @return mixed    Retorna la lista de prestador_abrasf o la cantdad de registros segun el parametro contar
    */
    static function listarPrestador_abrasf(CI_DB_mysqli_driver $conexion, array $condiciones = null, array $limite = null, array $orden = null, array $grupo = null, $contar = false){
        return parent::_listar($conexion, "general.prestador_abrasf", $condiciones, $limite, $orden, $grupo, $contar);
    }
}
?>