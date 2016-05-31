@extends('layouts.app')

@section('content')
   <section class="content-header">
           <h1>
               Presentation
           </h1>
   </section>
   <div class="content">
       @include('core-templates::common.errors')
       <div class="box box-primary">

           <div class="box-body">
               <div class="row">
                   {!! Form::model($presentation, ['route' => ['Kitchen.presentations.update', $presentation->id], 'method' => 'patch']) !!}

                    @include('Kitchen.presentations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection