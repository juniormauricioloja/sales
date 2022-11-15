
      <div class="mb-4">
       
      </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Lista de Ventas</h6>
                        <div class="dropdown no-arrow">
                          <a class="btn btn-outline-success btn-sm" href="<?=admin_url('sales/add');?>" role="button">
                              <i class="fas fa-plus fa-sm"></i> Agregar Ventas
                          </a>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="myTable">
                            <thead style="background: #1ba774;color:#fff">
                                <tr>
                                    <th>Id Ventas</th>
                                    <th>Id Orden</th>
                                    <th>Productos</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <th>Total Precio</th>
                                    <th id="action" width="10%">Acción</th>
                                </tr>
                            </thead>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
