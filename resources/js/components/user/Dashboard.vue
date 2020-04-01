<template>
  <v-app id="inspire">

    <v-app-bar
      absolute
      app
        elevate-on-scroll
      scroll-target="#scrolling-techniques-7"
      color="transparent"
      dark
      class="mb-5"
    >
      <!-- <h1 v-for="user in users" v-bind:key="user.id">{{ user.name }}</h1> -->
      <v-app-bar-nav-icon class="d-lg-none" @click.stop="left = !left" />
      <v-toolbar-title class="headline"></v-toolbar-title>
     
      <v-toolbar-title class="headline ml-auto">
        <div class="profile d-flex">
          <div class="not-wrap mr-4">
            <v-avatar size="15" class="view" color="rgb(197, 18, 18)" style="">
              <span class="sm-text">7</span>
            </v-avatar>
            <v-icon class="text-white">mdi-bell</v-icon>
          </div>
          <v-avatar size="50" style="border: 2px solid #01d28e">

          <img
            src="img/core-img/staff-1.jpg"
            alt="John"
          >
          
          </v-avatar>
        </div>
        
      </v-toolbar-title>
      
  
        
      
    </v-app-bar>
    <v-content class="bg-app container-fluid">
       
      <v-row
      no-gutters
      class="land"
      
      >
          <v-col
              v-for="n in 1"
              :key="n"
              cols="12"
              sm="2"
              class=""
              
          >
              <v-content
              class="pa-1 mr-2"
              outlined
              tile
              
              >
              <v-card class="py-3">
                <div class="d-flex justify-content-center align-items-center mt-4">
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-application</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Dashboard
                    </v-list-item-title>
                  </v-list-item>
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                  <div class="">
                    <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-router-wireless</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Discover
                    </v-list-item-title>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-album</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Albums
                    </v-list-item-title>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-microphone</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Artists
                    </v-list-item-title>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-music</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Genere
                    </v-list-item-title>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-trending-up</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Analytics
                    </v-list-item-title>
                  </v-list-item>
                  <v-list-item>
                    <v-list-item-icon>
                      <v-icon  class="text-main">mdi-video</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>
                      Video
                    </v-list-item-title>
                  </v-list-item>
                  </div>
                  
                </div>
                <div class="d-flex justify-content-center align-items-center mt-4">
                    <v-list-item>
                      <v-list-item-icon>
                        <v-icon  class="text-main">mdi-lock</v-icon>
                      </v-list-item-icon>
                      <v-list-item-title>
                        Settings
                      </v-list-item-title>
                    </v-list-item>
                  </div>
              </v-card>
              </v-content>

              
          </v-col>

          <v-col
              v-for="n in 1"
              :key="n"
              cols="12"
              sm="7"
              
          >
            <v-content
              class="pa-1 text-white"
              outlined
              tile
              
            >
              <v-img
              :src="`img/m-img/m11.jpg`"
              :lazy-src="`img/m-img/m11.jpg`"
              aspect-ratio="1"
              class="grey lighten-2"
              height="350"
              >

              <v-content>
                <div class="px-3">
                  <h1 class="display-2 text-main">Featured<br> Artists</h1>
                  <h1 class="display-2 pt-3">Drake</h1>
                  <p class="headline">Released A New Album</p>
                  <v-btn
                    :href="source"
                    icon
                    large
                    target="/choose"
                    v-on="on"
                    class="ml-5"
                    color="#01d28e"
                  >
                    Choose
                    <v-icon>mdi-arrow-right</v-icon>
                  </v-btn>
                </div>
                
              </v-content>
              
              </v-img>
              <v-card class="shadow p-4 mt-5">
                <div class="recommend-wrap mt-5">
                <h3 class="headline">Recommended Artists</h3>
                <div class="d-flex mt-5">
                
                <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/25.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Rihanna</p>
                </div>
                 <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/26.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Ed Sheeran</p>
                </div>
                  <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/27.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Eminem</p>
                </div>
                  <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/28.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Justin Bieber</p>
                </div>
                  <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/29.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Taylor Swift</p>
                </div>
                <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/29.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Nikki Minaj</p>
                </div>
                <div class="rec-wrap mr-5">
                  <v-avatar size="70" style="border: 2px solid #01d28e" class="mr-5">
                    <img
                      src="img/bg-img/29.jpg"
                      alt="John"
                    >
                  </v-avatar>
                  <p class="sm-caps">Cardie B</p>
                </div>
                 
              </div>
              <v-btn
                :href="source"
                icon
                large
                target="/choose"
                v-on="on"
                class="mt-3 ml-5"
                color="#01d28e"
              >
                Choose
                <v-icon>mdi-arrow-right</v-icon>
              </v-btn>
              </div>
              </v-card>
              <v-card class="shadow p-4 mt-5">
                <div class="recommend-wrap mt-5">
                <h3 class="headline">Recommended Albums</h3>
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
                <v-btn
                  :href="source"
                  icon
                  large
                  target="/choose"
                  v-on="on"
                  class="mt-3 ml-5"
                  color="#01d28e"
                >
                  View All
                  <v-icon>mdi-arrow-right</v-icon>
                </v-btn>
                </div>
              </v-card>
            </v-content>
          </v-col>
            <v-col
              v-for="n in 1"
              :key="n"
              cols="12"
              sm="3"
              
          >
          <v-content
            class="pa-1 text-white"
            outlined
            tile
            
          >
            
            <div class="watch-wrap">
              
              <v-img
              :src="`img/m-img/m9.jpg`"
              :lazy-src="`img/m-img/m9.jpg`"
              aspect-ratio="1"
              class="gray lighten-2 "
              >
                
                <div style="z-index: 99;" class="shield-wrapper p-4  z-ind">
                  <div class="top d-flex space-between">
                    <v-avatar size="30" class="mr-2" color="#71f3c8" style="border: 3px solid #01d28e">
                    </v-avatar>
                    <p>LIVE</p>
                  </div>
                  <div class="bottom mt-3">
                    <h3 class="reguler">Live Perfomance &mdash; Lil-wyne and Nickiminaj</h3>
                  </div>
                  <div class="links ml-2 mt-5">
                    <v-btn
                    :href="source"
                    icon
                    large
                    target="/choose"
                    v-on="on"
                    class="mt-3 ml-5"
                    color="#01d28e"
                  >
                    Watch Now
                    <v-icon>mdi-arrow-right</v-icon>

                  </v-btn>
                  
                  
                  </div>
                </div>
              </v-img>
            </div>
          </v-content>
          <v-card class="ml-2 mt-5">
            <div class="card-inner p-3">
              <h1 class="headline">Your Playlists</h1>
              <v-list-item>
               <v-list-item-avatar size="40" style="border: 2px solid #01d28e">
                 <img src="img/bg-img/25.jpg" alt="">
               </v-list-item-avatar>
                <v-list-item-title>
                  <p class="sm-caps">{{ firstname }}</p>
                </v-list-item-title>
              </v-list-item>
              <!-- <v-list-item>
               <v-list-item-avatar size="40" style="border: 2px solid #01d28e">
                 <img src="img/bg-img/26.jpg" alt="">
               </v-list-item-avatar>
                <v-list-item-title>
                  <p class="sm-caps">War Zone &mdash; <br> Eminem</p>
                </v-list-item-title>
              </v-list-item>
              <v-list-item>
               <v-list-item-avatar size="40" style="border: 2px solid #01d28e">
                 <img src="img/bg-img/27.jpg" alt="">
               </v-list-item-avatar>
                <v-list-item-title>
                  <p class="sm-caps">Walking On A Rock &mdash; <br> Post Molane</p>
                </v-list-item-title>
              </v-list-item>
              <v-list-item>
               <v-list-item-avatar size="40" style="border: 2px solid #01d28e">
                 <img src="img/bg-img/28.jpg" alt="">
               </v-list-item-avatar>
                <v-list-item-title>
                  <p class="sm-caps">Love Freak &mdash; <br> Chrisbrown</p>
                </v-list-item-title>
              </v-list-item>
              <v-list-item>
               <v-list-item-avatar size="40" style="border: 2px solid #01d28e">
                 <img src="img/bg-img/29.jpg" alt="">
               </v-list-item-avatar>
                <v-list-item-title>
                  <p class="sm-caps">Love Story &mdash; <br> Tylor Swift</p>
                </v-list-item-title>
              </v-list-item> -->
            </div>
          </v-card>
          <v-card class="radius m-4">
            <div class="d-flex">
              <img src="img/bg-img/29.jpg" class="radius" alt="">
              <div class="song-title mt-5 ml-1">
                <p class="sm-caps">Senorita &mdash; Shawn Mandes - Camila Cabello</p>
                <div class="control-wrap">
                  <v-icon style="border: 3px solid #01d28e" class="rounded-circle">mdi-pause</v-icon>

                  <v-icon class="ml-5">mdi-heart</v-icon>
                </div>
              </div>
            </div>
          </v-card>
        </v-col>
      </v-row>
     

    </v-content>

   
  </v-app>
