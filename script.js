document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(form);
        try {
            const response = await fetch(form.action, {
                method: 'POST',
                body: formData,
            });
            const result = await response.text();
            document.getElementById('formMessage').innerText = result;
        } catch (error) {
            document.getElementById('formMessage').innerText = 'An error occurred. Please try again later.';
        }
    });
});
