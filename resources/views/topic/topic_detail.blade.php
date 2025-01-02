@extends("production.1")
@section("content")


<section class="  text-white" style="background-color: #F6A42C">
  <div class="container BG-WA ">
      <div class="row justify-content-center pt-1 align-items-center text-center" style="height: 80px;">
          <h3 style="word-spacing: 8px;letter-spacing:2px">
            {{ strtoupper($topic[0]->description)}}</h3>
      </div>
  </div>
</section>

    <div class="py-y container">
    <p></p>
    @foreach ($topic[0]->categoryDetail as $item)
    <span class="mb-1 badge text-bg-success">{{$item->category->description}}</span>
    @endforeach
      @php
      echo $topic[0]->post;
    @endphp
    </div>

<div class="container" id="mycontent">

</div>
<script>
  

</script>
<style>
    /* Personalización de las tarjetas */
    .custom-card {
      border: none;
      border-radius: 15px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Sombra inicial */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
      transform: translateY(-5px); /* Elevar la tarjeta en hover */
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Incrementar sombra */
    }

    .custom-btn {
      background-color: #FFA500; /* Botón naranja */
      border: none;
      border-radius: 25px;
      color: white;
      padding: 8px 20px;
      font-weight: bold;
      text-transform: uppercase;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .custom-btn:hover {
      background-color: #FF8C00; /* Naranja más oscuro en hover */
    }
  </style>


@endsection