</template>

<script>
  export default {
    data() {
      return {
        has_error: false,
        users: null,
        user_id: '',
        name:''
        
      }

    },
    

    mounted() {
      this.getUsers()
    },

    methods: {
      getUsers() {
        this.$http({
          url: `users`,
          method: 'GET'
        })
        .then((res) => {
            this.users = res.data.users
        }, () => {
            this.has_error = true
        })
      }
    }


    
  }
  
</script>

<style scoped>
  li {
    list-style: none !important;
  }

  .z-ind {
    z-index: 3;
  }

  
  .v-card--reveal {
    align-items: center;
    bottom: 0;
    justify-content: center;
    opacity: .5;
    position: absolute;
    width: 100%;
  }

  .neg-ml {
    margin-left: -20px;
    margin-top: 30px;
    font-size: 2rem;
  }

  .radius {
    border-radius: 30px;
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
  .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .3;
   background-image: linear-gradient( 181deg,  rgba(2,0,97,1) 15%, rgba(97,149,219,1) 158.5% );
    height: 100%;
  }

  .live {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    content: '';
    opacity: .3;
    background: rgba(0, 0, 0, 0.8) ;
    width: 100%;
    height: 100%;
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
  .text-main {
    color: #01d28e;
   
  }

  .not-wrap {
    color: white;
  }

  .profile {
    position: relative;
  }

  .view {
    position: absolute;
    top: 5%;
    left: 15%;
    z-index: 1;

  }

  .sm-text {
    font-size: 12px;
  }

  .not-view span {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-bottom: 20px;
  }

  .land {
    margin-top: 80px;
  }


  .bg-white {
    background-color: #fff;
  }
</style>