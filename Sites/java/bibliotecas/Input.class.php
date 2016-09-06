<?php
/*
 * CLASSE DE PROTEÇÃO EM DADOS VINDOS DE FORMULÁRIO
 * Hudolf Jorge Hess < hudolf@gmail.com >
 * http://www.hudolfhess.com/
 *
 * Proteger entradas INPUTS vindas de formulários tanto GET quanto POST.
 */

class Input {

    private $tmp = array();
    private $html = array();

    function __construct($type, $html = array()){
        $this->html = $html;
        if ($type == "post"){
            $this->tmp = $_POST;
            $this->protegendo();
            $_POST = $this->tmp;
        }
        else if ($type == "get"){
            $this->tmp = $_GET;
            $this->protegendo();
            $_GET = $this->tmp;
        }
        else if ($type == "session"){
            $this->tmp = $_SESSION;
            $this->protegendo();
            $_SESSION = $this->tmp;
        }

        
    }

    private function protegendo(){
        foreach ($this->tmp as $index=>$valor){
                        //SE FOR UMA ARRAY IRÁ ACESSAR TODOS OS OUTROS VALORES DELA
            if (is_array($valor)){
                $this->tmp[$index] = $this->subProtegendo($valor);
            }
            else {
                //ESTA VERIFICAÇÃO SERVE PARA DADOS VINDOS ATRAVÉS DO jQuery Form Plugin
                if (mb_detect_encoding($valor) == "UTF-8"){
                    $xvalor = utf8_decode($valor);
                    if (mb_detect_encoding($xvalor) == "UTF-8"){
                        $valor = $xvalor;
                    }
                    
                }
                if (in_array($index, $this->html)){
                    if (!get_magic_quotes_gpc()){
                    $this->tmp["$index"] = addslashes($valor);
                    }
                    else {
                        $this->tmp["$index"] = $valor;
                    }
                }
                else {
                    if (!get_magic_quotes_gpc()){
                    $this->tmp["$index"] = htmlspecialchars(addslashes($valor));
                    }
                    else {
                        $this->tmp["$index"] = htmlspecialchars($valor);
                    }
                }
            }
        }
    }

    private function subProtegendo($valor){
        $xvalor = array();
        foreach ($valor as $index=>$nvalor){
            if (is_array($nvalor)){
                $xvalor[$index] = $this->subProtegendo($nvalor);
            }
            else {
                //ESTA VERIFICAÇÃO SERVE PARA DADOS VINDOS ATRAVÉS DO jQuery Form Plugin
                if (mb_detect_encoding($nvalor) == "UTF-8"){
                    $xvalor = utf8_decode($nvalor);
                    if (mb_detect_encoding($xvalor) == "UTF-8"){
                        $nvalor = $xvalor;
                    }

                }
                if (in_array($index, $this->html)){
                    if (!get_magic_quotes_gpc()){
                    $xvalor["$index"] = addslashes($nvalor);
                    }
                    else {
                        $xvalor["$index"] = $nvalor;
                    }
                }
                else {
                    if (!get_magic_quotes_gpc()){
                        $xvalor["$index"] = htmlspecialchars(addslashes($nvalor));
                    }
                    else {
                        $xvalor["$index"] = htmlspecialchars($nvalor);
                    }
                }
            }
        }

        return $xvalor;
    }

}
?>
