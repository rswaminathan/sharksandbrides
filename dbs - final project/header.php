<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand">Sharks & Brides</a>
      <ul class="nav">
        <li> <a href="/">Home</a> </li>
        <li class="divider-vertical"></li>
        <li><a href="/index.php/search/price">See Aquariums</a></li>
        <li><a href="/index.php/search/specs">Browse Brides</a></li>
        <li><a href="/index.php/search/manufacturer">By Manufacturer</a></li>
        <li><a href="/index.php/employees">Employees</a></li>
        <li class="divider-vertical"></li>
        <? if (current_user()){ ?>
        <li><a href="/index.php/account"><?= current_user() ?></a></li>
        <li><a href="/index.php/cart">Cart</a></li>
        <? } else ?>
        <li><a href="index.php/login">Login</a></li>
        <li><a href="/index.php/cart">Cart</a></li>
        ?>
      </ul>
    </div>
  </div>
</div>
