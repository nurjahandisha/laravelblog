<ul>
                    <li>
                        <a href="javascript:;" class="side-menu {{request()->routeIs('dashboard') ? 'side-menu--active side-menu--open': ''}}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                
                            </div>
                        </a>
                        
                    </li>
                    
                </ul>
                <li>
                        <a href="javascript:;" class="side-menu {{request()->routeIs('category.*') ? 'side-menu--active side-menu--open': ''}}">
                            <div class="side-menu__icon"> <i data-feather="folder"></i> </div>
                            <div class="side-menu__title">
                                category {{ request()->routeIs('category.*') ? 'done' : 'no'}}
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        
                        <ul class="{{request()->routeIs('category.add') ? 'side-menu__sub-open': ''}}">
                            <li>
                                <a href="{{route('category.add')}}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Category Manegement</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('category.sub.add')}}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">sub-Category Manegement</div>
                                </a>
                            </li>




                            <li>
                        <a href="javascript:;" class="side-menu {{request()->routeIs('post.add') ? 'side-menu--active side-menu--open': ''}}">
                            <div class="side-menu__icon"> <i data-feather="folder"></i> </div>
                            <div class="side-menu__title">
                                Post
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        
                        <ul class="{{request()->routeIs('post.add') ? 'side-menu__sub-open': ''}}">
                            <li>
                                <a href="{{route('post.add')}}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> ADD Post</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('category.sub.add')}}" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title">View All Post</div>
                                </a>
                            </li>
                          
                           
                        </ul>
                    </li>