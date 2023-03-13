const form = {
    name: document.getElementById('name'),
    email: document.getElementById('email'),
    phone_number: document.getElementById('phone_num'),
    website: document.getElementById('website'),
    message: document.getElementById('message')
};

console.log(form);

form.submit.addEventListener('click', () => {
    console.log('button is clicked.!');
});

// window.onload=function(){
//     var submitBtn = document.getElementById('submit');
// }

