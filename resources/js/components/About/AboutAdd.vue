<template>
  <div class="col-lg-3">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Profile Image</h5>

          <!-- Vertical Form -->
          <form
            class="row g-3"
            @submit.prevent="ImageSubmit"
            @reset.stop="ImageReset"
            enctype="multipart/form-data"
          >
            <div class="col-12">
              <input
                class="form-control"
                type="file"
                id="imageFile"
                @change="onImageChange"
              />
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
          <div class="d-flex justify-content-center">
            <img :src="userImage" class="img-circle">
          </div>
          <!-- Vertical Form -->
        </div>
      </div>
    </div>
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">CV</h5>

          <!-- Vertical Form -->
          <form
            class="row g-3"
            @submit.prevent="CVSubmit"
            @reset.stop="CVReset"
            enctype="multipart/form-data"
          >
            <div class="col-12">
              <input class="form-control" type="file" id="cvFile" @change="onCvChange" />
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

    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About</h5>

          <!-- Vertical Form -->
          <form class="row g-3" @submit.prevent="AboutSubmit" @reset.stop="AboutReset">
            <div class="col-12">
              <textarea rows="5" class="form-control" cols="5"></textarea>
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
  </div>
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROFILE</h5>

        <!-- Vertical Form -->
        <form class="row g-3" @submit.prevent="submit" @reset.stop="reset">
          <div class="col-12">
            <label for="profile" class="form-label">Profile</label>
            <textarea rows="5" class="form-control" cols="5"></textarea>
          </div>

          <div class="col-12">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" />
          </div>
          <div class="col-12">
            <label for="birth_date" class="form-label">BIRTH DATE</label>
            <input type="date" class="form-control" id="birth_date" />
          </div>
          <div class="col-12">
            <label for="earning_mode" class="form-label">Earning Mode </label>
            <input type="text" class="form-control" id="earning_mode" />
          </div>
          <div class="col-12">
            <label for="website" class="form-label">WEBSITE</label>
            <input type="text" class="form-control" id="website" />
          </div>
          <div class="col-12">
            <label for="email" class="form-label">EMAIL</label>
            <input type="text" class="form-control" id="email" />
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
  <div class="col-lg-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">SKILLS</h5>

        <!-- Vertical Form -->
        <form class="row g-3" @submit.prevent="submit" @reset.stop="reset">
          <div class="col-12">
            <label for="skill`1" class="form-label">About Skill</label>
            <textarea rows="5" class="form-control" cols="5"></textarea>
          </div>

          <div class="col-12">
            <label for="skill_1" class="form-label">Skill-1</label>
            <input
              type="text"
              class="form-control col-10"
              id="skill_1"
              placeholder="skill name"
            />
            <input
              type="number"
              class="form-control col-2"
              id="skill_1_level"
              placeholder="skill level"
            />
          </div>
          <div class="col-12">
            <label for="skill_2" class="form-label">Skill-2</label>
            <input
              type="text"
              class="form-control col-10"
              id="skill_2"
              placeholder="skill name"
            />
            <input
              type="number"
              class="form-control col-2"
              id="skill_2_level"
              placeholder="skill level"
            />
          </div>
          <div class="col-12">
            <label for="skill_3" class="form-label">Skill-3</label>
            <input
              type="text"
              class="form-control col-10"
              id="skill_3"
              placeholder="skill name"
            />
            <input
              type="number"
              class="form-control col-2"
              id="skill_3_level"
              placeholder="skill level"
            />
          </div>
          <div class="col-12">
            <label for="skill_4" class="form-label">Skill-4</label>
            <input
              type="text"
              class="form-control col-10"
              id="skill_4"
              placeholder="skill name"
            />
            <input
              type="number"
              class="form-control col-2"
              id="skill_4_level"
              placeholder="skill level"
            />
          </div>
          <div class="col-12">
            <label for="skill_5" class="form-label">Skill-5</label>
            <input
              type="text"
              class="form-control col-10"
              id="skill_5"
              placeholder="skill name"
            />
            <input
              type="number"
              class="form-control col-2"
              id="skill_5_level"
              placeholder="skill level"
            />
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
import axios from "axios";
import { ref, onMounted } from "vue";

const user = ref({
  image: "",
  cv: "",
});

const userImage = ref('')

function onImageChange(e) {
  user.value.image = e.target.files[0];
}

function onCvChange(e) {
  user.value.cv = e.target.files[0];
}

function submit() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function getUserImage(){
  // ../../../../public/storage/public
  axios.get("/api/getUserImage").then((response) => {
    userImage.value = 'http://127.0.0.1:8000/storage/profile_pic/'+response.data
  });
}

function ImageSubmit() {
  const formData = new FormData();
  formData.append('userImage', user.value.image);
  axios.post("/api/saveUserImage", formData).then((response) => {
    getUserImage();
  });
}

function ImageReset() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function CVSubmit() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function CVReset() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function AboutSubmit() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function AboutReset() {
  let formData = {};
  axios.post("/api/saveIntro", formData).then((response) => {});
}

function reset() {
}

onMounted(() => {
  getUserImage()
})
</script>
