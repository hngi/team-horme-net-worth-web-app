let login = document.querySelector('#lgin');
let signUp = document.querySelector('#sgup')
let lgBtn = document.querySelector('#lg');
let suBtn = document.querySelector('#su')

let chngTlg = () => {
    login.style.display ='block';
    signUp.style.display='none'
    suBtn.style.background ='rgba(10, 163, 125, 0.904)';
    lgBtn.style.background='rgba(32, 43, 44)';
};

let chngTsu = () => {
    login.style.display ='none';
    signUp.style.display='block';
    suBtn.style.background ='rgb(32, 43, 44)';
    lgBtn.style.background='rgba(10, 163, 125, 0.904)';
};

lgBtn.addEventListener('click',chngTlg)
suBtn.addEventListener('click',chngTsu)
