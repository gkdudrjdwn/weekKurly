//로그인 리듀서 login.js
import { createSlice } from "@reduxjs/toolkit";


const login = createSlice({
    name: '로그인 리듀서',
    initialState:{
        loginId:null,
        loginName:null,
        admin:false
    },
    reducers:{
        setLogin: (state, action)=>{
            state.loginId = 'ha0jeong'; //action.payload.userId; //로그인 아이디 설정
            state.loginName = '정하영'; //action.payload.userName; //로그인 이름 설정
            state.admin = false; //action.payload.admin; //관리자 여부 설정
        },
        setLogout: (state, action)=>{
            state.loginId = null;
            state.loginName = null;
            state.admin = null;
        }
    }
});

export default login.reducer;
//export const {reducers} = login.actions;
export const {setLogin, setLogout} = login.actions;

