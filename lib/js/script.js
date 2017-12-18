/*
let login = new Vue({
    el: 'form',
    data:{
        logAttributes:[
          "user_name","password"
        ],
        logModel:[
            {user_name:'dfd'},
            {password:''}
        ]
    }
});

let signUp = new Vue({
    el: 'form',
    data:{
        signAttributes:[
            "name","email","user_name","password"
        ],
        signModel:[
            {name:''},
            {email:''},
            {user_name:'dfd'},
            {password:''}
        ]
    }
});*/


/*
new Vue({
    el: '#app',
    data() {
        return {
            userID: 1,
            name: '',
            email: '',
            caps: '',
            response: '',
            activeClass: 'active'
        }
    },
    methods: {
        submitForm() {
            axios.post('//jsonplaceholder.typicode.com/posts', {
                userID: this.userID,
                name: this.name,
                email: this.email,
                caps: this.caps
            }).then(response => {
                this.response = JSON.stringify(response, null, 2)
            }).catch(error => {
                this.response = 'Error: ' + error.response.status
            })
        }
    }
});*/


var questions = new Vue({
    //@ Dynamic checkbox generator
    el:'#question',
    data:{
        Questions:[
            {Answer:''}
        ],
        Answers:[]
    },
    mounted: function () {
        console.log('Mounted');
        this.getAllQuestions();
        /*      this.collectAnswer();*/
    },
    methods:{
        getAllQuestions: function () {
            axios.get('http://demo3832558.mockable.io/%3Faction=read')
                .then(function (response) {
                    if(response.data.error){

                    }else{
                        console.log(response.data);
                        questions.Questions = response.data;
                        console.log(questions.Questions);
                    }
                });
        },
        collectAnswer: function () {
            questions.Questions.forEach(function (element) {
                console.log(element.Answer);
                // questions.Answers.push()
            });
        },
        sendAllAnswer: function () {
            this.collectAnswer();
            var formData = questions.toFormData(questions.Answers);
            console.log(formData);
            axios.post("",formData)
                .then(function (response) {
                    //console.log(response);
                    if(response.data.error){
                        app.errorMessage = response.data.message;
                    }
                    else{
                    }
                    questions.Answers = [];
                });
        },
        toFormData: function (obj) {
            var form_data = new FormData();

            for(var key in obj){
                form_data.append(key, obj[key]);
            }
            return form_data;
        }
    },

    watch:{
        Answer: function () {
            this.collectAnswer();
        }
    }
});


var eventlist = new Vue({
    //@ Dynamic checkbox generator
    el:'#app',
    data:{
        evenList:[

        ]
    },
    mounted: function () {
        console.log('Mounted');
        this.getAllEvents();
    },
    methods:{
        getAllEvents: function () {
            axios.get('http://localhost/online_quiz/inc/fetchEvent.php?action=read')
                .then(function (response) {
                    console.log(response.data.events[0].event_name);
                    if(response.data.error){
                        console.log(response.data.error);
                    }else{
                        console.log(response);
                        eventlist.evenList = response.data.events;
                        console.log(eventlist.evenList.event_name);
                    }
                });
        }
    }
});