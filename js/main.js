const { createApp } = Vue;

createApp({

    data() {
        return {

            discs: [],

            selectedAlbum: {},
        }
    },

    mounted() {

        console.log('selectedAlbum:', this.selectedAlbum)

        axios.get('./server/server.php')
            .then(res => {
                console.log(res);
                this.discs = res.data;
        });

    },

    methods: {
        albumClick(index) {

            // console.log('./server/server.php?discIndex=' + index);
            axios.get('./server/server.php?discIndex=' + index)
                .then(res => {
                    console.log(res.data);
                    this.selectedAlbum = res.data;
            });

        },
    },

}).mount("#app");