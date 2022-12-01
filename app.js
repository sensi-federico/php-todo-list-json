const { createApp } = Vue
createApp({
    data() {
        return {
            tasks: null,
            newTask: ''
        }
    },
    methods: {
        getAllTasks() {
            axios.get('server.php').then(resp => {
                console.log(resp.data)
                this.tasks = resp.data
            }).catch(err => {
                console.error(err.message)
            })
        },
        addTask() {
            console.log('Adding new task...')
            const data = {
                title: this.newTask
            }
            axios.post('add-task.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(response => {
                console.log(response)
                this.tasks = response.data
                this.newTask = ''
            }).catch(err => {
                console.log(err)
            })
        },
        deleteTask(index) {
            const data = {
                post_index: index
            }
            axios.post('delete-task.php', data, {
                headers: { "Content-Type": "multipart/form-data" }
            }).then(resp => {
                console.log(resp)
                this.tasks = resp.data
            }).catch(err => console.log(err))
        }
    },
    mounted() {
        this.getAllTasks()
    },
}).mount('#app')