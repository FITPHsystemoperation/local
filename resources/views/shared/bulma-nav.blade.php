<nav class="navbar is-fixed-top is-dark" id="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <p class="navbar-item">System Support</p>

        <a role="button" class="navbar-burger burger" :class="{ 'is-active': isActive }" @click="toggleNavbar" aria-label="menu" aria-expanded="false" data-target="navbarContent">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a><!-- burger -->
    </div><!-- navbar-brand -->

    <div id="navbarContent" class="navbar-menu" :class="{ 'is-active': isActive }">
        <div class="navbar-end">
            <a class="navbar-item" href="#">Home</a>

            <a class="navbar-item" href="#">Documentation</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link">More</span>

                <div class="navbar-dropdown is-right">
                    <a class="navbar-item" href="#">About</a>

                    <a class="navbar-item" href="#">Jobs</a>

                    <a class="navbar-item" href="#">Contact</a>

                    <hr class="navbar-divider">
                    
                    <a class="navbar-item" href="#">Report an issue</a>
                </div><!-- dropdown -->
            </div><!-- has-dropdown -->
        </div><!-- navbar-start -->
    </div><!-- navbar-menu -->
</nav><!-- navbar -->