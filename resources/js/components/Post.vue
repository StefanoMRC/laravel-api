<template>
    <div>
        <div class="container">
            <div class="card my-4" v-for="post in posts" :key="post.id">
                <h5 class="card-header">{{post.title}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{post.content}}</h5>
                    <div class="card-text" >
                        <h4>Category:</h4>
                        <span class="badge badge-pill" :class="`badge-${post.category.color}`" >{{post.category.name}}</span>
                        
                    </div>
                    <div class="card-text" v-if="post.tags.length">
                        <h4>Tags:</h4>
                        <span class="badge badge-pill"  :style="`background-color:${tag.color}`" v-for="tag in post.tags" :key="tag.id" >{{tag.name}}</span>
                    </div>

                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    import axios from "axios";
    export default {
        name: 'Post',
        data() {
            return {
                posts: [],
            }
        },
        methods: {
            getPost() {
                axios.get('http://127.0.0.1:8000/api/posts')
                    .then((res) => {
                        console.log(res.data.posts);
                        this.posts = res.data.posts;
                    })
            }
        },
        mounted() {
            this.getPost();
        },
    }

</script>

<style scoped>

</style>
