<!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile"><img src="<?= ASSETS . THEME ?>admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered"><?= $data['user_data']->name ?> </h5>
            <h5 class="centered" style="font-size: 14px; color: #aeb2b7;"><?= $data['user_data']->email ?> </h5>

            <!-- // Dashboard -->
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>

            </li>
            <!-- // Products -->
            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/products">
                    <i class="fa fa-barcode "></i>
                    <span>products</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/add">Add New Product</a></li>
                    <li><a href="<?= ROOT ?>admin/idit">Idit Product</a></li>
                    <li><a href="<?= ROOT ?>admin/delete">Delete Product</a></li>
                </ul>
            </li>
            <!-- // CATEGORIES -->
            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/categories">
                    <i class="fa fa-list-alt"></i>
                    <span>CATEGORIES</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/add">Add New category</a></li>
                    <li><a href="<?= ROOT ?>admin/idit">Idit category</a></li>
                    <li><a href="<?= ROOT ?>admin/delete">Delete category</a></li>
                </ul>
            </li>
            <!-- // ORDERS -->
            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/orders">
                    <i class="fa fa-reorder"></i>
                    <span>ORDERS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/add">Add New Order</a></li>
                    <li><a href="<?= ROOT ?>admin/idit">Idit Order</a></li>
                    <li><a href="<?= ROOT ?>admin/delete">Delete Order</a></li>
                </ul>
            </li>
            <!--  SETTINGS -->
            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/settings">
                    <i class="fa fa-cogs"></i>
                    <span>SETTINGS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/add">Slider Images </a></li>
                </ul>
            </li>
            <!--  USERS -->
            <li class="sub-menu">
                <a href="<?= ROOT ?>admin/users">
                    <i class="fa fa-user"></i>
                    <span>USERS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?= ROOT ?>admin/users">customer </a></li>
                    <li><a href="<?= ROOT ?>admin/users">Admin </a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->