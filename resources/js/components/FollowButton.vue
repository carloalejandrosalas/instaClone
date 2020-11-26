<template>
    <div>
        <button @click="followUser" class="btn btn-primary ml-4">
            {{ buttonText }}
        </button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],
        data () {
            return {
                status: this.follows
            }
        },
        methods: {
            async followUser () {
                try {
                    const { data } = await axios.post(`/follow/${this.userId}`)
                    
                    console.log(data)
                
                    this.status = !this.status
                
                } catch (err) {
                    if (err.response.status === 401) {
                        return window.location = '/login'
                    }

                    alert('Something not work')
                }
            }
        },
        computed: {
            buttonText () {
                return this.status ? 'Unfollow' : 'Follow'
            }
        }
    }
</script>
