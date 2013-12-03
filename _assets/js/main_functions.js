/* 

    ============================================

    SkyGate

    =============================================

	main_fonctions.js
	Dev by: Stanley Swell-Shine Hsu
	Latest update: 13/10/21

    ==============================================

*/
var client_ip =document.getElementById("ip").innerHTML;
var btn_count=0;
var domain = document.domain;

$('#who_keyin').hide();
$('#user_info').hide();
$('#Hi').hide();

console.log('SkyGate: iP:',client_ip);

//Btn Handaler - up
$("#b1").mouseup(function(){
	console.log('SkyGate: Mouse up over Btn!');
	console.log('SkyGate: Domain:',document.domain);	
	if(client_ip!=="Not in local"){
		$.post("http://192.168.1.199/swingcrew5/skygate/src/mouse_up.php",function(data,status){
       //alert("Data: " + data + "\nStatus: " + status);
			})
		}else{
			 $.post("http://theoneisneo.synology.me/swingcrew5/skygate/src/mouse_up.php",function(data,status){
    		//alert("Data: " + data + "\nStatus: " + status);
		})
		}
  });
  
  //Btn Handaler	 - down
  $("#b1").mousedown(function(){
	  btn_count++;
	  console.log('SkyGate: Get Cookie - ',getCookie("username"),' Press the Bell.');
	  console.log('SkyGate: Mouse down over Bell Btn! Btncount:',btn_count);
	  //alert("Domain:"+domain);
	  //User info keyin
	  if(btn_count==1&&!getCookie("username")){
		  console.log('SkyGate: Must fill user info');
		  $("#b1").fadeOut('slow');
		  $('#user_info').fadeIn('slow');	  
		}
		  
	  if(client_ip!=="Not in local"){		  
		  console.log('SkyGate: POST to mouse_down.php in inside');	  
		  $.post("http://192.168.1.199/swingcrew5/skygate/src/mouse_down.php",{ name: getCookie("username")}, function(data,status){
		  console.log("SkyGate POST: " + data);
    	  //alert("Data: " + data + "\nStatus: " + status);
		})
		  }else{			  
			  	console.log('SkyGate: POST to mouse_down.php in outside');
				$.post("http://theoneisneo.synology.me/swingcrew5/skygate/src/mouse_down.php",function(data,status){
    		//alert("Data: " + data + "\nStatus: " + status);		
		})
		} 
  });
  
  $('#whoyouare').change(function() {
    var val = $("#whoyouare option:selected").text();
	console.log('SkyGate: Selection- ',val);
    //alert(val);
	setCookie("username",val,365); //setCookie in name
	console.log('SkyGate: Get name Cookie- ',getCookie("username"));
	
	if(val=='Others..'){
		$('#who_keyin').fadeIn('slow');
		}else{
			$('#who_keyin').fadeOut('slow');
			}		
});

// -----COOKIE
	
	function getCookie(c_name)
{
var c_value = document.cookie;
var c_start = c_value.indexOf(" " + c_name + "=");
if (c_start == -1)
  {
  c_start = c_value.indexOf(c_name + "=");
  }
if (c_start == -1)
  {
  c_value = null;
  }
else
  {
  c_start = c_value.indexOf("=", c_start) + 1;
  var c_end = c_value.indexOf(";", c_start);
  if (c_end == -1)
    {
    c_end = c_value.length;
    }
  c_value = unescape(c_value.substring(c_start,c_end));
  }
return c_value;
}

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

function checkCookie()
{
var username=getCookie("username");
if (username!=null && username!="")
  {
  console.log('SkyGate: Cookie - Welcome again ',username);
  $("#Hi").html("<h3>Hi "+username+"</h3><p>Welcome again! | 你好，按電鈴我們將為您開門！</p>");
  $('#Hi').fadeIn('slow');	 
  //alert("SkyGate: Welcome again " + username);
  }
else 
  {
	console.log('SkyGate: Cookie - Cookie is empty');  
  //username=prompt("Please enter your name:","");
  if (username!=null && username!="")
    {
    setCookie("username",username,365);
    }
  }
}
checkCookie();
// -----COOKIE.END
