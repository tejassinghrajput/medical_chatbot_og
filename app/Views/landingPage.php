<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    

    <link rel="shortcut icon" href="./img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url(relativePath: 'css/landingPage.css'); ?>">
    <title>MBot | Home</title>
    <script defer src="<?= base_url(relativePath: 'js/landingPage.js'); ?>"></script>
</head>
<body>
    <header class="header animate__animated animate__fadeInDown">
        <div class="header__content-wrapper">
            <a href="#" class="header__logo" style="text-decoration: none; color:black; font-size: 50px;">
                <span>MBot</span><g fill="none" fill-rule="evenodd">
            </a>

            <button class="menu-btn header__menu-btn" aria-label="toggle menu button" aria-pressed="true">
                <span class="menu-btn__bar menu-btn__bar--1" aria-hidden="true"></span>
                <span class="menu-btn__bar menu-btn__bar--2" aria-hidden="true"></span>
                <span class="menu-btn__bar menu-btn__bar--3" aria-hidden="true"></span>
            </button>

            <nav class="header__nav">
                <ul class="header__nav__list">
                    <li class="header__nav__list__item"><a class="header__nav__link" href="/">Home</a></li>
                    <li class="header__nav__list__item"><a class="header__nav__link" href="javascript:void()" onclick="scrollToSection(event, 'features__content-wrapper')">About</a></li>
                    <li class="header__nav__list__item"><a class="header__nav__link" href="javascript:void()" onclick="scrollToSection(event, 'cta')">Contact</a></li>
                    <li class="header__nav__list__item"><a class="header__nav__link" href="/login"><span class="header__nav__link--login">Login</a></span></li>
                </ul>
                <div class="header__nav__social-icons">
                    <a href="#"><img src="./img/icon-facebook.svg" alt="facebook icon"></a>
                    <a href="#"><img src="./img/icon-twitter.svg" alt="twitter icon"></a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero__content-wrapper">
            <div class="hero__img-wrapper">
                <img class="hero__img animate__animated animate__bounceInRight" src="https://img.freepik.com/free-vector/chatbot-healthcare-abstract-concept-illustration_335657-1822.jpg?t=st=1735037860~exp=1735041460~hmac=03920420268ce45cee6826bdbc4224e3b4a11a48a0367f2a10deb2ddde3fbe60&w=740" alt="tablet">
            </div>
            
            <div class="hero__text-wrapper animate__animated animate__fadeInLeft">
                <h1 class="hero__heading heading heading--primary">A Simple Medical AI Assignment</h1>
                <p class="hero__description paragraph">A simple medical AI assignment focuses on designing or understanding basic AI models for healthcare applications. It typically involves tasks like symptom analysis, disease prediction, or patient data management using machine learning or rule-based systems. The assignment may include building models for diagnosing common conditions or automating routine medical processes. Such tasks help in understanding the practical application of AI in the healthcare industry.</p>
                <div class="hero__btn-wrapper">
                    <button class="btn btn--blue animate__animated animate__tada animate__delay-1s">Get Started</button>
                    <a href="javascript:void()" onclick="scrollToSection(event, 'features__content-wrapper')" style="text-decoration: none; color: black;" class="btn btn--grey animate__animated animate__tada animate__delay-2s">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="features" aria-live="polite">
        <div class="features__content-wrapper" id="features__content-wrapper">
            <div class="features__header">
                <h2 class="features__heading heading heading--secondary">Features</h2>
                <p class="features__description paragraph">A simple medical AI assignment includes features like symptom analysis, disease prediction, and task automation. It focuses on improving healthcare efficiency while ensuring data privacy and compliance.</p>
            </div>

            <ul class="tabs">
                <li class="tabs__tab tabs__tab--active" id="tab-1" tabindex="0">Simple Prompts</li>
                <li class="tabs__tab" id="tab-2" tabindex="0">Speedy Analysis</li>
                <li class="tabs__tab" id="tab-3" tabindex="0">Chat History</li>
            </ul>

            <div class="feature">
                <div class="feature__img-wrapper">
                    <img class="feature__img" style="height: 10%; width: 10%;" src="https://www.svgrepo.com/show/509864/command-prompt.svg" alt="dashboard">
                </div>
                <div class="feature__text-wrapper">
                    <h3 class="feature__heading heading heading--secondary">Just Write Simple Prompts</h3>
                    <p class="feature__description paragraph">Write only the symptoms about the problem and you will get very well  home remedy or deatils or doctor to consult with.</p>
                    <!-- <button class="feature__btn btn btn--blue">More Info</button> -->
                </div>
            </div>
        </div>
    </section>

    <section class="faqs">
        <div class="faqs__content-wrapper">
            <h2 class="faqs__heading heading heading--secondary">Frequently Asked Questions</h2>
            <p class="faqs__description paragraph">Here are some of our FAQs. If you have any other questions you’d like answered please feel free to email us.</p>
            <div class="faqs__faqs-wrapper">
                <details class="faq">
                    <summary class="faq__question">What is this website about?
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewbox="0 0 18 12"><path fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/></svg>
                    </summary>
                    <p class="faq__answer">This website offers AI-powered tools for healthcare, including symptom analysis and disease prediction.</p>
                </details>

                <details class="faq">
                    <summary class="faq__question">How does the symptom analysis work?
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewbox="0 0 18 12"><path fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/></svg>
                    </summary>
                    <p class="faq__answer">You input your symptoms, and the AI predicts possible medical conditions to help guide your next steps.</p>
                </details>

                <details class="faq">
                    <summary class="faq__question">Is my personal data safe?
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewbox="0 0 18 12"><path fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/></svg>
                    </summary>
                    <p class="faq__answer">Yes, we prioritize data privacy and comply with healthcare standards to protect your information.</p>
                </details>

                <details class="faq">
                    <summary class="faq__question"> Do I need an account to use the tools?
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="12" viewbox="0 0 18 12"><path fill="none" stroke="#5267DF" stroke-width="3" d="M1 1l8 8 8-8"/></svg>
                    </summary>
                    <p class="faq__answer">No, you can use the basic features without creating an account.</p>
                </details>
            </div>
            <!-- <button class="faqs__btn btn btn--blue">More Info</button> -->
        </div>
    </section>

    <section class="cta" id="cta">
        <div class="cta__content-wrapper">
            <p class="cta__subheading">20+ already joined</p>
            <h2 class="cta__heading" id="form-heading">Stay up-to-date with what we’re doing</h2>
            <button id="openModalBtn" style="padding: 5px 10px; font-size: 15px; background: linear-gradient(to right, #ff8615, #ff6a00, #e55b00); color: white; border: none; width: auto; height: auto; cursor: pointer; border-radius: 20px; font-weight: 500; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(to bottom right, #ff8615, #ff6a00, #e55b00)'" onmouseout="this.style.background='linear-gradient(to right, #ff8615, #ff6a00, #e55b00)'" onfocus="this.style.boxShadow='0 0 0 4px rgba(255, 134, 21, 0.4)'" onblur="this.style.boxShadow='none'">Contact Us</button>
        </div>
    </section>
    

    <!-- Modal -->
    <div id="myUniqueModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); justify-content: center; align-items: center; animation: fadeIn 0.5s;">
    <div style="background-color: white; padding: 20px; border-radius: 8px; width: 300px; text-align: center; position: relative; animation: slideIn 0.5s;">
        <!-- Close (Cross) Button -->
        <button id="closeBtn" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; color: #aaa; cursor: pointer; font-weight: bold;">&times;</button>

        <h2 style="font-size: 20px; color: #333;font-size:20px; margin-bottom: 5vh;">Send us an Email</h2>
        <div style="text-align:left;">
            <input type="text" class="text" id="text" placeholder="Enter Your Name" style="background-color: #f5f5f5;border-radius: 20px;box-shadow: 1px 1px 4px #cacaca;padding: 5px 5px 5px 10px;width: 100%;color: #5f5f5f;" required>
            <p id="nameError" style="color: red; font-size:12px;"></p>
            <br><br>
            <input type="email" class="email" id="email" placeholder="Enter email" style="background-color: #f5f5f5;border-radius: 20px;box-shadow: 1px 1px 4px #cacaca;padding: 5px 5px 5px 10px;width: 100%;color: #5f5f5f;" required>
            <p id="emailError" style="color: red; font-size:12px;"></p>
            <br><br>
            <textarea class="message" id="message" placeholder="Enter Your Message" style="background-color: #f5f5f5;border-radius: 20px;box-shadow: 1px 1px 4px #cacaca;padding: 5px 5px 5px 10px;width: 100%;color: #5f5f5f;" required></textarea>
            <p id="messageError" style="color: red; font-size:12px;"></p>
            <br><br>
        </div>
        <div style="display: flex; justify-content: space-between;">
            <a href="javascript:void(0)" type="button" onclick="submitFeedback(this)" style="background: linear-gradient(to right, #48bb78, #38a169, #2f855a); color: white; font-size: 14px; padding: 10px 20px; border-radius: 8px; font-weight: 500; text-align: center; border: none; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(to bottom right, #48bb78, #38a169, #2f855a)'" onmouseout="this.style.background='linear-gradient(to right, #48bb78, #38a169, #2f855a)'" onfocus="this.style.boxShadow='0 0 0 4px rgba(72, 187, 120, 0.4)'" onblur="this.style.boxShadow='none'">Submit</a>
            <a href="javascript:void(0)" id="closeModal" type="button" style="background: linear-gradient(to right, #f56565, #e53e3e, #c53030); color: white; font-size: 14px; padding: 10px 20px; border-radius: 8px; font-weight: 500; text-align: center; border: none; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(to bottom right, #f56565, #e53e3e, #c53030)'" onmouseout="this.style.background='linear-gradient(to right, #f56565, #e53e3e, #c53030)'" onfocus="this.style.boxShadow='0 0 0 4px rgba(234, 83, 83, 0.4)'" onblur="this.style.boxShadow='none'">Close</a>
        </div>
    </div>
    </div>
    <button onclick="showToast()" style="display: none;">Show Toast</button>

    
    <script>
        let isNameValid = false;
        let isEmailValid = false;
        let isMessageValid = false;
        const modal = document.getElementById('myUniqueModal');
        const openModalBtn = document.getElementById('openModalBtn');
        const closeModal = document.getElementById('closeModal');
        const closeBtn = document.getElementById('closeBtn');
        
        openModalBtn.onclick = function() {
            modal.style.display = 'flex';
        };

        
        function closeModalFunction() {
            modal.style.display = 'none';
        }

        closeModal.onclick = closeModalFunction;
        closeBtn.onclick = closeModalFunction;

        
    document.addEventListener('DOMContentLoaded', () => {
        const name = document.getElementById('text')
        const email = document.getElementById('email')
        const message = document.getElementById('message')

        const nameError = document.getElementById('nameError')
        const emailError = document.getElementById('emailError')
        const messageError = document.getElementById('messageError')

        name.addEventListener('input', () => handleInputChange(name, nameError, validName))
        email.addEventListener('input', () => handleInputChange(email, emailError, validateEmail))
        message.addEventListener('input', () => handleInputChange(message, messageError, validMessage))

        function handleInputChange(inputElement, errorElement, validFunction){
            const text = inputElement.value;
            console.log(text)
            const validRes = validFunction(text)
        

            if(validRes.isValid){
                showError(errorElement, '')
                isReady = true
            }else{
                showError(errorElement, validRes.message)
                isReady = false
            }
            
            if (inputElement === name) {
                isNameValid = validRes.isValid;
            } else if (inputElement === email) {
                isEmailValid = validRes.isValid;
            } else if (inputElement === message) {
                isMessageValid = validRes.isValid;
            }
        }

        function validName(name) {
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(name)) {
            return {
                isValid: false,
                message: 'Name can only contain letters and spaces.'
            };
            }
            return { isValid: true };
        }

        function validateEmail(email) {
            const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!regex.test(email)) {
            return {
                isValid: false,
                message: 'Please enter a valid email address.'
            };
            }
            return { isValid: true };
        }

        function validMessage(message){
            if(message.length < 10){
                return {
                    isValid: false,
                    message: 'Message must be at least 10 characters long.'
                }
            }
            else{
                return { isValid: true };
            }
        }

        function showError(errorElement, message){
            errorElement.textContent = message
        }

    })

    async function submitFeedback(button){

        if(!isEmailValid || !isNameValid || !isMessageValid){
            showToast(false, 'Please check your input again')
            return;
        }

        const originalButton = `
            <a href="javascript:void(0)" type="button" onclick="submitFeedback(this)" style="background: linear-gradient(to right, #48bb78, #38a169, #2f855a); color: white; font-size: 14px; padding: 10px 20px; border-radius: 8px; font-weight: 500; text-align: center; border: none; transition: all 0.3s ease;" onmouseover="this.style.background='linear-gradient(to bottom right, #48bb78, #38a169, #2f855a)'" onmouseout="this.style.background='linear-gradient(to right, #48bb78, #38a169, #2f855a)'" onfocus="this.style.boxShadow='0 0 0 4px rgba(72, 187, 120, 0.4)'" onblur="this.style.boxShadow='none'">Submit</a>
        `;

        button.outerHTML = `
            <button disabled="" type="button" style="color: white; background-color: #1d4ed8; border: none; border-radius: 0.375rem; font-size: 15px; font-weight: 500; padding: 0.625rem 1.25rem; text-align: center; margin-right: 0.5rem; display: inline-flex; align-items: center; outline: none; cursor: not-allowed; transition: background-color 0.2s ease;">
            <svg aria-hidden="true" role="status" style="display: inline; margin-right: 0.75rem; width: 3rem; height: 3rem; color: white; animation: spin 1s linear infinite;" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"></path>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"></path>
            </svg>
            Loading...
            </button>
        `;

        const name = document.getElementById("text").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;


        setTimeout(() => {

            const spinnerButton = document.querySelector("button[disabled]");
            if (spinnerButton) spinnerButton.outerHTML = originalButton;
        }, 2000)


        console.log(name,email,message)

        const response = await fetch('/api/submit-feedback',{
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                'name' : name,
                'email' : email,
                'message' : message
            })
        })

        const data = await response.json()

        if(data.status){
            showToast(data.status, data.message)
            closeBtn.click()
        }
        else{
            showToast(data.status, data.message)
            closeBtn.click()
        }

    }

    </script>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>
</html>