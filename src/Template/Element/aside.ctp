<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
      <!-- Sidebar user panel -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="">
          <a href="<?php echo $this->Url->build([
                    "controller" => "Dashboard",
                    "action" => "index"
                      ]); 
                    ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li><a href="<?php echo $this->Url->build([
                    "controller" => "Users",
                    "action" => "index"
                      ]); 
                    ?>"><i class="fa fa-user-o text-red"></i> <span>Users</span></a></li>
        <li><a href="<?php echo $this->Url->build([
                    "controller" => "Articles",
                    "action" => "index"
                      ]); 
                    ?>"><i class="fa fa-list-alt text-yellow"></i> <span>Articles</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper" style="min-height: 916px;">