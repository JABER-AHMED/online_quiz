console.log('hlw');
new Vue({
        el: '#create-event',
        
        data: {
            EventCreate : {
                event_name: '',
                event_date: ''
            },
            
        },
        
        methods: {
            storeCreateEvent() {
                axios.post('x.php', {
                    'event_name' : this.EventCreate.event_name,
                    'event_date': this.EventCreate.event_date,
                })
                .then((response) => {
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    });

 new Vue({
        el: '#create-quiz',
        
        data: {
           QuizCreate : {
                event_title: '',
                question: '',
                optionone: '',
                optiontwo: '',
                optionthree: '',
                optionfour: '',
                correct_answer:''
            },
            
        },
        
        methods: {
            storeCreateQuiz() {
                axios.post('x.php', {
                    'event_title'     : this.QuizCreate.event_title,
                    'question'        : this.QuizCreate.question,
                    'optionone'       : this.QuizCreate.optionone,
                    'optiontwo'       : this.QuizCreate.optiontwo,
                    'optionthree'     : this.QuizCreate.optionthree,
                    'optionfour'      : this.QuizCreate.optionfour,
                    'correct_answer'  : this.QuizCreate.correct_answer
                })
                .then((response) => {
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    });

console.log('hlw');
new Vue({
        el: '#create-event',
        
        data: {
            EventCreate : {
                event_name: '',
                event_date: ''
            },
            
        },
        
        methods: {
            storeCreateEvent() {
                axios.post('x.php', {
                    'event_name' : this.EventCreate.event_name,
                    'event_date': this.EventCreate.event_date,
                })
                .then((response) => {
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    });

 new Vue({
        el: '#create-quiz',
        
        data: {
           QuizCreate : {
                event_title: '',
                question: '',
                optionone: '',
                optiontwo: '',
                optionthree: '',
                optionfour: '',
                correct_answer:''
            },
            
        },
        
        methods: {
            storeCreateQuiz() {
                axios.post('x.php', {
                    'event_title'     : this.QuizCreate.event_title,
                    'question'        : this.QuizCreate.question,
                    'optionone'       : this.QuizCreate.optionone,
                    'optiontwo'       : this.QuizCreate.optiontwo,
                    'optionthree'     : this.QuizCreate.optionthree,
                    'optionfour'      : this.QuizCreate.optionfour,
                    'correct_answer'  : this.QuizCreate.correct_answer
                })
                .then((response) => {
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            
        },
        
    });

