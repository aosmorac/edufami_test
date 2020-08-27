<template>
    <div class="container">
      <h1 class="title">Listado de Hoteler</h1>
      <div class="buttons">
        <button class="button is-primary is-medium"
                @click="isHotelFormActive = true">
          Agregar Hotel
        </button>
      </div>
      <b-table :data="data" :columns="columns"></b-table>

      <b-modal v-model="isHotelFormActive" :width="640" scroll="keep">
        <hotel-form :hotel="hotel" @saveHotel="saveHotel"></hotel-form>
      </b-modal>
    </div>
</template>

<script>
  
  import axios from 'axios'
  import HotelForm from './HotelForm.vue'
  
  export default {
    name: 'hotel-list',
    components: {
      HotelForm
    },
    props: {
      msg: String
    },
    data() {
      return {
        isHotelFormActive: false,
        data: [],
        columns: [
          {
            field: 'id',
            label: 'ID',
            width: '40',
            numeric: true,
            centered: true,
            sortable: true
          },
          {
            field: 'name',
            label: 'Nombre',
            centered: true,
            sortable: true
          },
          {
            field: 'nit',
            label: 'Nit',
            centered: true,
            sortable: true
          },
          {
            field: 'city.name',
            label: 'Ciudad',
            centered: true,
            sortable: true
          },
          {
            field: 'address',
            label: 'Direccion',
            centered: true,
            sortable: true
          },
          {
            field: 'rooms',
            label: 'Habitaciones',
            centered: true,
            sortable: true
          }
        ],
        hotel: {
          'id': undefined,
          'name': '',
          'city_id': undefined,
          'address': '',
          'nit': '',
          'rooms': 0          
        }
      }
    },
    mounted () {
      this.reloadHotelsList()
    },
    methods: {
      reloadHotelsList(){
        axios
        .get('http://localhost:8084/hotels')
        .then(response => {
          this.data = response.data
        })
      },
      saveHotel(data) {
        axios
        .post('http://localhost:8084/hotels', data)
        .then(response => {
          console.log(response)
          this.isHotelFormActive = false
          this.reloadHotelsList()
        })
      }
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
