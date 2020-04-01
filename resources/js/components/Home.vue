<template>
  <v-app id="inspire">

    <v-app-bar
      absolute
      app
        elevate-on-scroll
      scroll-target="#scrolling-techniques-7"
      color="transparent"
      dark
    >
      <v-app-bar-nav-icon class="d-lg-none" @click.stop="left = !left" />
      <v-toolbar-title class="m-auto">Afro</v-toolbar-title>
      
      <v-spacer />
      <ul class="nav m-auto d-none d-lg-inline-block">
        <router-link class="pr-3 text-white" to="/">Home</router-link>
        <router-link class="pr-3 text-white" to="/about">About</router-link>
        <router-link class="pr-3 text-white" to="/featured">Featured</router-link>
        
      </ul>
      
      <v-spacer />
      <ul class="nav ml-auto d-none d-lg-flex">
        <v-chip class="ma-2" color="#01d28e" outlined pill >
         <li class="pr-3 text-white" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                    {{route.name}}
                </router-link>
            </li>
            <!--LOGGED USER-->
            <li class="pr-3 text-white" v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
                <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                    {{route.name}}
                </router-link>
            </li>
            <!--LOGGED ADMIN-->
            <li class="pr-3 text-white" v-if="$auth.check(2)" v-for="(route, key) in routes.admin" v-bind:key="route.path">
                <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                    {{route.name}}
                </router-link>
            </li>
            <!--LOGOUT-->
            <li class="pr-3 text-white" v-if="$auth.check()">
                <a href="#" class="text-white" @click.prevent="$auth.logout()">Logout</a>
            </li>
         <v-icon right>mdi-account-outline</v-icon>
        </v-chip>
      </ul>
    </v-app-bar>

   

    
    <v-navigation-drawer
      v-model="left"
      fixed
      temporary
      color="rgb(7, 7, 7)"
    >
      <v-list
        nav
        dense
      >
        <v-list-item-group
          v-model="group"
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-icon>
              <v-icon  class="text-white">mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title>
              <router-link class="pr-3 text-white" to="/">Home</router-link>
            </v-list-item-title>
          </v-list-item>

           <v-list-item>
            <v-list-item-icon>
              <v-icon  class="text-white">mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>
              <router-link class="pr-3 text-white" to="/about">About</router-link>
            </v-list-item-title>
          </v-list-item>

        <v-list-item>
            <v-list-item-icon>
              <v-icon  class="text-white">mdi-trending-up</v-icon>
            </v-list-item-icon>
            <v-list-item-title>
              <router-link class="pr-3 text-white" to="/featured">Featured</router-link>
            </v-list-item-title>
          </v-list-item>
          <v-list-item class="mt-5">
            <v-chip class="ma-2" color="#01d28e" outlined pill >
            <li class="pr-3 text-white" v-if="!$auth.check()" v-for="(route, key) in routes.unlogged" v-bind:key="route.path">
                    <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGGED USER-->
                <li class="pr-3 text-white" v-if="$auth.check(1)" v-for="(route, key) in routes.user" v-bind:key="route.path">
                    <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGGED ADMIN-->
                <li class="pr-3 text-white" v-if="$auth.check(2)" v-for="(route, key) in routes.admin" v-bind:key="route.path">
                    <router-link class="text-white"  :to="{ name : route.path }" :key="key">
                        {{route.name}}
                    </router-link>
                </li>
                <!--LOGOUT-->
                <li class="pr-3 text-white" v-if="$auth.check()">
                    <a href="#" class="text-white" @click.prevent="$auth.logout()">Logout</a>
                </li>
            <v-icon right>mdi-account-outline</v-icon>
            </v-chip>
          </v-list-item>

        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>


    <div class="hero-wrap go-degree-bg" style=" background-image: url('img/m-img/m3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex flex-column justify-content-start justify-content-center align-items-center">
          <div class="col-lg-8 go-animate">
          	<div class="text w-100 mt-5 text-center">
	            <h1 class="mb-4 text-white">Listen &amp; And Download Your Music</h1>
	            <p style="font-size: 18px;">We Provided A Nice Way Of Streaming Music Online And Watch Video For An Affordable Price</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center mr-5">
	            		<v-icon>mdi-arrow-right</v-icon>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Join Us And Listen To Any Music Of Your Choice</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <v-content class="bg-app">
       <v-container
        
        fluid
      >
        <v-row
        justify="center"
        align="center"
        no-gutters
        
        
        >
            <v-col
                v-for="n in 1"
                :key="n"
                cols="12"
                sm="6"
                class="pr-1"
               
            >
                <v-content
                class="pa-1 mr-2"
                outlined
                tile
                
                >
                <h1 class="display-3 text-white">Your Favourite Music</h1>
                <h6 class="display-1 pt-5 text-white">
                  Watch Video, Stream Your Music And Listen Offline To Our Newly Released Albums
                </h6>
                <v-btn
                  :href="source"
                  icon
                  large
                  target="_blank"
                  v-on="on"
                >
                  <v-icon>mdi-code-tags</v-icon>
                </v-btn>
                </v-content>

               
            </v-col>

            <v-col
                v-for="n in 1"
                :key="n"
                cols="12"
                sm="6"
                
            >
                <v-content
                class="pa-1 text-white"
                outlined
                tile
                
                >
                <v-row
                  justify="center"
                  align="center"
                  no-gutters
                  
                  
                >
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                    <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m6.jpg`"
                          :lazy-src="`img/m-img/m6.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                              <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">The End Love</p>
                                <p class="caption m-0 p-0">Zara Larson</p>
                                
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
                  </v-col>
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                   <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m7.jpg`"
                          :lazy-src="`img/m-img/m7.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                             <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">Existance</p>
                                <p class="caption m-0 p-0">Taylor Swift</p>
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
                  </v-col>
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                   <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m8.jpg`"
                          :lazy-src="`img/m-img/m8.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                              <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">Bloody</p>
                                <p class="caption m-0 p-0">Eminem</p>
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
                  </v-col>
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                   <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m9.jpg`"
                          :lazy-src="`img/m-img/m9.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                              <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">Daddy</p>
                                <p class="caption m-0 p-0">Lil Whyne</p>
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
                  </v-col>
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                   <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m10.jpg`"
                          :lazy-src="`img/m-img/m10.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                              <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">Someday</p>
                                <p class="caption m-0 p-0">Drake</p>
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
                  </v-col>
                  <v-col
                  v-for="n in 1"
                  :key="n"
                  cols="12"
                  lg="4"
                  
                  >
                  
                    <v-hover v-slot:default="{ hover }">
                      
                        <v-card>
                          <v-img
                          :src="`img/m-img/m11.jpg`"
                          :lazy-src="`img/m-img/m11.jpg`"
                          aspect-ratio="1"
                          class="grey lighten-2"
                          >
                          <v-expand-transition>
                            <div
                              v-if="hover"
                              class="d-flex transition-fast-in-fast-out black darken-2 v-card--reveal display-3 white--text"
                              style="height: 100%;"
                            >
                             <div class="align-items-center justify-content-center">
                                <p class="body-1 text-white">War Zone</p>
                                <p class="caption m-0 p-0">Rihana</p>
                                
                              </div>
                            </div>
                          </v-expand-transition>
                        </v-img>
                        </v-card>
                    </v-hover>
       
                    
                   
                  </v-col>
                </v-row>
              </v-content>
            </v-col>
        </v-row>
       </v-container>

      <v-content>

      <div class="hero-wrap go-degree-bg" style=" background-image: url('img/m-img/m-last.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex flex-column justify-content-start justify-content-center align-items-center">
          
          <div class="col-lg-8 go-animate">
          	<div class="text w-100 mt-5 text-center">
	            <h1 class="mb-4 text-white">Nonstop Banging</h1>
	            <p style="font-size: 18px;">Keep On Streaming Unlimitedly, Ad Free, Feel The Tradition Listen To Music From 80s Up Till date And Watch Your Video</p>
	            <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
	            	<div class="icon d-flex align-items-center justify-content-center mr-5">
	            		<v-icon>mdi-arrow-right</v-icon>
	            	</div>
	            	<div class="heading-title ml-5">
		            	<span>Discover</span>
	            	</div>
	            </a>
            </div>
          </div>
        </div>
      </div>
    </div>

        
        
      </v-content>

    </v-content>

   
  </v-app>
