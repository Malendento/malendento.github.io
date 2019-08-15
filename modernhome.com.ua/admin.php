<?php
session_start();
require_once("config.php");
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: adminlog.php");
    exit;
}
if(isset($_GET["logout"])) {


// Unset all of the session variables
    $_SESSION = array();

// Destroy the session.
    session_destroy();

// Redirect to login page
    header("location: adminlog.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="./img/favicon.png" type="image/png">
        <title>Admin Panel | Modern Home</title>
    
        <link rel="stylesheet" href="./css/zoom.css">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
        <link rel="stylesheet" href="./css/style.css">
        
        <link rel="stylesheet" href="./css/house.css">
    
        <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <header class="header container-fluid">
        <nav class="navbar navbar-expand-lg fixed-top" style="z-index: 115;">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.svg" alt="" srcset="">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    try {

                        $stmtC = $db->query('SELECT * FROM cotteges ');
                        while($row = $stmtC->fetch_assoc()){

                            echo '<li class="nav-item">';
                                echo '<a class="nav-link" href="#object-1">'.$row['name'].'</a>';
                            echo '</li>';
                        }

                    } catch(mysqli_sql_exception $e) {
                        echo $e->getMessage();
                    }?>
                </ul>
            </div>

            <div class="admin__buttons">
                <a class="custom-button-learn custom-button_padding" href="#">ПЕРЕЙТИ НА САЙТ</a>
                <a class="custom-button-learn custom-button_padding" href="./admin.php?logout=true">ВИЙТИ</a>
            </div>
        </nav>
    </header>

    <main class="main">
        <?php
            try {
                $stmtC = $db->query('SELECT * FROM cotteges ');
                while($row = $stmtC->fetch_assoc()){
                    echo '<section class="building building_flex container-fluid" id="object-1">';
                        echo '<h2 class="g-title">'.$row["name"].'</h2>';
                        echo '<a class="custom-button-learn custom-button_padding" href="#">ПЕРЕЙТИ НА СТОРІНКУ КОМПЛЕКСУ</a>';
                        echo '<div class="building_row row">';
                        echo '<div class="left-arrow left-arrow-first"><img src="./img/arrow-left.svg"></div>';
                        echo '<div class="building-slider-first col-md-8">';
                    $stmtE = $db->query('SELECT * FROM etaps WHERE  cottege_id="'.$row["id"].'" ORDER BY id desc');
                        while($rowe = $stmtE->fetch_assoc()){
                            $path = './img/uploads/'.$rowe["imgpath"];
                            echo '<div class="building-slider__item">';
                            echo '<div class="building-admin">';
                            echo '<a class="building-admin__link"><img src="./img/edit-icon.svg" data-toggle="modal" data-target="#buildinged'.$rowe["id"].'" alt="" srcset=""></a>';
                            echo '<a class="building-admin__link"  href="./delete.php?id='.$rowe["id"].'"><img src="./img/delete-icon.svg" alt="" srcset=""></a>';
                            echo '</div>';
                            echo '<div class="building-slider__box" style="background-image: url(' . $path . ')";></div>';
                            echo '<h4 class="building-slider__title">'.$rowe["date"].'</h4>';
                            echo '<p class="building-slider__text">'.$rowe["prog"].'</p>';
                            echo '</div>';
                        }
                        echo '</div>';
                        echo '<div class="building_trs col-md-3" data-toggle="modal" data-target="#building'.$row["id"].'">';
                        echo '<div class="building__add">';
                        echo '<a href="http://"></a>';
                        echo '<img src="./img/add-icon.svg" alt="" srcset="">';
                        echo '<h3>Додати етап</h3>';
                        echo '</div>';
                        echo '</div>';
                        echo '<form action="upload.php" method="post" enctype="multipart/form-data" class="modal fade" id="building'.$row["id"].'" tabindex="-1" role="dialog" aria-labelledby="building-firstTitle" aria-hidden="true">';
                        echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                        echo '<div class="modal-content">';
                        echo '<input type="hidden" name="cottege_id" value='.$row["id"].'>';
                        echo '<input class="modal__file" type="file" name="imgfile" id="" placeholder="ФАЙЛ" required>';
                        echo '<input class="modal__date" type="text" name="date" id="" placeholder="Дата (наприклад, грудень 2019)" required>';
                        echo '<input class="modal__progress" type="text" name="prog" id="" placeholder="Прогрес робіт за цей час" required>';
                        echo '<button type="submit" name="submit" class="custom-button-learn custom-button_padding modal__button">ДОДАТИ</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</form>';
                    $stmtE = $db->query('SELECT * FROM etaps WHERE  cottege_id="'.$row["id"].'"');
                        while($rowe = $stmtE->fetch_assoc()){
                            echo '<form action="edit.php" method="post" enctype="multipart/form-data" class="modal fade" id="buildinged'.$rowe["id"].'" tabindex="-1" role="dialog" aria-labelledby="building-firstTitle" aria-hidden="true">';
                            echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                            echo '<div class="modal-content">';
                            echo '<input type="hidden" name="id" value='.$rowe["id"].'>';
                            echo '<input class="modal__file" type="file" name="imgfile" id="" placeholder="ФАЙЛ">';
                            echo '<input class="modal__date" type="text" name="date" id="" placeholder="Дата (наприклад, грудень 2019)" required>';
                            echo '<input class="modal__progress" type="text" name="prog" id="" placeholder="Прогрес робіт за цей час" required>';
                            echo '<button type="submit" name="submit" class="custom-button-learn custom-button_padding modal__button">ДОДАТИ</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</form>';
                        }
//                        echo '<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete-firstTitle" aria-hidden="true">';
//                    echo '<div class="modal-dialog modal-dialog-centered modal_cntr" role="document">';
//                    echo '<div class="modal-content modal-delete">';
//                    echo '<h2 class="modal-delete__title">Видалити цей етап?</h2>';
//                    echo '<div class="modal-delete__block">';
//                    echo '<button type="button" class="modal-delete__button custom-button-learn custom-button_padding modal__button" >ВИДАЛИТИ</button>';
//                    echo '<button type="button" data-dismiss="modal" class="modal-delete__button custom-button-learn custom-button_padding modal__button">СКАСУВАТИ</button>';
//                    echo '</div>';
//                    echo '</div>';
//                    echo '</div>';
//                        echo '</div>';
                        echo '<div class="right-arrow right-arrow-first"><img src="./img/arrow-right.svg">';
                        echo'</div>';
                        echo'</div>';
                        echo'</section>';
                }
            }catch(mysqli_sql_exception $e){
                echo $e->getMessage();
            }?>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./js/zoom.js"></script>
    
    <script src="./js/zenscroll-min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
    $('.building-slider-first').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        touchMove: true,
        swipeToSlide: true,
        draggable: true,
        arrows: true,
        infinite: false,
        prevArrow: $('.left-arrow-first'),
        nextArrow: $('.right-arrow-first'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {      
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.building-slider-second').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        touchMove: true,
        swipeToSlide: true,
        draggable: true,
        arrows: true,
        infinite: false,
        prevArrow: $('.left-arrow-second'),
        nextArrow: $('.right-arrow-second'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {      
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.building-slider-third').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        touchMove: true,
        swipeToSlide: true,
        draggable: true,
        arrows: true,
        infinite: false,
        prevArrow: $('.left-arrow-third'),
        nextArrow: $('.right-arrow-third'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {      
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    </script>
    </script>
</body>
</html>