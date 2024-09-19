function showMessage(message) {
    var successElement = document.createElement('div');
    successElement.className = 'success-message';
    successElement.textContent = message;
    document.body.appendChild(successElement);

    if (message.includes('success')) {
        successElement.style.color = 'green';
    } else {
        successElement.style.color = 'red';
    }

    // Automatically close after 3 seconds
    setTimeout(function() {
        successElement.style.opacity = '0';
        setTimeout(function() {
            document.body.removeChild(successElement);
        }, 1000); // Wait for transition to complete
    }, 3000);
}