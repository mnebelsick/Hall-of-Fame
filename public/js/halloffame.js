function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else
countfield.value = (maxlimit - field.value.length)/5;
}

function ckFields(f){

	var msg = "";

	if ( f.SUBMITTER.value == "" ) {
		 msg += "Please enter the \"Please enter your name.\".\n";
	}

	if ( f.NAME.value == "" ) {
		 msg += "Please enter the \"Please enter the individual or team name.\".\n";
	}

	if ( f.TITLE.value == "" ) {
		 msg += "Please enter the \"Title of the Accomplishment\".\n";
	}

	if ( f.DESCRIPTION.value == "" ) {
		 msg += "Please enter the \"Details\".\n";
	}

	if (msg != "") { alert (msg); return false; }

	return true;
}

function changeDiv(the_div,the_change)
{
  var the_style = getStyleObject(the_div);
  if (the_style != false)
  {
    the_style.display = the_change;
  }
}

function getStyleObject(objectId)
{
  if (document.getElementById && document.getElementById(objectId)) {
    return document.getElementById(objectId).style;
  } else if (document.all && document.all(objectId)) {
    return document.all(objectId).style;
  } else {
    return false;
  }
}

function clearField(field) {
  // Check if field contains the default value
  if (field.value == field.defaultValue) {
    // It does, so clear the field
    field.value = "";
  }
}

function checkField(field) {
  // Check if user has entered information in the field
  if (field.value == "") {
    // User has not entered anything
    field.value = field.defaultValue;
  }
}
