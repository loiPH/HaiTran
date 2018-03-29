@extends('master')
@section('webtitle')
Công ty TNHH PHI THIÊN VŨ
@endsection

@section('content')
{{-- check thử thay đổi trên github thử tần 2--}}

<style>

.menuleft{
    margin-left: 10px;
    width: 98%;
    padding-top: 1px;
}

.w3-border{
    border-top: 1px solix black;
}
.w3-button{
    width: 100%;
    background-color: #313131;  
    color: white;
    font-family: 'Oswald', sans-serif;
    text-align: left;
}
</style>


<div class="top">
    @include('layouts/top')
</div>
<div class="middle">

</div>     
</div>
<div class="bottom">
    @include('layouts/bottom')
</div>
@endsection