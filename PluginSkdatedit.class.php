<?php
/*-------------------------------------------------------
*
*   Plugin "Skdatedit"
*   Author: Zheleznov Sergey (skif)
*   Site: livestreet.ru/profile/skif/
*   Contact e-mail: sksdes@gmail.com
*
---------------------------------------------------------
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
