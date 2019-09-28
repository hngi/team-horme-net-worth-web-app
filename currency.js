$('#currency-dropdown .dropdown-item').on('click', function(e){
    changeCurrency(e.target.innerText);
})

function changeCurrency(currency) {
    console.log(currency);
    $('.currency-display')[0].innerText = currency;
    $('.currency-display h4')[0].innerText = currency;
    $('.currency-display h4')[1].innerText = currency;
    $('.currency-display h4')[2].innerText = currency;
}

