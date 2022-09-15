<?php
include_once('connection.php');
$query="select * from final_ranking limit 100";
$result=mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="PL">
<head>
    <title>Bridge App</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="keywords" content="Bridge, Brydż, brydż, Brydz, brydz, gra w brydza, gra w brydża">
    <meta name="description" content="Strona mająca na celu ukazanie indywidualnego progresu gracza w brydża na podstawie wyników z ogólnopolskich turniejów ">
    <meta name="author" content="Maciej Leszek, Piotr Okonek">
    
    
    <link rel="stylesheet" href="css/style9.css">
    <link rel="icon" href="css/img/logo.png">
</head>
<body>
    
    <nav>
        <a href="./index.php">
        <div class="main_logo">
            <h1>The Bridge App</h1>
        </div>
        </a>
    </nav>

    <main>

        <form class="search_bar" action="./profile.php" method="GET">
            <input type="text" placeholder="Podaj dane zawodnika" name="search" required/>

            <button type="submit" class="search_icon">
                <img src="css/svg/magnifying-glass-solid.svg" alt="search_icon">                
            </button>
        </form>

        <div class="about_ranking">
            <h2>
                Strona internetowa przedstawiająca ranking 25 najlepszych zawodników, którzy
                zagrali przynajamniej raz w comiesięcznym turnieju KMP. 
                <br><br> 
                Wpisz numer PID lub imię i nazwisko zawodnika, aby zobaczyć jego statystyki i progres. 
            </h2>
        </div>

        <div class="main_ranking">

            <ul class="ranking_profile_text">
                <li class="ranking_number">
                    <span><b>Pozycja w rankingu</b></span>
                </li>

                <li class="ranking_id">
                    <span><b>ID</b></span>
                </li>

                <li class="ranking_name">
                    <span><b>Imię i nazwisko</b></span>
                </li>

                <li class="ranking_result">
                    <span><b>Wynik</b></span>
                </li>

                <li class="ranking_difference">
                    <span><b>Zmiana pozycji</b></span>
                </li>

            </ul>
                <?php while($rows=mysqli_fetch_assoc($result)) 
                { 
                ?> 
                    <ul class="ranking_profile">
                        <li class="ranking_number">
                            <span><?php echo $rows['Miejsce']; ?></span>
                        </li>

                        <li class="ranking_id">
                            <span><?php echo $rows['PID']; ?></span>
                        </li>

                        <li class="ranking_name">
                            <span><?php echo $rows['Zawodnik']; ?></span>
                        </li>

                        <li class="ranking_result">
                            <span><?php echo $rows['Ranking']; ?></span>
                        </li>

                        <li class="ranking_difference">
                            <span><?php echo $rows['Zmiana pozycji']; ?></span>
                        </li>
                    </ul>
            <?php 
                } 
            ?> 
           


            

        </div>

    </main>    

    <footer>
        <h2>Kontakt</h2>
        <address class="contact">
            <div class="contact_p">
                <img src="css/img/pietras.jpg" alt="Piotr Okonek">
                <br>
                <h3>Piotr Okonek </h3><br> <h4> student Inżynierii i Analizy Danych <br>Politechnika Warszawska</h4>
                <br>
                <p><a href="#" target="_blank">linkedin:</a></p>
                <br>
                <p><a href="mailto:p.okonek@wasko.pl" target="_blank">p.okonek@wasko.pl</a></p> 
                <br>
                <p><a href="https://github.com/pokonek" target="_blank">github.com/pokonek</a></p>
            </div>
            <div class="contact_m">
                <img src="css/img/lehu.jpg" alt="Maciej Leszek">
                <br>
                <h3>Maciej Leszek</h3>
                <br>
                <h4>student Inżynierii Internetu Rzeczy <br>Politechnika Warszawska</h4>
                <br>
                <p><a href="https://www.linkedin.com/in/maciej-leszek-74405a249/" target="_blank">linkedin.com/in/maciej-leszek</a></p>
                <br>
                <p><a href="mailto:maciej02.leszek@gmail.com" target="_blank">maciej02.leszek@gmail.com</a></p>
                <br>
                <p><a href="https://github.com/maciejleszek" target="_blank">github.com/maciejleszek</a></p>
            </div>
        </address>
    </footer>

</body>
</html> 