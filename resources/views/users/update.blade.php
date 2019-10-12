@extends('layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
        <form action="" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$id}}>
   <div>

            <label >Name</label>
         <input type="text" name="name" value={{$name}}>
         <input type="text" name="name" value={{$email}}>
         <input type="text" name="name" value={{$birthday}}>

   </div>

            <input type="submit" value="submit">
        </form>
    </section>
</div>

@endsection