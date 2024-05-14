<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    


        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <div id="app">
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <ul>
                                    <li v-for="disco in dischi">
                                        {{disco.title}}
                                        {{disco.author}}
                                        {{disco.year}}
                                        <img :src="disco.poster" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>    



        </div>

        <script src="./app.js"></script>
</body>
</html>