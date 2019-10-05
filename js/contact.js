const modalControls = (() => {
    //function to open modal
const openModal = () => {
    modal.classList.remove('hide-button');
};
//function to close modal
const closeModal = () => {
    modal.classList.add('hide-button');
    email.value = '';
    name.value = '';
    message.value = '';
    };
    
//grab elements and asssign functions on action trigger
const openModalBtn = document.querySelector('.contact-modal-open-btn').addEventListener('click', openModal);
    const closeModalBtn = document.querySelector('#close-btn');
    closeModalBtn.addEventListener('click', closeModal);
    const modal = document.querySelector('#contact-form-frame'); 
    const name = document.querySelector('#name'); 
    const email = document.querySelector('#email'); 
    const message = document.querySelector('#message'); 
})();