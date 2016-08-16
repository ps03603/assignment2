 <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          
         <button type="submit" class="btn btn-success"><i class="fa fa-cart-plus"></i></button>
        </div>
      </form>
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào, <?php if (isset($_SESSION['user'])) echo $_SESSION['user']?> !<span class="caret"></span></a>
			<ul class="dropdown-menu  kim-login-nav">
			     
            <li><a href="#">Thông Tin Tài khoản</a></li>
            <li><a href="#">Đơn Hàng</a></li>
            <li class="divider"></li>
            <li><a href="?action=logout">Log out</a></li>
           
			</ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
