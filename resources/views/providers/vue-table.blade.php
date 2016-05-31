<div class="row">
    <div class="col-md-5">
        <div class="form-inline form-group">
            <label>Buscar:</label>
            <input v-model="searchFor" class="form-control" @keyup.enter="setFilter">
            <button class="btn btn-primary" @click="setFilter"><i class="glyphicon glyphicon-search"></i></button>
            <button class="btn btn-default" @click="resetFilter">Reiniciar</button>
        </div>
    </div>
    <div class="col-md-7">
        <div class="dropdown form-inline pull-right">
            <label>Estilo de paginación:</label>
            <select class="form-control" v-model="paginationComponent">
                <option value="vuetable-pagination-simple">Simple</option>
                <option value="vuetable-pagination-bootstrap">Detallado</option>
                <option value="vuetable-pagination-dropdown">Lista</option>
            </select>
            <label>Por página:</label>
            <select class="form-control" v-model="perPage">
                <option value=2>2</option>
                <option value=10>10</option>
                <option value=15>15</option>
                <option value=20>20</option>
                <option value=25>25</option>
            </select>
            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <ul class="dropdown-menu">
                <li v-for="field in columns">
                    <span class="checkbox">
                        <label>
                            <input type="checkbox" v-model="field.visible">
                            @{{ field.title == '' ? field.name.replace('__', '') : field.title | capitalize }}
                        </label>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="table-responsive">
    <vuetable v-ref:vuetable
        api-url="{{ route('api.v1.providers.index') }}"
        :fields="columns"
        pagination-path=""
        :fields="fields"
        :sort-order="sortOrder"
        table-class="table table-bordered table-striped table-hover"
        ascending-icon="glyphicon glyphicon-chevron-up"
        descending-icon="glyphicon glyphicon-chevron-down"
        pagination-class=""
        pagination-info-class=""
        pagination-component-class=""
        :pagination-component="paginationComponent"
        :item-actions="itemActions"
        :per-page="perPage"
        :append-params="moreParams"
        wrapper-class="vuetable-wrapper "
        table-wrapper=".vuetable-wrapper"
        loading-class="loading"
    ></vuetable>
</div>