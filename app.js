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
        },
        addTask() {
            const data = {
                mytask: this.task
            }
            axios.post('server.php', data, {
                Headers: { 'Content-Type': 'multipart/from-data' }
            }).then(response => {
                this.listTasks = response.data
            })
        }
    },
    mounted() {
        this.showTaskes('server.php')
    }
}).mount('#app')
