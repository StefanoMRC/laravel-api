<template>
    <div>
        <div>
           <Header/>
             
             <main>
                <Post/>
             </main>
        </div>
        
    </div>
</template>

<script>
import Header from "./Header.vue";
import Post from "./Post.vue";
    export default{
        name:'App',
        components:{
            Header,
            Post
        }
    }
</script>
