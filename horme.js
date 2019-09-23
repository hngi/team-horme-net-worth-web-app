function calculate()
{
	
//assets
    var arr = document.getElementsByClassName('calc');
    var assets=0;
    for(var i=0;i<arr.length;i++){
		//alert(arr[i].value);
		if(!arr[i].value == ''){
			var y = arr[i].value.replace("$", "");
			var x = parseFloat(y.replace(/,/g, ""));	
			//alert(x);	
			if(x>0)
				assets += x;
		}
    }
    document.getElementById("assets").innerHTML = formatter.format(assets);
//debts
    var arr = document.getElementsByClassName('calc2');
    var liabilities=0;
    for(var i=0;i<arr.length;i++){
		//alert(arr[i].value);
		if(!arr[i].value == ''){
			var y = arr[i].value.replace("$", "");
			var x = parseFloat(y.replace(/,/g, ""));	
			//alert(x);	
			if(x>0)
				liabilities -= x;
		}
    }    
    document.getElementById("liabilities").innerHTML = formatter.format(liabilities);
    document.getElementById("total").innerHTML = formatter.format(assets+liabilities);

	document.getElementById("total").style.fontSize = 'xx-large';	
	document.getElementById("total").style.fontWeight = "bold";	
	if( assets+liabilities < 0 ){
		document.getElementById("total").style.color = '#cc2936';	
	}else if( assets+liabilities >= 0 ){
		document.getElementById("total").style.color = 'black';	
	}
}

var formatter = new Intl.NumberFormat('en-US', {
  style: 'currency',
  currency: 'NGN',
  minimumFractionDigits: 0,
  // the default value for minimumFractionDigits depends on the currency
  // and is usually already 2
});

function resetform(){
    document.getElementById("assets").innerHTML = '0';
    document.getElementById("liabilities").innerHTML = '0';
    document.getElementById("total").innerHTML = '0';
    //location.reload();
}

function rejectNegatives(field)
{
	var x = parseInt(field.value.replace("$", ""));
	
	if ( x < 0 ) {
		alert( "Please, enter a positive number!" );
		field.value = "";
		field.focus();
	}
	calculate();

}