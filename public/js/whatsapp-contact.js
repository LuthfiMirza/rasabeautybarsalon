/**
 * WhatsApp Contact Form Handler
 * Handles form validation and WhatsApp message sending
 */

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('whatsappForm');
    const submitBtn = document.getElementById('sendWhatsApp');
    const submitMessage = document.querySelector('.submit-message');
    
    // WhatsApp number (without + sign, with country code)
    const whatsappNumber = '6287816658903';
    
    if (!form) {
        console.warn('WhatsApp form not found');
        return;
    }
    
    // Form elements
    const nameInput = document.getElementById('contactName');
    const phoneInput = document.getElementById('contactPhone');
    const subjectInput = document.getElementById('contactSubject');
    const messageInput = document.getElementById('contactMessage');
    
    // Error elements
    const nameError = document.getElementById('nameError');
    const phoneError = document.getElementById('phoneError');
    const subjectError = document.getElementById('subjectError');
    const messageError = document.getElementById('messageError');
    
    /**
     * Validate form fields
     */
    function validateForm() {
        let isValid = true;
        
        // Reset errors
        hideError(nameError);
        hideError(phoneError);
        hideError(subjectError);
        hideError(messageError);
        
        // Validate name
        if (!nameInput.value.trim()) {
            showError(nameError, 'Please enter your name');
            isValid = false;
        } else if (nameInput.value.trim().length < 2) {
            showError(nameError, 'Name must be at least 2 characters');
            isValid = false;
        }
        
        // Validate subject
        if (!subjectInput.value.trim()) {
            showError(subjectError, 'Please enter a subject');
            isValid = false;
        } else if (subjectInput.value.trim().length < 3) {
            showError(subjectError, 'Subject must be at least 3 characters');
            isValid = false;
        }
        
        // Validate message
        if (!messageInput.value.trim()) {
            showError(messageError, 'Please enter your message');
            isValid = false;
        } else if (messageInput.value.trim().length < 10) {
            showError(messageError, 'Message must be at least 10 characters');
            isValid = false;
        }
        
        // Validate phone (optional but if provided, should be valid)
        if (phoneInput.value.trim()) {
            const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
            if (!phoneRegex.test(phoneInput.value.trim())) {
                showError(phoneError, 'Please enter a valid phone number');
                isValid = false;
            }
        }
        
        return isValid;
    }
    
    /**
     * Show error message
     */
    function showError(errorElement, message) {
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.classList.add('show');
        }
    }
    
    /**
     * Hide error message
     */
    function hideError(errorElement) {
        if (errorElement) {
            errorElement.classList.remove('show');
        }
    }
    
    /**
     * Format WhatsApp message
     */
    function formatWhatsAppMessage(formData) {
        const name = formData.name.trim();
        const phone = formData.phone.trim();
        const subject = formData.subject.trim();
        const message = formData.message.trim();
        
        let whatsappMessage = `*New Contact Message from Website*\n\n`;
        whatsappMessage += `*Name:* ${name}\n`;
        
        if (phone) {
            whatsappMessage += `*Phone:* ${phone}\n`;
        }
        
        whatsappMessage += `*Subject:* ${subject}\n\n`;
        whatsappMessage += `*Message:*\n${message}\n\n`;
        whatsappMessage += `_Sent from RasaBeauty Bar website_`;
        
        return whatsappMessage;
    }
    
    /**
     * Send message to WhatsApp
     */
    function sendToWhatsApp(formData) {
        const message = formatWhatsAppMessage(formData);
        const encodedMessage = encodeURIComponent(message);
        const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
        
        // Open WhatsApp in new tab
        window.open(whatsappUrl, '_blank');
        
        // Show success message
        showSuccessMessage('Message prepared! WhatsApp should open in a new tab.');
        
        // Reset form after successful submission
        setTimeout(() => {
            form.reset();
            hideSuccessMessage();
        }, 5000);
    }
    
    /**
     * Show success message
     */
    function showSuccessMessage(message) {
        if (submitMessage) {
            submitMessage.textContent = message;
            submitMessage.className = 'submit-message success';
        }
    }
    
    /**
     * Show error message
     */
    function showErrorMessage(message) {
        if (submitMessage) {
            submitMessage.textContent = message;
            submitMessage.className = 'submit-message error';
        }
    }
    
    /**
     * Hide success/error message
     */
    function hideSuccessMessage() {
        if (submitMessage) {
            submitMessage.className = 'submit-message';
        }
    }
    
    /**
     * Set loading state
     */
    function setLoadingState(loading) {
        if (loading) {
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="whatsapp-icon-text">⏳</span>SENDING...';
        } else {
            submitBtn.classList.remove('loading');
            submitBtn.disabled = false;
            submitBtn.innerHTML = '<span class="whatsapp-icon-text">📱</span>SEND YOUR MESSAGE';
        }
    }
    
    /**
     * Handle form submission
     */
    function handleFormSubmit(e) {
        e.preventDefault();
        
        console.log('Form submitted');
        
        // Hide previous messages
        hideSuccessMessage();
        
        // Validate form
        if (!validateForm()) {
            console.log('Form validation failed');
            showErrorMessage('Please fix the errors above and try again.');
            return;
        }
        
        // Set loading state
        setLoadingState(true);
        
        // Get form data
        const formData = {
            name: nameInput.value,
            phone: phoneInput.value,
            subject: subjectInput.value,
            message: messageInput.value
        };
        
        console.log('Form data:', formData);
        
        // Simulate processing delay
        setTimeout(() => {
            setLoadingState(false);
            sendToWhatsApp(formData);
        }, 1000);
    }
    
    // Add form submit event listener
    form.addEventListener('submit', handleFormSubmit);
    
    // Add real-time validation
    nameInput.addEventListener('blur', function() {
        if (this.value.trim() && this.value.trim().length < 2) {
            showError(nameError, 'Name must be at least 2 characters');
        } else {
            hideError(nameError);
        }
    });
    
    subjectInput.addEventListener('blur', function() {
        if (this.value.trim() && this.value.trim().length < 3) {
            showError(subjectError, 'Subject must be at least 3 characters');
        } else {
            hideError(subjectError);
        }
    });
    
    messageInput.addEventListener('blur', function() {
        if (this.value.trim() && this.value.trim().length < 10) {
            showError(messageError, 'Message must be at least 10 characters');
        } else {
            hideError(messageError);
        }
    });
    
    phoneInput.addEventListener('blur', function() {
        if (this.value.trim()) {
            const phoneRegex = /^[\+]?[0-9\s\-\(\)]{10,}$/;
            if (!phoneRegex.test(this.value.trim())) {
                showError(phoneError, 'Please enter a valid phone number');
            } else {
                hideError(phoneError);
            }
        } else {
            hideError(phoneError);
        }
    });
    
    // Add input focus effects
    const inputs = form.querySelectorAll('.input');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    console.log('WhatsApp contact form initialized');
    
    // Expose function for testing
    window.testWhatsAppForm = function() {
        const testData = {
            name: 'Test User',
            phone: '081234567890',
            subject: 'Test Message',
            message: 'This is a test message from the website contact form.'
        };
        sendToWhatsApp(testData);
    };
});