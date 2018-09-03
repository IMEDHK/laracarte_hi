<template>
    <div>
            <div class="input-append">
                <input  :type="show ? 'text' : 'password'" >
                <button class="add-on" @click="show= ! show"><i :class="show ? 'fas fa-eye' : 'fas fa-eye-slash'"></i>
                </button>

            </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                "show": false,
            }
        },
    }
</script>
