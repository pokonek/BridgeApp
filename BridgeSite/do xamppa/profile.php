<?php
    error_reporting(E_ERROR | E_PARSE);
    include_once('connection.php');
    if(isset($_GET['search'])) {
        $filtervalues = $_GET['search'];
    }
    else{
        $filtervalues = '';
    }
    

    $query = "SELECT * FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run = mysqli_query($con, $query);

    $query2 = "SELECT PID FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run2 = mysqli_query($con, $query2);

    $query3 = "SELECT Miejsce FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues' ";
    $query_run3 = mysqli_query($con, $query3);

    $query4 = "SELECT `Zmiana pozycji` FROM final_ranking WHERE `PID`= '$filtervalues' or `Zawodnik`='$filtervalues'";
    $query_run4 = mysqli_query($con, $query4);

    $query5 = "SELECT `klub` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run5 = mysqli_query($con, $query5);

    $query6 = "SELECT `średnia_na_rozgrywce` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run6 = mysqli_query($con, $query6);

    $query7 = "SELECT `średnia_na_obronie` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run7 = mysqli_query($con, $query7);

    $query8 = "SELECT `kokosy na obronie` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
    $query_run8 = mysqli_query($con, $query8);

    $query9 = "SELECT `częściówka` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run9 = mysqli_query($con, $query9);

    $query10 = "SELECT `końcówka` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run10 = mysqli_query($con, $query10);

    $query11 = "SELECT `szlemik` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues'";
    $query_run11 = mysqli_query($con, $query11);

    $query12 = "SELECT `wpadka` FROM `table 2` WHERE `PID`= '$filtervalues' or `name`='$filtervalues' ";
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
    
    
    <link rel="stylesheet" href="css/profile_style1.css">
    <link rel="icon" href="css/img/logo.png">
</head>
<body>
    <nav>
        <div class="main_logo">
            <h1>&#9824; &#9829; The Bridge App &#9830; &#9827;</h1>
        </div>
    </nav>
        <form action="" method="GET">
            <div class="search_bar">            
                <div>

                </div>

                <input type="text" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" name="search" placeholder="Wyszukaj profil zawodnika" />               
                
                <button type="submit" class="search_icon">
                    <img src="css/svg/magnifying-glass-solid.svg" alt="search_icon">
                </button>
             </div>
        </form> 
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
        <h2>Kontakt</h2>
        <div class="contact">
            <div class="contact_p">
                <img src="css/img/user.png" alt="Piotr Okonek">
                <br>
                <h3>Piotr Okonek </h3><br> <h4> student Inżynierii i Analizy Danych <br> na Politechnice Warszawskiej</h4>
                <br>
                <p>linkedin:</p>
                <br>
                <p>mail:</p>
                <br>
                <p>github:</p>
            </div>
            <div class="contact_m">
                <img src="css/img/user.png" alt="Maciej Leszek">
                <br>
                <h3>Maciej Leszek</h3><br> <h4> student Inżynierii Internetu Rzeczy <br> na Politechnice Warszawskiej</h4>
                <br>
                <p>linkedin:</p>
                <br>
                <p>mail:</p>
                <br>
                <p>github:</p>
            </div>
        </div>
    </footer>
</body>
</html>