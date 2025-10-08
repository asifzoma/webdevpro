/**
 * Contact Form Handler
 */

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const formSuccess = document.getElementById('formSuccess');
            const formError = document.getElementById('formError');
            
            // Disable submit button
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner animate-spin mr-2"></i>Sending...';
            
            // Hide previous messages
            formSuccess.classList.add('hidden');
            formError.classList.add('hidden');
            
            try {
                const response = await fetch('/includes/process-contact.php', {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();
                
                if (data.success) {
                    formSuccess.textContent = data.message;
                    formSuccess.classList.remove('hidden');
                    contactForm.reset();
                    
                    // Show notification
                    if (typeof Utils !== 'undefined') {
                        Utils.showNotification(data.message, 'success');
                    }
                } else {
                    formError.textContent = data.message;
                    formError.classList.remove('hidden');
                    
                    // Show notification
                    if (typeof Utils !== 'undefined') {
                        Utils.showNotification(data.message, 'error');
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                formError.textContent = 'An error occurred. Please try again later.';
                formError.classList.remove('hidden');
                
                if (typeof Utils !== 'undefined') {
                    Utils.showNotification('An error occurred. Please try again later.', 'error');
                }
            } finally {
                // Re-enable submit button
                submitButton.disabled = false;
                submitButton.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>Send Message';
            }
        });
        
        // Real-time email validation
        const emailInput = contactForm.querySelector('#email');
        if (emailInput) {
            emailInput.addEventListener('blur', function() {
                if (this.value && typeof Utils !== 'undefined' && !Utils.validateEmail(this.value)) {
                    this.classList.add('border-red-500');
                    this.classList.remove('border-gray-300');
                } else {
                    this.classList.remove('border-red-500');
                    this.classList.add('border-gray-300');
                }
            });
        }
    }
});

