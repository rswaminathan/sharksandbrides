<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand">Sharks & Brides</a>
      <ul class="nav">
        <li> <a href="/">Home</a> </li>
        <li class="divider-vertical"></li>
        <li><a href="/index.php/aquariums">See Aquariums</a></li>
        <li><a href="/index.php/hometowns">See Hometowns</a></li>
        <li><a href="/index.php/specials">Today's Deals</a></li>
        <li><a href="/index.php/buywebsite">Buy Website</a></li>
        <li class="divider-vertical"></li>
        <? if (current_user()){ ?>
        <li><a href="/index.php/account"><h4><?= current_user() ?></h4></a></li>
        <li><a href="/index.php/cart">Cart</a></li>
		<li><a href="/index.php/logout">Logout</a></li>
        <? } else { ?>
        <li><a href="/index.php/login">Login</a></li>
        <li><a href="/index.php/ureg">Register</a></li>
        <? } ?>
      </ul>
    </div>
  </div>
</div>
