<template>
    <div class="panel" :class="type">
        <div class="panel-heading">
            {{ this.title }}
        </div>
        <div class="panel-body">
            <slot></slot>
        </div>
        <div class="panel-footer">
            {{ this.footer }}
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'type', 'title', 'footer'
        ],
        mounted() {
            console.log("Painel montado: " + this.title);
        }
    }
</script>

<style lang="css">

</style>