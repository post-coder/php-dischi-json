const { createApp } = Vue;

createApp({

    data() {
        return {

            discs: [],
        }
    },

    mounted() {

        axios.get('./server/server.php')
            .then(res => {
                console.log(res);
                this.discs = res.data;
        });

    },

}).mount("#app");