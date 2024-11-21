document.querySelector('form').addEventListener('submit', function(e) {
    const nameInput = document.querySelector('input[name="name"]');
    const emailInput = document.querySelector('input[name="email"]');
    const passwordInput = document.querySelector('input[name="password"]');
    const confirmInput = document.querySelector('input[name="confirm_password"]');
    if (nameInput.value.trim().length < 2 || !nameInput.value.match(/^[A-Za-z\s]+$/)) {
        e.preventDefault();
        alert('Please enter a valid name (2-50 letters)');
        return;
    }

    if (!emailInput.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
        e.preventDefault();
        alert('Please enter a valid email address');
        return;
    }
    if (passwordInput.value.length < 8) {
        e.preventDefault();
        alert('Password must be at least 8 characters long');
        return;
    }
    if (passwordInput.value !== confirmInput.value) {
        e.preventDefault();
        alert('Passwords do not match');
        return;
    }
});