<head>
    <link rel="stylesheet" href="../css/nav.css">
    <!-- <link rel="stylesheet" href="../css/artist.css"> -->
    <script src="https://kit.fontawesome.com/2f01e0402b.js" crossorigin="anonymous"></script>
</head>
<header>
        <nav>
            <div class="left">
                <h2><a href="../main/index.php">Loop Verse</a></h2>
            </div>
            <div class="mid">
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <input type="text" class="search" placeholder="Search Artits, Albums...">
            </div>
            <div class="right">
                <div class="msg">
                    <i class="fa-solid fa-inbox"></i>
                    <div class="messages">
                        <h3 class="inbox-heading">Inbox</h3>
                        <h4>Your Message 1</h4>
                        <hr>
                        <h4>Your Message 2</h4>
                        <hr>
                        <h4>Your Message 3</h4>
                        <hr>
                        <h4>Your Message 4</h4>
                        <hr>
                        <h4>Your Message 5</h4>
                    </div>
                </div>
                <div class="sign-in">
                    <a href="sign-in.php">Sign In</a>
                    <a href="sign-in.php"><i class="fa-solid fa-right-to-bracket"></i></a>
                </div>
                <div class="newMember">
                    <h2 onclick="openContainer()">Are you a Artist?</h2>
                </div>
            </div>
        </nav>
    </header>
    <div class="create-container">
        <div class="artists-form">
            <span id="create-heading" class="create-heading">
                <h2>Initiate Avenue</h2>
                <h2 onclick="closeContainer()" class="x"><i class="fa-solid fa-xmark"></i></h2>
            </span>
            <form action="artist.php" method="POST">
                <div class="form-group3">
                    <label for="name">Stage Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group3">
                    <label for="handle">Handle</label>
                    <input type="text" id="handle" name="handle" required>
                </div>
                <div class="next-btn-container">
                    <button type="submit" id="next-btn"><span class="next-btn">Create</span></button>
                </div>
            </form>

        </div>
    </div>
<script src="../js/toggler.js"></script>
