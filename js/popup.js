var link = document.querySelector('.btn');
var popup = document.querySelector('.feedback-popup');
var bg = document.querySelector('.bg-popup');
var form = popup.querySelector('form');
var close = popup.querySelector('.cross');
var login = form.querySelector('.login-field');
var phone = form.querySelector('.phone-field');
var email = form.querySelector('.email-field');


link.addEventListener('click', function (event) {
    event.preventDefault();
    popup.classList.add('popup-show');
    bg.classList.add('popup-show');
    form.reset();
    login.focus();
});

close.addEventListener('click', function (event) {
    event.preventDefault();
    popup.classList.remove('popup-show');
    bg.classList.remove('popup-show');
    popup.classList.remove('popup-error1');
    popup.classList.remove('popup-error');
});

bg.addEventListener('click', function (event) {
    event.preventDefault();
    popup.classList.remove('popup-show');
    bg.classList.remove('popup-show');
    popup.classList.remove('popup-error1');
    popup.classList.remove('popup-error');
});

// form.addEventListener('submit', function(event) {
// event.preventDefault();
// if ((!login.value || !pass.value) && (!popup.classList.contains('popup-error'))) 
// {
// 		popup.classList.add('popup-error');
// 	    popup.classList.remove('popup-error1');
// 	    }	
// else if  ((!login.value || !pass.value) && (popup.classList.contains('popup-error')))
// {
// 	    popup.classList.remove('popup-error');
// 		popup.classList.add('popup-error1');
// 	    }	
// else {form.submit();}	
// });

window.addEventListener('keydown', function (event) {
    if (event.keyCode == 27 && popup.classList.contains('popup-show') && bg.classList.contains('popup-show')) {
        popup.classList.remove('popup-show');
        bg.classList.remove('popup-show');
    }
}, false);
