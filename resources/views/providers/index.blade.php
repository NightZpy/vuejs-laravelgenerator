@extends('layouts.app')

@section('content')
    <div id="crud-app">
        <section class="content-header">
            <h1 class="pull-left">Providers</h1>
            <h1 class="pull-right">
               <a class="btn btn-primary pull-right" href="#" style="margin-top: -10px;margin-bottom: 5px" @click="modal('POST')">Add New</a>
            </h1>
        </section>
        <div class="content">
            <div class="box box-primary">
                <div class="box-body">
                    @include('providers.vue-table')
                </div>
            </div>
        </div>
        <!-- --------- Modals ---------- -->
        @include('providers.form')
        @include('providers.delete')
        @include('providers.show')
        @include('providers.modal.info')
        
        {{--
        <!-- --------- Templates for table ---------- -->         
        @include('layouts.vue-templates.vuetable-template')
        @include('layouts.vue-templates.vuetable-pagination-simple-template')
        @include('layouts.vue-templates.vuetable-pagination-dropdown-template')
        @include('layouts.vue-templates.vuetable-pagination-bootstrap-template') 
        --}}
    </div>
@endsection

@push('vue-scripts')
    <script>
        var token = '{{ csrf_token() }}';
        var objectRow = {            
            id:         "",
            code:       "",
            name:       "",
            specialty: "",
            district:   "",
            address:    "",
            phone: "",
            movil1: "",
            movil2: "",
            contact: "",
            email: ""
        };

        var tableColumns = [
            {
                name: 'id',
                sortField: 'id',
            },
            {
                name: 'code',
                sortField: 'code',
            },
            {
                name: 'name',
                sortField: 'name',
            },
            {
                name: 'specialty',
                sortField: 'specialty',
            },
            {
                name: 'district',
                sortField: 'district',
            },
            {
                name: 'address',
                sortField: 'address',
            },
            {
                name: 'phone',
                sortField: 'phone',
            },    
            {
                name: 'movil1',
                sortField: 'movil1',
            },
            {
                name: 'movil2',
                sortField: 'movil2',
            },       
            {
                name: 'contact',
                sortField: 'contact',
            },
            {
                name: 'email',
                sortField: 'email',
            },                
            {
                name: '__actions',
                dataClass: 'center aligned',
                callback: null
            }        
        ];

        var apiUrl = { 
            show:  "{{ route('api.v1.providers.show') }}/",
            index: "{{ route('api.v1.providers.index') }}",  
            store: "{{ route('api.v1.providers.store') }}",  
            update: "{{ route('api.v1.providers.update') }}/",  
            delete: "{{ route('api.v1.providers.delete') }}/"
        };

        var fieldInitOrder = 'name';

        var onLoadSuccess = function(data, highlight, searchFor) {
            if (this.searchFor !== '') {
                for (n in data) {
                    data[n].name = highlight(searchFor, data[n].name);
                    data[n].code = highlight(searchFor, data[n].code);
                    data[n].email = highlight(searchFor, data[n].email);
                }
            }
        };
    </script>
    
    {{-- <script src="/vendor/vue-table/components/vuetable-pagination-simple.js"></script>
    <script src="/vendor/vue-table/components/vuetable-pagination-dropdown.js"></script>
    <script src="/vendor/vue-table/components/vuetable-pagination-bootstrap.js"></script>
    <script src="/vendor/vue-editable/vue-editable.js"></script> 
    <script src="https://cdn.jsdelivr.net/vue.validator/2.1.2/vue-validator.min.js"></script> --}}
    <script src="/app/js/crud.js"></script>    
@endpush

@push('vue-styles')
    <link rel="stylesheet" href="/app/css/vue-styles.css">
@endpush

