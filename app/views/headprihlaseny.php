<!DOCTYPE html>
<html>
    <head>
        <title>Kina</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Školy</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="container-fluid collapse navbar-collapse" id="navbar-responsive">

                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Školy <span class="sr-only">(current)</span> </a></li>

                    <li class="nav-item"><a class="nav-link" href="  <?php echo base_url("prijati")?>"> Přijatí</a></li>
                   <li class="nav-item"><a class="nav-link" href="  <?php echo base_url("mapa")?>"> Mapa škol</a></li>
                <!--  <li class="nav-item"><a class="nav-link" href="<?php // echo base_url("vypis_salu")?>">Sály </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php // echo base_url("vypis_vstupenek")?>">Vstupenky</a></li>
                </ul>
-->

                </div>
                <div class="container collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto ">

                <li class="nav-item"><a class="nav-link" href="<?php echo base_url("auth/logout")?>">Odhlásit </a></li>
             
                </ul>
            </div>

        </nav>
