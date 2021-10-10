<div class="w-100 d-none loader-box" style="height: 100vh;">
    <div class="col-lg-12 d-flex justify-content-center p-0">
        <img src="assets/imgs/loader_gif.gif" alt="Loader" width="200" height="200" style="mix-blend-mode: multiply;">
    </div>
</div>
<div class="w-100 justify-content-center d-flex bg-info- px-0 mt-5">
    <form class="col-lg-5 connexion-form px-0" method="POST">
        <div class="col-lg-12 px-0 mb-2">
            <h4 class="h4">Web app M - Auto || Login</h4>
            <p>Connectez-vous pour pouvoir continuer avec vos achats</p>
        </div>
        <div class="form-group">
            <label for="phone">Nom d'utilisateur</label>
            <input type="text" name="telephone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Numéro de telephone ou Adresse Mail" required>
            <small id="emailHelp" class="form-text text-muted">Soyez sur! Vos informations ne seront pas partagés !</small>
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" class="form-control" id="pwd" placeholder="Votre mot de passe" required>
        </div>
        <div class="form-check my-2 output-message">
        </div>
        <div class="form-check my-2">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary w-100">
            <b>Connexion</b>
        </button>
    </form>
</div>