const username = document.getElementById('username')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    const errors = [];

   if(username.value.trim() === ""){

    errors.push("username required")
   }

   if(password.value.length <= 4){
    errors.push("passwors must be at least 4 characters")
   }
    
    if(errors.length > 0) {
        e.preventDefault();
        errorMessage.toggleAttribute('hidden');
        errorMessage.innerHTML = errors.join(',');
    }

})