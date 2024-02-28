<header
    id="banner"
    class="scrollto clearfix"
    data-enllax-ratio=".5"
>
    <div
        id="header"
        class="nav-collapse"
    >
        <div class="row clearfix">
            <div class="col-1">

                <!--Logo-->
                <div id="logo">

                    <!--Logo that is shown on the banner-->
                    <img
                        src="{{ Vite::asset('resources/images/logo.png') }}"
                        id="banner-logo"
                        alt="Landing Page"
                    />
                    <!--End of Banner Logo-->

                    <!--The Logo that is shown on the sticky Navigation Bar-->
                    <img
                        src="{{ Vite::asset('resources/images/logo-2.png') }}"
                        id="navigation-logo"
                        alt="Landing Page"
                    />
                    <!--End of Navigation Logo-->

                </div>
                <!--End of Logo-->

                <aside>

                    <!--Social Icons in Header-->
                    <x-ui.partials.menu-social />

                </aside>

                <!--Main Navigation-->
                <x-ui.partials.navbar-main />

                <div id="nav-trigger"><span></span></div>
                <nav id="nav-mobile"></nav>

            </div>
        </div>
    </div><!--End of Header-->

    <!--Banner Content-->
    <div
        id="banner-content"
        class="row clearfix"
    >

        <div class="col-38">

            <div class="section-heading">
                <h1>A FREE AND SIMPLE LANDING PAGE</h1>
                <h2>Namari is a free landing page template you can use for your projects. It is free to use for your
                    personal and commercial projects, enjoy!</h2>
            </div>

            <!--Call to Action-->
            <x-ui.buttons.cta-button />

        </div>

    </div><!--End of Row-->
</header>
