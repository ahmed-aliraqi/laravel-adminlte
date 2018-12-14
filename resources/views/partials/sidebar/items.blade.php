<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li class="treeview {{ css_route_active('dashboard.home') }}">
        <a href="#">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ css_route_active('dashboard.home', 'active', ['version' => 1]) }}">
                <a href="#">
                    <i class="fa fa-circle-o"></i> Dashboard v1
                </a>
            </li>
            <li class="{{ css_route_active('dashboard.home', 'active', ['version' => 2]) }}">
                <a href="#">
                    <i class="fa fa-circle-o"></i> Dashboard v2
                </a>
            </li>
        </ul>
    </li>

    <li class="treeview {{ css_resource_active('dashboard.layouts') }}">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Options</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li>
                <a href="#">
                    <i class="fa fa-circle-o"></i> Top Navigation
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o"></i> Boxed
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o"></i> Fixed
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-circle-o"></i> Collapsed Sidebar
                </a>
            </li>
        </ul>
    </li>
    <li class="{{ css_url_active('/') }}">
        <a href="#">
            <i class="fa fa-th"></i>
            <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
        </a>
    </li>
</ul>