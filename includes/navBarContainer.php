<div id="navBarContainer">
<nav class="navBar">
<span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
<img src="assets/images/icons/musical.png">
</span>
<div class="group">
    <div class="navItem">
    <span role='link' tableindex='0' onclick='openPage("search.php")' class="navItemLink">
    search
        <img src="assets/images/icons/search.png" class="icon" alt="Search">
        </span>
    </div>
</div>

<div class="group">
   <div class="navItem">
        <span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
    </div>
    <div class="navItem">
        <span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your music</span>
    </div>
    <div class="navItem">
        <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink"><?php echo $userLoggedIn->getUsername(); ?></span>
    </div>
</div>
</nav>
</div>

