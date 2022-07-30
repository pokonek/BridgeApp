<?php
    include_once('connection.php');
    $filtervalues = $_GET['search'];

    $query = "SELECT * FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run = mysqli_query($con, $query);

    $query2 = "SELECT PID FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run2 = mysqli_query($con, $query2);

    $query3 = "SELECT Miejsce FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run3 = mysqli_query($con, $query3);

    $query4 = "SELECT `Zmiana pozycji` FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues'";
    $query_run4 = mysqli_query($con, $query4);

    $query5 = "SELECT `klub` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run5 = mysqli_query($con, $query5);

    $query6 = "SELECT `średnia_na_rozgrywce` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run6 = mysqli_query($con, $query6);

    $query7 = "SELECT `średnia_na_obronie` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run7 = mysqli_query($con, $query7);

    $query8 = "SELECT `kokosy na obronie` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run8 = mysqli_query($con, $query8);

    $query9 = "SELECT `częściówka` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run9 = mysqli_query($con, $query9);

    $query10 = "SELECT `końcówka` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run10 = mysqli_query($con, $query10);

    $query11 = "SELECT `szlemik` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run11 = mysqli_query($con, $query11);

    $query12 = "SELECT `wpadka` FROM stats_to_website WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run12 = mysqli_query($con, $query12);

    
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Profile</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="keywords" content="Bridge, Brydż, brydż, Brydz, brydz, gra w brydza, gra w brydża">
    <meta name="author" content="Maciej Leszek, Piotr Okonek">
    
    
    <link rel="stylesheet" href="css/profile_style.css">
    <link rel="icon" href="css/img/logo.png">
</head>
<body>
    <nav>
<br><br><br><br><br><br><br><br>
    </nav>
    <div class="col-md-8">
             <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            <br />
        		
        </div>
    <main>

        <header>
            <section>
                <div class="profile_photo">
                    <img src="css/img/user.png" alt="profile_photo">
                </div>
            </section>

            <aside>
                <div>
                    <ul class="profile_info">
                        <li class="profile_name">
                            <p>Imię i nazwisko</p>
                            <span><?php echo mysqli_fetch_assoc($query_run)['Zawodnik']; ?></span>
                        </li>
                        <li class="profile_id">
                            <p>ID</p>
                            <span><?php echo mysqli_fetch_assoc($query_run2)['PID']; ?></span>
                        </li>
                        <li class="profile_team">
                            <p>Organizacja</p>
                            <span><?php echo mysqli_fetch_assoc($query_run5)['klub']; ?></span>
                        </li>
                        <li class="profile_ranking_position">
                            <p>Pozycja w rankingu</p>
                            <span><?php echo mysqli_fetch_assoc($query_run3)['Miejsce']; ?></span>
                        </li>
                        <li class="profile_ranking_shift">
                            <p>Zmiana w rankingu</p>
                            <span><?php echo mysqli_fetch_assoc($query_run4)['Zmiana pozycji']; ?></span>
                        </li>

                    </ul>
                </div>

                <div>
                    <ul class="profile_stats">
                        <li class="profile_srednia_na_rozgrywce">
                            <div class="profile_dropdown">
                                <p>Średnia na rozgrywce</p>
                                <span><?php echo mysqli_fetch_assoc($query_run6)['średnia_na_rozgrywce']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których rozgrywa
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_srednia_na_obronie">
                            <div class="profile_dropdown">
                                <p>Średnia na obronie</p>
                                <span><?php echo mysqli_fetch_assoc($query_run7)['średnia_na_obronie']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których broni
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_kokosy_na_obronie">
                            <div class="profile_dropdown">
                                <p>Kokosy na obronie</p>
                                <span><?php echo mysqli_fetch_assoc($query_run8)['kokosy na obronie']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których bierze zapis na obronie
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_czesciowka">
                            <div class="profile_dropdown">
                                <p>Częściówka</p>
                                <span><?php echo mysqli_fetch_assoc($query_run9)['częściówka']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których wygrywa częściówkę
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_koncowka">
                            <div class="profile_dropdown">
                                <p>Końcówka</p>
                                <span><?php echo mysqli_fetch_assoc($query_run10)['końcówka']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których wygrywa końcówkę
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_szlemik">
                            <div class="profile_dropdown">
                                <p>Szlemik</p>
                                <span><?php echo mysqli_fetch_assoc($query_run11)['szlemik']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których wygrywa szlemika lub szlema
                                    </h5>
                                </div>
                            </div>
                        </li>
                        <li class="profile_wpadka">
                            <div class="profile_dropdown">
                                <p>Wpadka</p>
                                <span><?php echo mysqli_fetch_assoc($query_run12)['wpadka']; ?></span>
                                <div class="profile_dropdown_content">
                                    <h5>
                                        Od ilu procent graczy zawodnik osiąga 
                                        lepsze wyniki w rozdamiach, w których przegrywa kontrakt
                                    </h5>
                                </div>
                            </div>
                        </li>
                   
                         
                   
                </div>

            </aside>

        </header>
        
            
                 
        


        <article>
            <div class="profile_partial_ranking">

            </div>

            <div class="profile_graph">
                
            </div>
        </article>

    </main>

    <footer>

    </footer>
</body>
</html>