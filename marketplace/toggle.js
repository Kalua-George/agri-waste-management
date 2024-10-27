const signup = document.getElementById('signup');
const login = document.getElementById('login');
const logButton  = document.getElementById('logButton');
const signButton  = document.getElementById('signButton');


// for verfying if the user has registered eitht the right password
const pass1 = document.getElementById('Pass1').innerHTML;
const pass2 = document.getElementById('Pass2').innerHTML;



//.............................................................

signup.style.display = 'block';
login.style.display = 'none';

logButton.addEventListener('click' ,()=>{
    signup.style.display = 'none';
    login.style.display = 'block';
})

signButton.addEventListener('click' ,()=>{
    signup.style.display = 'block';
    login.style.display = 'none';
})