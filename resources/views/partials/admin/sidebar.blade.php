<div id="sidebar">
    <!-- Sidebar Brand -->

    <div id="sidebar-brand" class="themed-background">
        <a href="/" class="sidebar-title">
	        <i class="fa fa-cube"></i><span class="sidebar-nav-mini-hide">{{SITE_NAME}}</span>
	    </a>
    </div><!-- END Sidebar Brand -->
    <!-- Wrapper for scrolling functionality -->

    <div id="sidebar-scroll">
        <!-- Sidebar Content -->

        <div class="sidebar-content">
            <!-- Sidebar Navigation -->

            <ul class="sidebar-nav">
                <li>
                	<a href="/admin/admin-users/" @if(isset($meta['section']) && $meta['section'] == 'Admin Users') class = "active" @endif>
						<i class="fa fa-user sidebar-nav-icon"></i>
						<span class="sidebar-nav-mini-hide">Admin Users</span>
					</a>
				</li>
                <li>
                	<a href="/admin/users/" @if(isset($meta['section']) && $meta['section'] == 'Users') class = "active" @endif>
						<i class="fa fa-users sidebar-nav-icon"></i>
						<span class="sidebar-nav-mini-hide">Frontend Users</span>
					</a>
				</li>

				<li>
                    <a href="#" class="sidebar-nav-menu @if(isset($meta['section']) && $meta['section'] == 'News') open @endif">
                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i>
                        <i class="fa fa-newspaper-o sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">News</span>
                    </a>
                    <ul>
                        <li><a href="/admin/news/" @if(isset($meta['subSection']) && $meta['subSection'] == 'News') class = "active" @endif >Manage News</a></li>
                        <li><a href="/admin/categories/" @if(isset($meta['subSection']) && $meta['subSection'] == 'Categories') class = "active" @endif >Manage News Categories</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/admin/works/" @if(isset($meta['section']) && $meta['section'] == 'Work') class = "active" @endif>
                         <i class="fa fa-briefcase sidebar-nav-icon"></i>
                         <span class="sidebar-nav-mini-hide">Work</span>
                     </a>
                 </li>

                <li>
                    <a href="/admin/queries/" @if(isset($meta['section']) && $meta['section'] == 'Query') class = "active" @endif>
                        <i class="fa fa-envelope-o sidebar-nav-icon"></i>
                        <span class="sidebar-nav-mini-hide">Queries</span>
                    </a>
                </li>

            </ul><!-- END Sidebar Navigation -->
        </div><!-- END Sidebar Content -->
    </div><!-- END Wrapper for scrolling functionality -->
</div><!-- END Main Sidebar -->