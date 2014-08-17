<!DOCTYPE html>
<html>
  <head>
      <title>欢迎你<{$user.u_name}></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset=utf-8>
    <!-- Bootstrap -->
    <link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/bootstrap/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/bootstrap/js/jquery.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-transition.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-alert.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-modal.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tab.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-popover.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-button.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="/bootstrap/bootstrap/js/bootstrap-typeahead.js"></script>

 </head>
  <body>
  <header>
  <div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">表白墙</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#"><b class="icon-home"></b>首页</a></li>
               
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i>个人中心<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">修改信息</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">我的好友</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-th-large"></i>个人应用<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">修改信息</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">我的好友</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
                  <li class="divider-vertical"></li>
                <li><a href="#about"><b class="icon-bell"></b>关于我们</a></li>
                <li><a href="#contact"><b class="icon-pencil"></b>联系我们</a></li>
                </ul>
                
                <ul class="nav pull-right">
                 <form class="navbar-search pull-left">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
                <li class="divider-vertical"></li>
                    <li><a href="#"><i class="icon-user"></i><></a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i></a>
                  <ul class="dropdown-menu">
                      <li><a href="/personal/index.html"><i class="icon-user"></i> 个人信息</a></li>

					<li><a href="/personal/page_calendar.html"><i class="icon-calendar"></i> 我的日历</a></li>
				
					<li><a href="/personal/inbox.html"><i class="icon-envelope"></i> 新消息(3)</a></li>

					<li><a href="#"><i class="icon-tasks"></i>我的任务</a></li>

					<li class="divider"></li>

					<li><a href="/personal/extra_lock.html"><i class="icon-lock"></i> 锁屏</a></li>

					<li><a href="/personal/login.html"><i class="icon-remove-circle"></i> 注销登录</a></li>
                  </ul>
                </li>
                </ul>
            </div><!--/.nav-collapse -->
          </div>
  </div>
  </div>
</header>
<div class="container-fluid" style="margin:60px 120px 0 120px">
  <div class="row-fluid"  >
  <div class="span2">
      <!--Sidebar content-->
  <ul class="thumbnails">
  <li class="span12">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" class="img-polaroid" alt="" src="">
      <h3>Thumbnail label</h3>
      <p>Thumbnail caption...</p>
    </div>
  </li>
  </ul>
  </div>
    <div class="span10">
      <!--Body content-->
      <ul class="nav nav-tabs" style="margin-top:40px">
      <li class="active"><a href="#tab1" data-toggle="tab">tab1</a>
      <li><a href="#tab2" data-toggle="tab">tab2</a>
      <li><a href="#tab3" data-toggle="tab">tab3</a>
      <li><a href="#tab4" data-toggle="tab">tab4</a>
      </ul>
      <div class="tab-content">
      <div class="tab-pane active" id="tab1">tab1</div>
      <div class="tab-pane" id="tab2">tab2</div>
      <div class="tab-pane" id="tab3">tab3</div>
      <div class="tab-pane" id="tab4">tab4</div>
      </div>
    </div>
  </div>
</div>
<?php
echo dirname(__DIR__);
?>
</body>
</html>