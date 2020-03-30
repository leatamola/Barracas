@extends('backEnd.layouts.master')
@section('title','Add Products Page')
@section('content')


<div class="col-sm-8">
  <h2> Nuevo producto
    <a href="{{ url('/users') }}" class="btn btn-default pull-right">
      Listado
    </a>
  </h2>
  @include('users.fragment.error')
  {!! Form::open(['route' => 'users.store']) !!}
    @include('users.fragment.form')
  {!! Form::close() !!}
</div>
<div class="col-sm-4">
  @include('users.fragment.aside')

</div>




@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection
