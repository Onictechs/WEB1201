function switchForm(className, e) {
	e.preventDefault();
	const allForm = document.querySelectorAll('form');
	const form = document.querySelector(`form.${className}`);

	allForm.forEach(item=> {
		item.classList.remove('activated');
	})
	form.classList.add('activated');
}


const registerPassword = document.querySelector('form.register #password');
const registerConfirmPassword = document.querySelector('form.register #confirm-pass');

registerPassword.addEventListener('input', function () {
    if (registerPassword.value.length <= 8) {
        messages.push('password must be longer than 8 character')
    }

	registerConfirmPassword.pattern = `${this.value}`;
})