<template>
  <div>
    <h1>Contact Me</h1>
  <p>
    <ul>
      <li>Email: {{email}}</li>
      <li>Website: <a href="">{{web}}</a></li>
    </ul>
  </p>
  </div>
</template>

<script>
export default {
  name: 'Contact',
  data(){
    return {
      email: "n.reymond.12@gmail.com",
      web: ""
    }
  }
}
</script>