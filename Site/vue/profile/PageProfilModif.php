<?php


require_once 'modele/profil.php';

getInfoProfil($_SESSION['utilisateur']);

echo "
<html>
    <head>
        <title>PageProfil</title>
        <link rel='stylesheet' type='text/css' href=''>
        <style> @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

*
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif; 
    }

body
    {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        background: linear-gradient(217deg, #dea7e6, #86a1c4),
                    linear-gradient(127deg, #728edb, #296d9b),
                    linear-gradient(336deg, #dd94e9, #8cbfd3);
    }

.container
    {
        max-width: 800px;
        width: 100%;
        background: #fff;
        padding: 25px 30px;
        border-radius: 5px;
    }

.container .title
    {
        font-size: 25px;
        font-weight: 50px;
        position: relative;
    }

.container .title::before
    {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background: linear-gradient(135deg, #71b7e6, #7959d1);
    }

.container form .user-details
    {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }

form .user-details .input-box
    {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }

.user-details .input-box .details
    {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }

.user-details .input-box input
    {
        height: 2vh;
        width: 100%;
        padding: 20px;
        outline: none;
        border-radius: 5px solid #fff;
        padding-left: 15px;
        font-size: 12px;
        border-bottom-width: 2px;
        transition: all 0.3 ease;
    }

.user-details .input-box input:focus,
.user-details .input-box input:valid
    {
        border-color: #7959d1;
    }


    </style>
    </head>
    <body>
        <div class='container'>
            <div class='title'>Page de Profil</div>
            <form action='' method='get'>
                    <div class='input-box'>
                        <span class='details'>Prénom</span>
                        <input type='text' readonly='readonly' value='$data[NOM]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Nom</span>
                        <input type='text' value='$data[PRENOM]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Nom d'utilisateur</span>
                        <input type='text'  value='$data[PSEUDO_U]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Age</span>
                        <input type='text'  value='$data[AGE]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Biographie</span>
                        <input type='text'  value='$data[BIO]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Code Postal</span>
                        <input type='text'  value='$data[CODE_POSTAL]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Centre de formation</span>
                        <input type='text'  value='$data[CENTRE_FORMATION]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Language *</span>
                        <input type='text'  value='$data[LANGUE]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Date de naissance *</span>
                        <input type='date'  value='$data[DATE_NAISSANCE]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Numéro de Téléphone *</span>
                        <input type='tel'  value='$data[TEL]'>
                    </div>

                    <div class='input-box'>
                        <span class='details'>Adresse e-mail *</span>
                        <input type='email'  value='$data[MAIL]'>
                    </div>


                </div>
            </form>
        </div>
    </body>
</html>
"
?>
