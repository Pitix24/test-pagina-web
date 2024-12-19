@extends('home_edit.template')
@section('content')








   






<p></p>


    <script>
        document.querySelectorAll('.accordion-collapse').forEach(collapse => {
            collapse.addEventListener('show.bs.collapse', function() {
                const content = collapse.getAttribute('data-content');
                document.getElementById('dynamicContent').innerText = ` ${content}`;
            });
        });
    </script>
@endsection
