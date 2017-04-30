<template>
    <div>
        <label>Nome da Sociedade: {{ name }}
            <br>
            <input type="text" v-model="name" @keyup.enter="persist()">
        </label>
        <br>
        <button class="btn btn-primary" @click="persist()">Actualizar</button>
        <p v-if="returnedMessage">{{ returnedMessage }}</p>
    </div>
</template>

<script>
    export default {
        props: [
            'society'
        ],
        data() {
          return {
              name: this.society.name,
              returnedMessage: ''
          }
        },
        methods: {
            persist() {
                axios.patch('/society/update/' + this.society.id, { name: this.name })
                    .then((response) => {
                        this.returnedMessage = response.data;
                        this.printAlert('Sucesso', response.data, 'success');
                    })
                    .catch(error => {
                        this.returnedMessage = error.data;
                        this.printAlert('Erro', error.data, 'error');
                    })
            },
            printAlert(titulo, mensagem, tipo) {
                swal(titulo, mensagem, tipo);
            }
        }
    }
</script>