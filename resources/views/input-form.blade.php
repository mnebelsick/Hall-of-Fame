<TD><img src="images/shim.gif" width="175" height="1" alt="" /></TD>
<TD>
	<!-- ******************************* BEGIN ENTRY ******************************* -->
	<form name="Hall-of-Fame" METHOD="POST" action="/" onSubmit="return ckFields(this);">
	{{ csrf_field() }}
	<table cellpadding="3" cellspacing="0" border="0">
	<TR valign="top"><TD align="right" nowrap class="black"></TD>
	<TD class="formTitle">Add to the Hall of Fame!</TD></TR>

	<TR valign="top"><TD align="right" nowrap class="black">Submitter Name:</TD>
	<TD><input name="SUBMITTER" size="30" type="text"></TD></TR>

	<TR valign="top"><TD align="right" nowrap class="black">&#160;</TD>
	<TD nowrap class="black">
	&#160;&#160;&#160;
	<input type="radio" name="TEAM" value="N" onClick="changeDiv('nominee','block'); changeDiv('teamName','none'); changeDiv('members','none'); changeDiv('members1','none');" checked>Person
	&#160;&#160;&#160;
	<input type="radio" name="TEAM" value="Y" onClick="changeDiv('nominee','none'); changeDiv('teamName','block'); changeDiv('members','block'); changeDiv('members1','block');">Team</TD></TR>

	<TR valign="top"><TD align="right" nowrap class="black">
	<div id="nominee" style="display:block">Nominee Name:</div>
	<div id="teamName" style="display:none">Team Name:</div></TD>
	<TD><input name="NAME" maxlength="50" size="30" type="text"><BR>
	<span class="small">(maximum 50 characters)</span></TD></TR>

	<TR valign="top">
	<TD align="right" nowrap class="black"><div id="members" style="display:none">Team Members:</div></TD>
	<TD><div id="members1" style="display:none"><textarea ROWS="4" COLS="40" NAME="TEAM_MEMBERS" WRAP="Virtual"></textarea></div></TD></TR>

	<TR valign="top"><TD align="right" nowrap class="black">Email Addresses:</TD>
	<TD><textarea ROWS="4" COLS="40" NAME="EMAIL"  WRAP="Virtual" onFocus="clearField(this);"
    onBlur="checkField(this);">Enter email address(es) separated by semi-colon so congratulation notes can be sent.</textarea><BR>

	<TR valign="top"><TD align="right" nowrap class="black">Title of Innovation:</TD>
	<TD><input name="TITLE" maxlength="50" size="30" type="text"><BR>
	<span class="small">(maximum 50 characters)</span></TD></TR>

	<TR valign="top"><TD align="right" nowrap class="black">Description:</TD>
	<TD><textarea ROWS="4" COLS="40" NAME="DESCRIPTION" WRAP="Virtual" onKeyDown="textCounter(this.form.DESCRIPTION,this.form.remLen,1000);" onKeyUp="textCounter(this.form.DESCRIPTION,this.form.remLen,1000);"></textarea><BR>
	<span class="small">Approximate words left:
	<input style="background: #e8e8e8; border: 0px"
	class="smBold" readonly type=text name=remLen size=4 maxlength=4 value="200"></span></TD></TR>


	<TR valign="top"><TD align="right"></TD>
	<TD><!-- <input type="submit" name="Preview" value="Preview" /> -->
	<input type="submit" name="Submit" value="Submit" />
	<span class="small"><i>(<a href="mailto:Cindi.Toth@alcatel-lucent.com; Mike.Nebelsick@alcatel-lucent.com"
	class="small">Contact us</A> for any corrections.)</i></span></TD></TR>
	</table></form>

	<!-- ******************************* END ENTRY ******************************* -->
</TD>