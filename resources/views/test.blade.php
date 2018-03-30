$user =Auth::user()->name;
@if(count($user) > 0)
<ul>
foreach($user->all() as $users)
<div class="content">
    <div class="title m-b-md">
    <li>    {{$users}} </li>
    </div>
    @endforeach
  </ul>
@endif
