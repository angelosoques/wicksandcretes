<template> 
    <div id="app" class="container">
        
        <login v-show="!bLogged"/>
    </div>
</template>


<script>
import login from './login.vue';
    export default {
        name: 'app',
        components: {
            login,
        },
        methods: {
            
        },
        data() {
            return {
                bLogged : true
            }
        }
    }
</script>