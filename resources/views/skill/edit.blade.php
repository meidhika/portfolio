@extends('layouts.apps')
@section('title', 'Edit Your Skill')
@section('content')
<style>
.range-value{
    font-size:30px;
    font-weight:600;
    font-family:sans-serif;
    color:gold;
    width:55px;
    text-align:center;
}
.percent-icon{
    font-size:30px;
    font-weight:600;
    font-family:sans-serif;
    color:gold;
    width:55px;
    text-align:center;
}
</style>
    <form action="{{ route('skill.update', $skills->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3 row">

                <label for="skill" class="form-label">Your Skill</label>
                <input type="text" id="skill" class="form-control" name="skill" value="{{$skills->skill}}">

        </div>
        <div class="mb-3 row">
            <div class="col-sm-11">
                <label for="percent" class="form-label">Percent</label>
                <input type="range" id="percent" class="form-range" name="percent" min="0" max="100" value="{{$skills->percent}}">

            </div>
            <div class="col-sm-1 text-center m-auto">
                <span class="range-value">100</span><span class="percent-icon">%</span>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Edit Skill</button>
            <a href="{{ route('skill.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </form>

    <script>
        var range = document.querySelector(".form-range");
        var rangeValue = document.querySelector(".range-value");

        rangeValue.textContent = range.value ;
        range.oninput = function(){
            rangeValue.textContent = this.value;
        }
    </script>

@endsection
