<!-- Filter-Form -->
<section id="filter_form2">
    <div class="container">
        <div class="main_bg white-text">
            <h3>Encontre seu carro</h3>
            <div class="row">
                <form id="form_filter" action="/veiculos" method="get">
                    <div class="form-group col-md-3 col-sm-6">
                        <div class="select">
                            <select class="form-control" name="uf">
                                <option value="">Localização</option>
                                <?php foreach($estados as $estado): ?>
                                <option value="<?php echo $estado->uf;?>"><?php echo $estado->name;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6">
                        <div class="select">
                            <select class="form-control" id="marca" name="marca">
                                <option>Selecione a Marca</option>
                                <?php foreach($marcas as $marca): ?>
                                <option value="<?php echo $marca->name;?>"
                                        data-id="<?php echo $marca->id;?>">
                                    <?php echo $marca->name;?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6">
                        <div class="select">
                            <select class="form-control" id="modelo" name="modelo">
                                <option>Selecione o Modelo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6">
                        <div class="select">
                            <select class="form-control">
                                <option>Selecione o Ano</option>
                                <?php foreach($anos as $ano): ?>
                                <option value="<?php echo $ano;?>"><?php echo $ano;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-6">
                        <label class="form-label">Preço Máximo (R$) </label>
                        <input id="price_range" type="text" class="span2" value="" data-slider-min="100" data-slider-max="150000" data-slider-step="100" data-slider-value="150000">
                    </div>

                    <div class="form-group col-md-3 col-sm-6">
                        <div class="select">
                            <select class="form-control">
                                <option>Tipo de Carro</option>
                                <?php foreach($tipos as $tipo): ?>
                                <option value="<?php echo $tipo->name;?>"><?php echo $tipo->name;?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Buscar Carro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Filter-Form -->