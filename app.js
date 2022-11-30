
const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php',
            task: ''
        }
    },
    methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        },
        addTasks() {
            const data = {
                task: this.task
            }
            axios
                .post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(resp => {
                    this.tasks = resp.data

                })
                .catch(err => {
                    console.error(err.message)
                })
        }
    },
    mounted() {
        this.readTasks(this.api_url)
    },
}).mount('#app')
