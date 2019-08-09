    <?php $color = array('text-green', 'text-aqua', 'text-yellow','text-primary','text-purple'); ?>
<aside class="main-sidebar">
   <section class="sidebar">
      <ul class="sidebar-menu">
         <li><a href="{{ url('admin/home') }}"><i class="fa fa-dashboard <?php echo $color[array_rand($color,1)] ?>"></i> <span>Dashboard</span></a></li>
         <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Master</span>
              <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
               <li><a href="{{ action('AdminController\CustomerController@index') }}"><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Customers</span></a></li>
               <li><a href="{{ action('AdminController\BrokerController@index') }}"><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Brokers</span></a></li>
               <li><a href="{{ action('AdminController\DetailsController@index') }}"><i class="fa fa-user <?php echo $color[array_rand($color,1)] ?>"></i> <span>Details</span></a></li>
            </ul>
         </li>
      </ul>
   </section>
</aside>