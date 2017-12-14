 let createevent = new Vue({
        el: '#create-event',
        
        data: {
            EventCreate : {
                event_name: '',
                event_date: ''
            },
            
            createEvent: [],
        },
        
        methods: {
            storeCreateEvent() {
                axios.post('x.php', {
                    'event_name' : this.EventCreate.event_name,
                    'event_date': this.EventCreate.event_date,
                })
                .then((response) => {
                    this.createEvent = response.data;
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    })

  let createquiz = new Vue({
        el: '#create-quiz',
        
        data: {
           QuizCreate : {
                event-title: '',
                question: '',
                optionone: '',
                optiontwo: '',
                optionthree: '',
                optionfour: '',
                correct_answer:'',
            },
            
            createQuiz: [],
        },
        
        methods: {
            storeCreateQuiz() {
                axios.post('x.php', {
                    'event-title'     : this.QuizCreate.event-title,
                    'question'        : this.QuizCreate.question,
                    'optionone'       : this.QuizCreate.optionone,
                    'optiontwo'       : this.QuizCreate.optiontwo,
                    'optionthree'     : this.QuizCreate.optionthree,
                    'optionfour'      : this.QuizCreate.optionfour,
                    'correct_answer'  : this.QuizCreate.correct_answer,
                })
                .then((response) => {
                    this.createQuiz = response.data;
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    })

