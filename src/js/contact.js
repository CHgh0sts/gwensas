const form = document.querySelector(".popup form");
const valBtn = document.querySelector("button.validForm");

form.onsubmit = (e) => {
    e.preventDefault(); // empeche l'envoie du formulaire
}

valBtn.onclick = () => {
    // envoie en ajax du formulaire
    console.log('---------------------------- [ envoie a contact.php ... ] ----------------------------');
    let xhr = new XMLHttpRequest();
    xhr.open("POST","src/include/contact.php",true);
    xhr.onload = ()=> {
        if(xhr.readyState === XMLHttpRequest.DONE) {
            if(xhr.status === 200) {
                let data = xhr.response;
                if(data === 'done') {
                    document.querySelector('.popupback').classList.remove('open');
                } else {
                    console.log(data);
                }
            }else {
                console.log('Un problème et survenue avec contact.php')
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}