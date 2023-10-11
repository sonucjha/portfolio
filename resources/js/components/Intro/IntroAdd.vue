<template>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Introduction</h5>

        <!-- Vertical Form -->
        <form class="row g-3"  @submit.prevent="submit" @reset.stop="reset">
          <div class="col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" v-model="person.name"/>
          </div>
          <div class="col-12">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position"  v-model="person.position"/>
          </div>
          <div class="col-12">
            <label for="Facebook" class="form-label">Facebook <i class="bi bi-facebook"></i></label>
            <input type="text" class="form-control" id="facebook"  v-model="person.facebook" />
          </div>
          <div class="col-12">
            <label for="twitter" class="form-label">Twitter <i class="bi bi-twitter"></i></label>
            <input type="text" class="form-control" id="twitter"  v-model="person.twitter"/>
          </div>
          <div class="col-12">
            <label for="instagram" class="form-label">Instagram <i class="bi bi-instagram"></i></label>
            <input type="text" class="form-control" id="instagram"  v-model="person.instagram"/>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form>
        <!-- Vertical Form -->
      </div>
    </div>
  </div>
</template>
<script setup>
import axios from "axios"
import { ref,reactive } from "vue";

const user = ref({
  name: 'Albert',
  position:'',
  facebook:'',
  twitter:'',
  instagram:''
})

const person = reactive({
  name: 'Albert',
  position:'',
  facebook:'',
  twitter:'',
  instagram:''
});

function submit(){
  let formData = {}
  formData['name'] = person.name
  formData['position'] = person.position
  formData['facebook'] = person.facebook
  formData['twitter'] = person.twitter
  formData['instagram'] = person.instagram
  axios.post('/api/saveIntro',formData).then((response)=>{
  })
}

function reset(){
  alert('reset')
}
</script>
