import { createStore } from "vuex";
import axios from 'axios';

const store = createStore({
    state () {
        return {
            Listdata: [],
        }
    },
    mutations : {
        CreateList(state,data) {
            state.Listdata = data;
        },
        addWriteData(state,data) {
            state.Listdata.unshift(data);
        },

    },
    actions : {
        getList(context) {
            axios.get('http://127.0.0.1:8000/api/items')
            .then(res => {
                context.commit('CreateList',res.data)
            })
            .catch( err => {
                console.log(err);
            })
        },
        WriteList(context) {
            let content = document.getElementById('content');

            const data = {
                "item": {
                    "content": content.value,
                }
            }

            axios.post('http://127.0.0.1:8000/api/items', data)
            .then(res => {
                console.log(res.data);
                context.commit('addWriteData',res.data);
            })
            .catch( err => {
                console.log(err);
            })
        }
    }

})

export default store