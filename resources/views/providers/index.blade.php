@extends('layouts.app')

@section('content')
    <div id="crud-app">
        <section class="content-header">
            <h1 class="pull-left">Providers</h1>
            <h1 class="pull-right">
               <a class="btn btn-primary pull-right" href="#" style="margin-top: -10px;margin-bottom: 5px" @click="modal('POST')">Add New</a>
            </h1>
        </section>
        <div class="content" style="padding-top: 30px;">
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
        @include('layouts.modal.info')        
    </div>
@endsection

@push('vue-scripts')  
    <script src="/app/js/models/provider-config.js"></script>
    <script>
        var token = '{{ csrf_token() }}';

        var apiUrl = { 
            show:  "{{ route('api.v1.providers.show') }}/",
            index: "{{ route('api.v1.providers.index') }}",  
            store: "{{ route('api.v1.providers.store') }}",  
            update: "{{ route('api.v1.providers.update') }}/",  
            delete: "{{ route('api.v1.providers.delete') }}/"
        };
    </script>
    <script src="/app/js/crud.js"></script>    
@endpush

@push('vue-styles')
    <link rel="stylesheet" href="/app/css/vue-styles.css">
@endpush

