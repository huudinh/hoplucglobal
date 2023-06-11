(function() {
    const registerForm = document.getElementById('register-form');
    registerForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const registerInfo = {
            name: registerForm.iname,
            phone: registerForm.iphone,
            company: registerForm.icompany,
            website: registerForm.iwebsite,
            country: registerForm.icountry,
            email: registerForm.iemail,
            note: registerForm.inote,
        };
        validateForm(registerInfo);
    });

})();

// Check input null
function checkInput(item, mesages) {
    if (item.value === "") {
        alert(mesages);
        item.classList.add("border");
        item.focus();
        return false;
    } else {
        item.classList.remove("border");
    }
}

/* Hàm Kiểm Tra Form Dự Đoán */
function validateForm(registerInfo) {
    switch (false) {
        case checkInput(registerInfo.name, 'You have not entered your name'):
            break;
        case checkInput(registerInfo.phone, 'You did not enter a phone number'):
            break;
        case checkInput(registerInfo.company, 'You have not entered the company name'):
            break;
        case checkInput(registerInfo.email, 'You did not enter E-mail address'):
            break;
        case checkInput(registerInfo.note, 'You have not entered a question'):
            break;
        default:
            sendAPI(registerInfo);
            alert('You have successfully submitted');
            registerInfo.name.value = '';
            registerInfo.phone.value = '';
            registerInfo.company.value = '';
            registerInfo.website.value = '';
            registerInfo.country.value = '';
            registerInfo.email.value = '';
            registerInfo.note.value = '';
    }
}