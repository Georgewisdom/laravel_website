@extends('layouts.app')

       @section('content')
              <h1>Home</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, voluptate. Quae fuga consequuntur, eius, officia mollitia facere laborum quidem quod esse corrupti architecto soluta magnam fugit, facilis quaerat eos nostrum.</p>
       @endsection

       @section('sidebar')
       @parent()
       <h2>This appended</h2>
       
       @endsection