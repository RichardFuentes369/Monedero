<table class="table" id="movements_crud">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fecha</th>
      <th scope="col">Operación</th>
      <th scope="col">Desccripcion</th>
      <th scope="col">Hora</th>
      <th>Eliminar</th>
      <th scope="col">Monto</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="movements in movements">
      <th scope="row">@{{ movements.id }}</th>
      <td>@{{ movements.current_date }}</td>
      <td id="td-more" v-if="movements.movement == 'sum'"><center>+</center></td>
      <td id="td-less" v-else><center>-</center></td>
      <td>@{{ movements.description }}</td>
      <td>@{{ movements.current_time }}</td>
      <td>
        <button class="btn btn-outline-danger" id="btn-erase" 
        v-on:click.prevent="deleteMovement(movements)"><i class="material-icons">delete_sweep</i> </button>
      </td>
      <td>@{{ movements.rode }}</td>
      <td id="total">@{{ movements.total }}</td>
    </tr>
  </tbody>
</table>


