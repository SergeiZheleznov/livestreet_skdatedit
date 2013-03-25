<?php

class PluginSkdatedit_ModuleSkdatedit extends Module
{
    protected $oUserCurrent = null;

    public function Init()
    {
        $this->oUserCurrent = $this->User_GetUserCurrent();
    }

    public function Canedit()
    {
        if ($this->oUserCurrent->isAdministrator()) return true;
        if (Config::Get('plugin.skdatedit.user_rating') < $this->oUserCurrent->getRating()) return true;
        if (in_array($this->oUserCurrent->getLogin(), Config::Get('plugin.skdatedit.user_array'))) return true;
        return false;
    }

}

?>
