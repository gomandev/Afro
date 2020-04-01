


<template>
    
    <v-content  class="p-0 m-0">
      
      <v-row>
        <v-col v-for="n in 1" :key="n" cols="12" sm="6" class="pr-1 d-none d-lg-block d-md-block">
          
          <div class="hero-wrap go-degree-bg" style="background-image: url('img/m-img/m2.jpg'" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
              <div class="col-lg-8 go-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                  <h1 class="display-4 text-white">Please Fill Out This Form</h1>
                <p class="lead">And Sound With Us</p>
                  <a href="https://vimeo.com/45830194" class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                    
                    <div class="heading-title">
                      <span>Easy steps for renting a car</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </v-col>
        <v-col v-for="n in 1" :key="n" cols="12" sm="6" class="pr-1 m-x">
          <form class="backpack p-5"  @submit.prevent="register" v-if="!success" method="post">
          <v-alert
          border="right"
          colored-border
          type="error"
          elevation="2"
          v-if="has_error && !success"
          >
          <p v-if="error == 'registration_validation_error'">Please Put A Valid</p>
          <p v-if="has_error && errors.email">{{ errors.email }}</p>
          <p v-else-if="has_error && errors.password">{{ errors.password }}</p>
          <p v-else>Success</p>
          
          </v-alert>
          <v-text-field
          v-model="name"
          type="name"
          id="name"
          :error-messages="nameErrors"
          :counter="10"
          label="Name"
          required
          @input="$v.name.$touch()"
          @blur="$v.name.$touch()"
          ></v-text-field>
          <v-text-field
          v-model="email"
          id="email"
          type="email"
          :error-messages="emailErrors"
          label="E-mail"
          required
          @input="$v.email.$touch()"
          @blur="$v.email.$touch()"
          ></v-text-field>
          <v-text-field
          v-model="password"
          :error-messages="selectErrors"
          label="Password"
          type="password"
          id="password"
          required
          @change="$v.password.$touch()"
          @blur="$v.password.$touch()"
          ></v-text-field>

          <v-text-field
          v-model="password_confirmation"
          :error-messages="selectErrors"
          label="Password"
          type="password"
          id="password_confirmation"
          required
          @change="$v.password.$touch()"
          @blur="$v.password.$touch()"
          ></v-text-field>

          <v-btn type="submit" class="mr-4" @click="submit">submit</v-btn>
        </form>
        </v-col>
        
      </v-row>
      
    </v-content>
</template>
<script>
  export default {
    data() {
      return {
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
        has_error: false,
        error: '',
        errors: {},
        success: false,
        valid: true,
        name: '',
        nameRules: [
          v => !!v || 'Name is required',
          v => (v && v.length <= 10) || 'Name must be less than 10 characters',
        ],
        email: '',
        emailRules: [
          v => !!v || 'E-mail is required',
          v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        ],

        password: '',
        passwordRules: [
          v => !!v || 'Password is required',
        ],

        password_confirmation: '',
        password_confirmationRules: [
          v => !!v || 'Password is required',
        ],
      }
    },
    methods: {
      register() {
        var app = this
        this.$auth.register({
          data: {
            email: app.email,
            password: app.password,
            password_confirmation: app.password_confirmation
          },
          success: function () {
            app.success = true
            this.$router.push({name: 'login', params: {successRegistrationRedirect: true}})
          },
          error: function (res) {
            console.log(res.response.data.errors)
            app.has_error = true
            app.error = res.response.data.error
            app.errors = res.response.data.errors || {}
          },
          validate () {
          this.$refs.form.validate()
          },
          reset () {
            this.$refs.form.reset()
          },
          resetValidation () {
            this.$refs.form.resetValidation()
          },
        })
      }
    }
  }
</script>

<style scoped>
 .hero-wrap {
  width: 100%;
  height: 100vh;
  position: inherit;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: top center;
  overflow: hidden;
   }
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
    opacity: 0.70;
   background: #000;
    height: 100vh;
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
  height: 100vh; }
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
  
</style>
