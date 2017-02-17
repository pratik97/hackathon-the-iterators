<html>
    <head>
        <title>
            Register
        </title>

<script type="text/javascript">
function check(value){ 
xmlHttp=GetXmlHttpObject()
var url="checkemail.php";
url=url+"?emailid="+value;
xmlHttp.onreadystatechange=stateChanged 
xmlHttp.open("GET",url,true)
xmlHttp.send(null)
}
function stateChanged(){ 
if(xmlHttp.readyState==4 || xmlHttp.readyState=="complete"){ 
var showdata = xmlHttp.responseText; 
document.getElementById("mydiv").innerHTML= showdata;
} 
}
function GetXmlHttpObject(){
var xmlHttp=null;
try{
xmlHttp=new XMLHttpRequest();
}
catch (e) {
try {
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
}
catch (e){
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
}
}
return xmlHttp;
}
</script>

    </head>
    <body>
        <form name="reg" method="post" action="MailSend.php">
            <input type="email" name="emailid" placeholder="Email Id" onkeyup="check(this.value);"><br/>
            <input type="hidden"><font color="red"><div id="mydiv"></div></font>
            <input type="password" name="pass" placeholder="Password"><br/>
            <input type="submit" name="register" value="Register">
            <input type="Reset" name="Clear" value="Clear">
        </form>
    </body>
</html>
	