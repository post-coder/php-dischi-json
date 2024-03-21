<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Discs</title>
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div id="app">

        <div class="container py-5">
            <h1 class="mb-5">Dischi</h1>
            
            <ul class="row row-cols-3 gap-4">

                <li 
                    v-for="(disc, index) in discs"  
                    class="col card  p-0 album" 
                    style="width: 18rem;"
                    @click="albumClick(index)"
                >
                    <img :src="disc.poster" class="card-img-top" :alt="disc.title">
                    <div class="card-body">
                        <h5 class="card-title">{{ disc.title }}</h5>
                    </div>
                </li>

            </ul>

        </div>

        <div id="album-details" v-if="selectedAlbum.title != undefined">

            <div class="album">
                <img class="album-cover" :src="selectedAlbum.poster" :alt="selectedAlbum.title">
                <div class="album-details">

                    <h4>{{selectedAlbum.title}}</h5>
                    <h5>{{selectedAlbum.author}}</h6>
                    <h6>{{selectedAlbum.year}}</h6>

                </div>
            </div>

            <button id="close-button" @click="selectedAlbum = {}">&#9587;</button>

        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="./js/main.js"></script>
</body>
</html>