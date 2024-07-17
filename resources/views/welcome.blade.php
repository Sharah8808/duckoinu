<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Duckoinu</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sarala:wght@400;700&display=swap" rel="stylesheet"> --}}

    <!-- Bootstrap 5.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- icons ? -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Francois+One&family=Playwrite+DE+Grund:wght@100..400&display=swap');

        * {
            font-family: "Playwrite DE Grund", cursive;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;

        }

        #landing-page {
            background: url('img/duckwall.jpg');
            /* background-color: #1C172B; */
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
        }

        .container-fluid {
            padding: 50px;
        }

        .navbar-nav .nav-item .nav-link {
            font-weight: bold;
            /* Make text bold */
            color: #362706;
            font-size: 1.2rem;
            /* Custom color for text */
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #E9E5D6;
            /* Custom color for text on hover */
        }

        .navbar-nav .nav-item .nav-link.active {
            color: #6F4E37;
            background-color: #124076;
        }

        .landing-page {
            height: 90vh;
            padding-left: 90px;
        }

        .landing-title {
            font-size: 3rem;
            font-weight: 700;
            color: #362706;
            font-family: "Francois One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        #container-body {
            margin-top: 30px;
        }

        #about {
            padding-right: 120px;
            /* Aligns content to the right */
        }

        .social-btns .btn {
            margin: 0 5px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            position: sticky;
            bottom: 0;
            width: 100%;
        }

        .social-icons a {
            color: #495057;
            font-size: 1.5rem;
            margin: 0 15px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #007bff;
        }

    </style>
</head>

<body style="background-color: #E9E5D6;">
    <div class="wrapper">
        <div id="whole-page" class="container-header mb-20">
            <div id="landing-page">
                <nav class="nav justify-content-center navbar navbar-expand-lg navbar-dark shadow-5-strong">
                    <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tokenomics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">How to Buy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="content-wrapper">
                    <div id="content-header">
                        <div class="container-fluid landing-page d-flex flex-column justify-content-center">
                            <div class="landing-title">
                                Welcome to,
                            </div>
                            <div class="landing-title" style="font-weight: 1000">
                                DUCKOINU
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="container-body" class="content">
                <div class="container-fluid ">
                    <div id="about" class="col-lg-5 mr-auto">
                        <h5>About</h5>
                        <p>Duckoinu is a community-driven cryptocurrency inspired by the playful and beloved Duck O Ghibli.
                            Our mission is to blend the fun of meme culture with the innovative world of
                            cryptocurrency, creating a vibrant and engaging ecosystem for our holders.asdasdasd
                            We focus on transparency, security, and community involvement to ensure a rewarding experience for all participants.
                        </p>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="tokenomics" class="col-lg-5 ml-auto">
                        <h5>Tokenomics</h5>
                        <ul class="list-unstyled">
                            <li>Total Supply: 1,000,000,000</li>
                            <li>Transaction Tax: 0%</li>
                            <li>Liquidity Pool Burn: 50% of the initial liquidity pool is burned to ensure stability and growth.</li>
                            <li>Ownership Renounced: Ownership has been renounced to provide full transparency and security.</li>
                        </ul>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="how_to_buy" class="col-lg-5 mx-auto d-flex flex-column align-items-center">
                        <h5>How To Buy</h5>
                        <ol>
                            <li>Download a Wallet: Install a cryptocurrency wallet like MetaMask.</li>
                            <li>Purchase Ethereum (ETH): Buy ETH from a crypto exchange.</li>
                            <li>Visit Uniswap: Go to Uniswap and connect your wallet.</li>
                            <li>Swap ETH for 500: Use our contract address to swap ETH for 1000.</li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid">
                    <div id="contacts" class="col-lg-5 mx-auto d-flex flex-column align-items-center">
                        <h5 class="mx-auto">Contact Me!</h5>
                        <div class="social-btns mx-auto">
                            <a href="https://www.facebook.com" class="btn btn-primary" target="_blank">
                                <i class="fab fa-facebook-f"></i> Facebook
                            </a>
                            <a href="https://wa.me/yourphonenumber" class="btn btn-success" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                            <a href="https://www.instagram.com" class="btn btn-danger" target="_blank">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                            <a href="https://twitter.com" class="btn btn-info" target="_blank">
                                <i class="fab fa-twitter"></i> Twitter
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container-footer" class="content">
                <footer class="footer">
                    <div class="container">
                        <div class="social-icons">
                            <a href="https://www.facebook.com" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://wa.me/yourphonenumber" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.instagram.com" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <p class="mt-3 mb-0">&copy; 2024 Your Company. All rights reserved.</p>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- https://r4.wallpaperflare.com/wallpaper/356/346/411/drawing-deer-artwork-silhouette-landscape-nature-digital-art-trees-pine-trees-sunset-lake-hill-animals-vectors-warm-colors-wallpaper-c900e8dda1da8dcbf6b7c8ff908136ed.jpg -->





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
