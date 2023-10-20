<template>
    <div id="side-div-login" class="side-div-login">
        <img src="../../images/wicksandcreteslogo.jpg" class="logo-circle">
        <button v-on:click="closeLoginContainer" class="close-side-div-btn" v-html="sideBtnHtml"></button>
        
        <div class="login-input-div">
            <form>
                <input class="login-input email" placeholder="Email Address" />
                <input class="login-input pass" placeholder="Password" />
                <a class="forgot-password" v-bind:href="sForgotPassLink">forgot password?</a>
            </form>
        </div>
        
        <div class="social-media-div">
            <span class="visit">Visit us on: </span>
            <a v-bind:href="sFbLink"><img class="social-media fb" src="../../images/fb.png"  alt=""></a>
            <a v-bind:href="sIgLink"><img class="social-media ig" src="../../images/ig.png" alt=""></a>
        </div>
        
    </div>
</template>
<script>
    export default {
        data() {
            return {
                sForgotPassLink : '',
                sideBtnHtml : 'Login',
                sFbLink : 'https://fb.com/wicksandcretes',
                sIgLink : 'https://instagram.com/wicksandcretes',
            }
        },
        methods: {
            closeLoginContainer() {
                let oSideLoginDiv =  (document).getElementById('side-div-login');
                if (oSideLoginDiv.classList.contains('slide-right') === false && oSideLoginDiv.classList.contains('slide-left') === false) {
                    oSideLoginDiv.classList.toggle('slide-right');
                    this.sideBtnHtml = 'Close';
                } else if (oSideLoginDiv.classList.contains('slide-right') === true) {
                    oSideLoginDiv.classList.toggle('slide-right');
                    oSideLoginDiv.classList.toggle('slide-left');
                    this.sideBtnHtml = 'Login';
                } else if (oSideLoginDiv.classList.contains('slide-left') === true){
                    oSideLoginDiv.classList.toggle('slide-right');
                    oSideLoginDiv.classList.toggle('slide-left');
                    this.sideBtnHtml = 'Close';
                }
            }
        }
    }
</script>