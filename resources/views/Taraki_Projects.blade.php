<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<title>TaRaKi Projects</title>
<link rel="stylesheet" href="{{ asset('css/Taraki_Projects_Styles.css') }}">
</head>
<body>
    
    <br>

    <! -- THIS IS REACH AND CLEARS -->
    <div class="container" >
        <div class="row">

            <div class="col-12">
                <a href="/Taraki_Reach">
                    <img src="{{ asset('images/DOST-CAR_REACH.png') }}" class="Clears-Reach zoom-effect">
                </a>
            </div>

        </div>
    </div>

    <br>

    <div class="container" >
        <div class="row">

            <div class="col-12">
                <a href="/Taraki_Clears">
                    <img src="{{ asset('images/CLEARS.png') }}" class="Clears-Reach zoom-effect">
                </a>
            </div>

        </div>
    </div>

    <! -- THIS IS THE BACK BUTTON -->
    <div class="buttons-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="/Taraki_Contents" class="btn btn-primary btn-lg" role="button">BACK</a>
                </div>
            </div>
        </div>
    </div>


    <! -- THIS IS THE FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-3">
                    <img src="{{ asset('images/_OneDOST4U.png') }}" class="footer_onedost">
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">ABOUT US</a>
                    </h5>
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">CONTACT</a>
                    </h5>
                </div>

                <div class="col-2 f-margin">
                    <h5> 
                        <a href="https://www.facebook.com/dostcar.gov.ph/">FACEBOOK</a>
                    </h5>
                </div>

                <div class="col-3">
                    <img src="{{ asset('images/Science_for_the_people1.png') }}" class="footer_science">
                </div>

            </div>
        </div>
    </footer>

    <! -- THIS IS THE VIDEO BACKGROUND -->
    <video class="video-background" autoplay muted loop>
        <source src="{{ asset('videos/White BH.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</body>
</html>