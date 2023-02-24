const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
            newToDo:'',
            response:'',
        }
    },
    methods: {
        readData() {
            axios.get('./read.php')
            .then((response) => {
                this.toDoList = response.data.toDoList;
            });
        },
        addToDo() {
            axios.post('./create.php', {
                newToDo: this.newToDo
            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then((response) => {
                console.log(response);
                this.readData();
                this.newToDo= '';
            });
        },
        doneFlag(toDo, index) {
            toDo.done = !toDo.done;
            axios.post('./update.php', {
                updateType: 'doneFlag',
                index: index,
            }, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
            .then((response) => { console.log(response); });
        },
    },
    created() {
        this.readData();
	}
}).mount('#app');