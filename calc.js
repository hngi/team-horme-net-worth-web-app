// all asset inputs
const assetInputValues = document.querySelectorAll('#asset-value');
// all liability inputs
const liabilityInputValues = document.querySelectorAll('#liability-value');

// calculator function
function calculate() {

    //assets
    let arr = document.querySelectorAll('.calc');
	let assets = 0;

	arr.forEach(arrs => {
		if (!arrs.value == '') {
			let currency = arrs.value.replace("$", "");
			let noCurrency = parseFloat(currency.replace(/,/g, ""));
			//alert(x);	
			if (noCurrency > 0)
				assets += noCurrency;
        }
	})

    // total asset
	document.querySelector('.total-asset').innerHTML = formatter.format(assets);
    
    //debts
    let arr2 = document.querySelectorAll('.calc2');
	var liabilities = 0;

	arr2.forEach(arrs2 => {
		if (!arrs2.value == '') {
			let currency = arrs2.value.replace("$", "");
			var noCurrency = parseFloat(currency.replace(/,/g, ""));
			//alert(x);	
			if (noCurrency > 0)
			liabilities -= noCurrency;
		}
	})
    
    // total liability
	document.querySelector('.total-liability').innerHTML = formatter.format(liabilities);
    // net total
    document.querySelector('.total').innerHTML = formatter.format(assets + liabilities);
    // 
	document.querySelector('.total').style.fontSize = 'xx-large';
	document.querySelector('.total').style.fontWeight = "bold";
	if (assets + liabilities < 0) {
		document.querySelector('.total').style.color = '#cc2936';
	} else if (assets + liabilities >= 0) {
		document.querySelector('.total').style.color = 'black';
	}
}

const formatter = new Intl.NumberFormat('en-US', {
	style: 'currency',
	currency: 'NGN',
	minimumFractionDigits: 0,
	// the default value for minimumFractionDigits depends on the currency
	// and is usually already 2
});


// clear events
const clearAssets = document.querySelector('.clear-asset');
const clearLiabilities = document.querySelector('.clear-liability');

clearAssets.addEventListener('click', (e) => {
    e.preventDefault();
	document.querySelector('.total-asset').innerHTML = '0';
       document.querySelector('.total').innerHTML = '0';  
       assetInputValues.forEach(asset => {
           asset.value = '';
       })    
});

clearLiabilities.addEventListener('click', (e) => {
    e.preventDefault();
	document.querySelector('.total-liability').innerHTML = '0';
       document.querySelector('.total').innerHTML = '0';    
       liabilityInputValues.forEach(liability => {
        liability.value = '';
    }) 
});


function rejectNegatives(field) {
	let inputValue = parseInt(field.value.replace("$", ""));

	if (inputValue < 0) {
		alert("Please, enter a positive number!");
		field.value = "";
		field.focus();
	}
	calculate();
}