</template>

<script>
  export default {
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
      drawerRight: null,
      right: false,
      left: false,

   
      routes: {
        // UNLOGGED
        unlogged: [
          {
            name: 'Register',
            path: 'register'
          },
          {
            name: 'Login',
            path: 'login'
          }
        ],
        // LOGGED USER
        user: [
          {
            name: 'Dashboard',
            path: 'dashboard'
          }
        ],
        // LOGGED ADMIN
        admin: [
          {
            name: 'Dashboard',
            path: 'admin.dashboard'
          }
        ]
      }

    }),

    
  }
</script>

<style scoped>
  li {
    list-style: none !important;
  }

  
  .v-card--reveal {
    align-items: center;
    bottom: 0;
    justify-content: center;
    opacity: .5;
    position: absolute;
    width: 100%;
  }

  .hero-wrap {
  width: 100%;
  height: 850px;
  position: inherit;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center; }
  @media (max-width: 1199.98px) {
    .hero-wrap {
      background-position: center center !important; } }
  .hero-wrap .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .3;
   background-image: linear-gradient( 181deg,  rgba(2,0,97,1) 15%, rgba(97,149,219,1) 158.5% );
    height: 850px;
  }

  .hero-wrap .overlay-dark {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .3;
   background-image: rgba(0, 0, 0, 0.8) ;

  }

   
  @media (max-width: 991.98px) {
    .hero-wrap {
      height: 100vh; }
      .hero-wrap .overlay {
        height: 100vh; }
   }
      
  .hero-wrap.hero-wrap-2 {
    height: 600px !important;
    position: relative; }
    .hero-wrap.hero-wrap-2 .overlay {
      width: 100%;
      opacity: .3;
      height: 600px; }
    .hero-wrap.hero-wrap-2 .slider-text {
      height: 600px !important; }

    .slider-text {
  height: 850px; }
  @media (max-width: 991.98px) {
    .slider-text {
      height: 100vh; } }
  .slider-text h1 {
    font-size: 44px;
    color: #000;
    line-height: 1.1;
    font-weight: 700; }
    .slider-text h1 span {
      display: block; }
  .slider-text .icon-wrap .icon {
    width: 70px;
    height: 70px;
    background: #01d28e;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%; }
    .slider-text .icon-wrap .icon span {
      color: #fff; }
  .slider-text .icon-wrap .heading-title {
    position: relative; }
    .slider-text .icon-wrap .heading-title:after {
      position: absolute;
      top: 50%;
      left: -33px;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
      content: '';
      width: 30px;
      height: 2px;
      background: #fff; }
    .slider-text .icon-wrap .heading-title span {
      font-family: "Poppins", Arial, sans-serif;
      color: #fff; }
  .slider-text p {
    line-height: 1.5;
    color: white; }
  .slider-text .breadcrumbs {
    font-size: 14px;
    margin-bottom: 20px;
    z-index: 99;
    text-transform: uppercase;
    font-weight: 500; }
    .slider-text .breadcrumbs span {
      color: rgba(255, 255, 255, 0.7); }
      .slider-text .breadcrumbs span i {
        color: rgba(255, 255, 255, 0.5);
        font-size: 13px; }
      .slider-text .breadcrumbs span a {
        color: rgba(255, 255, 255, 0.7); }
        .slider-text .breadcrumbs span a:hover, .slider-text .breadcrumbs span a:focus {
          color: #1089ff; }
          .slider-text .breadcrumbs span a:hover i, .slider-text .breadcrumbs span a:focus i {
            color: #1089ff; }
  .slider-text .bread {
    font-weight: 400 !important;
    position: relative;
    line-height: .8; }
  @media (max-width: 991.98px) {
    .nav {
      margin-top: 10px; } }
  .nav > .nav-item > .nav-link {
    font-size: 15px;
    padding-top: .9rem;
    padding-bottom: .9rem;
    padding-left: 20px;
    padding-right: 20px;
    color: #fff;
    font-weight: 400;
    opacity: 1 !important; }
    .nav > .nav-item > .nav-link:hover {
      color: #01d28e; }
    @media (max-width: 991.98px) {
      .nav > .nav-item > .nav-link {
        padding-left: 0;
        padding-right: 0;
        padding-bottom: 0;
        color: #fff; } }
</style>