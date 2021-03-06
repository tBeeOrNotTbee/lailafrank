@extends("layouts.backendLayout")

@section("titulo")
    Editar Usuario
@endsection

@section("mainBackend")
<h2>Editar usuario</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1">
                <form class="needs-validation">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nombre" value="{{$user->name}}"
                                required>
                            <div class="invalid-feedback">
                                Nombre es requerido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Apellido</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Apellido" value="{{$user->surname}}"
                                required>
                            <div class="invalid-feedback">
                                Apellido es requerido.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" required
                            value="{{$user->email}}">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    {{-- <div class="mb-3">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required
                            value="Rivadavia 2401 3ro A">
                        <div class="invalid-feedback">
                            Por favor ingresar dirección de envío.
                        </div>
                    </div> --}}

                    {{-- <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">País</label>
                            <select class="custom-select d-block w-100" id="country" required>
                                <option value="">Argentina</option>
                                <option value="">Chile</option>
                                <option value="">Brasil</option>
                                <option value="">Uruguay</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor selecciones un país.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">Provincia</label>
                            <select class="custom-select d-block w-100" id="state" required>
                                <option value="">CABA</option>
                                <option value="">Buenos Aires</option>
                                <option value="">Santa Fe</option>
                                <option value="">Entre Ríos</option>
                                <option value="">Tucumán</option>
                                <option value="">...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor seleccione una provincia.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Código postal</label>
                            <input type="text" class="form-control" id="zip" placeholder="" value="1428" required>
                            <div class="invalid-feedback">
                                El código postal es requerido.
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-xs" type="button">Agregar dirección</button> --}}

                    <hr class="mb-4">
                    <h4>Pedidos</h4>

                    <ul class="list-group list-group-flush">
                        @forelse ($payments as $payment)
                    <li class="list-group-item"><a href="/backend/pedido/{{$payment->id}}">{{$payment->created_at}}</a></li>
    
                        @empty
                        <li class="list-group-item"> No ha realizado pedidos </li>
                        @endforelse
                    </ul>

                    <hr class="mb-4">
                    <h4>Favortios</h4>

                    <div class="container">
                        <div class="row">
                            @forelse ($user->favorites as $favorite)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top" src="/public/{{$favorite->img_path}}" alt="{{$favorite->name}}">
                                    <div class="card-body">
                                        <p class="card-text"><a href="#">{{$favorite->name}}</a></p>
                                    </div>
                                </div>
                            </div>

                            @empty
                                <p>No posee Favoritos.</p>
                            @endforelse

                        </div>
                    </div>

                    <hr class="mb-4">

                    {{-- <hr class="mb-4">
                    <h4 class="mb-3">Preferencias</h4>

                    <div class="d-block my-3">
                        <p>Taco aguja</p>
                        <p>Cuero</p>
                        <p>zandalias</p>
                    </div>
                    <hr class="mb-4"> --}}

                    <div class="row mb-5">
                        <a class="btn btn-primary btn-sm rounded-0 col-4 d-inline mx-2" href="/backend/usuarios">Volver</a>
                        <button class="btn btn-warning btn-sm rounded-0 col-4 d-inline mx-2" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection