
<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
<div id="app">
    <v-app>
        <v-main>
            <v-container>
                <template>
                    <v-card>
                        <v-card-text>
                            <v-form
                                ref="form"
                                method="post" action="/editar/{{$usuario->id}}"
                                v-model="valid"
                                lazy-validation
                            >@csrf

                                <v-text-field
                                    name="nome"
                                    label="Nome"
                                    value="{{$usuario->nome}}"
                                    required
                                ></v-text-field>
                                <v-text-field
                                    name="idade"
                                    label="Idade"
                                    value="{{$usuario->idade}}"
                                    required
                                ></v-text-field>
                                <v-card-action>
                                    <v-btn type="submit"
                                           color="success"
                                           class="mr-4"
                                    >
                                        Salvar
                                    </v-btn>

                                    <v-btn href="../"
                                           color="red"
                                           class="mr-4"
                                    >
                                        Cancelar
                                    </v-btn>
                                </v-card-action>
                            </v-form>
                        </v-card-text>
                    </v-card>
                </template>
            </v-container>
        </v-main>
    </v-app>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
<script>
    new Vue({
        el: '#app',
        vuetify: new Vuetify(),
    })
</script>
</body>
</html>
