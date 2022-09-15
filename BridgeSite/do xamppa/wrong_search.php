<!DOCTYPE html>
<html lang="PL">
<head>

    <title>Nie znaleziono takiego zawodnika</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="keywords" content="Bridge, Brydż, brydż, Brydz, brydz, gra w brydza, gra w brydża">
    <meta name="author" content="Maciej Leszek, Piotr Okonek">
    
    
    <link rel="stylesheet" href="css/wrong_search_style3.css">
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
            <input type="text" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" name="search" placeholder="Podaj dane zawodnika" />               
                    
            <button type="submit" class="search_icon">
                <img src="css/svg/magnifying-glass-solid.svg" alt="search_icon">
            </button>                    
        </form> 

        <section>
            <div class="search_information">
                <h2>
                    Niestety nie ma takiego zawodnika w naszej bazie. <br> Prosimy o podanie poprawnego imienia i nazwiska lub ID zawodnika z PZBS
                </h2>
            </div>
        </section>

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