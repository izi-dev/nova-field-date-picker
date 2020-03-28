Nova.booting((Vue, router, store) => {
  Vue.component('index-v-calendar', require('./components/IndexField'))
  Vue.component('detail-v-calendar', require('./components/DetailField'))
  Vue.component('form-v-calendar', require('./components/FormField'))
})
