const pass = document.querySelectorAll('#password1');
const submit = document.querySelectorAll('input[type=submit]');
const errDiv = document.querySelectorAll("div[role=alert]");


//check for empty values
//check for validity of input
//use fetch to submit to php file


submit[0].addEventListener('click', (e) => {
    e.preventDefault();
    console.log('sign up event triggered');
    const email = document.querySelector('#email').value;
    const firstname = document.getElementById('firstName').value;
    const lastname = document.getElementById('secondName').value;
    console.log(firstname);
    const signupForm = document.getElementById('signUp');

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
            console.log(data);
            alert("Registration Successful, you shall be redirected to the Dashboard");
            setTimeout(() => { window.location = 'calc.html'; }, 4000);
        } else {
            //btn btn-danger
            //alert alert-danger
            console.log(data);
            //alert(data);
            console.log(data);
        }
    }

    //Initialize fetch
    fetchData(formattedFormData);
});

//validation for Sign In 
submit[1].addEventListener('click', (e) => {
    console.log('sign in event triggered');
    e.preventDefault();
    const loginemail = document.getElementById('Username').value;
    const signinForm = document.getElementById('signIn');
    let formattedFormData = new FormData(signinForm);
    //Append the input data
    formattedFormData.append('loginemail', loginemail);
    formattedFormData.append('password', pass[2].value);
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
        if (data === 'ALREADY_LOGGED_IN' || data === 'LOG_IN') {
            alert("Success");
            setTimeout(() => { window.location = 'calc.html'; }, 4000)
        } else {
            alert(data);
            console.log(data);
        }
    }

    //Initialize fetch
    fetchData(formattedFormData);
});