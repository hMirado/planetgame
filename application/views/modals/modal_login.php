<div class="modal-search-header flex-c-m trans-04" id="account">
    <div id="login-content">
        <form class="flex-w p-l-15 form-row"  id="login-form">
            <div class="form-group col-md-6 bor8 m-b-30 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-lr-28 login-nempty" type="text" name="lemailphone" id="lemailphone" placeholder="Votre email">
            </div>
            <div class="form-group col-md-6 bor8 m-b-30 how-pos4-parent">
                <input class="stext-111 cl2 plh3 size-116 p-lr-28 login-nempty" type="password" name="lpassword" id="lpassword" placeholder="Votre mots de passe">
            </div>
            <p class="stext-111 cl2 plh3 size-116 p-lr-28" id="login-error"></p>
            <button type="submit" id="login-account" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                Se connecter
            </button>
        </form>
        <div class="row mt-2">
            <div class="col-6">
                <a class="stext-111 cl2 plh3 size-116 p-lr-28" id="show-register">S'enregister</a>
            </div>
            <div class="col-6 text-right">
                <a class="stext-111 cl2 plh3 size-116 p-lr-28">Mots de passe oublié</a>
            </div>
        </div>
    </div>
    <div class="register-content">
        <form id="register-form">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="fname" id="fname" placeholder="Nom *">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="lname" id="lname" placeholder="Prénom(s) *">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="email" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="email" id="email" placeholder="Email *">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="phone" id="phone" placeholder="N° Tel. *">
                </div>
            </div>
            <div class="form-row" id="password-input">
                <div class="form-group col-md-6">
                    <input type="password" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty password" name="password" id="password" placeholder="Mots de passe *">
                </div>
                <div class="form-group col-md-6">
                    <input type="password" class="stext-111 cl2 plh3 size-116 p-lr-28 input-register password" name="confirmPass" id="confirmPass" placeholder="Confirmer le mots de passe *">
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="adress" id="adress" placeholder="Adresse *">
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="city" id="city" placeholder="Ville *">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-register" name="country" id="country" placeholder="Région">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="stext-111 cl2 plh3 size-116 p-lr-28 input-nempty" name="zip" id="zip" placeholder="Code postal *">
                </div>
            </div>
            <button type="submit" id="create-account" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                S'inscrire
            </button>
        </form>
        <div class="row mt-2">
            <div class="col-6">
                <a class="stext-111 cl2 plh3 size-116 p-lr-28" id="show-login">Se connecter</a>
            </div>
        </div>
    </div>
</div>