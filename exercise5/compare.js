

function comparenum(x,y){
	
	var int_x = parseInt(x);
	var int_y = parseInt(y);
	var diff = 0;
	var result = "HI!!!!";

	if(int_x>int_y){
		diff = x-y;
		result = "A>B";
	}
	else if(int_y>int_x){
		diff = y-x;
		result = "B>A";
	}
	else{
		diff = 0;
		result = "A=B";
	}

	document.getElementById('c').value = result;
	document.getElementById('d').value = diff;

}