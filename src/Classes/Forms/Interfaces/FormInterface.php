<?php
/**
 * @author Jadiel Cordeiro Filho
 * 
 */

namespace Classes\Forms\Interfaces;
use Classes\Forms\Utils\Element;

interface FormInterface 
{
    public function createField(Element $element);
    
    public function close(Element $element);
}
