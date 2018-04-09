
<div class="content">
    <div class="title m-b-md">
    <li>  {{ Auth::user()->name }} </li>
    </div>
<td><a href="{{ url('/findmovie/{findmovie}',.->id) }}" class="btn btn-info">View</a></td>
