<nav class="header navbar">
        <div class="header-inner">
          <div class="navbar-item navbar-spacer-right brand hidden-lg-up">
            <!-- toggle offscreen menu -->
            <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen">
              <i class="material-icons">menu</i>
            </a>
            <!-- /toggle offscreen menu -->
            <!-- logo -->
            <a class="brand-logo hidden-xs-down">
              <!-- <img src="<?= asset('theme/assets/images/logo_white.png')?>" alt="logo" /> -->
            </a>
            <!-- /logo -->
          </div>
          <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#">
            <span><?=get_module_name();?></span>
          </a>
          <div class="navbar-search navbar-item">
            <form class="search-form">
              <i class="material-icons">search</i>
              <input class="form-control" type="text" placeholder="Search" />
            </form>
          </div>
          <div class="navbar-item nav navbar-nav">
            
            <div class="nav-item nav-link dropdown">
              <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                <i class="material-icons">notifications</i>
                <span class="tag tag-danger">4</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right notifications">
                <div class="dropdown-item">
                  <div class="notifications-wrapper">
                    <ul class="notifications-list">
                      <li>
                        <a href="javascript:;">
                          <div class="notification-icon">
                            <div class="circle-icon bg-success text-white">
                              <i class="material-icons">arrow_upward</i>
                            </div>
                          </div>
                          <div class="notification-message">
                            <b>Sean</b>
                            launched a new application
                            <span class="time">2 seconds ago</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <div class="notification-icon">
                            <div class="circle-icon bg-danger text-white">
                              <i class="material-icons">check</i>
                            </div>
                          </div>
                          <div class="notification-message">
                            <b>Removed calendar</b>
                            from app list
                            <span class="time">4 hours ago</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span class="notification-icon">
                            <span class="circle-icon bg-info text-white">J</span>
                          </span>
                          <div class="notification-message">
                            <b>Jack Hunt</b>
                            has
                            <b>joined</b>
                            mailing list
                            <span class="time">9 days ago</span>
                          </div>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          <span class="notification-icon">
                            <span class="circle-icon bg-primary text-white">C</span>
                          </span>
                          <div class="notification-message">
                            <b>Conan Johns</b>
                            created a new list
                            <span class="time">9 days ago</span>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="notification-footer">Notifications</div>
                </div>
              </div>
            </div>
           
          </div>
        </div>
      </nav>