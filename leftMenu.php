<!-- begin::navigation -->
<div class="navigation">

    <div class="navigation-menu-tab">

        <div class="flex-grow-1">
            <ul>
                <br><br><br>
                <li>
                    <a class="active" href="#" data-toggle="tooltip" data-placement="right" title="Dashboard"
                        data-nav-target="#pages">
                        <i data-feather="calendar"></i>
                    </a>
                </li>
               
            </ul>
        </div>
        <div>
            <ul>
              
                <li>
                <form action="dashboard.php" method="POST"> 
                    <button type="submit" name="logout" style="border-left-width: 13px" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="right" title="Logout">
                        <i style="font-size: 1em;" data-feather="log-out"></i>
                            </button>
                         
                   </form>
                </li>
            </ul>
        </div>

    </div>

    <!-- begin::navigation menu -->
    <div class="navigation-menu-body " style="overflow: hidden; outline: none;">

        <!-- begin::navigation-logo -->
        <div>
            <div id="navigation-logo">
                <a href="#">
                    <h4><?php echo  $_SESSION['users_name'] .' '. $_SESSION['users_subname'] ;?></h4>
                   
                </a>
            </div>
        </div>
        <!-- end::navigation-logo -->

        <div class="navigation-menu-group">

          

            <div class="open" id="pages">
                <ul>
                    <ul>
                        <li class="navigation-divider">Dashboard</li>
                        <li>
                            <a href="dashboard.php">Partita iva </a>
                        </li>
                    </ul>
            </div>

        </div>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->