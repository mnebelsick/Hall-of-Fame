<!-- ******************************* START LOOP ******************************* -->
@foreach($innovations as $innovation)
<TD>
{{ Html::image('images/shim.gif', '', array('width' => '175', 'height' => '200', 'border' => '0')) }}
</TD>
<TD>
	<!-- ******************************* BEGIN FRAME TABLE ******************************* -->
	<table width="450" cellpadding="0" cellspacing="0" border="0">

	<TR>
		<TD>
		{{ Html::image('images/corner_tl.png', '', array('width' => '35', 'height' => '35', 'border' => '0')) }}
		</TD>
		<TD style="width: 100px; height: 35px; background-image: url('images/frame_top.png'); background-repeat: repeat-x; background-size: 100px 35px;">
		{{ Html::image('images/shim.gif', '', array('width' => '100', 'height' => '1', 'border' => '0')) }}
		</TD>
		<TD>
		{{ Html::image('images/corner_tr.png', '', array('width' => '41', 'height' => '35', 'border' => '0')) }}
		</TD>
	</TR>

	<TR>
		<TD background="images/frame_lft.png" style="position: relative; top: -4px;">
		{{ Html::image('images/shim.gif', '', array('width' => '35', 'height' => '37', 'border' => '0')) }}
		</TD>
		<TD width="374" bgcolor="#000000" style="padding: 12px; position: relative; top: -4px;">
		@if($innovation->team == "N")
			<span class="name">{{ $innovation->name }}</span>
		@else
			<span class="name"><a href="javascript: void(0)" onmouseover="Tip('{{ $innovation->team_members }}',TITLE, 'Team Members')" onmouseout="UnTip()">{{ $innovation->name }}</span></a>
		@endif

			<span class="ital">for</span>
			<span class="title">{{ $innovation->title }}</span>
			<span class="desc">{{ $innovation->description }}</span>
	    </TD>
		<TD background="images/frame_rgt.png" style="position: relative; top: -4px">
		{{ Html::image('images/shim.gif', '', array('width' => '35', 'height' => '37', 'border' => '0')) }}
		</TD>
	</TR>

	<TR>
		<TD style="position: relative; top: -4px;">
		{{ Html::image('images/corner_bl.png', '', array('width' => '35', 'height' => '42', 'border' => '0')) }}
		</TD>
		<TD style="width: 100px; height: 42px; background-image: url('images/frame_btm.png'); background-repeat: repeat-x; background-size: 100px 42px; position: relative; top: -4px;"">
		{{ Html::image('images/shim.gif', '', array('width' => '100', 'height' => '1', 'border' => '0')) }}
		</TD>
		<TD align="right" style="position: relative; top: -4px;">
		{{ Html::image('images/corner_br.png', '', array('width' => '41', 'height' => '42', 'border' => '0')) }}
		</TD>
	</TR>

	</table>
	<!-- ******************************* END FRAME TABLE ******************************* -->
	<div align="center"><a href="mailto:{{ $innovation->email }}?subject=Congrats on Hall of Fame"><img src="images/congrats_btn.png"
		alt="Send Congratulations Note" width="188" height="30" border="0"></a></div>
</TD>
@endforeach
<!-- ******************************* END LOOP ******************************* -->
