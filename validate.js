const signupForm = document.getElementById('signUp');
const signinForm = document.getElementById('signIn');
const pass = document.querySelectorAll('#password1');
const firstname = document.getElementById('firstName').value;
const lastname = document.getElementById('secondName').value;
const loginemail = document.getElementById('Username').value;
const submit = document.querySelectorAll('input[type=submit]');


//check for empty values
//check for validity of input
//use fetch to submit to php file


submit[0].addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.querySelector('input[type=email]').value;

    let formattedFormData = new FormData(signupForm);
    //Append the input data
    formattedFormData.append('firstname', firstname);
    formattedFormData.append('lastname', lastname);
    formattedFormData.append('confirm_password', pass[1].value);
    formattedFormData.append('email', email);
    formattedFormData.append('password', pass[0].value);
    formattedFormData.append('sign_up', submit[0]);


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
            alert('Registration Successful, you shall be redirected to the Dashboard');
            setTimeout(() => { window.location = 'calc.html'; }, 4000)
        } else {
            return false;
        }
    }

    //Initialize fetch
    fetchData(formattedFormData);
});

//validation for Sign In 
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
// });