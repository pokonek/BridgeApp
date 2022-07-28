<?php
include_once('connection.php');
$query="select * from new_ranking";
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
    <meta name="description" content="Strona mająca na celu ukazanie indywidualnego progresu gracza w brydża na podstawie wyników z ogólnopolskich turniejów w oparciu o technologie sieci neuronowych">
    <meta name="author" content="Maciej Leszek, Piotr Okonek">
    
    
    <link rel="stylesheet" href="css/style.css">
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
                <div class="search_icon">
                    <img src="css/svg/magnifying-glass-solid.svg" alt="search_icon">
                </div>

                <input type="text" placeholder="Wyszukaj profil zawodnika" />

                <div class="cancel_icon">
                    <img src="css/svg/xmark-solid.svg" alt="cancel_icon">
                </div>
        </div>

        <div class="description_profile_example">
            <br><br><br><br><br>
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

            </ul>
                <?php while($rows=mysqli_fetch_assoc($result)) 
                { 
                ?> 
                    <ul class="ranking_profile">
                        <li class="ranking_number">
                            <span><?php echo $rows['COL 1']; ?></span>
                        </li>

                        <li class="ranking_id">
                            <span><?php echo $rows['COL 2']; ?></span>
                        </li>

                        <li class="ranking_name">
                            <span><?php echo $rows['COL 3']; ?></span>
                        </li>
                    </ul>
            <?php 
                } 
            ?> 
           


            

        </div>

        <div class="further_ideas">
            <br><br><br><br><br>
        </div>

    </main>

    <footer>

        <div class="footer_logo">

        </div>

        <div class="footer_contact">

        </div>

    </footer>

</body>
</html>   