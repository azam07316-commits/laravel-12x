<!DOCTYPE html>
<html lang="en">
<head>
    <title>DIAMOND CROWN CASINO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            overflow-x: hidden; /* ✅ Prevent horizontal scroll only */
        }

        .bg-video {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
        }

        .overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .content {
            position: relative;
            z-index: 1;
            color: white;
            text-align: center;
            padding-top: 50px;
            padding-bottom: 100px; /* ✅ Added padding-bottom for spacing */
        }

        h1 {
            font-weight: bold;
            font-size: 3em;
            margin-top: 30px;
            color: gold;
            text-shadow: 0 0 2px gold, 0 0 10px orange, 0 0 10px yellow;
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 5px gold, 0 0 10px orange, 0 0 15px yellow;
            }
            to {
                text-shadow: 0 0 15px gold, 0 0 20px orange, 0 0 25px yellow;
            }
        }

        .logo img {
            width: 300px;
        }

        .Game {
            margin-top: 30px;
            margin-bottom: 30px; /* ✅ Adjusted margin */
        }

        .game-img {
            width: 100px;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .game-img:hover {
            transform: scale(1.2);
        }

        @keyframes swing {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(10deg); }
            50% { transform: rotate(-10deg); }
            75% { transform: rotate(10deg); }
            100% { transform: rotate(0deg); }
        }

        .payment-logos-vertical {
            position: fixed;
            top: 0;
            right: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            z-index: 2;
        }

        .payment-logos-vertical .logo-item img {
            width: 100px;
            transition: transform 0.3s ease;
        }

        .payment-logos-vertical .logo-item img:hover {
            animation: swing 0.8s ease-in-out;
        }

        .payment-logos-vertical .logo-item span {
            display: block;
            margin-top: 5px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            text-shadow: 1px 1px 2px #000;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .link {
            background: #145dbf;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.32);
            z-index: 1000;
            display: inline-block;
        }

        .link:hover {
            background-color: green;
            transform: scale(1.1);
            transition: transform 0.3s, background-color 0.3s;
            color: white;
        }

        .fixed-buttons {
            position: fixed;
            top: 20px;
            left: 20px;
            display: flex;
            gap: 15px;
            z-index: 1000;
        }

    .about-section {
    margin-top: 50px;
    background: #000; /* Black background */
    color: #fff; /* White text */
    padding: 25px;
    border-radius: 8px;
    width: 60%;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    text-align: center;
    transition: box-shadow 0.3s ease;
}

.about-section h2 {
    font-weight: 600;
    margin-bottom: 15px;
    color: gold;
    letter-spacing: 1px;
}

.about-section:hover {
    box-shadow: 0 6px 18px rgba(255, 255, 255, 0.4);
}



        @media (max-width: 480px) {
            h1 {
                font-size: 1.8em;
            }

            .logo img {
                width: 200px;
            }

            .game-img {
                width: 70px;
            }

            .payment-logos-vertical {
                right: 5px;
                padding: 10px 0;
            }

            .payment-logos-vertical .logo-item img {
                width: 70px;
            }

            .payment-logos-vertical .logo-item span {
                font-size: 12px;
            }

            .fixed-buttons {
                flex-direction: column;
                bottom: 20px;
                top: auto;
                gap: 10px;
                left: 10px;
            }

            .link {
                font-size: 12px;
                padding: 8px 10px;
            }
        }
        .note-box {
    background: #000;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 300px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(255, 255, 255, 0.2);
    font-family: 'Poppins', sans-serif;
    transition: box-shadow 0.3s ease;
}

.note-box h3 {
    color: gold;
    margin-bottom: 15px;
}

.note-box:hover {
    box-shadow: 0 6px 18px rgba(255, 255, 255, 0.4);
}

.notes-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap; 
    margin-top: 50px;
}

    </style>
</head>

