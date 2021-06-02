<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>corono</title>
        <link rel="shortcut icon" href="../images/favicon.ico"/>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/_contact.css">
        <link rel="stylesheet" href="https://use.typekit.net/pcl5dje.css">
        <script src="https://kit.fontawesome.com/56c7e9505b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="hero" class="section hero">
            
            <?php include '../components/header.php'; ?>

            <div class="section contact-container">
                <h2>contact</h2>
                <form action="">
                    <div class="contact-form-container">
                        <div class="left">
                            <div class=" form-input email">
                                <label for="email">email</label>
                                <input type="email" name="email" id="email" required maxlength="50">
                            </div>
                            <div class=" form-input voornaam">
                                <label for="voornaam">voornaam</label>
                                <input type="text" name="voornaam" id="voornaam" required maxlength="20">
                            </div>
                            <div class=" form-input achternaam">
                                <label for="achternaam">achternaam</label>
                                <input type="text" name="achternaam" id="achternaam" required maxlength="20">
                            </div>
                        </div>
    
                        <div class="right">
                            <label for="message">beschrijving</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            <input type="submit">
                        </div>
                    </div>
                </form>
            </div>

            <svg class="wave"xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#007EA7" fill-opacity="1" d="M0,128L40,122.7C80,117,160,107,240,122.7C320,139,400,181,480,202.7C560,224,640,224,720,218.7C800,213,880,203,960,202.7C1040,203,1120,213,1200,202.7C1280,192,1360,160,1400,144L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
        </div>

        <?php include '../components/footer.php'; ?>

        <script type="text/javascript" src="../js/script.js"></script>
    </body>
</html>