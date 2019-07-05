<form action="">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-10">
                <div class="input-group mb-3">
                    <div class="col-sm-1">
                        <span class="input-group-addon">
                            <i class="material-icons" style="-webkit-text-fill-color: #0C0B0B;-webkit-text-stroke: 0.5px #EAD9D9;">
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
                    <div class="col-sm-1">
                        <span class="input-group-addon">
                            <i class="material-icons" style="-webkit-text-fill-color: #0C0B0B;-webkit-text-stroke: 0.5px #EAD9D9;">
                                description
                            </i>
                        </span>
                    </div>
                    <div class="col-sm-11">
                        <textarea class="form-control" style="resize: none;height: 80px" name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
            	<br/>
                <button class="btn btn-primary" style="border-radius: 50px; height: 100px; width: 100px;-webkit-box-shadow: 20px 17px 37px 1px rgba(0,0,0,0.38);-moz-box-shadow: 20px 17px 37px 1px rgba(0,0,0,0.38);box-shadow: 20px 17px 37px 1px rgba(0,0,0,0.38);">
                    Agregar
                </button>
            </div>
        </div>
    </div>
</form>