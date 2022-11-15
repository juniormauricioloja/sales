<style>
.modal.left .modal-dialog,
.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 320px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		-ms-transform: translate3d(0%, 0, 0);
		-o-transform: translate3d(0%, 0, 0);
		transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}

	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: 2px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}

	.modal.left.fade.in .modal-dialog{
		left: 0;
	}

/*Right*/
	.modal.right.fade .modal-dialog {
		right: 2px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}

	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

    </style>
      <div class="mb-4">
        
      </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"><?=$button;?> Producto</h6>
                    </div>
                    <!-- Card Body -->
                    <form action="<?= $action;?>" method="post">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                              <label for="usr">Nombre:</label>
                              <input type="text" class="form-control" id="" name="name" value="<?php echo $name;?>">
                              <?php echo form_error('name');?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Categoria:</label>
                              <select class="form-control" name="product_category" id="product_category">
                                  <option value="">Seleccione Categoría</option>
                                  <?php foreach ($category_list as $key => $category) {?>
                                    <option value="<?=$category->category_id?>"><?=$category->name?></option>
                                  <?php } ?>
                              </select>
                              <?php echo form_error('product_category') ?>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <label>Marca:</label>
                            <select class="form-control" name="brand" id="brand">
                                <option value="">Seleccione Marca</option>
                                <?php foreach ($brand_list as $key => $brand) {?>
                                  <option value="<?=$brand->brand_id?>"><?=$brand->name?></option>
                                <?php } ?>
                            </select>
                            <?php echo form_error('brand') ?>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                              <label for="usr">Descripción:</label>
                              <textarea name="description" class="form-control"> </textarea>
                              <!-- <input type="text" class="form-control" id="" name="name" value="<?php echo $name;?>"> -->
                              <?php echo form_error('name');?>
                            </div>
                        </div>
                      </div>

                      <div class="row">
                          <div class=" col-md-6 form-group">
                            <label for="varchar">Cargar Imagen <?php echo form_error('picture') ?></label>
                            <?php if($image_path){ ?>
                            <input type="file" name="image" id="image" data-error="Please upload  image." value="<?php echo $image_path; ?>" />
                            <br/><img src="<?php echo $image_path; ?>" class="img-responsive"  style="width:120px;height:100px;">

                            <?php }else{ ?>
                              <input type="file" name="image" id="image" data-error="Please upload product image." value="<?php echo $image_path; ?>" />
                            <?php } ?>
                          </div>
                      </div>
                      <!-- attributes block -->
                      <div>
                        <table class="table" id="tbl_attributes">
                          <tr>
                            <th>Atributo</th>
                            <th>Valor Atributo</th>
                            <th>Forma de Venta</th>
                            <th>Precio</th>
                            <th>Inventario</th>
                            <th>Impuesos (%)</th>
                            <th>Acción</th>
                          </tr>


                        </table>
                      </div>
                      <!-- end of attributes block -->


                      <br/>
                      <div class="row" >
                        <div class="col-sm-12" align="center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-split" data-toggle="modal" data-target="#myModal2">
                          <span class="icon text-white-50"><i class="fas fa-plus"></i></span><span class="text">Agregar Atributos</span>
                        </button>
												<?php echo form_error('attributes[]');?>
                      </div>

                      </div>


                      <input type="hidden" name="prod_id" value="<?php echo $prod_id;?>"/>

                    </div>
                    <div class="card-footer">
                      <a href="<?=admin_url('products')?>" class="btn btn-danger btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span><span class="text">Regresar</span>
                      </a>
                      <button type="submit" class="btn btn-success btn-sm btn-icon-split">
                        <span class="icon text-white-50"><i class="fas fa-check"></i></span><span class="text"><?=$button;?></span>
                      </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal -->
        	<div class="modal left fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        		<div class="modal-dialog" role="document">
        			<div class="modal-content">

        				<div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel2">Agregar Atributos/Precio</h4>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        				</div>

        				<div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Atributo:</label>
                          <select class="form-control attributes"  id="attributes">
                              <option value="">Seleccione Atributo</option>
                              <?php foreach ($attributes_list as $key => $attributes) { $attVal=($attributes->values); ?>
                                <option data-attr_values = '<?=$attVal;?>' value="<?=$attributes->attributes_id?>"><?=$attributes->name?></option>
                              <?php } ?>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Valor Atributo:</label>
                          <select class="form-control" id="attributes_value">
                              <option value="">Seleccione Valor</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label>Forma de Venta:</label>
                          <select class="form-control" name="sold_as" id="sold_as">
                              <option value="">Seleccione Forma de Venta</option>
															<?php foreach ($sold_as as $key => $soldas) { ?>
                                <option value="<?=$soldas?>"><?=$soldas?></option>
                              <?php } ?>
                          </select>
                        </div>
                    </div>

                  </div>
                  <div class="row">
                  <div class="col-sm-12">
                      <div class="form-group">
                        <label >Precio:</label>
                        <input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}" onpaste="let pasteData = event.clipboardData.getData('text'); if(pasteData){pasteData.replace(/[^0-9]*/g,'');} " class="form-control" id="price" name="price">
                      </div>
                  </div>
                  <div class="col-sm-12">
                      <div class="form-group">
                        <label >Inventario:</label>
                        <input type="number" onkeydown="if(event.key==='.'){event.preventDefault();}"  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" class="form-control"  name="inventory" id="inventory">
                      </div>
                  </div>
                  <div class="col-sm-12">
										<div class="form-group">
											<label>Impuesto (%):</label>
												<select class="form-control" name="tax_rate" id="tax_rate">
														<option value="">Seleccione Impuesto</option>
														<?php foreach ($tax_rate as $key => $tax) { ?>
															<option value="<?=$tax?>"><?=$tax?></option>
														<?php } ?>
												</select>
											</div>
                  </div>
                  <div class="col-sm-12 text-center">
                    <button type="button" id="btnAddNewAttributes" class="btn btn-success btn-sm btn-icon-split">
                      <span class="icon text-white-50"><i class="fas fa-check"></i></span><span class="text"><?=$button;?></span>
                    </button>
                  </div>
                </div>
        				</div>

        			</div><!-- modal-content -->
        		</div><!-- modal-dialog -->
        	</div><!-- modal -->

<script>
   $(document).ready(function ($) {
		$("#image").pekeUpload({
			bootstrap: true,
			url: "<?= admin_url("upload/"); ?>",
			data: {file: "image"},
			limit: 1,
			allowedExtensions: "JPG|JPEG|GIF|PNG|PDF|jpg|jpeg|gif|png|pdf"
		});

	});
</script>
