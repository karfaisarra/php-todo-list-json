const { createApp } = Vue

createApp({
    data() {
        return {
            listTasks: [],
            task: '',
        }
    },
    methods: {
        showTaskes(url) {
            axios
                .get(url)
                .then(response => {
                    //console.log(response);
                    this.listTasks = response.data
                })
        }
    },
    mounted() {
        this.showTaskes('server.php')
    }
}).mount('#app')
