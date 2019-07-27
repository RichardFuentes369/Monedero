<input class="form-control" id="myInput" type="text" placeholder="Search.." onchange="filter()">
<br/>
<table class="table" id="movements">
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
  <tbody id="myTable">
    <tr v-for="movements in movements">
      <th scope="row">@{{ movements.id }}</th>
      <td>@{{ movements.current_date }}</td>
      <td id="td-more" v-if="movements.movement == 'sum'"><center>sumo</center></td>
      <td id="td-less" v-else><center>resto</center></td>
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

@include('nav.nav-pagination')