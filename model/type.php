<?php
class type

{
    private $idtype;
    private   $type;
    


    function __construct($idtype,$type ){
        $this->idtype=$idtype;
        $this->type=$type;
    }
    public function getidtype()
    {
        return $this->idtype;
    }
    public function setidtype($idtype)
    {
        $this->idtype = $idtype;

        return $this;
    }
    function gettype()
    {
        return $this->type;
    }
   
    function settype($type)
    {
        $this->type=$type;
    }

    

}
?>