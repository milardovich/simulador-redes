<template>
<div>
    <div class="preview">
      <div class="questionsBox">
        <div class="questions">Simulador de redes</div>

        <div v-if="isDataLoaded">
            <div v-for="(question, index) in quiz">

                <div v-show="index === questionIndex">
                    <h2>{{ question.question }}</h2>
                    <ol>
                        <li v-for="response in question.answers">
                            <label>
                                <input type="radio" v-bind:value="response.correct" v-bind:name="index" v-model="userResponses[index]"> {{response.answer}}
                            </label>
                        </li>
                    </ol>
                    <button class="btn" v-if="questionIndex > 0" v-on:click="prev">
                        Anterior
                    </button>
                    <button class="btn" v-on:click="next">
                        Siguiente
                    </button>
                </div>
            </div>
            <div v-show="questionIndex === quiz.length">
                <h2>
                    Prueba Finalizada
                </h2>
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pregunta</th>
                    <th scope="col">Respuesta</th>
                    <th scope="col">Respuesta Correcta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(ans, ind) in quiz">
                        <td>{{ ind+1 }}</td>
                        <td>{{ ans.question }}</td>
                        <td><span v-if="userResponses[ind] == '1'" class="badge badge-success">Correcta</span><span v-else class="badge badge-danger">Incorrecta</span> </td>
                        <td>{{ showCorrectAnswer(ind) }}</td>
                    </tr>
                </tbody>
                </table>
                <p>
                    Nota final: {{ score() }} / {{ quiz.length }}
                </p>
                <a href="index.php">Volver a empezar</a>
            </div>
          </div>
      </div>
    </div>
</div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            quiz: [],
            questionIndex: 0,
            isDataLoaded: false,
            userResponses: [],
            correctAnswer: ''
        }
    },
    methods: {

        next: function () {
            this.questionIndex++;
        },
        prev: function () {
            this.questionIndex--;
        },
        score: function () {
            return this.userResponses.filter(function (val) {
                return val > 0
            }).length;
        },
        showCorrectAnswer(ind) {
            if(this.isDataLoaded && this.quiz[ind].answers.length > 0) {
                return this.quiz[ind].answers.filter(function (val) {
                     return val.correct > 0;
                })[0].answer;
            }
        }
    },
    mounted() {

        axios.get('http://localhost:8000/api/questions').then((response) => {
            this.quiz = response.data.data;
            this.isDataLoaded = true;
            this.userResponses = Array(this.quiz.length).fill(0);
        })
    },
    computed: {
        showQuestions() {
            return this.isDataLoaded
        }
    }
}
</script>
