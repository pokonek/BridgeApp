<?php

?>

<!DOCTYPE html>
<html lang="pl">
<title>Wynik wyszukiwania: </title>
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

        <section class="search_result">
            
        </section>

    </main>
    
</body>
</html>