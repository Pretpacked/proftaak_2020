@extends('layouts.app')

@section('content')


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <!-- Sidebar -->
                    <div class="w3-sidebar w3-light-grey w3-bar-block sidebar" style="width:25%">
                        <h3 class="w3-bar-item">Menu</h3>
                        <a href="studie" class="w3-bar-item w3-button">Studie</a>
                        <a href="plannen" class="w3-bar-item w3-button">Plannen</a>
                        <a href="rooster" class="w3-bar-item w3-button">Rooster</a>
                        <a href="covid" class="w3-bar-item w3-button">Covid 19</a>
                    </div>

                    <div class="card covidrules" style="width: 30rem;">
                        <div class="card-body">
                          <h5 class="card-title">Covid-19</h5>
                          <h6 class="card-subtitle mb-2 text-muted">Rules</h6>
                          <p class="card-text">De examens gaan dit jaar wat anders dan verwacht, zo moet je verplicht de 1,5 meter handteren bij ons op school en moet je bij binnekomst je handen desinfecteren.
                              Voor de examens die gemaakt moeten worden zijn speciale lokalen vrij gehouden, bij deze examens mogen maar maximaal 20 leerling deelnemen.
                          </p>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
