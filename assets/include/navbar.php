 <nav class="navbar__wrap " id="js-header">

    
    <div class="navbar">

        <div class="pull-left">
                            <a @click.stop.prevent="showCategories = !(showCategories);" href="#"
                   class="navbar__categories icon-icon-category">Categories</a>
                        

        </div>
        <div class="pull-right">
            <a href="/submit" class="navbar__submit hidden-xs">Submit a project</a>

                                                    <a data-toggle="tooltip" title="Follow Us On Twitter"  target="_blank" rel="external" href="http://twitter.com/madewithlaravel"
                   class="navbar__twitter">
                    <i class="fab fa-fw fa-twitter"></i>
                </a>
                                        <a data-toggle="tooltip" title="Join our Telegram Channel" target="_blank" rel="external" href="https://t.me/MadeWithLaravel"
                   class="navbar__twitter">
                    <i class="fab fa-fw fa-telegram-plane"></i>
                </a>
            
        </div>
        <a class="navbar__logo" href="https://madewithlaravel.com">
                        <img src="https://madewithlaravel.com/mandant/madewithlaravel/images/logo.png" width="194px" alt="MadeWithLaravel.com"/>
                    </a>
    </div>
</nav>
