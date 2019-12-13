<form  method="post" v-on:submit.prevent="createMovements">
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-10">
        <div class="input-group mb-3">
          <div class="col-sm-1" id="icon-form-addcash">
            <span class="input-group-addon">
              <i class="material-icons">
                attach_money
              </i>
            </span>
          </div>
          <div class="col-sm-11">
            <div class="row">
              <div class="col-sm-6">
                <input class="form-control center" id="cash" min="0" id="rode" name="rode" placeholder="Monto" required="" type="number" v-model="newRode"/>
              </div>
              <div class="col-sm-6">
                <select class="browser-default custom-select" name="movement" v-model="newMovement">
                  <option disabled selected="true">
                    --Seleccióne--
                  </option>
                  <option value="sum">
                    Sumar
                  </option>
                  <option value="rest">
                    Restar
                  </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="col-sm-1" id="icon-form-addcash">
            <span class="input-group-addon">
              <i class="material-icons">
                description
              </i>
            </span>
          </div>
          <div class="col-sm-11">
            <textarea class="form-control" id="text-area" maxlength="125" name="description" v-model="newDescription">
            </textarea>
          </div>
        </div>
      </div>
      <div class="col-sm-1">
        <br/>
        <center>
          <button type="submit" class="btn btn-primary" id="btn-add">
            Agregar
          </button>
        </center>
      </div>
    </div>
  </div>
</form>
