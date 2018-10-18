<template>
    <div class="container-fluid clearfx">
        <div class="col-md-12" v-for="post in posts" >
            <post :post="post"></post>
        </div>

    </div>
</template>

<script>
    import Post from './Post'
    export default {
        name: "PostList",
        components: {Post},
        data(){
            return {
                posts: []
            }
        },
        methods:{
           async loadPosts(){
                return await  axios.get('http://localhost:8000/api/posts').then(res=>{
                    console.log(res.data)
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