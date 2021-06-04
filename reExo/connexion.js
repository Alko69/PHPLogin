document.querySelector('#signUp').addEventListener('click', () => {
    document.querySelector('#connexion').classList.add('none');
    document.querySelector('#admission').classList.remove('none');

})

document.querySelector('#test').addEventListener('click', () => {
    pass = document.querySelector('#pass');
    if (pass.type == "password"){
        pass.setAttribute('type','text');
        document.querySelector('.image').classList.add('none');
        document.querySelector('.imageClosed').classList.remove('none');

    } else {
        pass.setAttribute('type','password');
        document.querySelector('.image').classList.remove('none');
        document.querySelector('.imageClosed').classList.add('none');
    }
})