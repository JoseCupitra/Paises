<template>
    <div>
      <h1>Grilla Principal</h1>
      <ul>
        <li v-for="pais in paises" :key="pais.id">
          {{ pais.nombre }}
          <!--Agregar más campos-->
          <button @click="eliminarPais(pais.id)">Eliminar</button>
          <router-link :to="'/editar/' + pais.id">Editar</router-link>
        </li>
      </ul>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        paises: [
          { id: 1, nombre: 'Argentina' },
          { id: 2, nombre: 'Brasil' },
          { id: 3, nombre: 'Chile' },
          // Agrega más países
        ],
      };
    },
    methods: {
      eliminarPais(id) {
        // Lógica para eliminar el país con el ID proporcionado
        this.paises = this.paises.filter(pais => pais.id !== id);
      },
    },
  };
  </script>
