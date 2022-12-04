const { createApp } = Vue
createApp(
    {
        data() {
            return {
                api_url: 'server.php',
                tasks: [],
                newTask: ''
            }
        },
        methods: {
            readTasks(url) {

                axios
                    .get(url)
                    .then(response => {
                        //console.log(response); 
                        this.tasks = response.data
                    })
                    .catch(err => {
                        console.error(err.message);
                    })
            },
            saveTask() {
                const data = {
                    title: this.newTask
                }
                axios
                    .post('store.php', data, {
                        headers: { 'Content-Type': 'multipart/form-data' }
                    })
                    .then(response => {
                        console.log(response);
                        this.tasks = response.data
                        this.newTask = ''
                    })
                    .catch(err => {
                        console.error(err.message);
                    })
            },
            crossedOutTask(index) {
                console.log('task barrata');
                this.tasks[index].done = !this.tasks[index].done
            },
            cancelTask(index) {
                console.log(this.tasks[index]);

            }
        },
        mounted() {
            this.readTasks(this.api_url)
        }
    }
)
    .mount('#app')
