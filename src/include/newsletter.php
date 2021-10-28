
<style>
</style>
<div class="sib-form" style="text-align: center;display: flex;flex-direction: column;align-items: center;max-width: 96vh;margin: 0 auto">
    <div id="messages" class="sib-form-message-panel" style="position:relative;font-size:1.2vh; text-align:center; font-family:'Helvetica', sans-serif; color:#085229;border-radius:3px; border-color:#13ce66;width: 100%;max-width: 96vh;">
        <div id="success" style="width: 100%;margin: 0 auto;display: flex;justify-content: center; align-items: center;background-color: #e7faf0;border-radius: 1vh;border: .12vh solid #13ce66;display: none">
            <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon" style="width: 2vh;margin: 1vh;" >
                <path d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z"/>
            </svg>
            <p style="padding: 0;color: #085229;margin: 0;width: auto;">Votre inscription est confirmée.</p>
        </div>
        <div id="error" style="width: 100%;margin: 0 auto;display: flex;justify-content: center; align-items: center;background-color: #ffeded;border-radius: 1vh;border: .12vh solid #ff4949;display: none">
            <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon" style="width: 2vh;margin: 1vh;">
                <path d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z"></path>
            </svg>
            <p style="padding: 0;color: #661d1d;margin: 0;width: auto;">Nous n'avons pas pu confirmer votre inscription.</p>
        </div>
    </div>
    <form action="#" class="formNewsletters" method="POST">
        <label for="emailNewsLetter">
            <p style="padding: 0;margin: 1vh auto;opacity: 1;font-size: 2vh">Inscrivez-vous à notre newsletter pour suivre nos actualités.</p>
            <input type="email" name="emailNewsLetter" id="emailNewsLetter" placeholder="Votre email" required>
            <span class="cocheBox" style="display: flex;justify-content: center;align-items: center;width: 95%;margin: 1vh auto">
                <input type="checkbox" id="checkbox" style="width: 2vh;height: 2vh;">
                <label for="checkbox" style="text-align: left; margin: 0 1vh; padding: 0; cursor: pointer">J'accepte de recevoir vos e-mails et confirme avoir pris connaissance de votre politique de confidentialité et mentions légales.</label>
            </span>
        </label>
        <button type="submit" style="background: linear-gradient(90deg, rgba(62, 126, 250, 1), rgba(116, 163, 255, 1)); color: #fff;font-size: 1.5vh; width: 30vh;box-shadow: 20px 20px 30px 0 rgba(0,0,0,.2)">S'INSCRIRE</button>
    </form>
</div>
<script type="text/javascript">
    let formNewsletters = document.querySelector('.formNewsletters');

    function onsubmit(form) {
        console.log(form)
    }
    formNewsletters.onsubmit = (e) => {
        e.preventDefault(); // empeche l'envoie du formulaire
        onsubmit(this);
    }
</script>
