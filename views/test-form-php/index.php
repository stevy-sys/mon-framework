<!DOCTYPE html>
<html>
    <head>
        <title>Formulaires</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <?php include('./header.php'); ?>
        
    </head>
    
    <body>

        <div class="register">
            <div class="row">
                <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Bienvenue</h3>
                        <p>Veillez choisir le formulaire qui  vous convient</p>
                        <input type="submit" name="" value="Se connecter"/><br/>
                </div>
                <div class="col-md-9 register-right">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dirigeant</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Société</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Inscrire un nouveau dirigeant</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Prénom *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="genre"> Genre * </label>
                                                <label class="radio"> 
                                                    <input type="radio" name="gender" value="male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radios"> 
                                                    <input type="radio" name="gender" value="female">
                                                    <span>Femelle </span> 
                                                </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Adresse email *" value="" />
                                    </div>
                                        <input type="submit" class="btnRegister"  value="Ajouter le dirigeant"/>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Inscrire une nouvelle société</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nom de la société *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="type"> Type de la société * </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SARL" >
                                                    <span> SARL </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="EURL">
                                                    <span>EURL </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SELARL" >
                                                    <span> SELARL </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SA">
                                                    <span> SA </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SAS" >
                                                    <span> SAS </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SASU">
                                                    <span> SASU </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SNC" >
                                                    <span> SNC </span> 
                                                </label>
                                                <label class="radio"> 
                                                    <input type="checkbox" name="gender" value="SCP">
                                                    <span> SCP </span> 
                                                </label>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <select class="form-control gris" >
                                            <option class="hidden"  selected disabled>Code postal *</option>
                                            <option >101</option>
                                            <option>103</option>
                                            <option>110</option>
                                        </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control gris">
                                                <option class="hidden"  selected disabled>Ville *</option>
                                                <option> Antananarivo </option>
                                                <option> Antsirabe </option>
                                                <option>  Morondava </option>
                                            </select>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Ajouter la société"/>
                                    </div>

                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<footer>
    <?php include('./footer.php'); ?>
</footer>
</html>