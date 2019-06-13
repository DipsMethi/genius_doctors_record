<SCRIPT language=JavaScript>
<!--

//Accept terms & conditions script (by InsightEye www.insighteye.com)
//Visit JavaScript Kit (http://javascriptkit.com) for this script & more.

function checkCheckBox(f){
if (f.agree.checked == false )
{
alert('Please check the box to continue.');
return false;
}else
return true;
}
//-->
</SCRIPT>

<form action="/yourscript.cgi-or-your-page.html" method="POST" onsubmit="return checkCheckBox(this)">

<!--Enter your form contents here-->

<b>By submitting, I agree that all info entered was done accurately & truthfully.</b><br />
I accept: <input type="checkbox" value="0" name="agree">
<input type="submit" value="Submit form">
<input type="button" value="Exit" onclick="document.location.href='/index.html';">
</form>