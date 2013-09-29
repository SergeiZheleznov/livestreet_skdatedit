<?php

class PluginSkdatedit_HookSkdatedit extends Hook {
    public function RegisterHook() {
		    $this->AddHook('template_form_add_topic_topic_end','form_insert');
        $this->AddHook('template_form_add_topic_question_end','form_insert');
        $this->AddHook('template_form_add_topic_photoset_end','form_insert');
        $this->AddHook('template_form_add_topic_link_end','form_insert');
        
        $this->AddHook('topic_edit_show','add_var');
        $this->AddHook('topic_edit_before','add_date');
        $this->AddHook('topic_add_before','add_date');
    }
   	public function form_insert() {
      if (!$this->PluginSkdatedit_Skdatedit_Canedit() or Router::GetActionEvent()=='add' ) return;
        $this->Viewer_Assign('sPluginDateditWebPath',Plugin::GetTemplateWebPath(__CLASS__));
        return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'form_insert.tpl');
	}
    public function add_var($aVars) {
        if (!$this->PluginSkdatedit_Skdatedit_Canedit() ) return $aVars;
        $oTopic = $aVars['oTopic'];
        $_REQUEST['topic_date_add'] = $oTopic->getDateAdd();
        return $aVars;
    }
    public function add_date($aVars) {
        if (!$this->PluginSkdatedit_Skdatedit_Canedit() ) return $aVars;
        $oTopic = $aVars['oTopic'];
        $dateAdd = getRequest('sk_topic_date_add');
        $timeAdd = getRequest('sk_topic_time_add');
        list($d,$m,$y)=explode('.',$dateAdd);
        list($hrs,$min,$sec)=explode(':',$timeAdd);
        $timeAdd = "$hrs:$min:$sec";

        if ( ($hrs>23 or $hrs<0) or ($min>60 or $min<0) or ($sec>60 or $sec<0)) $timeAdd = date("H:i:s",$oTopic->setDateAdd() );

        $oTopic->setDateAdd(date("$y-$m-$d $timeAdd"));
        return $aVars;
    }
}
?>
