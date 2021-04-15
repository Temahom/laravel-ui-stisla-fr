@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7" style="margin-top: 2%">
                <div class="box">
                    <h3 class="box-title" style="padding: 2%">Verifier votre address email</h3>

                    <div class="box-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                Un Lien de verification vous a été envoyer sur votre mail
                            </div>
                        @endif
                        <p>Avant de procceder verifier votre adresse mail un liien de verification vous a été envoyer.
                            Si vous n'avez pas recu le mail,</p>
                        <a href="{{ route('verification.resend') }}">
                            Cliquer ici pour Renvoyer</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection