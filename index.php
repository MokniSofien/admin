<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>loginPage</title>

<link href="Untitled1.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
<script>
function ValidateLayer1(theForm)
{
   var regexp;
   regexp = /^[A-Za-zÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýþÿ]*$/;
   if (!regexp.test(theForm.user.value))
   {
      alert("Please enter only letter characters in the \"user\" field.");
      theForm.user.focus();
      return false;
   }
   regexp = pasword;
   if (!regexp.test(theForm.TextArea1.value))
   {
      alert("The specified value is invalid.");
      theForm.TextArea1.focus();
      return false;
   }
   return true;
}
</script>
</head>
<body>
<div id="space"><br></div>
<div id="container">
   <form method="POST" action="login.php">
<div id="Layer1" style="position:absolute;text-align:center;left:241px;top:122px;width:450px;height:200px;z-index:5;">
<div id="Layer1_Container" style="width:450px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<input name="email" id="user"style="position:absolute;left:64px;top:38px;width:335px;height:22px;z-index:0;" rows="0" cols="46" placeholder="email" />

<input name="pass" type="password" id="TextArea1" style="position:absolute;left:64px;top:94px;width:335px;height:21px;z-index:1;" rows="0" cols="46" maxlength="25"  placeholder="password"/>
<div id="wb_Image1" style="position:absolute;left:71px;top:44px;width:17px;height:16px;z-index:2;">
<img src="images/user.png" id="Image1" alt=""></div>
<div id="wb_Image2" style="position:absolute;left:73px;top:99px;width:14px;height:16px;z-index:3;">
<img src="images/pass.png" id="Image2" alt=""></div>
<input type="submit" id="login" name="submit" value="Valider" style="position:absolute;left:64px;top:159px;width:339px;height:25px;z-index:4;">
</div>
</div>
</form>
</div>
</body>
</html>