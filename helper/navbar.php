<!-- Static navbar -->
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">Credit Card Fraud Detecting System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="history.php">History</a></li>
            <!-- Here we will check about login -->
            <?php
                if (isset($_SESSION['username'])) {
                    // logged in
                    echo '<li><a href="helper/logout.php">Logout</a></li>';
                } else {
                    // not logged in
                    echo '<li><a href="login.php">Login</a>';
                }
            ?>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>