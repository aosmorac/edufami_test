<template>
  <section class="hotel-form">
    <h1 class="title">Hotel</h1>
    <b-field label="Nombre">
      <b-input v-model="data.name"></b-input>
    </b-field>

    <b-field label="Ciudad">
      <b-select placeholder="Seleccione una ciudad" v-model="data.city_id">
        <option
          v-for="option in ciudades"
          :value="option.id"
          :key="option.id">
          {{ option.name }}
        </option>
      </b-select>
    </b-field>
    
    <b-field label="Direccion">
      <b-input v-model="data.address"></b-input>
    </b-field>
    
    <b-field label="Nit" v-model="data.nit">
      <b-input v-model="data.nit"></b-input>
    </b-field>

    <b-field label="Habitaciones">
      <b-numberinput v-model="data.rooms"></b-numberinput>
    </b-field>

    <button class="button is-primary is-medium"
            @click="emitHotelChanges()">
      Guardar Hotel
    </button>
  </section>
</template>

<script>
  export default {
    name: "hotel-form",
    data() {
      return {
        data: {
          'name': '',
          'city_id': undefined,
          'address': '',
          'nit': '',
          'rooms': 0
        },
        ciudades: [
          {'id': 'BOG', 'name': 'Bogota'},
          {'id': 'MED', 'name': 'Medellin'},
          {'id': 'CAL', 'name': 'Cali'}
        ]
      }
    },
    props: {
      hotel: {
        type: Object,
        default: () => {}
      }
    },
    mounted() {
      this.data = this.hotel
    },
    methods: {
      emitHotelChanges() {
        this.$emit('saveHotel', this.data)
      }
    }
  }
</script>

<style lang="scss" scoped>
  
  .hotel-form {
    background: #FFFFFF;
    padding: 30px;
  }

</style>