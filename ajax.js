const password = document.querySelectorAll('#password1');
const submit = document.querySelectorAll('input[type=submit]');
const loginemail = document.getElementById('Username');
const msg = document.querySelectorAll('.alert-msg');
const suForm = document.getElementById('signUp');
const siForm = document.getElementById('signIn')
const firstname = document.getElementById('firstName');
const secondname = document.getElementById('secondName');
const email = document.getElementById('email');
const termCheck = document.querySelector('input[type=checkbox]');

//Message Display Handler
function msgUp(text, isValid = true) {
    if (isValid) {
        if (msg[0].classList.contains('alert-danger')) {
            msg[0].classList.remove('alert-danger');
        }
        msg[0].innerHTML = text;
        msg[0].style.display = 'block';
        msg[0].classList.add('alert');
        msg[0].classList.add('alert-success');
        msg[0].classList.add('text-center');
    } else {
        msg[0].innerHTML = text;
        msg[0].style.display = 'block';
        msg[0].classList.add('alert');
        msg[0].classList.add('alert-danger');
        msg[0].classList.add('text-center');
        return false;
    }
}

function msgIn(text, isValid = true) {
    if (isValid) {
        if (msg[1].classList.contains('alert-danger')) {
            msg[1].classList.remove('alert-danger');
        }
        msg[1].innerHTML = text;
        msg[1].style.display = 'block';
        msg[1].classList.add('alert');
        msg[1].classList.add('alert-success');
        msg[1].classList.add('text-center');
    } else {
        msg[1].innerHTML = text;
        msg[1].style.display = 'block';
        msg[1].classList.add('alert');
        msg[1].classList.add('alert-danger');
        msg[1].classList.add('text-center');
        return false;
    }
}
// Submit AJAX Handler
function submitUp(event) {

    let formattedFormData = new FormData(suForm);
    //Append the input data
    formattedFormData.append('firstname', firstname.value);
    formattedFormData.append('lastname', secondname.value);
    formattedFormData.append('confirmpassword', password[1].value);
    formattedFormData.append('email', email.value);
    formattedFormData.append('password', password[0].value);
    formattedFormData.append('check', termCheck);
    formattedFormData.append('sign_up', submit[0]);

    event.preventDefault();



    async function fetchData(dataForm) {
        const response = await fetch('process/signup_process.php', {
            method: 'POST',
            body: dataForm
        });
        console.log(response);
        const data = await response.text();
        //Handle PHP Response respectively
        // alert(data);
        if (data === 'REGD_SUCCESS') {
            msgUp('Registration Successful, you shall be redirected', true);
            setTimeout(() => { window.location = 'calc.php'; }, 2000)
        } else {
            msgUp(data, false);
            console.log(data);
        }
    }

    //Initialize fetch
    fetchData(formattedFormData);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Signup Handling
submit[0].addEventListener('click', (event) => {
    event.preventDefault();
    console.log(msg);
    console.log(termCheck);
    const pattern = /^[A-Za-z]+$/;
    const emailpattern = /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
    // if the form is valid or not:
    if (password[0].value !== password[1].value) {
        msgUp('Re-confirm your password', false);
        return false;

    } else if (termCheck.checked !== true) {
        msgUp('Agree to our terms and condition before proceeding', false);
        return false;

    } else if (suForm.checkValidity() && password[0].value === password[1].value && termCheck.checked === true) {
        submitUp(event);

    } else {
        if (firstname.value === "" || secondname.value === "") {
            msgUp('Fill in your name(s)', false);
        } else if (firstname.value.length < 2 || secondname.value.length < 2) {
            msgUp('Use more than a character in your name', false);
        } else if (!firstname.value.match(pattern) || !secondname.value.match(pattern)) {
            msgUp('Invalid Characters For Your Name(s)', false);
        }

        //email validation 
        if (email.value === "" || !email.value.match(emailpattern)) {
            msgUp('Enter a Valid Email', false);
        }

        if (password[0].value.length < 6) {
            //valid password check
            msgUp('Password must be greater than 6 characters', false);
            return false;
        } else if (password[0].value !== password[1].value) {
            //valid password check
            msgUp('Re-confirm your password', false);
            return false;
        }
    }
});

//validation for Sign In 
submit[1].addEventListener('click', (event) => {
    console.log('sign in event triggered');
    event.preventDefault();

    let formattedFormData = new FormData(siForm);
    //Append the input data
    formattedFormData.append('loginemail', loginemail.value);
    formattedFormData.append('loginpassword', password[2].value);
    formattedFormData.append('loginapp', submit[1]);


    async function fetchData(dataForm) {
        const response = await fetch('process/login_process.php', {
            method: 'POST',
            body: dataForm
        });
        console.log(response);
        const data = await response.text();
        //Show an alert of successful registration based on PHP output
        // alert(data);
        if (data === 'LOG_IN') {
            window.location = 'calc.php';
        } else {
            msgIn(data, false);
        }
    }

    //Initialize fetch
    fetchData(formattedFormData);
});






























//////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// const form = document.getElementsByTagName('form');
// const email = document.querySelectorAll('input[type=email]');
// const pass = document.querySelectorAll('input[type=password]');
// const submit_btn = document.querySelectorAll('.submit');
// const username = document.querySelectorAll('#username');
// let errDiv = document.querySelectorAll('.error');


// //check for empty values
// //check for validity of input
// //use fetch to submit to php file

// //Error Message function display for sign up
// const err = (string, boo) => {
//         if (boo === false) {
//             errDiv[0].style.display = 'block';
//             errDiv[0].style.color = 'red';
//             errDiv[0].innerHTML = string;
//             setTimeout(() => {
//                 errDiv[0].style.display = 'none';
//                 errDiv[0].innerHTML = '';
//             }, 6000);
//         } else {
//             errDiv[0].style.display = 'block';
//             errDiv[0].style.color = 'green';
//             errDiv[0].innerHTML = string;
//             setTimeout(() => {
//                 errDiv[0].style.display = 'none';
//                 errDiv[0].innerHTML = '';
//             }, 1000);
//         }
//     }
//     //Error Message function display for log in
// const err1 = (string, boo) => {
//     if (boo === false) {
//         errDiv[1].style.display = 'block';
//         errDiv[1].style.color = 'red';
//         errDiv[1].innerHTML = string;
//         setTimeout(() => {
//             errDiv[1].style.display = 'none';
//             errDiv[1].innerHTML = '';
//         }, 6000);
//     }
// }

// submit_btn[0].addEventListener('click', (e) => {
//     e.preventDefault();
//     const confPass = document.querySelector('#repeat_password').value;
//     const name = document.querySelector('#name');

//     if (pass[0].value.length < 6) { //valid password check
//         err('Password must be greater than 6 characters', false);
//         return false;
//     } else {
//         let formattedFormData = new FormData(form[0]);
//         //Append the input data
//         formattedFormData.append('username', username[0].value);
//         formattedFormData.append('name', name.value);
//         formattedFormData.append('confirm_password', confPass);
//         formattedFormData.append('email', email[0].value);
//         formattedFormData.append('password', pass[0].value);
//         formattedFormData.append('submit', submit_btn[0]);


//         async function fetchData(dataForm) {
//             const response = await fetch('register.php', {
//                 method: 'POST',
//                 body: dataForm
//             });
//             console.log(response);
//             const data = await response.text();
//             //Handle PHP Response respectively
//             // alert(data);
//             if (data === 'REGD_SUCCESS') {
//                 err('Registration Successful, you shall be redirected to the Dashboard', true);
//                 setTimeout(() => { window.location = 'dashboard.php'; }, 4000)
//             } else {
//                 err(data, false);
//             }
//         }

//         //Initialize fetch
//         fetchData(formattedFormData);
//     }
// });

// //validation for Sign In 
// submit_btn[1].addEventListener('click', (e) => {
//     console.log('sign in event triggered');
//     e.preventDefault();

//     let formattedFormData = new FormData(form[1]);
//     //Append the input data
//     formattedFormData.append('email', email[1].value);
//     formattedFormData.append('password', pass[2].value);
//     formattedFormData.append('submit', submit_btn[1]);


//     async function fetchData(dataForm) {
//         const response = await fetch('login.php', {
//             method: 'POST',
//             body: dataForm
//         });
//         console.log(response);
//         const data = await response.text();
//         //Show an alert of successful registration based on PHP output
//         // alert(data);
//         if (data === 'ALREADY_LOGGED_IN' || data === 'LOG_IN') {
//             window.location = 'dashboard.php';
//         } else {
//             err1(data, false);
//         }
//     }

//     //Initialize fetch
//     fetchData(formattedFormData);
// });0