// stores/counter.js
import { defineStore } from 'pinia'

export const loginInfoStore = defineStore(
{
 id:'loginInfoStoreId',
  state: () => {
    return { 
      loginInfo: {},
      isAuthenticate:false 
    }
  },
  getters:{
    getLoginInfo(){
        return this.loginInfo;
    },
    getAuthenticate(){
      return this.isAuthenticate;
    }
  },
  actions: {
    setLoginInfo(val) {
      this.loginInfo=val;
    },
    setAuthenticate(val){
      this.isAuthenticate=val;
    }
  },
  persist: {
    enabled: true
  }
})