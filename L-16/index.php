<html>
    
    <head>
        
        <title>L-16:: Calling external API</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <style type="text/css">

            .foo{
                background: #ace371;
                text-align: center;
                width: 960px;
                margin: 44px auto;
                min-height: 222px;
            }
            .fade-enter-active, .fade-leave-active{
                /* transition: transform .5s; */
                transition: margin-left 5s;
            }

            .fade-enter{
                margin-left: -1111px;
            }

            .fade-leave-to{
                margin-left: 1111px;
            }
            
            .main {
                position: absolute;
                width: 100%;
            }

            ul.menu{
                list-style: none;
                width: 960px;
                margin: auto;
                background: #1a6aa1;
                color: #ffffff;
            }
            
            ul.menu li{
                display: inline;
            }

            ul.menu li a{
                color: #fff;
                display: inline-block;
                padding: 5px;
                text-decoration: none;
            }

            ul.menu li a.router-link-active{
                background: #BE40001;
            }

        </style>

    </head>

    <body>

        <div id="root">
            
            <!-- <ul class="menu">
                <li><a href="home">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>

            <br> -->

            <ul class="menu">
                <li><router-link to="/home">Home</router-link></li>
                <li><router-link to="/about">About Us</router-link></li>
                <li><router-link to="/contact">Contact Us</router-link></li>                
            </ul>

            <transition name="fade">
                <router-view></router-view>
            </transition>

        </div>

        <script type="text/javascript" src="vuejs/vue.js"></script>
        <script type="text/javascript" src="vuejs/vue-router.js"></script>
        <script type="text/javascript">

            // This is accessable from global component
            var Home = {
                template: `
                    <div class="main">
                        <div class="foo">
                            <h1>Home</h1>
                            <p>Home page paragraph goes here ...</p>
                        </div>
                    </div>
                `
            };

            var About = {
                template: `
                    <div class="main">
                        <div class="foo">
                            <h1>About</h1>
                            <p>About page paragraph goes here ...</p>
                        </div>
                    </div>
                `
            };

            var Contact = {
                template: `
                    <div class="main">
                        <div class="foo">
                            <h1>Contact</h1>
                            <p>Contact page paragraph goes here ...</p>
                        </div>
                    </div>
                `
            };

            var routes = [
                {path: '/', component: Home},
                {path: '/home', component: Home},
                {path: '/about', component: About},
                {path: '/contact', component: Contact},

            ];

            var router = new VueRouter({
                routes: routes,
                mode: 'history',
            });

            // This is accessable from local
            var app = new Vue({
                router: router,
            }).$mount('#root');

        </script>
    </body>
</html>