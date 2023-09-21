// stores/counter.js
import { defineStore } from "pinia";

export const loginInfoStore = defineStore({
    id: "loginInfoStoreId",
    state: () => {
        return {
            loginInfo: {},
            isAuthenticate: false,
            token: "",
        };
    },
    getters: {
        getToken() {
            return this.token;
        },
        getLoginInfo() {
            return this.loginInfo;
        },
        getAuthenticate() {
            return this.isAuthenticate;
        },
    },
    actions: {
        setLoginInfo(val) {
            this.loginInfo = val;
        },
        setAuthenticate(val) {
            this.isAuthenticate = val;
        },
        setToken(val){
          this.token = val
        }
    },
    persist: {
        enabled: true,
    },
});
