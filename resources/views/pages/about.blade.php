@extends("default")

@section("content")
    <h1>This is a H1 from about document</h1>

@stop

@section("footer")
    <script>
        para = document.createElement("p")
        for(var i= 0; i< 10; i++){
            para.innerHTML += i+" "
        }
        para.parentNode(document.getElementsByName("body"))
    </script>
@stop
