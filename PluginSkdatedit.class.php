<?php
/*
* 
*/
if (!class_exists('Plugin')) {
    die('Hacking attemp!');
}

class PluginSkdatedit extends Plugin {

    public $aDelegates = array(
    );

    protected $aInherits=array(

    );


    public function Activate() {
        return true;
    }


    public function Deactivate(){
        return true;
    }


    public function Init() {
    }
}
?>
