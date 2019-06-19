function check()
{
if(isuser() && ispassword())
{
alert("Perfect username and password");
return true;
}


//Function for Username

function isuser()
{
var str=document.frm.username.value;

if(str=="")
{
alert("Username cannot be empty...please enter valid username");
document.frm.username.value="";
document.frm.username.focus();
return false;
}

if(str.length<5)
{
alert("username should be atleast 6 characters");
document.frm.username.value="";
document.frm.username.focus();
return false;
}

for(var i=0;i<str.length;i++)
{
var ch=str.charAt(i);
if((ch<"a"||ch>"z")&&(ch<"A"||ch>"Z")&&(ch<"0"||ch>"9"))
{
alert("Username cannot contain special symbols...");
document.frm.username.value="";
document.frm.username.focus();
return false;
break;
}
}
return true;
}  //end of function isuser




// Function For Password
function ispassword()
{
var str=document.frm.pass.value;
if(str.length<6)
{
alert("password must have atleast 6 characters");
document.frm.pass.value="";
document.frm.pass.focus();
return false;
}

for(var i=0;i<str.length;i++)
{
var ch=str.charAt(i);
if(ch=="")
{
alert("passowrd cannot contain blank spaces");

document.frm.pass.value="";
document.frm.pass.focus();
return false;
break;
}
}


for(var i=0;i<str.length;i++)
{
var ch=str.charAt(i);
if((ch<"a"||ch>"z")&&(ch<"A"||ch>"Z")&&(ch<"0"||ch>"9"))
{
alert("password cannot contain special symbols...");
document.frm.pass.value="";
document.frm.pass.focus();
return false;
break;
}
}
return true;
}  //end of function ispassword


}



//Validations for registraton form

function check2()
{

if(First_name() && Last_name())
{

window.alert("All the Feilds are perferct");
return true;

}

// Function for First_name

function First_name()
{
var str=document.frm.fname.value;

if(str=="")
{
alert("First name cannot be empty,Please enter it");
document.frm.fname.value="";
document.frm.fname.focus();
return false;
}



for(var i=0;i<str.length;i++)
{
var ch=str.charAt(i);
if((ch<"a"||ch>"z")&&(ch<"A"||ch>"Z")&&(ch<"0"||ch>"9"))
{
alert("First name cannot contain special symbols...");
document.frm.fname.value="";
document.frm.fname.focus();
return false;
break;
}
}


return true;
}//end of firstname




function Last_name()
{
var str=document.frm.lname.value;

if(str=="")
{
alert("Last name cannot be empty,Please enter it");
document.frm.lname.value="";
document.frm.lname.focus();
return false;
}


for(var i=0;i<str.length;i++)
{
var ch=str.charAt(i);
if((ch<"a"||ch>"z")&&(ch<"A"||ch>"Z")&&(ch<"0"||ch>"9"))
{
alert("Last cannot contain special symbols...");
document.frm.lname.value="";
document.frm.lname.focus();
return false;
break;
}
}

return true;
}//End of last name




}//End of function check2