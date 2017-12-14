 let user = new Vue({
        el: '#app',
        
        data: {
            user : {
                name: '',
                email: '',
                user_name: '',
                password: '',
            },
            
            user: [],
        },
        
        methods: {
            storeData() {
                axios.post('x.php', {
                    'name' : this.user.name,
                    'user_name': this.user.user_name,
                    'email' : this.user.email,
                    'password': this.user.password
                })
                .then((response) => {
                    this.user = response.data;
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            },
            login(){
                axious.get('x.php' ,{
                    'user_name': this.user.user_name,
                    'password': this.user.password
                })
                .then((response) => {
                    alert(response.data.message);
                })
                .catch((error) => {
                    console.log(error.data.message);
                })
            }
            
        },
        
    })

 