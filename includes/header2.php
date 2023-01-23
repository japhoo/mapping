<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="../" class="d-flex align-items-center">
            <img style="height:150px;margin-top:-25px;margin-bottom:-28px" src="../assets/img/logo.png" alt="">
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="../#hero">Home</a></li>
                <li><a href="../about">About Us</a></li>
                <li><a class="nav-link scrollto" href="../#services">Our Services</a></li>
                <li><a class="nav-link scrollto" href="../#values">How it Works</a></li>
                <li><a href="../plans">Plans</a></li>
                <li><a href="../faq">FAQ</a></li>
                <?php
                if (isset($uid)) {
                ?>
                    <li><a href="../dashboard">Dashboard</a></li>
                <?php } else { ?>
                    <li><a href="../login">Login</a></li>
                    <li><a href="../register">Register</a></li>
                <?php } ?>
                <li><a class="nav-link scrollto" href="../#contact">Contact Us</a></li>
                <li><a class="getstarted" href="../login">Get Started</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>