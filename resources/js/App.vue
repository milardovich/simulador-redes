<template>
    <div>
        <h1>Simulador de redes</h1>
      Lorem ipsum

      <div v-if="isDataLoaded">
        <div v-for="question in quiz" :key="question.id">
              {{ question.question }}
            test
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
          userResponses: Array(quiz.questions.length).fill(false)
          }
    },
    methods: {

          next: function() {
            this.questionIndex++;
          },
          prev: function() {
            this.questionIndex--;
          },
          score: function() {
            return this.userResponses.filter(function(val) { return val }).length;
          }
    },
    mounted() {

			axios.get('http://localhost:8000/api/questions').then((response) => {
              this.quiz = response.data.data;
               this.isDataLoaded = true;
               console.log(this.quiz);
      		})
    },
    computed: {
			showQuestions() {
				return this.isDataLoaded
      }
    }
  }
</script>