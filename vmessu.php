<?php
header("content-type:text/html;charset=utf-8");

?> 

<p id="aaa1"></p>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<script src="http://apps.bdimg.com/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$.ajax({
    type: "GET",
    url: "http://www.cll.name/p/phtm.php?callback=?&_=" + new Date().getTime(),
    type:"get",
    dataType:"jsonp",
    data:{
        url:"https%3A%2F%2Ffanqiang.network%2Ffree-v2ray"
    },
    /*success: function (data) {
       $("body").append(data);
    },*/
    error: function (XMLHttpRequest, textStatus, errorThrown) {
         console.log(errorThrown);
    }

}).done(function(page1){
    page1 = decodeURIComponent(page1.htm);
	//$("body").append(page1);
	arr1="['";
	$(page1).find("tbody tr").each(function(){$(this).find("td").each(function(i){if(i>0&&i<6){arr1+=$(this).html()+"#"}else if(i==6){arr1+=$(this).html()+"','"}})+",,,,,"});
	arr1+="']";
	arr2=eval(arr1);
	console.log(arr2);
	vm3="";
	for (i = 0; i < arr2.length; i++){
		vm1=arr2[i].split('#');	
		vm2='{"v": "2","ps": "","add": "'+vm1[0]+'","port": "'+vm1[1]+'","id": "'+vm1[2]+'","aid": "0","net": "'+vm1[3]+'","type": "none","host": "","path": "'+vm1[4]+'","tls": "'+vm1[5]+'"}';
		vm3+='vmess://'+window.btoa(vm2)+'\r\n';
		
	}
	//console.log(vm3);
	document.getElementById("aaa1").innerHTML = window.btoa(vm3);
});

</script>
