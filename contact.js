const form = document.getElementById('form');
const name = document.getElementById('name');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const message = document.getElementById('message');
const error = document.getElementById('error');

form.addEventListener('submit', (e) => {
    let messages = [];
    
    if (name.value === "" || name.value == null) {
        messages.push('Name is required');
    }

    const phoneRegex = /^01[3-9]\d{8}$/;
    if (!phoneRegex.test(phone.value)) {
        messages.push("Invalid Phone number .");
    }

    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailRegex.test(email.value)) {
        messages.push("Please enter a valid Email address.");
    }

    if (message.value === "" || message.value == null) {
        messages.push('Message cannot be empty');
    }

    if (messages.length > 0) {
        e.preventDefault();
        error.innerText = messages.join('\n');
    }
});
