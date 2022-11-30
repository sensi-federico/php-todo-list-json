
const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: [],
            api_url: 'server.php'
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
        }
    },
    mounted() {
        this.readTasks(this.api_url)
    },
}).mount('#app')