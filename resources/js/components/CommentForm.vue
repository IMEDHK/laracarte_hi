<template>
<div>
    <div class="border-b pb-4 mb-8" >

        <div  v-for="comment in comments" >
            <div  class="rounded">

                <p class="text-sm text-grey-dark mb-2">
                    {{ comment.name }} |
                    {{ comment.created_at }}

                </p>

                {{ comment.body }}

            </div>


        </div>
        <hr>

    </div>

    <p>NOuveau commentaire</p>


<form class="flex flex-column" @submit.prevent="CommentMethod">

    <input type="text" v-model="form.name" placeholder="Pseudo">
    <textarea name="" id="" cols="30" rows="10" class="border rounded p-3" v-model="form.body"></textarea>
    <button type="submit"  class="border rounded py-2"> Comment</button>
</form>
</div>
</template>


<script>

    export  default {
        props :  ['dataComments'],
        data() {
            return {
                form : {
                    name: '',
                    body:'',


                },



                comments: this.dataComments,



            }
        },


        methods : {

            CommentMethod() {
                axios.post('/comment',this.form).then(({data} )=> {
                    this.comments.push(data)
                    this.comment=''
                    }).catch(error => {
                    console.log(error.data)
                });
            },
        },








    }

</script>