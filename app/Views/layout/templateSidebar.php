<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="/home">ATLANT</a>
            <a href="#!" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="#!" class="profile-mini">
                <img src="theme/assets/images/users/no-image.jpg" alt="John Doe" />
            </a>
            <div class="profile">
                <div class="profile-image">
                    <img src="theme/assets/images/users/no-image.jpg" alt="John Doe" />
                </div>
                <div class="profile-data">
                    <div class="profile-data-name"><?= session()->get('name'); ?></div>
                    <div class="profile-data-title"><?= session()->get('username'); ?></div>
                </div>
                <div class="profile-controls">
                    <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                    <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                </div>
            </div>
        </li>
        <li class="xn-title">Main Menu</li>
        <li>
            <a href="/home"><span class="fa fa-globe"></span> <span class="xn-text">Dashboard</span></a>
        </li>
        <li class="xn-title">Control Panel</li>
        <li>
            <a href="/penyiar"><span class="fa fa-users"></span> <span class="xn-text">Penyiar</span></a>
        </li>
        <li>
            <a href="/acara"><span class="fa fa-desktop"></span> <span class="xn-text">Acara</span></a>
        </li>
        <li>
            <a href="/endorsement"><span class="fa fa-inbox"></span> <span class="xn-text">Endorsement</span></a>
        </li>

    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->