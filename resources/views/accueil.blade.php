@extends('./template/app')

@section('page-content')
    @if ($errors)
       @foreach ($errors-> all() as $error)
           <li>{{$error}}</li>
       @endforeach 
        {{-- @error('nom')
            <p>Le nom est obligatoire</p>
        @enderror
        @error('email')
            <p>Le mail est obligatoire</p>
        @enderror --}}
    @endif
    <form action="/accueil" method="POST">
        @method('post')
        @csrf  {{-- /pour securiser les données --}}
        <input type="text" placeholder="nom" name="nom" value="{{old('nom')}}">{{-- la valeur old suivi du paramettre per de gerder le nom dans le champp --}}
        <input type="email" placeholder="Email" name="email" value="{{old('email')}}">
        <button type="submit">valider</button>
    </form>
@endsection