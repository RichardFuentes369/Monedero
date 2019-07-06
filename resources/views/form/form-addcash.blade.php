<form action="">
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
                    			<input class="form-control center" id="cash" name="cash" placeholder="500000" required="" type="number" min="0" />
                    		</div>
                    		<div class="col-sm-6">
                    			<select class="browser-default custom-select">
								  <option selected>--Seleccióne--</option>
								  <option value="1">Sumar</option>
								  <option value="2">Restar</option>
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
                        <textarea class="form-control" id="text-area"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
            	<br/>
                <center>
                    <button class="btn btn-primary" id="btn-add">
                        Agregar
                    </button>
                </center>
            </div>
        </div>
    </div>
</form>