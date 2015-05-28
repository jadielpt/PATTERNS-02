<?php
/**
 * @author Jadiel Cordeiro FIlho
 * 
 * Linguagem: php
 */

namespace Classes\Forms\Types;
use Classes\Forms\Utils\Element;
use Classes\Forms\Interfaces\FormInterface;


class Label implements FormInterface
{
    public $nome;
    public $param;
    public $class;
            
    function __construct($nome)
    {
        $this->nome = $nome;
    }
    
    public function getParam() {
        return $this->param;
    }

    public function setParam($param) {
        $this->param = $param;
    }
    
    public function setClass($class) {
        $this->class = $class;
    }

    public function createField(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->class = $this->class;
        $tag->render();
    }
    
    public function close(Element $elementos)
    {
        $tag = $elementos;
        $tag->tag = $this->nome;
        $tag->close();  
    }
} 