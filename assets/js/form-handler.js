/**
 * Shared Form Handler for Aim Infocorp
 * Handles AJAX submission for all premium forms.
 */

document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.premium-form');

    forms.forEach(form => {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalContent = submitBtn.innerHTML;
            const handlerPath = form.dataset.handler || '/handlers/contact-handler.php'; // Fallback to main handler

            // Reset any previous state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Processing...';
            submitBtn.style.background = '';
            submitBtn.style.borderColor = '';

            try {
                const formData = new FormData(form);

                // ReCAPTCHA v3 Integration
                if (window.RECAPTCHA_SITE_KEY && window.RECAPTCHA_SITE_KEY !== 'YOUR_SITE_KEY_HERE' && window.RECAPTCHA_SITE_KEY !== '') {
                    if (typeof grecaptcha === 'undefined') {
                        throw new Error('Security check failed to load. Please disable adblockers or refresh the page.');
                    }
                    
                    const token = await new Promise((resolve, reject) => {
                        grecaptcha.ready(() => {
                            try {
                                grecaptcha.execute(window.RECAPTCHA_SITE_KEY, {action: 'submit'})
                                    .then(resolve)
                                    .catch(reject);
                            } catch (e) {
                                reject(new Error('Failed to execute CAPTCHA.'));
                            }
                        });
                    });
                    
                    if (!token) {
                        throw new Error('Failed to generate security token. Please try again.');
                    }
                    
                    formData.append('g-recaptcha-response', token);
                }

                const response = await fetch(window.CONTACT_HANDLER || '/handlers/contact-handler.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (result.status === 'success') {
                    const successMsg = form.dataset.success || 'Message Sent!';
                    submitBtn.innerHTML = `<i class="fa-solid fa-check"></i> ${successMsg}`;
                    submitBtn.style.background = '#22c55e'; // Green
                    submitBtn.style.borderColor = '#22c55e';
                    form.reset();
                } else {
                    throw new Error(result.message || 'Something went wrong.');
                }
            } catch (error) {
                console.error('Submission Error:', error);
                submitBtn.innerHTML = '<i class="fa-solid fa-xmark"></i> Error';
                submitBtn.style.background = '#ef4444'; // Red
                submitBtn.style.borderColor = '#ef4444';
                alert(error.message);
            } finally {
                // Reset button after 4 seconds
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalContent;
                    submitBtn.style.background = '';
                    submitBtn.style.borderColor = '';
                }, 4000);
            }
        });
    });
});
