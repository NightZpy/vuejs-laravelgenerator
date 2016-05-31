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
                    {!! Form::open(['route' => 'Kitchen.presentations.store']) !!}

                              @include('Kitchen.presentations.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
