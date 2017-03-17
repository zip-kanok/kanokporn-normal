<?php

if (isset($_GET['phpfunction'])){
	//ระบุ function ที่อนุญาติให้เรียกใช้งานได้
	$allow = array('plus','minus','mul','div','quote');
	//ประกาศ function
	function plus($n,$m){return $n+$m;}
	function minus($n,$m){return $n-$m;}
	function mul($n,$m){return $n*$m;}
	function div($n,$m){return $n/$m;}
	function quote($s){return "'$s'";}
	//ตรวจสอบว่า function ที่เรียกเป็น function ที่ได้รับอนุญาติให้ใช้หรือไม่
	if (in_array($_GET['phpfunction'],$allow,true)){
		//เรียกใช้งาน function
		$param = json_decode($_GET['param']);
		$value = call_user_func_array($_GET['phpfunction'],$param);
	} else {
		$value = 'error';
	}
	//ส่งค่า json string กลับไปให้ฝั่ง client
	header('Content-type:application/json;charset=utf-8');
	die( json_encode(compact('value')) );
}
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>asynchronous ajax call php function</title>
<script type="text/javascript" src="jquery.js"></script>
<!-- jquery plugin : http://code.google.com/p/jquery-json/ -->
<script type="text/javascript" src="jquery.json-2.2.js"></script>
<script type="text/javascript">

function callFunction(name,parameter,callback){
		var param = $.toJSON(parameter);
	  $.ajax({
	    url:'?phpfunction='+name+'&'+$.param({param:param}),
			type:'GET',
			dataType:'json',
	    success:function(e){
	    	callback(e);
			}
	  });
}

$(function(){
	$("#cal-button").click(function(e){	
		//นำค่าจาก dropdownlistbox มาไว้ในตัวแปร f1
		var f1 = $('#function-name').val();
		//นำค่าจาก textbox มาเก็บไว้ในตัวแปร d1, d2		
		var d1 = $('#d1').val();
		var d2 = $('#d2').val();
		//เรียก remote function f1 และส่งตัวแปร d1 และ d2 ไป
		callFunction(f1,[d1,d2],function(e){
				$('#d3').val(e.value);
		});		
	  e.preventDefault();
	});
});

</script>

</head>
<body>

    <br />function: <select id="function-name">
	    <option value="plus" selected="selected">บวก</option>
	    <option value="minus">ลบ</option>
	    <option value="mul">คูณ</option>
	    <option value="div">หาร</option>
	    <option value="quote">ใส่เครื่องหมายคำพูด</option>
    </select>
    <br />d1: <input type="text" id="d1" value="1" />
    <br />d2: <input type="text" id="d2" value="2" />
    <br />d3: <input type="text" id="d3" value="?" />
    <input type="button" id="cal-button" value="cal" />

</body>
</html>