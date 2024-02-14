<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2f01e0402b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/index.css">
    <title>Loop Verse</title>

</head>
<body>
    <?php require '../partials/_nav.php'; ?>
    <main class="main">
    <?php require '../partials/_aside.php'; ?>
    <section id="main-mid">
        <div class="main-top">
            <div class="slide" id="slide1">
                <img id="sliderImage" src="../images/01.jpg" alt="">
                <div class="image-details">
                    <h2>Shape of You</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptates odio excepturi natus tenetur dolore.</p>
                    <h3 class="play-now"> <a href=""><i class="fa-solid fa-circle-play"></i>Play Now</a></h3>
                </div>
            </div>
            <div class="slide" id="slide2">
                <img id="sliderImage" src="../images/02.jpg" alt="">
                <div class="image-details">
                    <h2>Love Yourself</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptates odio excepturi natus tenetur dolore.</p>
                    <h3 class="play-now"> <a href=""><i class="fa-solid fa-circle-play"></i>Play Now</a></h3>
                </div>
            </div>
            <div class="slide" id="slide3">
                <img id="sliderImage" src="../images/03.jpg" alt="">
                <div class="image-details">
                    <h2>Tum Hi Ho</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptates odio excepturi natus tenetur dolore.</p>
                    <h3 class="play-now"> <a href=""><i class="fa-solid fa-circle-play"></i>Play Now</a></h3>
                </div>
            </div>
            <div class="slide" id="slide4">
                <img id="sliderImage" src="../images/05.jpg" alt="">
                <div class="image-details">
                    <h2>Meri Aashiqui</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptates odio excepturi natus tenetur dolore.</p>
                    <h3 class="play-now"> <a href=""><i class="fa-solid fa-circle-play"></i>Play Now</a></h3>
                </div>
            </div>
            <div class="perv-next">
                <span id="perv" onclick="perv()"><i class="fa-solid fa-caret-left"></i></span>
                <span id="next" onclick="next()"><i class="fa-solid fa-caret-right"></i></span>
            </div>
        </div>
        <h2 class="heading">Top Releases</h2>
        <div class="main-half">
            <div class="main-half-container">
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/01.jpeg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 1</h3>
                        <h4>Arijit Singh</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/02.jpeg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 2</h3>
                        <h4>Atif Aslam</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/03.jpeg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 3</h3>
                        <h4>Asha Bhosle</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/04.png" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 4</h3>
                        <h4>Justin Beiber</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/05.jpeg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 5</h3>
                        <h4>Arijit Singh</h4>
                    </div>
                </div>
            </div>
            <div class="main-half-container">
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/06.jpg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 6</h3>
                        <h4>Drake</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/07.jpg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 7</h3>
                        <h4>Jeson Deurelo</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/08.png" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 8</h3>
                        <h4>Luis Fonsi</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/09.jpeg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 9</h3>
                        <h4>Camella Cabelo</h4>
                    </div>
                </div>
                <div class="img-container">
                    <div class="img-release">
                        <img src="../images/thumbnail/10.jpg" class="img-release" alt="">
                    </div>
                    <span id="play-hovered"> <i class="fa-solid fa-play"></i></span>
                    <div class="hovered-details">
                        <h4><i class="fa-regular fa-heart"></i> 1,542</h4>
                        <h4><i class="fa-solid fa-headphones-simple"></i> 2,713</h4>
                    </div>
                    <div class="song-details">
                        <h3>Song 10</h3>
                        <h4>DJ Snake</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-quarter">
            <div class="artists-heading">
                <h2 class="heading">Artists</h2>
                <h2 class="see-all"><a href="">See All<i class="fa-solid fa-arrow-right"></i></a></h2>
            </div>
            <div class="artists" id="artists">
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/arijit.jpeg" alt=""></div>
                    <h3>Arijit Singh</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/selena.webp" alt=""></div>
                    <h3>Selena Gomez</h3>
                </div>
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/yoyo.avif" alt=""></div>
                    <h3>Honey Singh</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/jubin.webp" alt=""></div>
                    <h3>Jubin Nautiyal</h3>
                </div>
       
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/atif.jpg" alt=""></div>
                    <h3>Atif Aslam</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/billie.jpg" alt=""></div>
                    <h3>Billie Eillish</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/ed.jpg" alt=""></div>
                    <h3>Ed Sheeran</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/jason.jpeg" alt=""></div>
                    <h3>Jason Deurelo</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/kk.jpg" alt=""></div>
                    <h3>K.K</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/justin.jpg" alt=""></div>
                    <h3>Justin Beiber</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/luis.jpeg" alt=""></div>
                    <h3>Luis Fonsi</h3>
                </div>
            
                <div class="artists-box">
                    <div class="singer-img"><img src="../images/artists/yankee.jpeg" alt=""></div>
                    <h3>Daddy Yankee</h3>
                </div>
            </div>
            <div class="perv-next1">
                <span id="perv1"><i class="fa-solid fa-caret-left"></i></span>
                <span id="next1"><i class="fa-solid fa-caret-right"></i></span>
            </div>

        </div>
        <div class="main-quarter1">
            <div class="list-box">
                <h2 class="heading"><i class="fa-solid fa-heart"></i>Top Rated</h2>
                <div class="list-holder">
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/thumbnail/01.jpeg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Tum Hi Ho</h3>
                                <h4>Arijit Singh</h4>
                            </div>
                            <div class="time">
                                <p>3:38</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/tu.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Tu Jaane Na</h3>
                                <h4>Atif Aslam</h4>
                            </div>
                            <div class="time">
                                <p>3:18</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/shape.jpeg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Shape of You</h3>
                                <h4>Ed Sheeran</h4>
                            </div>
                            <div class="time">
                                <p>3:08</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/artists/justin.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Baby</h3>
                                <h4>Justin Beiber</h4>
                            </div>
                            <div class="time">
                                <p>2:48</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/thumbnail/08.png" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Despacito</h3>
                                <h4>Luis & Yankee</h4>
                            </div>
                            <div class="time">
                                <p>3:41</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="list-box">
                <h2 class="heading"><i class="fa-solid fa-record-vinyl"></i>Most Played</h2>
                <div class="list-holder">
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/thumbnail/08.png" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Despacito</h3>
                                <h4>Luis & Yankee</h4>
                            </div>
                            <div class="time">
                                <p>3:41</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/kesariya.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Kesariya</h3>
                                <h4>Arijit Singh</h4>
                            </div>
                            <div class="time">
                                <p>3:08</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/tuhaikahan.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Tu hai kahan</h3>
                                <h4>Usma Ali</h4>
                            </div>
                            <div class="time">
                                <p>3:12</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/artists/yoyo.avif" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Desi Kalakar</h3>
                                <h4>Honey Singh</h4>
                            </div>
                            <div class="time">
                                <p>6:15</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/afreen.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Afreen Afreen</h3>
                                <h4>Rahat Ali</h4>
                            </div>
                            <div class="time">
                                <p>3:38</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
            <div class="list-box">
                <h2 class="heading"><i class="fa-solid fa-music"></i>New Releases</h2>
                <div class="list-holder">
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/sakhiyaan.webp" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Sakhiyaan</h3>
                                <h4>Maninder Buttar</h4>
                            </div>
                            <div class="time">
                                <p>2:58</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/batoonmein.jpg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Teri Baaton Mein</h3>
                                <h4>Mitraz</h4>
                            </div>
                            <div class="time">
                                <p>3:38</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/kolaveri.jpeg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Kolaveri Di</h3>
                                <h4>Dhanush</h4>
                            </div>
                            <div class="time">
                                <p>3:08</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/songs/zara.jpeg" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Zara Sa</h3>
                                <h4>K.K</h4>
                            </div>
                            <div class="time">
                                <p>3:48</p>
                            </div>
                        </div>   
                    </div>
                    <hr>
                    <div class="list-detail">
                        <div class="songs-full-details">
                            <div class="list-img">
                                <div class="top-songs-img">
                                    <img src="../images/thumbnail/08.png" alt="">
                                </div>
                                <a href="" id="song-play"><i class="fa-solid fa-play"></i></a>
                            </div>
                            <div class="list-text">
                                <h3>Despacito</h3>
                                <h4>Luis & Yankee</h4>
                            </div>
                            <div class="time">
                                <p>3:41</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require '../partials/_footer.php'; ?>
    <script src="../js/slider.js"></script>
    <script src="../js/toggler.js"></script>

</body>
</html>