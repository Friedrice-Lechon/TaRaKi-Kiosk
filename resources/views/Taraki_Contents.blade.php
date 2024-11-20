<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<title>TaRaKi Contents</title>
<link rel="stylesheet" href="{{ asset('css/Taraki_Contents_Styles.css') }}">
</head>
<body>
    
    <! -- THIS IS A DRRMIS , LANDSLIDE , STARBOOKS -->
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row">

            <div class="col-4">
                <a href="https://drrmis.dostcar.ph/">
                    <img src="{{ asset('images/DRRMIS Logo.png') }}" class="t-border zoom-effect" style="width:100%">
                </a>
            </div>

            <div class="col-4">
                <a href="https://landslidekm.dostcar.ph/">
                    <img src="{{ asset('images/LKMC Fit2.png') }}" class="t-border zoom-effect" style="width:100%">
                </a>
            </div>

            <div class="col-4">
                <a href="https://starbooks.ph/home">
                    <img src="{{ asset('images/DOST-STARBOOKS.png') }}" class="t-border zoom-effect" style="width:100%">
                </a>
            </div>

        </div>
    </div>

    <! -- THIS IS THE BUTTONS -->
    <div class="buttons-container">
        <div class="container">
            <div class="row">

                <div class="col-4">
                    <a href="/Taraki_Home" class="btn btn-primary btn-lg" role="button">HOME</a>
                </div>

                <div class="col-4">
                    <a href="/Taraki_OtherWebsites" class="btn btn-primary btn-lg" role="button">OTHER WEBSITES</a>
                </div>

                <div class="col-4">
                    <a href="/Taraki_Projects" class="btn btn-primary btn-lg" role="button">PROJECTS</a>
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