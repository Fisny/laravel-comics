@extends('templates.base')

{{-- @section('title', 'HomePage') --}}

@section('main')
  <div class="bg-main">
        <div class="container ">
            <div class="row comics-cont">
                @foreach($comics as $comicsSingle) <!-- cicliamo nel nostro array database(comics) e ci facciamo stampare il necessario x il leyaout -->
                    <div class="cont-card">
                        <a href="/singleComics/{{ $loop->index }}"> <!-- con loop possiamo far si che ci ritorni un certo tipo di dato in questo caso un index che inviamo alla single card -->
                            <div class="img-container">
                                <img src="{{$comicsSingle['thumb']}}" alt="{{$comicsSingle['series']}}">
                            </div>
                            <span>{{$comicsSingle['series']}}</span>   
                        </a>
                    </div> 
                @endforeach
                <button>LOAD MORE</button>
            </div>
        </div>
    </div>
    <div class="bg-blue d-flex justify-content-around align-items-center">
        <div class="block">
            <img src="/images/buy-comics-digital-comics.png" alt=""> DIGITAL COMICS
        </div>
        <div class="block">
            <img src="/images/buy-comics-merchandise.png" alt=""> DC MERCHANDISE
        </div>  
        <div class="block">
            <img src="/images/buy-comics-subscriptions.png" alt=""> SUBSCRIPTION
        </div>  
        <div class="block">
            <img src="/images/buy-comics-shop-locator.png" alt=""> COMIC SHOP LOCATOR
        </div>  
        <div class="block">
            <img src="/images/buy-dc-power-visa.svg" alt=""> DC POWER VISA
        </div>     
    </div>  
@endsection