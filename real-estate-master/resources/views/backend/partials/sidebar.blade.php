
   <aside id="rightsidebar" class="sidebar" >

        <!-- Menu -->
        <div class="menu" dir="rtl">
            <ul class="list">

                <li class="header">منو</li>
                
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>داشبورد</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
                    <a href="{{ route('admin.sliders.index') }}">
                        <i class="material-icons">burst_mode</i>
                        <span>اسلایدر</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/properties*') ? 'active' : '' }}">
                    <a href="{{ route('admin.properties.index') }}">
                        <i class="material-icons">home</i>
                        <span>املاک</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/features*') ? 'active' : '' }}">
                    <a href="{{ route('admin.features.index') }}">
                        <i class="material-icons">star</i>
                        <span>امکانات</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/services*') ? 'active' : '' }}">
                    <a href="{{ route('admin.services.index') }}">
                        <i class="material-icons">wb_sunny</i>
                        <span>سرویس ها</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/sms*') ? 'active' : '' }}">
                    <a href="{{ route('admin.services.index') }}">
                        <i class="material-icons">sms</i>
                        <span>سامانه پیامکی</span>
                    </a>
                </li>

                <li class="{{ Request::is('admin/testimonials*') ? 'active' : '' }}">
                    <a href="{{ route('admin.testimonials.index') }}">
                        <i class="material-icons">view_carousel</i>
                        <span>Testimonials</span>
                    </a>
                </li>

                <li class="header">اخبار</li>
                <li class="{{ Request::is('admin/categories*') ? 'active' : '' }}">
                    <a href="{{ route('admin.categories.index') }}">
                        <i class="material-icons">category</i>
                        <span>دسته بندی</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tags*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tags.index') }}">
                        <i class="material-icons">label</i>
                        <span>تگ ها</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/posts*') ? 'active' : '' }}">
                    <a href="{{ route('admin.posts.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>پست ها</span>
                    </a>
                </li>

                <li class="header"> </li>
                <li class="{{ Request::is('admin/galleries*') ? 'active' : '' }}">
                    <a href="{{ route('admin.album') }}">
                        <i class="material-icons">view_list</i>
                        <span>گالری</span>
                    </a>
                </li>
 
                <li class="{{ Request::is('admin/settings*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>تنظیمات</span>
                    </a>
                    <ul class="ml-menu">
                        <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                            <a href="{{ route('admin.settings') }}">
                                <span>تنظیمات</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/changepassword') ? 'active' : '' }}">
                            <a href="{{ route('admin.changepassword') }}">
                                <span>تغییر پسورد</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/profile') ? 'active' : '' }}">
                            <a href="{{ route('admin.profile') }}">
                                <span>پروفایل</span>
                            </a>
                        </li>
                        <li class="{{ Request::is('admin/message*') ? 'active' : '' }}">
                            <a href="{{ route('admin.message') }}">
                                <span>پیغام</span>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                

            </ul>
        </div>
        <!-- #Menu -->
        
    </aside>
