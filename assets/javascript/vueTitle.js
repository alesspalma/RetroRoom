//component Vue che racchiude il titolo delle pagine principali che scorre da destra verso sinistra
Vue.component("mytitle", {
    props: {
        text: {
            type: String,
            required: true
        },
    },
    template:
        `<div class="container-fluid">
            <div class='row'>
                <div class='col pb-2 slider'>
                    <div class='sliding title'>{{text}}</div>
                </div>
            </div>
        </div>`
});

$(document).ready(function() {
    //oggetto Vue che serve per il binding sull'html
    new Vue({
        el: "#title-container",
        data: {
            titleText: "RetroRoom",
        }
    });
});