<body>

    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{ asset('videos/background.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="content">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Casino Logo">
        </div>

        <h1>WELCOME TO DIAMOND CROWN CASINO</h1>

        <div class="Game">
            <div class="container-fluid">
                <div class="d-flex justify-content-center flex-wrap">
                    <div class="text-center m-2">
                        <a href="https://dl.juwa777.com" target="_blank">
                            <img src="{{ asset('images/game1.png') }}" alt="Game 1" class="game-img">
                        </a>
                    </div>
                    <div class="text-center m-2">
                        <a href="http://start.firekirin.xyz:8580/index.html" target="_blank">
                            <img src="{{ asset('images/game2.png') }}" alt="Game 2" class="game-img">
                        </a>
                    </div>
                    <div class="text-center m-2">
                        <a href="https://www.vblink777.club" target="_blank">
                            <img src="{{ asset('images/game3.png') }}" alt="Game 3" class="game-img">
                        </a>
                    </div>
                    <div class="text-center m-2">
                        <a href="http://web.orionstars.org/play/orionstars/" target="_blank">
                            <img src="{{ asset('images/game4.jpg') }}" alt="Orion Stars" class="game-img">
                        </a>
                    </div>
                    <div class="text-center m-2">
                        <a href="https://download.gamevault999.com/" target="_blank">
                            <img src="{{ asset('images/game5.png') }}" alt="Game 5" class="game-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-logos-vertical">
            <div class="logo-item">
    <a href="{{ asset('images/Cashtag2.png') }}" target="_blank">
        <img src="{{ asset('images/payment1.png') }}" alt="Cash App">
    </a>
    <span>CASH APP</span>
</div>
            <div class="logo-item">
    <a href="{{ url('/not-available') }}" target="_blank">
        <img src="{{ asset('images/payment2.png') }}" alt="Chime">
    </a>
    <span>CHIME</span>
</div>


            <div class="logo-item">
                <a href="{{ asset('images/BTC.png') }}" target="_blank">
                <img src="{{ asset('images/payment3.png') }}" alt="Payment 3">
</a>
                <span>BINANCE</span>
            </div>
           <div class="logo-item">
    <a href="https://www.paypal.me/DELAWARKHAN" target="_blank">
        <img src="{{ asset('images/payment4.png') }}" alt="PayPal">
    </a>
    <span>PAYPAL</span>
</div>
        </div>

       <div class="fixed-buttons">
    <a href="https://www.facebook.com/profile.php?id=100093028530761" target="_blank" class="link">
        Follow us on Facebook
    </a>

</div>


        <div class="about-section">
            <h2>About Us</h2>
            <p>Online casinos offer players the convenience of enjoying their favorite games from anywhere in the world. With a wide range of options like slots, poker, roulette, and live dealer games, online casinos provide entertainment combined with the excitement of real-time gameplay. They use advanced security measures and trusted payment gateways to ensure a safe and secure gaming environment. Many platforms also offer attractive bonuses, promotions, and loyalty rewards, making the online casino experience engaging and rewarding for both new and experienced players.</p>
        </div>
<div class="notes-container">
    <div class="note-box">
        <h3>Secure Gaming</h3>
        <p>A 100% secure online casino prioritizes the safety and privacy of its players above all else. These platforms use advanced encryption technologies, such as SSL certificates, to protect personal information and financial transactions from unauthorized access. Licensed and regulated by reputable gaming authorities, secure online casinos adhere to strict industry standards for fair play, transparency, and responsible gaming. Players can enjoy their favorite games with complete confidence, knowing that their data, deposits, and winnings are safeguarded by robust security protocols and verified payment systems.</p>
    </div>
    <div class="note-box">
        <h3>Cash-IN & Cash-OUT Rules</h3>
        <p>✨ 80% Signup bonus ✨ <br><br>

• Load $5 = $8 Loaded <br><br>

 • Load $10 = $17 Loaded <br><br>

 • Load $20 = $28 Loaded <br><br>

 • Load $25 = $34 Loaded <br><br>

 • Load $50 = $64 Loaded <br><br>
 
  • Load $100 = $150 Loaded <br><br>
 
⭐ Referral bonus 50%⭐<br><br>

⭐Min deposit to load ➡ 5$⭐ <br><br>
⭐ Min Cash-Out = 4X WITHIN 60 SECOND$ ⭐<br><br>
⭐ Max Cash-Out = $500 WITHIN 60 SECOND$ ⭐</p>


    </div>
    <div class="note-box">
        <h3>24/7 Support</h3>
        <p>A 24/7 open online casino ensures that players have access to their favorite games anytime, day or night. Whether it's early morning or late at night, these platforms offer uninterrupted entertainment without time restrictions. This around-the-clock availability allows players from different time zones to enjoy gaming at their convenience. With live support, seamless gameplay, and instant transactions, a 24/7 online casino creates a flexible and accessible gaming experience for users worldwide.</p>
    </div>
</div>

    </div>

</body>
</html>
