<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aniel's Kippencentrum</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans">
    <link rel="stylesheet" href="style.css">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Aniel's Kippencentrum" style="height: 3em;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Left nav items -->
            <div class="collapse navbar-collapse" id="navbarColor02"> 
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Winkel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prijzen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Verkoopstaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Klantregistratie</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-3">
                        <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#bonModal">bon</button>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="logindrop" data-toggle="dropdown">Rushil</a>
                        <div class="dropdown-menu text-center">
                            <a href="#" class="dropdown-item">About</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Logout</a>
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    
    <div class="container py-3 bg-light rounded my-3">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#intern">Intern</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#extern">Extern</a>
            </li>
        </ul>
        <div class="tab-content py-3">
            <div class="tab-pane container active" id="intern">
                <div class="row">
                    <div class="col-md-5">
                        <form action="" autocomplete="off">
                            <div class="form-group">
                                <label for="aantal">aantal: </label>
                                <input type="number" required name="aantal" id="aantal" class="form-control form-control-lg" min="0" step="1">
                            </div>
                            <div class="form-group">
                                <label for="soort">soort: </label>
                                <select class="form-control form-control-lg"  id="soort" name="soort" required>
                                    <option value="" disabled selected>Selecteer een kipsoort...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gewicht">gewicht: </label>
                                <div class="input-group">
                                    <input type="number" required name="gewicht" id="gewicht" class="form-control form-control-lg" min="0" step=".01">
                                    <div class="input-group-append">
                                        <span class="input-group-text">kg.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"> Schoonmaak
                                </label>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-secondary btn-lg btn-block">toevoegen aan bon</button>
                                <hr>
                                <button type="reset" class="btn btn-danger btn-lg btn-block">reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane container fade" id="extern">
                <div class="row">
                    <div class="col-md-5">
                        <form action="">
                            <div class="form-group">
                                <label for="aantal">aantal: </label>
                                <input type="number" required name="aantal" id="aantal" class="form-control form-control-lg" min="0" step="1">
                            </div>
                            <div class="form-group">
                                <label for="soort">soort: </label>
                                <select class="form-control form-control-lg" id="soort" name="soort" required>
                                    <option value="" disabled selected>selecteer een kipsoort...</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-secondary btn-lg btn-block">toevoegen aan bon</button>
                                <hr>
                                <button type="reset" class="btn btn-danger btn-lg btn-block">reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="bonModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">bon</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>aantal</th>
                            <th>item</th>
                            <th>prijs</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>6</th>
                            <th>Kwakwa@17.3kg</th>
                            <th>SRD 103.02</th>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>