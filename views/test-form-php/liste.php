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
    <div class="register ti">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dirigeant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Société</a>
            </li>
        </ul>
    </div>
    </head>
    
    <body>
    	<div class="container">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="titre">Liste des dirigeants inscrits</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Adresse email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-info">
                                <th scope="row">Nom</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-info">
                                <th scope="row">Nom2</th>
                                <td>Column content</td>
                                <td>Column content</td>
                                <td>Column content</td>
                            </tr>
                            <tr class="table-info">
                                      <th scope="row">Nom3</th>
                                      <td>Column content</td>
                                      <td>Column content</td>
                                      <td>Column content</td>
                            </tr>
                        </tbody>
                    </table>
                                                
           </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="titre">Liste des sociétés inscrites</h3>
                        <table class="table table-hover">
                            <thead>
                               <tr>
                                    <th scope="col">Nom de la société</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Code postal</th>
                                    <th scope="col">Ville</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-info">
                                    <th scope="row">Nom</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">Nom2</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                                <tr class="table-info">
                                    <th scope="row">Nom3</th>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                    <td>Column content</td>
                                </tr>
                            </tbody>
                        </table>

                                </div>    
                                </div>
                      
                           
            
</body>
<footer>
    <?php include('./footer.php'); ?>
</footer>
</html>