const attachWindow = document.getElementById('js__new-attach');
const attachButton = document.getElementById('js__attach-button');

if (attachButton && attachWindow){
    console.log('[MW]: Объекты найдены!')

    attachButton.addEventListener('click', function(){
        attachWindow.classList.remove('hiden');
        console.log('[MW]: Модальное окно открыто!')
    });
}

else {
    console.log('[MW]: Объекты не найдены!')
}