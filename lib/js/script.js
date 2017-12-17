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


/*var questions = new Vue({
    //@ Dynamic checkbox generator
    el:'#app',
    data:{
        qAttribute:[
            "title",
            "option_1",
            "option_2"
        ],
        Questions:[
       /!*     {
               /!* title:"What is sabbir?",
                option_1:"Human",
                option_2:"Super Human",*!/
                finalAnswer:''
            },
            {
              /!*  title:"What is Jaber?",
                option_1:"Goru",
                option_2:"Suda",*!/
                finalAnswer:''
            },*!/
        ],
        Answers:[]
    },
    mounted: function () {
      console.log('Mounted');
      this.getAllQuestions();
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
        sendAllAnswer: function () {
            questions.Questions.forEach(function (elm) {
               questions.Answers.push(elm.finalAnswer);
            });
            console.log(app.Answers);
        }
    }
});*/


var eventlist = new Vue({
    //@ Dynamic checkbox generator
    el:'#app',
    data:{
        evenList:[
            /*     {
             /!* title:"What is sabbir?",
             option_1:"Human",
             option_2:"Super Human",*!/
             finalAnswer:''
             },
             {
             /!*  title:"What is Jaber?",
             option_1:"Goru",
             option_2:"Suda",*!/
             finalAnswer:''
             },*/
        ]
    },
    mounted: function () {
        console.log('Mounted');
        this.getAllEvents();
    },
    methods:{
        getAllEvents: function () {
            axios.get('http://www.mocky.io/v2/5a35afb82f0000da1fe2524e')
                .then(function (response) {
                    if(response.data.error){

                    }else{
                        eventlist.evenList = response.data;
                        console.log(eventlist.evenList);
                    }
                });
        }
    }
});