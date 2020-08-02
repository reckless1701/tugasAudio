<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    nav{
        opacity : 0.3;
    }
    .container{
        margin-top : 300px;
    }
    p{
        text-align : center;
        color : black;
        font-size : 30px;
    }

</style>

<body background="work.jpg">
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand" href="#">Burhanudin</a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0  ">
                <li class="nav-item active">
                    <a class="nav-link mr-3" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mr-3" href="#video">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white mr-5" href="#audio">Audio Music</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-center text-white">Welcome To Website Learning</h1> 
        <br>   
            <p>Learning Anything About Website Programming And Audio Music </p> 
            <br>  
    </div>

    <!-- video -->

    <div class="video p-5 bg-dark" id="video">
        <h1 class="text-center text-white">Video List</h1>
        <div class="row no-gutters mb-3 mt-5">
            <div class="col-4">
                <video width="300px" height="200px" controls poster>
                    <source src="video/Membuat-navbar.mp4" type=video/mp4>
                </video>
            </div>
            <div class="col-4">
                <video width="300px" height="200px" controls poster>
                    <source src="video/belajar-php.mp4" type=video/mp4>
                </video>
            </div>
            <div class="col-4">
                <video width="300px" height="200px"  controls poster>
                    <source src="video/belajar-laravel.mp4" type=video/mp4>
                </video>
            </div>
            <div class="col-4">
                <video width="300px" height="200px" controls poster>
                    <source src="video/apa-itu-css-grid.mp4" type=video/mp4>
                </video>
            </div>
            <div class="col-4">
                <video width="300px" height="200px"  controls poster>
                    <source src="video/css-grid-2.mp4" type=video/mp4>
                </video>
            </div>
            <div class="col-4">
                <video width="300px" height="200px"  controls poster>
                    <source src="video/css-grid-3.mp4" type=video/mp4>
                </video>
            </div>
        </div>
    </div>

    <!-- audio -->
    <div class="audio p-5 bg-info" id="audio">
        <h1 class="text-center text-black">Audio Music List</h1>
    <div class="row no-gutters mb-3 mt-5">
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Menepi</p>
            <audio src="audio/menepi.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Bad Liar</p>
            <audio src="audio/bad-liar.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Believer</p>
            <audio src="audio/believer.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">How Do You Sleep</p>
            <audio src="audio/how-do-you-sleep.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Imagination</p>
            <audio src="audio/imagination.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Its You</p>
            <audio src="audio/its-you.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Wrecking Ball</p>
            <audio src="audio/wrecking-ball.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Perlahan</p>
            <audio src="audio/perlahan.mp3" controls></audio>    
        </div>
        <div class="col-4 pt-4 text-center">
            <p class="text-black">Shallow</p>
            <audio src="audio/shallow.mp3" controls></audio>    
        </div>
        

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
