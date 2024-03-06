@extends('layouts.app')
@section('content')
<form action="/incomes/create" method="POST" enctype="multipart/form-data">
    @csrf
    <input type='text' name="amount" placeholder="Amount" />
    <input type='text' name="remarks" placeholder="Remarks" />

    <button type='submit'>submit</button>
</form>