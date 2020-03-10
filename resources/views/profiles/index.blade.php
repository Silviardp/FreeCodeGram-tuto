@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
         <img src="https://scontent-frt3-1.cdninstagram.com/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=scontent-frt3-1.cdninstagram.com&_nc_ohc=EAD_lLwp4MgAX_R8l5y&oh=2f6b2c2cd55d8afa9db762f8a7070b18&oe=5E9A00BA" alt="" class="rounded-circle">
      </div>
        <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
        @can('update', $user->profile)
         <a href="/p/create" class="">Add new post</a>
        @endcan

        </div>

        @can('update', $user->profile)
          <a href="/profile/{{ $user->id }}/edit" class="">Edit profile</a>
        @endcan

        <div class="d-flex">
          <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
          <div class="pr-5"><strong>39.7k</strong> followers</div>
          <div class="pr-5"><strong>235</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div class="">{{ $user->profile->description}}</div>
      <div class=""><a href="" class="">{{ $user->profile->url}}</a></div>
      </div>
  </div>

  <div class="row pt-5">
    @foreach($user-> posts as $post)
        <div class="col-4 pb-4">
          <a href="/p/{{ $post->id }}" class="">
              <img src="/storage/{{ $post->image }}" class="w-100">
          </a>
        </div>
    @endforeach
  </div>
</div>
@endsection
