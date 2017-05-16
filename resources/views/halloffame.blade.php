<!DOCTYPE HTML>
<html>
<head>
    <title>ALUniv Innovation Hall of Fame</title>
<script type="text/javascript" src="js/halloffame.js"></script>
<link rel="stylesheet" type="text/css" href="css/halloffame.css">
<style type="text/css">
<!--
.serif1 { font-family: Georgia,Palatino,Times,serif;
        font-size: 36px;
        color: black;
        font-variant: small-caps }
.serif2 { font-family: Georgia,Palatino,Times,serif;
        color: black;
        font-size: 36px }
-->
</style>

</head>

<body bgcolor="#dad9da" text="#ffffff" link="#ffffff" vlink="#ffffff" alink="#ffffff">

<script type="text/javascript" src="js/wz_tooltip.js"></script>
<div style="height: 10vh; overflow-x: hidden; background-color: #dad9da; margin: 0px";>
    @include('title')
</div>
<BR>
<div style="overflow-x: scroll;">
    <div style="height: 86vh;  min-width: 6237px; background-image: url(/images/background.jpg); background-repeat: repeat-x; background-attachment: scroll;">

        <table>
        <tr>
            @include('show-innovations')

            @include('input-form')

            <td><a name="form"><img src="images/shim.gif" alt="" width="80" height="1" border="0"></a></td>
        </tr>
    </table></div>
</div>
</body>
</html>




