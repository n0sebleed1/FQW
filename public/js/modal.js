const attachWindow = document.getElementById('js__new-attach');
const attachButton = document.getElementById('js__attach-button');
const attachImage = document.getElementById('js__attach-image');
const attachCode = document.getElementById('js__attach-code');

const attachImageInput = document.getElementById('js__attach-image-input');
const attachCodeInput = document.getElementById('js__attach-code-input');

let codeIsOpen = 0;
let imageIsOpen = 0;

if (attachButton && attachWindow){
    console.log('Model window founded!')

    attachButton.addEventListener('click', function(){
        attachWindow.classList.remove('hiden');
    });

    attachImage.addEventListener('click', function(){
        attachWindow.classList.add('hiden');
        attachImageInput.classList.remove('hiden');
        imageIsOpen = 1;
        if (codeIsOpen == 1 && imageIsOpen == 1) {
            attachButton.classList.add('hiden');
        }
    });

    attachCode.addEventListener('click', function(){
        attachWindow.classList.add('hiden');
        attachCodeInput.classList.remove('hiden');
        codeIsOpen = 1;
        if (codeIsOpen == 1 && imageIsOpen == 1) {
            attachButton.classList.add('hiden');
        }
    });
}

else {
    console.log('Model window not found!')
}