var xmlhttp = createRequestObject();

function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer")
	{
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }
	else
	{
        ro = new XMLHttpRequest();
    }
    return ro;
}
function ValidateForm(){
				document.getElementById("tuition").innerHTML="";
				bValid=true;
				strErrors="";
				var x=document.getElementById("txtHours").value;
				if (x ==""){
					bValid=false;
					strErrors="You must enter the number of credit hours";
					
				}
				else if(isNaN(x) || parseInt(x)<=0 || parseInt(x)>22){
					bValid=false;
					strErrors="credit hours must be a number between 1 and 22";
				}
				
				
				
				document.getElementById("errors").innerHTML=strErrors;
				return bValid;
		
			}


function getTuition(){
	if(ValidateForm()){	
		url="calculateTuition.php?";
		
		url=url+"hours"+"="+document.getElementById("txtHours").value +"&";
		if(document.getElementById("residency").value=="In County"){
		
			url=url+"rate"+"="+"144.04";
		}
		else if(document.getElementById("residency").value=="Out Of County"){
			
			url=url+"rate"+"="+"169.22";
		}
		else{
			url=url+"rate"+"="+"320.79";
		}
	
    xmlhttp.open('get', url);
    xmlhttp.onreadystatechange = handleResponse;
    xmlhttp.send(null);}
	
}
function handleResponse() 
{
    if(xmlhttp.readyState == 4)
	{
	
	 results=xmlhttp.responseText.split( ",");
	 document.getElementById("tuition").innerHTML="Your Tuition is: $"+ results[0];
					
	}
    
}