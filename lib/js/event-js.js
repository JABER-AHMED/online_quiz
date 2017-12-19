
new Vue({
        el: '#create-event',
        data: {

                event_name: '',
                event_date: ''
        },
        
        methods: {
            storeCreateEvent() {
                 axios.post('http://localhost/online_quiz/online_quiz/create-event.php?action=eventCreate', {
                    'event_name'     : this.event_name,
                    'event_date'     : this.event_date,
                })
                 .then((response) => {
                    
                })
                .catch((error) => {
                    console.log(error.data.message);
                })

            },

        }
            
    });


var eventlist = new Vue({
    //@ Dynamic checkbox generator
    el:'#event-list',
    data:{
        eventList:[]
    },
    mounted: function () {

        this.getAllEvents();
    },
    methods:{
        getAllEvents: function () {
            axios.get('http://localhost/online_quiz/online_quiz/inc/fetchAll.php?action=read')
                .then(function (response) {
                    if(response.data.error){
                        console.log(response.data.error);
                    }else{
                        eventlist.eventList = response.data.events;
                    }
                });
        }
    }
});