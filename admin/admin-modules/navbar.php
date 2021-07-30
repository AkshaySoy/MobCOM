<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="index.php">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        MobCOM Administrator
    </a>

    <?php

    if (isset($_SESSION['login_status'])) {

        echo "

            <span class='navbar-text font-weight-bold ml-auto text-left'>
            {$_SESSION['admin_name']}
            </span>

            <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-toggle='collapse' data-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <ul class='navbar-nav px-3'>
                <li class='nav-item text-nowrap'>
                    <a class='nav-link' href='logout.php'>Logout</a>
                </li>
            </ul>
        
        ";

    }

    ?>



</nav>