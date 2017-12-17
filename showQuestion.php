<?php
include 'partial/header.php';
// include 'inc/User.php';
Session::checkSession();
?>
    <section id="question" class="event-list-top-padding" id="Uevent-list">

        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Question List
                            <span class="pull-right"><strong>Welcome!</strong></span>
                        </h2>
                    </div>

                    <div id="" class="panel-body">
                        <div v-for="(question, q_index) in Questions">
                            <div v-for="(value, key, index) in question">
                                <h2 v-if="index==0">{{value}}</h2>
                                <div v-if="index==1">
                                    <input type="radio" :id="key" :name="value" :value="value" v-model="question.Answer">
                                    <label for="value">{{value}}</label>
                                </div>
                                <div v-if="index==2" >
                                    <input type="radio" :id="key" :name="value" :value="value" v-model="question.Answer">
                                    <label for="value">{{value}}</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" @click="sendAllAnswer()">Click to submit</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'partial/footer.php'; ?>