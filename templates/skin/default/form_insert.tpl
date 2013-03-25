
<p><label for="sk_topic_date_add">{$aLang.plugin.skdatedit.label}:</label>
	<input name="sk_topic_date_add" type="text" value="{$_aRequest.topic_date_add|date_format:"%d.%m.%Y"}" class="date-picker" readonly="readonly" /> 
    <input name="sk_topic_time_add" {if Config::Get('plugin.skdatedit.allow_time')}type="text"{else}type="hidden"{/if} value="{$_aRequest.topic_date_add|date_format:"%H:%M:%S"}" />
 </p>{$sks}