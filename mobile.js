let open = () => {
    console.log('clicked')
    let menulist = document.querySelectorAll(".part");
    menulist.forEach(menulist => {
        menulist.classList.toggle("appear");
    });
    let menlist = document.querySelectorAll(".one");
    menlist.forEach(menlist => {
        menlist.classList.toggle("hell");
    });
}
document.querySelector('.lgin').addEventListener('click',open)