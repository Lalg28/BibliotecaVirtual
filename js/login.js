const signUpButton = document.getElementById('signUp')
const signInButton = document.getElementById('signIn')
const containter = document.getElementById('container')

signUpButton.addEventListener('click', () => {
    containter.classList.add('right-panel-active')
})

signInButton.addEventListener('click', () => {
    containter.classList.remove('right-panel-active')
})