<template>

        <div class="card">
            <div class="card-header">
                <strong class="card-title">{{post.title}}</strong>
                {{moment(post.created_at).fromNow()}}
                <p>{{post.category.name}}</p>
                <strong>{{post.user.name}}</strong>
            </div>
            <div class="card-body">
                <p v-html="post.content"></p>
            </div>
        </div>

</template>

<script>

    window.$ = require('jquery');

    export default {
        name: "Post",
        props:['post'],
        mounted(){
            $("img").addClass('img-fluid')
        }
    }
</script>

<style scoped>

</style>