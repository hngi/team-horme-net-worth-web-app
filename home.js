let login = document.querySelector('#lgin');
let signUp = document.querySelector('#sgup')
let lgBtn = document.querySelector('#lg');
let suBtn = document.querySelector('#su')

let chngTlg = () => {
    login.style.display ='block';
    signUp.style.display='none'
    suBtn.style.background ='#1AB188';
    lgBtn.style.background='rgba(32, 43, 44)';
};

let chngTsu = () => {
    login.style.display ='none';
    signUp.style.display='block';
    suBtn.style.background ='rgb(32, 43, 44)';
    lgBtn.style.background='#1AB188';
};

lgBtn.addEventListener('click',chngTlg)
suBtn.addEventListener('click',chngTsu)

let open =() => {
    let menulists = document.querySelectorAll(".part");
    menulists.forEach(menulist => {
        menulist.classList.toggle("appear");
    })
    // document.querySelector('.part').style.display='block'
}
let close =() => {
    let menulists = document.querySelectorAll(".info");
    menulists.forEach(menulist => {
        menulist.classList.toggle("hide");
    })
}
    document.querySelector('.p').addEventListener('click', open);
    document.querySelector('.p').addEventListener('click', close);
