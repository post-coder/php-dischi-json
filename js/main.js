const { createApp } = Vue;

createApp({

    data() {
        return {

            discs: [],

            selectedAlbum: {},
        }
    },

    mounted() {

        // console.log('selectedAlbum:', this.selectedAlbum)

        axios.get('./server/server.php?password=123456')
            .then(res => {
                if(res.data.error) {
                    alert("password sbagliata");
                } else {
                    console.log(res);
                    this.discs = res.data;
                }
        });

    },

    methods: {
        albumClick(index) {

            // console.log('./server/server.php?discIndex=' + index);
            axios.get('./server/server.php?password=123456&discIndex=' + index)
                .then(res => {
                    // console.log(res.data);
                    this.selectedAlbum = res.data;
            });

        },
    },

}).mount("#app");