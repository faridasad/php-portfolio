const formToggler = document.querySelector('.contact-form-toggler');
const contactForm = document.querySelector('.contact-form');
const closeForm = document.querySelector('.close-form-btn');
const sendButton = document.querySelector('.send-btn');
const navContact = document.querySelector('.nav-contact');

const name = document.querySelector('input[name="name"]');
const from = document.querySelector('input[name="email"]');
const subject = document.querySelector('input[name="subject"]');
const message = document.querySelector('textarea[name="message"]');


navContact.addEventListener('click', () => {
    contactForm.toggleAttribute('hidden');
})

formToggler.addEventListener('click', () => {
    contactForm.toggleAttribute('hidden');
});

closeForm.addEventListener('click', () => {
    contactForm.setAttribute('hidden', true);
});

sendButton.addEventListener('click', (e) => {
    sendButton.setAttribute("disabled", true)
    e.preventDefault();
    if(from.value && subject.value && message.value){
    emailjs.sendForm('service_fer2k2l', 'template_aogvgt1', e.target.form)
    .then((result) => {
        alert("Your Email Just Sent!");
        name.value = "";
        from.value = "";
        subject.value = "";
        message.value = "";
        contactForm.toggleAttribute('hidden');
        sendButton.setAttribute("disabled", false)
    }, (error) => {
        alert(`Your Email didn't send! Error message: ${error.text}`)
    });
    }
});
