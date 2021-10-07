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
                        <v-simple-table>
                            <template v-slot:default>
                                <thead>
                                <tr>
                                    <th class="text-left">
                                        Nome
                                    </th>
                                    <th class="text-left">
                                        Idade
                                    </th>

                                    <th class="text-right">
                                        Botoes
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>@foreach($users as $user)
                                        <td>{{ $user->nome }}</td>
                                        <td>{{ $user->idade}}</td>
                                        <td class="text-right">
                                            <v-btn href="../deletar/{{$user->id}}">Excluir</v-btn>
                                            <v-btn href="../editar/{{$user->id}}"> Editar</v-btn>
                                            <v-btn href="../ver-pessoa/{{$user->id}}"> Ver</v-btn>
                                        </td>
                                </tr>

                                @endforeach

                                </tbody>
                            </template>
                        </v-simple-table>
                    </v-card>
                        <v-btn href="../">Voltar</v-btn>


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
