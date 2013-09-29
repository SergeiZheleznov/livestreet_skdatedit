<script src="{$sPluginDateditWebPath}js/jquery.timeentry.js"></script>
{literal}
<script type="text/javascript">
$(function () {
	$("#sk_topic_time_add").timeEntry({show24Hours: true,showSeconds: true});
});
</script>
{/literal}
<p><label for="sk_topic_date_add">{$aLang.plugin.skdatedit.label}:</label>
	<input size="10" name="sk_topic_date_add" type="text" value="{$_aRequest.topic_date_add|date_format:"%d.%m.%Y"}" class="date-picker" readonly="readonly" /> 
    <input name="sk_topic_time_add" size="8" style="width:auto;" id="sk_topic_time_add" value="{$_aRequest.topic_date_add|date_format:"%H:%M:%S"}" />
 </p>