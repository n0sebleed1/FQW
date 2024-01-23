const attachWindow = document.getElementById('js__new-attach');
const attachButton = document.getElementById('js__attach-button');
const attachImage = document.getElementById('js__attach-image');
const attachCode = document.getElementById('js__attach-code');

const attachImageInput = document.getElementById('js__attach-image-input');
const attachCodeInput = document.getElementById('js__attach-code-input');

if (attachButton && attachWindow){
    console.log('Model window founded!')

    attachButton.addEventListener('click', function(){
        attachWindow.classList.remove('hiden');
    });

    attachImage.addEventListener('click', function(){
        attachWindow.classList.add('hiden');
        attachImageInput.classList.remove('hiden');
    });

    attachCode.addEventListener('click', function(){
        attachWindow.classList.add('hiden');
        attachCodeInput.classList.remove('hiden');
    });
}

else {
    console.log('Model window not found!')
}