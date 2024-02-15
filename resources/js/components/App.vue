<template>

  <main>
    <component
        v-bind:is="primary_component"
        v-bind:input="input"
    ></component>
  </main>

</template>
<script>
export default {
  props: [
    'primary_component',
    'input'
  ],
  data: function() {
    return {
    }
  },
  mounted() {
  }
}
</script>
