<aside class="main-sidebar">
    <section class="sidebar">
       <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url().'/assets/uploads/icons/men.png' ?>" class="img-circle" alt='User Image'>
              </div>
            <div class="pull-left info">
                <p>Dimas Islami</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
			<li><a href="<?=base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="treeview <?php if($desc == 'Ui'){ echo "active";}?>">
                <a href="#">
                    <i class="fa fa-database"></i>
                    <span>MENU</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
				
                  <ul class="treeview-menu">
                    <li ><a href="<?=base_url('menu1');?>" ><i class="fa fa-circle-o"></i>Menu 1</a></li>
                    <li class="treeview">
						<a href="#">
							<i class="fa fa-share"></i> <span>Multilevel</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						 </a>
					  <ul class="treeview-menu">
						<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
						<li class="treeview">
						  <a href="#"><i class="fa fa-circle-o"></i> Level One
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						  </a>
						<ul class="treeview-menu">
							<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
							<li class="treeview">
							  <a href="#"><i class="fa fa-circle-o"></i> Level Two
								<span class="pull-right-container">
								  <i class="fa fa-angle-left pull-right"></i>
								</span>
							  </a>
							  <ul class="treeview-menu">
								<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
								<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
							  </ul>
							</li>
						  </ul>
						</li>
						<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
					  </ul>
					</li>
				</ul>
            </li> 
        </ul>
    </section>
</aside>