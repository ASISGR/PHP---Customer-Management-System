const registerContent = document.querySelector('.registerForm');
const newElement = document.createElement('div');
const usernameInput = document.querySelector('#usernameinput');
const uNameAlert = document.querySelector('#usernameAlert');


ControlEventListeners();

function ControlEventListeners(){
    usernameInput.addEventListener('keyup', ControlFname);

}

function ControlFname(e){
    
    let usernameValue;
    usernameValue = usernameInput.value;

    if(usernameValue.length >= 10 || usernameValue.length < 1)
    {
        uNameAlert.style.display = 'none';  
    }else{
        uNameAlert.style.display = 'block';  
    }

}

