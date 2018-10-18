<template>
    <div>
        <li v-for="post in posts">
            {{post.title}}
        </li>
    </div>
</template>

<script>
    export default {
        name: "PostList",
        data(){
            return {
                posts: []
            }
        },
        methods:{
           async loadPosts(){
                return await  axios.get('http://localhost:8000/api/posts').then(res=>{
                    this.posts = res.data;
                });
            }
        },
        mounted(){
            this.loadPosts();
        }
    }
</script>

<style scoped>

</style>