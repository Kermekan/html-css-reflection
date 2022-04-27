const form = document.getElementById('contact-form');
    fullName = document.getElementById('full-name'),
    email = document.getElementById('email'),
    phone = document.getElementById('telephone'),
    subject = document.getElementById('subject'),
    message = document.getElementById('message');
    formSubmit = document.getElementById('form-submit');
// console.log(message);
    
let fullNameCounter = false;
let emailCounter = false;
let phoneCounter = false;
let subjectCounter = false;
let messageCounter = false;

// Prevent form submit on page refresh
if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

formSubmit.addEventListener('click', () => {
    validateForm();
    
    // Prevent submission if any errors
    if (fullNameCounter == false 
    || emailCounter == false 
    || phoneCounter == false 
    || subjectCounter == false 
    || messageCounter == false) {
        function handleForm(e) { e.preventDefault();}
        form.addEventListener('submit', handleForm);
    }
});

function validateForm() {
    // remove whitespace
    const fullNameValue = fullName.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const subjectValue = subject.value.trim();
    const messageValue = message.value.trim();
    
    // console.log("This is working");
    
    // FullName
    if(fullNameValue === '') { 
        setError(fullName);
        fullNameCounter = false;
    } else {
        removeError(fullName);
        fullNameCounter = true;
    }
    
    // Email
    if (emailValue === "" || !isEmail(emailValue)) {
        setError(email);
        emailCounter = false;
    }  else {
        removeError(email);
        emailCounter = true;
    }
    
    // Phone
    if(phoneValue === '') { 
        setError(phone);
        phoneCounter = false;
    } else {
        removeError(phone);
        phoneCounter = true;
    }
    
    // Subject
    if(subjectValue === '') { 
        setError(subject);
        subjectCounter = false;
    } else {
        removeError(subject);
        subjectCounter = true;
    }
    
    // Message
    if(messageValue === '') { 
        setError(message);
        messageCounter = false;
    } else {
        removeError(message);
        messageCounter = true;
    }
}

// Validation Checks
function setError(input) {
    const inputWrapper = input.parentElement;
    inputWrapper.classList.add('input-error')
}

function removeError(input) {
    const inputWrapper = input.parentElement;
    inputWrapper.classList.remove('input-error')
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

// X button - Not Working
// const exitBtn = document.querySelector("icon.bi-x");

// console.log(exitBtn);
// exitBtn.addEventListener("click", function(e){
//     e.currentTarget.parentElement.classList.add("hidden");
// })

// console.log(exitBtn);