import { createStore } from "vuex";
import axios from 'axios';


const store = createStore({
    state() {
        return {
            boardData:[],
            lastId:'',
            flg:true,
            tbflg:0,
            imgUrl:'',
            filter:'',
        }
    },
    mutations : {
        createBoardData(state,data) {
            state.boardData =data;
            this.commit('changeLastId',data[data.length -1].id);
        },
        addBoardData(state,data) {
            state.boardData.push(data);
            this.commit('changeLastId',data.id);
        },
        changeLastId(state,id) {
            state.lastId = id;
        },
        changeTbflg(state,num) {
            state.tbflg = num;
        },
        changeImgurl(state,imgUrl) {
            state.imgUrl = imgUrl;
        },
        changeFilter(state,filter) {
            state.filter = filter;
        },
        clearState(state) {
            state.filter='';
            state.imgUrl = '';
        }
    },
    actions : {
        getList(context) {
            axios.get('http://192.168.0.66/api/boards')
            .then(res => {
                console.log(res.data);
                context.commit('createBoardData',res.data);
            })
            .catch( err => {
                console.log(err);
            })
        },
        getMoList(context) {
            axios.get('http://192.168.0.66/api/boards/'+context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData',res.data)
                }
                else {
                    context.state.flg = false,
                    alert('글 없음');
                }
            })
            .catch( err => {
                console.log(err);
            })
        }
    }
})

export default store