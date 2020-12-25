@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update') }}">
                        @csrf

                        @if(session('success'))
                        <div class="alert alert-success" role="alert">
                        {{session('success')}}
                        </div>
                        @endif 

                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" value="{{$user['name']}}
                                " type="text" class="form-control @error('name')
                                 is-invalid @enderror" name="name" value="{{ old('name') }}
                                 "  autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                       
                        <!-- اختيار الجنس للمستخدم -->

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right" >{{ __('select your gender') }}</label>

                            <div class="col-md-6">

                                <input id="gender_male" type="radio" <?php if ($user['gender'] == "male") { ?>checked="checked" <?php } ?> class="form-control @error('gender') is-invalid @enderror" value="male" name="gender" style="height:12px; width:12px;"  >
                                <label for="male">male</label>&nbsp;

                                <input id="gender_female" type="radio" <?php if ($user['gender'] == "female") { ?>checked="checked" <?php } ?>  class="form-control @error('gender') is-invalid @enderror" value="female" name="gender"style="height:12px; width:12px;" >
                                <label for="female">female</label>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <!-- <div class="form-group row">


                            <label for="email" class="col-md-4 col-form-label text-md-right">
                            {{ __('email') }}</label>

                            <div class="col-md-6">
                                <input id="email"  value="{{$user['email']}}"  type="email" class="form-control @error('email')
                                 is-invalid
@enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update Details') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
