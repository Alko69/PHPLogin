document.querySelector('#signUp').addEventListener('click', () => {
    document.querySelector('#connexion').classList.add('none');
    document.querySelector('#admission').classList.remove('none');

})

document.querySelector('#test').addEventListener('click', () => {
    document.querySelector('#pass').setAttribute('type','text');
})