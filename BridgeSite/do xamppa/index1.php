<?php
include_once('connection.php');
$query="select * from final_ranking limit 100";
$result=mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="PL">
<head>
    <title>The Bridge App</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="keywords" content="Bridge, Brydż, brydż, Brydz, brydz, gra w brydza, gra w brydża">
    <meta name="description" content="Strona mająca na celu ukazanie indywidualnego progresu gracza w brydża na podstawie wyników z ogólnopolskich turniejów">
    <meta name="author" content="Maciej Leszek, Piotr Okonek">
    
    <link rel="stylesheet" href="css/style2.css">
    <link rel="icon" href="css/img/logo.png">
</head>
<body>
    
    <nav>
        <div class="main_logo">
            <h1>&#9824; &#9829; The Bridge App &#9830; &#9827;</h1>
        </div>
    </nav>

    <main>

        <div class="search_bar">

                <div></div>

                <input type="text" placeholder="Wyszukaj profil zawodnika" />

                <button type="submit" class="search_icon">
                    <img src="css/svg/magnifying-glass-solid.svg" alt="search_icon">
                </button>
                            
        </div>

        <div class="about_ranking">
            <h1>Autorski ranking ukazujący w ciekawszy sposób poziom 100 najlepszych graczy niż ranking PZBSu. Jak go zrobiliśmy, nikt się nie dowie. CZEŚĆ </h1>
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