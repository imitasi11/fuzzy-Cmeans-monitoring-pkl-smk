// JavaScript Document
function getXMLHttpRequest(){
	if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
	}else if(window.XMLHttpRequest){
		return new XMLHttpRequest();	
	}else alert("Status : Can not create XMLHttpRequest Object");

}
var xmlhttp=getXMLHttpRequest();
//function to send data
function sendData(handlePage,ElementID){
	var fname=document.getElementById('first_name').value;
	var email=document.getElementById('email').value;
	var phone=document.getElementById('phone').value;
	var message=document.getElementById('message').value;
	var filterEmail=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var filterPhone=/^[0-9]+$/;
	//validate user input
	if(fname==""){
		alert("Input First Name First!");
	}else if(email==""){
		alert("Please input email first!");
	}else if(!filterEmail.test(email)){
		alert("Incorrect email address");
	}else if(phone==""){
		alert("Please input phone first!");
	}else if(!filterPhone.test(phone)){
		alert("Incorrect phone number!");
	}else if(message==""){
		alert("Please input message first!");
	}else{
		if(xmlhttp.readyState==4 || xmlhttp.readyState==0){
			var obj=document.getElementById(ElementID);
			var form=obj.innerHTML;
			obj.innerHTML='Saving data, please wait..';
			xmlhttp.open('POST',handlePage,true);
			xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			xmlhttp.onreadystatechange=function(){
				if(xmlhttp.readyState==4){
					if(xmlhttp.status==200){
						obj.innerHTML=xmlhttp.responseText+'<br>'+form;
					}else{
						alert('Error : '+xmlhttp.statusText);
					}
				}
			}
			var param='first_name='+fname;
			param+='&email='+email;
			param+='&phone='+phone;
			param+='&message='+message;
			param+='&action=save';
			xmlhttp.send(param);
		}
	}
}
							 
			